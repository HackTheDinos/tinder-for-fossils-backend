wget -O - https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin:
    cmd.run:
        - unless: ls /usr/local/bin/composer.phar 
        - require:
            - pkg: php5

/usr/local/bin/composer:
    file.symlink:
        - target: /usr/local/bin/composer.phar
        - force: True

git config --global core.fileMode false:
    cmd.run:
        - cwd: /home/vagrant
        - user: vagrant
        - require:
            - pkg: useful utils
