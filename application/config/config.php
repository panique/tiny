<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * Configuration for: URL
 * Here we auto-detect your applications URL and the potential sub-folder. Works perfectly on most servers and in local
 * development environments (like WAMP, MAMP, etc.). Don't touch this unless you know what you do.
 *
 * URL_PROTOCOL:
 * The protocol. Don't change unless you know exactly what you do.
 *
 * URL_DOMAIN:
 * The domain. Don't change unless you know exactly what you do.
 *
 * URL_SUB_FOLDER:
 * The sub-folder. Optional, comment this out if you don't use a sub-folder.
 *
 * URL_INDEX_FILE:
 * Our index file that will be hit on every request to our application. No reason to change this in any way usually.
 *
 * URL:
 * The final, auto-detected URL (build via the segments above). If you don't want to use auto-detection,
 * then replace this line with full URL (and sub-folder) and a trailing slash.
 */

// TODO: get rid of unnecessary constants
// more https://github.com/panique/php-mvc/commit/f4add025bedb681e467cd8aa8b5883249f0b6d42

define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
//define('URL_SUB_FOLDER', 'subfolder');
define('URL_INDEX_FILE', 'index.php' . DIRECTORY_SEPARATOR);

// the final URLs, constructed with the elements above
if (defined('URL_SUB_FOLDER')) {
    define('URL', URL_PROTOCOL . URL_DOMAIN . DIRECTORY_SEPARATOR . URL_SUB_FOLDER . DIRECTORY_SEPARATOR);
    define('URL_WITH_INDEX_FILE', URL_PROTOCOL . URL_DOMAIN . DIRECTORY_SEPARATOR . URL_SUB_FOLDER . DIRECTORY_SEPARATOR . URL_INDEX_FILE);
} else {
    define('URL', URL_PROTOCOL . URL_DOMAIN . DIRECTORY_SEPARATOR);
    define('URL_WITH_INDEX_FILE', URL_PROTOCOL . URL_DOMAIN . DIRECTORY_SEPARATOR . URL_INDEX_FILE);
}

/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'php-mvc');
define('DB_USER', 'root');
define('DB_PASS', 'mysql');
