<?php

namespace App\Table;

use App\App;

class Article extends Table{

    public static function getLast(){

        return self::query("
              
            SELECT article.id, article.titre, article.contenu, categories.titre as categorie 
            FROM article 
            LEFT JOIN  categories 
            ON category_id = categories.id
            ");
    }


    public static function lastByCategory($category_id){

        return self::query("
              
            SELECT article.id, article.titre, article.contenu, categories.titre as categorie 
            FROM article 
            LEFT JOIN  categories 
            ON category_id = categories.id
            WHERE category_id = ?
            ",[$category_id]);



    }

    public function getURL(){

        return 'index.php?p=article&id=' . $this->id;

    }


    public function getExtrait(){

        $html =  '<p>' . substr($this->contenu, 0,100) . '...</p>';

        $html .= '<p><a href="' .$this->getURL() . '">Voir la suite</a></p>';

        return $html;
    }




}