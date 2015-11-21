composer ssh config bitbucket:
    ssh_known_hosts:
        - present
        - user: vagrant
        - name: bitbucket.org

wget -O - https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin:
    cmd.run:
        - unless: ls /usr/local/bin/composer.phar 
        - require:
            - pkg: php5

/usr/local/bin/composer:
    file.symlink:
        - target: /usr/local/bin/composer.phar
        - force: True

composer install:
   cmd.run:
        - cwd: /home/vagrant/project
        - user: vagrant
        - require:
            - pkg: useful utils

git config --global core.fileMode false:
    cmd.run:
        - cwd: /home/vagrant
        - user: vagrant
        - require:
            - pkg: useful utils

