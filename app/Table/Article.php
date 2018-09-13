<?php

namespace App\Table;

use App\App;

class Article{

    public static function getLast(){

        return App::getDb()->query("
              
            SELECT article.id, article.titre, article.contenu, categories.titre as categorie 
            FROM article 
            LEFT JOIN  categories 
            ON category_id = categories.id
            ", __CLASS__  );

    }





     public function __get($key){


         $method = 'get' . ucfirst($key);

         $this->$key = $this->$method();

         return $this->$key;
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