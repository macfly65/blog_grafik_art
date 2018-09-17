<?php

use App\Table\Categorie;


use App\Table\Article;


$categorie = Categorie::find($_GET['id']);


$articles  = Article::lastByCategory($_GET['id']);

$categories = Categorie::all();

?>

<h1><?= $categorie->titre ?></h1>


<div class="row">

    <div class="col-sm-8">


        <?php foreach($articles as $post): ?>


            <?php var_dump($post); ?>


            <h2><a href="<?= $post->url?>"><?= $post->titre; ?></a></h2>


            <p><em><?= $post->categorie; ?></em></p>


            <p><?= $post->extrait; ?></p>


        <?php endforeach; ?>


    </div>

    <div class="col-sm-4">
        <?php foreach (\App\Table\Categorie::all() as $categorie): ?>

            <li> <a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a> </li>

        <?php endforeach;  ?>

    </div>

</div>