<?php

session_start();

require'../app/Autoloader.php';

App\Autoloader::register();

$app = App\App::getInstance();

$post = $app->getTable('Posts');


$post = $app->getTable('Categories');
var_dump($post);