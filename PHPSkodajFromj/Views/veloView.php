<?php
foreach ($velo as $velo) {
    echo '<h1>Le Velo '. $velo['nom'] . '</H1>';
    echo '<p>' . $velo['description'] . '</p>';
    echo '<p>' . $velo['prix'] . ' €' . '</p>';
    echo '<img src="./Assets/'.$velo['nom'].'.png" alt="velo">';
}
?>


<a href="index.php?page=catalogue">Retour au catalogue</a>
<a href="index.php?page=commande">Commander ce velo</a>
