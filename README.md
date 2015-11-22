Getting started
---

In the `vagrant` subdirectory run `vagrant up`. 
You'll need to have vagrant and VirtualBox installed.


Updating dependencies
---

Do this if `composer.json` changes.

Run `vagrant ssh` in the vagrant directory, then do:

```
    $ cd projects
    $ composer install
```

Migrations
---

*To create migrations*
```
    $ php vendor/bin/phinx create MyNewMigration
```

This will add a new file to `src\HackTheDinos\Migrations`. Edit that file adding the sql you would like to run.

*To migrate*
```
    $ php vendor/bin/phinx migrate
```