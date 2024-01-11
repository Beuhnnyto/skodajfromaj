<form action="index.php?page=commande" method="POST">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" required> <br>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" required> <br>
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" id="adresse" required> <br>
    <label for="code_postal">Code postal</label>
    <input type="text" name="code_postal" id="code_postal" required> <br> 
    <label for="ville">Ville</label>
    <input type="text" name="ville" id="ville" required> <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required> <br>
    <label for="telephone">Téléphone</label>
    <input type="text" name="telephone" id="telephone" required> <br>
    <label for="velo">Vélo</label>
    <select name="velo" id="velo">  
        <?php
        foreach ($catalogue as $velo) {
            echo '<option value="' . $velo['nom'] . '">' . $velo['nom'] . '</option>';
        }
        ?>
    </select> <br>
    <label for="couleur">Couleur</label>
    <select name="couleur" id="couleur">  
        <option value="Bleu" name="Bleu">Bleu</option>
        <option value="Rouge" name="Rouge" >Rouge</option>
        <option value="Vert" name="Vert" >Vert</option>
        <option value="Jaune" name="Jaune" >Jaune</option>
    </select> <br>
    <input type="submit" name="Valider" value="Valider">
</form>