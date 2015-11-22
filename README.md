Getting started
---

In the `vagrant` subdirectory run `vagrant up`. 
You'll need to have vagrant and VirtualBox installed.


Updating dependencies
---

Do this if `composer.json` changes.

Run `vagrant ssh` in the vagrant directory, then do:

```
    cd projects
    composer install
```

