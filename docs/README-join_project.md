Join Project
============


1) Checkout Git-Repository
--------------------------


* Change into Your Project-Dev-Path

      cd ~/Projects/Sharespace

* Clone Git-Repository into Directory

      https://tfs.swisscom.com/SWD%20Collection/Swisscom%20Infospace/_git/Swisscom%20Sharespace%20Landingpage

* Checkout Branch develop

      git checkout develop


2) Setup Local Environment
--------------------------

* Hosts File: Add IPv4 Entry (OSX: sudo vim /etc/hosts)

      127.0.0.1  sharespace.loc
     

* Manual Steps

  * Download & Install Wordpress (https://wordpress.org/), copy it into web/ 
  * Setup MySQL Database, Import Database
  * Create entry in hosts file and create a Virtual Host
  * Copy the wp-config.php and .htaccess files from the /config folder
  * Symlink the wp-theme folder (ln -s ../../../wp-theme at-accountin)
  

* Add Virtual Host: Add IPv4 Entry (OSX: sudo vim /etc/hosts)
  
      <VirtualHost *:80>
          DocumentRoot /root/of/your/project/Sharespace/web
          ServerName "sharespace.loc"
      </VirtualHost>

* Mark Dirs as excluded

  There are two Symlinks in the project root which points to your theme and plugin folder. This causes some IDEs to show sources twice i.e. when looking up a function definition. Therefore mark the following directories as excluded:

  * web/wp-content/themes/sharespace

 	* web/wp-content/plugins

    In PHPStorm right-click on the folder > Mark Directory Es > Excluded


3) Frontend
-----------

* Install dependencies

  Run npm from your wp-theme folder to install some frontend dependencies i.e. asset building using Gulp

      cd wp-theme
      npm install

* Start Asset Building (in wp-theme folder)

      gulp


4) Open Website
---------------

* Open Website: http://sharespace.loc

* Open WordPress Admin Interface: http://sharespace.loc/wp-admin

  * User: admin

  * Pass: local
