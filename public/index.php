<?php

session_start();

require'../app/Autoloader.php';

App\Autoloader::register();

$app = App\App::getInstance();

$post = $app->getTable('Posts');



$post->all();

var_dump($post->all());