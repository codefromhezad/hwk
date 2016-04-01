<?php

/* Setup Composer autoloader */
require "vendor/autoload.php";

/* Setup phpDotEnv */
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

/* Setup timezone */
date_default_timezone_set('UTC');

/* Setup Eloquent ORM */
Hwk\ORM::boot(getconf('database'));

/* Setup Blade Tempaltes engine */
Hwk\View::boot();

/* Setup routes */
Hwk\Router::boot();
require "app/routes.php";

/* Dispatch current route */
echo Hwk\Router::dispatch();