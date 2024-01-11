<h1>Catalogue</h1>

<section class="catalog">

    <?php
foreach ($catalogue as $velo) {
    echo '<a href="index.php?page=velo&id='.$velo['id'].'"><img src="./Assets/'.$velo['nom'].'.png" alt="velo"></a>';
    echo '<h3>' . $velo['nom'] . '</h3>';
    echo '<a href="index.php?page=velo&id='.$velo['id'].'">Voir le produit</a>' . '<br>';
}
?>
</section>