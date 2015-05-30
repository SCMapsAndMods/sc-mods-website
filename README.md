# sc-mods-website


# Development

These installation instructions assume you are on a Mac using MAMP, Git, and putting your repos in `~/Desktop/repos`. Installation instructions for other operating systems should be similar.

1. Checkout this repo to `~/Deskop/repos` (`git clone git@github.com:SCMapsAndMods/sc-mods-website.git`)
2. Install [Vagrant](http://www.vagrantup.com/downloads.html)
2. Install [VirtualBox](https://www.virtualbox.org)
3. In the terminal, run: `vagrant box add laravel/homestead`
    - Use choice `1` to install the virtualbox version
    - The box might take a while to download
4. `git clone https://github.com/laravel/homestead.git Homestead` into your `/htdocs` folder (if you are using MAMP)
    - `cd Homestead`
    - `bash init.sh`
    - `cd ~/.homestead`
    - `vi Homestead.yaml`
        - Set `provider: virtualbox`
        - Set `folders: \- map ~/Desktop/repos/sc-mods-website/app`
5. `ssh-keygen -t rsa -C "you@homestead"`
6. `cd /Applications/MAMP/htdocs/Homestead`
7. `sudo vi /etc/hosts`
    - Add `192.168.10.10 homestead.app`
8. `vagrant up`
9. Go to `homestead.app` in your browser

See [Homestead Installation and Setup](http://laravel.com/docs/5.0/homestead#installation-and-setup) for more details.

