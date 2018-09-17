<?php

require'../app/Autoloader.php';

App\Autoloader::register();

//var_dump($config =  App\Config::getInstance());


//var_dump($config);


var_dump($config = App\App::getInstance());