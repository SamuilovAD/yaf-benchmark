<?php

define('APPLICATION_PATH', dirname(__DIR__));
define('APPLICATION_ENV', 'product');
$app = new Yaf_Application(APPLICATION_PATH . "/conf.ini",APPLICATION_ENV);

$app->bootstrap()->run();
