<ul>

    <?php foreach($db->query('SELECT * FROM article') as $post): ?>



    <li>

        <a href="index.php?p=post&id=<?= $post->id; ?>"><?= $post->titre; ?></a>


    </li>
<?php endforeach; ?>

</ul>

