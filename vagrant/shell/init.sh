#! /bin/bash

start_seconds="$(date +%s)"

if [ ! -d "/etc/salt" ]; then
    echo "Bootstrap salt"
    wget -O - http://bootstrap.saltstack.com/stable/bootstrap-salt.sh | sudo sh
    sudo cp /vagrant/salt/minion /etc/salt/minion

    echo "Restart salt-minion"
    sudo salt-minion -d
    sudo service salt-minion restart
fi

echo "Executing salt highstate (provisionning)"
sudo salt-call state.highstate

end_seconds="$(date +%s)"
echo "-----------------------------"
echo "Provisioning complete in "$(expr $end_seconds - $start_seconds)" seconds"