<?php

namespace  App;

class App{

    public $title = "mon super site";

    private static $_instance;

    private $db_instance;

    public static function getInstance(){

        if(is_null(self::$_instance)){

            self::$_instance = new App();
        }

        
        return self::$_instance;
    }

    public static function getTable($name){

        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';

        return new $class_name();
    }

    public function getDB()
    {
        if (is_nul($this->db_instance)) {

            $config = Config::getInstance();

            $this->db_instance = new Database($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }


}