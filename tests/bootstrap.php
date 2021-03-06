<?php

//Require composer autoloader if available
$composerAutoload = __DIR__ . '/../vendor/autoload.php';
if (is_file($composerAutoload)) {
    require_once($composerAutoload);
}

//Load Framework Config
require_once(__DIR__ . '/../config.php');

//Load Selenium Config
require_once(__DIR__ . '/seleniumConfig.php');
