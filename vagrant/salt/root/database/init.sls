database base:
    pkgrepo.managed:
        - humanname: phpmyadmin PPA
        - name: deb http://ppa.launchpad.net/nijel/phpmyadmin/ubuntu precise main
        - dist: precise
        - file: /etc/apt/sources.list.d/php.list
        - keyid: 06ED541C
        - keyserver: keyserver.ubuntu.com
        - require_in:
            - pkg: phpmyadmin

mysql:
    service:
        - running
        - watch:
            - file: /etc/mysql/my.cnf
        - require:
            - pkg: mysql-server
            - pkg: python-mysqldb
            - pkg: phpmyadmin

mysql-server:
    pkg.installed

/etc/mysql/my.cnf:
    file.managed:
        - source: salt://database/my.cnf
        - require:
            - pkg: mysql-server

mysql-client-5.5:
    pkg.installed

python-mysqldb:
    pkg.installed

#TODO: Name the MySQL database and user to create (database and user will be named the same here)
{% set db = 'hackthedinos' %}

#TODO: Set the password for the database user.
{% set pass = 'hackthedinos' %}

{{ db }}:
    mysql_database.present:
        - require:
            - service: mysql
    mysql_user.present:
        - password: {{ pass }}
        - require:
            - service: mysql
    mysql_grants.present:
        - database: {{ db }}.*
        - grant: ALL PRIVILEGES
        - user: {{ db }}
        - require:
            - mysql_user: {{ db }}
            - mysql_database: {{ db }}

phpmyadmin:
    pkg.installed:
        - require:
            - pkg: mysql-server
            - pkg: apache2

/etc/apache2/sites-enabled/100-phpmyadmin.conf:
    file.symlink:
        - target: /etc/phpmyadmin/apache.conf
        - require:
            - pkg: phpmyadmin

/etc/phpmyadmin/config.inc.php:
    file.managed:
        - name:
        - source: salt://database/config.inc.php
        - require:
            - pkg: phpmyadmin
