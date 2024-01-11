<?php

include_once('Models/contactModel.php');

class contactController {

    public function __construct() {
        $this->contact();
    }

    public function contact() {
        $contactModel = new contactModel();
        $contact = $contactModel->getContact();
        include_once('Views/contactView.php');
    }


}