<?php

$pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', 'root');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$res = $pdo->query('SELECT * FROM article');

$datas = $res->fetchAll(PDO::FETCH_OBJ);

var_dump($datas[0]->titre);


//$count =$pdo->exec('INSERT INTO article SET titre="Mon titre", date= "' . date('Y-m-d H:i:s') . '"');

//var_dump($count);