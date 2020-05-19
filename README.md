Nikita news post
========================

This is a news app built by me to post news.

Requirements
------------

  * PHP 7.1.3 or higher;
  * and the [usual Symfony application requirements][1].
  * composer
  * postgreSQL
  
  ### The minimum configuration to get your application running under Apache is:
  
  ```
  <VirtualHost *:80>
      ServerName nika.gabrovec.com
      ServerAlias nika.gabrovec.com

      DocumentRoot /var/www/project/public
      <Directory /var/www/project/public>
          AllowOverride All
          Order Allow,Deny
          Allow from All
      </Directory>

      # uncomment the following lines if you install assets as symlinks
      # or run into problems when compiling LESS/Sass/CoffeeScript assets
      # <Directory /var/www/project>
      #     Options FollowSymlinks
      # </Directory>

      ErrorLog /var/log/apache2/project_error.log
      CustomLog /var/log/apache2/project_access.log combined
  </VirtualHost>
  ```
  
  Link to page: nika.gabrovec.com
  
  
  


