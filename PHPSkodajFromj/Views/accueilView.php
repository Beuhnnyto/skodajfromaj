<h1>Bienvenue chez smartbike</h1>
<p>Vous êtes sur la page d'accueil</p>
<p>Notre dernier velo :</p>
<?php
foreach ($accueil as $velo) {
    echo '<h3>' . $velo['nom'] . '</h3>';
    echo '<p>' . $velo['description'] . '</p>';
    echo '<p>' . $velo['prix'] .' €'. '</p>';
    echo '<img src="./Assets/'.$velo['nom'].'.png" alt="velo">';
    echo '<a href="index.php?page=velo&id='.$velo['id'].'">Voir le produit</a>';
    
}
?>


