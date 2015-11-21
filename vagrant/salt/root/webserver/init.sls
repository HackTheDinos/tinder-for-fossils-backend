apache2:
    pkg:
        - installed
    service:
        - running
        - enable: True
        - reload: True
        - watch:
            - pkg: phpmyadmin
            - pkg: php5
        - require:
            - pkg: apache2

apache allowoverride:
    file.replace:
        - name: /etc/apache2/apache2.conf
        - pattern: "AllowOverride None"
        - repl: "AllowOverride All"
        - require:
            - pkg: apache2

a2enmod rewrite:
    cmd.run:
        - require:
            - pkg: apache2

apache default site:
    file.managed:
        - name: /etc/apache2/sites-available/000-default.conf
        - source: salt://webserver/default-site.conf

/home/vagrant/project/logs/apache2:
    file.directory:
        - require:
            - file: /var/log/apache2

/var/log/apache2:
    file.symlink:
        - target: /home/vagrant/project/logs/apache2
        - force: True
        - makedirs: True
        - require:
            - pkg: apache2

/home/vagrant/logs/apache2:
    file.symlink:
        - target: /home/vagrant/project/logs/apache2
        - makedirs: True
        - require:
            - pkg: apache2
            
/etc/apache2/mods-enabled/headers.load:
    file.symlink:
        - target: /etc/apache2/mods-available/headers.load
        - makedirs: False
        - require:
            - pkg: apache2
            
#because it fails to start otherwise, unclear why
/etc/init/apache.conf:
    file.managed:
        - source: salt://webserver/upstart/apache.conf

/etc/init.d/apache2 restart:
    cmd.run:
        - order: last