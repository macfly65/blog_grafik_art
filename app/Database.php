<?php
namespace App;
use \PDO;


class Database{

    private $db_name;

    private $db_user;

    private $db_pass;

    private $db_host;

    private $pdo;


    public function __construct($db_name, $db_user ='root', $db_pass = 'root', $db_host = 'localhost'){

        $this->$db_name = $db_name;

        $this->$db_name = $db_user;

        $this->$db_name = $db_pass;

        $this->$db_name = $db_host;
        }

    private function getPDO(){

        if($this->pdo === null) {

            $pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', 'root');

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->pdo = $pdo;
        }

        return $this->pdo;
    }



    public function query($statement, $class_name){

        $req = $this->getPDO()->query($statement);

        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);

        return $datas;

    }

}