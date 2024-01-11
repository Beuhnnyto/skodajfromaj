<?php

include_once('Models/commandeModel.php');
include_once('Models/catalogueModel.php');

class commandeController {

    public function __construct() {
        $this->commande();
    }

    public function commande() {
        $commandeModel = new commandeModel();
        $catalogueModel = new catalogueModel();
        if (isset($_POST['Valider'])) {

            $commandeModel->addCommande();
            echo '<h1>Votre commande a été prise en compte</h1>';
        }
        $commande = $commandeModel->getCommande();
        $catalogue = $catalogueModel->getCatalogue();
        include_once('Views/commandeView.php');

            


}

}