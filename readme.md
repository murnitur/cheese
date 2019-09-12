## Welcome to Cheese
cheese is a lightweight PHP framework
follow the instructions below:

> Installing cheese can be done in two ways

___
* Downloading the zip file directly from the repository.

head over to [GitHub.com/CheeseFramework](https://github.com/CheeseFramework/cheese,"Cheese Framework Download")

* Cloning with gitbash

```bash
    git clone https://github.com/CheeseFramework/cheese
```
##### Setting up the .htaccess file
````apacheconfig
    <IfModule mod_rewrite.c>
      Options -Multiviews
      RewriteEngine On
      RewriteBase /cheese/public
      RewriteCond %{REQUEST_FILENAME} !-d
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteRule  ^(.+)$ index.php?url=$1 [QSA,L]
    </IfModule>
````
By default the RewriteBase is set to /cheese/public.
___
Change it to:
````apacheconfig
    <IfModule mod_rewrite.c>
      Options -Multiviews
      RewriteEngine On
      RewriteBase /your_directory/public
      RewriteCond %{REQUEST_FILENAME} !-d
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteRule  ^(.+)$ index.php?url=$1 [QSA,L]
    </IfModule>
````
