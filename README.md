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

1. Edit the database credentials in `application/config/config.php`
2. Execute the .sql statements in the `_installation/`-folder (with PHPMyAdmin for example).

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

coming soon

## TODO: quick-start

coming soon

## Dear haters, trolls and everything-sucks-people...

... TINY is just a even more reduced version of MINI, which is a simple helper-tool I've created for my daily work, 
simply because it was much easier to setup and to handle than real frameworks. For several use-cases it's totally okay,
does the job and there's absolutely no reason to discuss why it's "shit compared to Laravel", why it does not follow 
several MVC principles or why there's no personal unpaid support or no russian translation or similar weird stuff.

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
