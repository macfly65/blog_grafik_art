<?php

require'../app/Autoloader.php';

App\Autoloader::register();

//var_dump($config =  App\Config::getInstance());


//var_dump($config);

$app = App\App::getInstance();


$posts = $app->getTable('Posts');

$posts = $app->getTable('Categories ');

