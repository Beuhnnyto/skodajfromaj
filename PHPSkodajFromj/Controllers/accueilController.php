<?php
include_once('Models/accueilModel.php');
class accueilController {

    public function __construct() {
        $this->accueil();
    }

    public function accueil() {
        include_once('Views/accueilView.php');
    }


}