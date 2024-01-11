<?php

include_once('Models/confDB.php');

class commandeModel {
    public function __construct() {
        $this->db = new confDB();
        $this->db->db->exec("
        CREATE TABLE IF NOT EXISTS commande (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(255) NOT NULL,
            prenom VARCHAR(255) NOT NULL,
            adresse VARCHAR(255) NOT NULL,
            code_postal VARCHAR(10) NOT NULL,
            ville VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            telephone VARCHAR(20) NOT NULL,
            velo VARCHAR(255) NOT NULL,
            couleur VARCHAR(255) NOT NULL
        )
    ");
        
    }

    public function getCommande() {
        $sql = "SELECT * FROM commande";
        $query = $this->db->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function addCommande() {
        $sql = "INSERT INTO commande (nom, prenom, adresse, code_postal, ville, email, telephone, velo, couleur) VALUES (:nom, :prenom, :adresse, :code_postal, :ville, :email, :telephone, :velo, :couleur)";
        $query = $this->db->db->prepare($sql);
        $query->execute(array(
            ':nom' => $_POST['nom'],
            ':prenom' => $_POST['prenom'],
            ':adresse' => $_POST['adresse'],
            ':code_postal' => $_POST['code_postal'],
            ':ville' => $_POST['ville'],
            ':email' => $_POST['email'],
            ':telephone' => $_POST['telephone'],
            ':velo' => $_POST['velo'],
            ':couleur' => $_POST['couleur']
            
        ));
    }
    }
