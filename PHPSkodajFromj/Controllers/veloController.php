<?php

include_once('Models/veloModel.php');

class veloController {

    public function __construct() {
        $this->velo();
    }

  

    public function velo() {
        $veloModel = new veloModel();
        $velo = $veloModel->getVelo($_GET['id']);
        include_once('Views/veloView.php');
    }

}