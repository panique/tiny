# TINY

[![TINY is an extremely simple naked demo PHP application that runs nearly config-free everywhere.](_installation/php-tiny.png)](http://www.php-mini.com)

TINY is a reduced version on [MINI](https://github.com/panique/mini), an extremely simple and easy to understand demo
PHP application. TINY is NOT a professional framework, it's the opposite: Just a tiny config-free application. 
It does not need mod_rewrite and therefore runs everywhere. If you just want to show some pages, do a few database calls 
and a little-bit of AJAX here and there, without reading in massive documentations of highly complex professional 
frameworks, then TINY might be very useful for you.

TINY's full folder/file structure is fully accessible from the web, be aware of that (like in Wordpress, Prestashop etc
too by the way). To prevent people from looking into your files/folder there are some workarounds (try to call a view 
file directly), but keep in mind that this is just made for quick prototypes and small sites, so be careful when using 
TINY in live situations.

## Features

- extremely simple, easy to understand
- runs nearly config-free everywhere
- simple structure
- demo CRUD actions: Create, Read, Update and Delete database entries easily
- demo AJAX call
- tries to follow PSR 1/2 coding guidelines
- uses PDO for any database requests, comes with an additional PDO debug tool to emulate your SQL statements
- commented code
- uses only native PHP code, so people don't have to learn a framework

## Requirements

- PHP 5.3.0+
- MySQL

## Installation

1. If you run TINY from within a sub-folder, edit the folder's name in application/config/config.php and change 
`define('URL_SUB_FOLDER', 'tiny-master');`. If you don't use a sub-folder, then simply comment out this line.  
2. Edit the database credentials in `application/config/config.php`
3. Execute the .sql statements in the `_installation/`-folder (with PHPMyAdmin for example).

Here's a simple tutorial on [How to install LAMPP (Linux, Apache, MySQL, PHP, PHPMyAdmin) on Ubuntu 14.04 LTS](http://www.dev-metal.com/installsetup-basic-lamp-stack-linux-apache-mysql-php-ubuntu-14-04-lts/)
and the same for [Ubuntu 12.04 LTS](http://www.dev-metal.com/setup-basic-lamp-stack-linux-apache-mysql-php-ubuntu-12-04/).

##Servers configs for

### NGINX

```nginx
server {
    listen 80 default_server;
    listen [::]:80 default_server ipv6only=on;

    root /var/www/tiny;
    index index.php index.html index.htm;

    server_name localhost;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php5-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
    }
}
```

## Goodies

TINY comes with a little [PDO debugger tool](https://github.com/panique/pdo-debug), trying to emulate your PDO-SQL
statements.

## License

This project is licensed under the MIT License.
This means you can use and modify it for free in private or commercial projects.

## Support

If you want to support TINY, then rent your next server at
[A2Hosting](https://affiliates.a2hosting.com/idevaffiliate.php?id=4471&url=579) or donate a coffee via
[PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=P5YLUK4MW3LDG),
[GitTip](https://www.gittip.com/Panique/) or
[Flattr](https://flattr.com/submit/auto?user_id=panique&url=https%3A%2F%2Fgithub.com%2Fpanique%2Ftiny).

## TODO: documentation

A very early documentation can be found on [php-mini.com/documentation](http://php-mini.com/documentation/).

## Quick-Start

#### The structure in general

The application's URL-path translates directly to the controllers (=files) and their methods inside 
application/controllers. 

`example.com/home/exampleOne` will do what the *exampleOne()* method in application/controllers/home.php says.

`example.com/home` will do what the *index()* method in application/controllers/home.php says.

`example.com` will do what the *index()* method in application/controllers/home.php says (default fallback).

`example.com/songs` will do what the *index()* method in application/controllers/songs.php says.

`example.com/songs/editsong/17` will do what the *editsong()* method in application/controllers/songs.php says and
will pass `17` as a parameter to it.

Self-explaining, right ?

#### Showing a view

Let's look at the exampleOne()-method in the home-controller (application/controllers/home.php): This simply shows
the header, footer and the example_one.php page (in views/home/). By intention as simple and native as possible.

```php
public function exampleOne()
{
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/home/example_one.php';
    require APP . 'views/_templates/footer.php';
}
```  

#### Working with data

Let's look into the index()-method in the songs-controller (application/controllers/songs.php): Similar to exampleOne,
but here we also request data. Again, everything is extremely reduced and simple: $this->model->getAllSongs() simply
calls the getAllSongs()-method in application/model/model.php.

```php
public function index()
{
    // getting all songs and amount of songs
    $songs = $this->model->getAllSongs();
    $amount_of_songs = $this->model->getAmountOfSongs();

   // load views. within the views we can echo out $songs and $amount_of_songs easily
    require APP . 'views/_templates/header.php';
    require APP . 'views/songs/index.php';
    require APP . 'views/_templates/footer.php';
}
```

For extreme simplicity, all data-handling methods are in application/model/model.php. This is for sure not really
professional, but the most simple implementation. Have a look how getAllSongs() in model.php looks like: Pure and
super-simple PDO.

```php
public function getAllSongs()
{
    $sql = "SELECT id, artist, track, link FROM song";
    $query = $this->db->prepare($sql);
    $query->execute();
    
    return $query->fetchAll();
}
```

The result, here $songs, can then easily be used directly
inside the view files (in this case application/views/songs/index.php, in a simplified example):

```php
<tbody>
<?php foreach ($songs as $song) { ?>
    <tr>
        <td><?php if (isset($song->artist)) echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($song->track)) echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php } ?>
</tbody>
```

## Dear haters, trolls and everything-sucks-people...

... TINY is just a even more reduced version of MINI, which is a simple helper-tool I've created for my daily work, 
simply because it was much easier to setup and to handle than real frameworks. For several use-cases it's totally okay,
does the job and there's absolutely no reason to discuss why it's "shit compared to Laravel", why it does not follow 
several MVC principles or why there's no personal unpaid support or no russian translation or similar weird stuff.
The trolling against Open-Source-projects (and their authors) has really reached insane dimensions. 

I've written this unpaid, voluntarily, in my free-time and uploaded it on GitHub to share.
It's totally free, for private and commercial use. If you don't like it, don't use it.
If you see issues, then please write a ticket (and if you are really cool: I'm very thankful for any commits!).
But don't bash, don't complain, don't hate. Only bad people do so.

## Contribute

Please commit into the develop branch (which holds the in-development version), not into master branch
(which holds the tested and stable version).

## Changelog

**November 2014**
- [panique] forked from MINI, initial release
