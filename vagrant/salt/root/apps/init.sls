/home/vagrant/.bashrc:
    file.append:
        - text:
            - export APP_ENV="dev"
        - order: 1

/home/vagrant/project/logs:
    file.directory:
        - user: vagrant
        - order: 1

useful utils:
    pkg.installed:
        - pkgs:
            - htop
            - vim
            - most
            - tmux
            - curl
            - git
            - gpac
            - sendmail