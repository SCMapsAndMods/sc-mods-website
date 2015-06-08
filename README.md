# sc-mods-website


# Development

These installation instructions assume you are on a Mac using MAMP, Git, and putting your repos in `~/Desktop/repos`. Installation instructions for other operating systems should be similar.

## Initial Setup

1. Checkout this repo to `~/Deskop/repos` (`git clone git@github.com:SCMapsAndMods/sc-mods-website.git`)
2. Install [Vagrant](http://www.vagrantup.com/downloads.html)
2. Install [VirtualBox](https://www.virtualbox.org)
3. In the terminal, run: `vagrant box add laravel/homestead`
    - Use choice `1` to install the virtualbox version
    - The box might take a while to download
4. `git clone https://github.com/laravel/homestead.git Homestead` (we are pulling it to `~/Desktop/repos/Homestead`)
    - `cd Homestead`
    - `bash init.sh`
    - `cd ~/.homestead`
    - `vi Homestead.yaml`
```
ip: "192.168.10.10"
memory: 2048
cpus: 1
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/Desktop/repos/sc-mods-website/laravel
      to: /home/vagrant/code

sites:
    - map: scmods.app
      to: /home/vagrant/code/public

databases:
    - homestead

variables:
    - key: APP_ENV
      value: local
```
5. `ssh-keygen -t rsa -C "you@homestead"`
6. `cd ~/Desktop/repos/Homestead`
7. `sudo vi /etc/hosts`
    - Add `127.0.0.1 scmods.app`
8. `vagrant up`
9. Go to `http://scmods.app:8000` in your browser

See [Homestead Installation and Setup](http://laravel.com/docs/5.0/homestead#installation-and-setup) for more details.

## Getting Started

1. Install [Composer](https://getcomposer.org/) globally
    - Please **never** track `composer.phar`. It will be ignored in `.gitignore` in case you cannot install globally.
2. `composer global require "laravel/installer=~1.1"`
    - Add to path: `sudo vi /etc/paths`

## Migrations

You must run migrations from within Vagrant:

```cmd
ssh vagrant@127.0.0.1 -p 2222
cd /home/vagrant/code/
php artisan migrate
```

## Recommended

1. Install [PhpStorm](https://www.jetbrains.com/phpstorm/) (Recommended editor of choice)

