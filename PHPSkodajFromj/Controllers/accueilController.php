<?php
include_once('Models/accueilModel.php');
class accueilController {

    public function __construct() {
        $this->accueil();
    }

    public function accueil() {
        $accueilModel = new accueilModel();
        $accueil = $accueilModel->getAccueil();
        include_once('Views/accueilView.php');
    }


}