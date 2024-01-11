<?php

include_once('Models/catalogueModel.php');

class catalogueController {

    public function __construct() {
        $this->catalogue();
    }

    public function catalogue() {
        $catalogueModel = new catalogueModel();
        $catalogue = $catalogueModel->getCatalogue();
        include_once('Views/catalogueView.php');
    }


}
