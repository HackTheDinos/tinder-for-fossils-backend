php5:
    pkg.installed

php packages:
    pkg.installed:
        - pkgs:
            - libapache2-mod-php5
            - php5-cli
            - php-pear
            - php5-dev
            - php-apc
            - php5-mcrypt
            - php5-gd
            - php5-curl
            - php5-xdebug
            - php5-memcache
            - php5-mysqlnd
        - require:
            - pkg: php5

php timezone apache:
    file.replace:
        - name: /etc/php5/apache2/php.ini
        - pattern: '^;date.timezone =.*$'
        - repl: 'date.timezone = US/Eastern'
        - require:
            - pkg: php5

php timezone cli:
    file.replace:
        - name: /etc/php5/cli/php.ini
        - pattern: '^;date.timezone =.*$'
        - repl: 'date.timezone = US/Eastern'
        - require:
            - pkg: php5

php post_max_size apache:
    file.replace:
        - name: /etc/php5/apache2/php.ini
        - pattern: '^post_max_size = .*$'
        - repl: 'post_max_size = 1000M'
        - require:
            - pkg: php5

php post_max_size cli:
    file.replace:
        - name: /etc/php5/cli/php.ini
        - pattern: '^post_max_size = .*$'
        - repl: 'post_max_size = 1000M'
        - require:
            - pkg: php5

php upload_max_filesize apache:
    file.replace:
        - name: /etc/php5/apache2/php.ini
        - pattern: '^upload_max_filesize = .*$'
        - repl: 'upload_max_filesize = 1000M'
        - require:
            - pkg: php5

php upload_max_filesize cli:
    file.replace:
        - name: /etc/php5/cli/php.ini
        - pattern: '^upload_max_filesize = .*$'
        - repl: 'upload_max_filesize = 1000M'
        - require:
            - pkg: php5

php error log config apache:
    file.replace:
        - name: /etc/php5/apache2/php.ini
        - pattern: '^;error_log = php_errors.log.*$'
        - repl: 'error_log = /var/log/php5/errors.apache.log'
        - require:
            - pkg: php5

php error log config cli:
    file.replace:
        - name: /etc/php5/cli/php.ini
        - pattern: '^;error_log = php_errors.log.*$'
        - repl: 'error_log = /var/log/php5/errors.cli.log'
        - require:
            - pkg: php5

php display_errors config cli:
    file.replace:
        - name: /etc/php5/cli/php.ini
        - pattern: '^display_errors = Off*$'
        - repl: 'display_errors = On'
        - require:
            - pkg: php5

project logs for php5:
    file.directory:
        - name: /home/vagrant/project/logs/php5

php error directory symlink:
    file.symlink:
        - name: /var/log/php5
        - target: /home/vagrant/project/logs/php5
        - force: True
        - makedirs: True
        - require:
            - pkg: php5

php error directory shortcut symlink:
    file.symlink:
        - name: /home/vagrant/logs/php5
        - target: /home/vagrant/project/logs/php5
        - makedirs: True
        - require:
            - pkg: php5

php xdebug config file:
    file.managed:
        - name: /etc/php5/mods-available/xdebug.ini
        - source: salt://php/xdebug.ini
        - require:
            - pkg: php5

php xdebug cli config:
    file.append:
        - name: /home/vagrant/.bashrc
        - text:
            - export XDEBUG_CONFIG="idekey=PHPSTORM remote_host=10.0.2.2 remote_port=9000"
        - require:
            - pkg: php5

#Check here for PHPStorm setup http://randyfay.com/content/remote-command-line-debugging-phpstorm-phpdrupal-including-drush
php phpstorm debug server:
    file.append:
        - name: /home/vagrant/.bashrc
        - text:
            - export PHP_IDE_CONFIG="serverName=cli8083"
        - require:
            - pkg: php5