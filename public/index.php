<?php

require'../app/Autoloader.php';

App\Autoloader::register();


$app = App\App::getInstance();


$posts = $app->getTable('Posts');

$posts = $app->getTable('Categories');

