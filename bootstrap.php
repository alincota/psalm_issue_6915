<?php
declare(strict_types=1);

define('APP_BASE_PATH', rtrim(getenv('APP_BASE_PATH') ?: __DIR__, '/'));


/*
* Load core files
*/
require APP_BASE_PATH . '/src/general.php';


/*
* Register the vendor autoloader
* 
* @see https://getcomposer.org/doc/01-basic-usage.md
* 
* If using libraries that specify autoload information, Composer generates a
* "vendor/autoload.php" file. Include this file to avoid issues when using the
* classes that those libraries provide.
*/
if (file_exists(APP_BASE_PATH . '/vendor/autoload.php')) {
    require APP_BASE_PATH . '/vendor/autoload.php';
}


# force error reporting
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
