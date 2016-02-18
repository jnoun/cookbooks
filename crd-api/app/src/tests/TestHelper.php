<?php

use Phalcon\Di;
use Phalcon\Di\FactoryDefault;

ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT_PATH', __DIR__);

set_include_path(
    ROOT_PATH . PATH_SEPARATOR . get_include_path()
);

// Required for phalcon/incubator
include __DIR__ . "/../../vendor/autoload.php";

// Use the application autoloader to autoload the classes
// Autoload the dependencies found in composer
$loader = new \Phalcon\Loader();

$loader->registerDirs(
    array(
        ROOT_PATH
    )
);

$loader->registerNamespaces(array(
'CrdApi\Models' => '../models'
));

$loader->register();

$di = new FactoryDefault();
Di::reset();

// Add any needed services to the DI here

Di::setDefault($di);
