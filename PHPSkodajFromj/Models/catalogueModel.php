<?php

include_once('./Models/confDB.php');

class catalogueModel {
    public function __construct() {
        $this->db = new confDB();
    }

    public function getCatalogue() {
        $sql = "SELECT * FROM velos";
        $query = $this->db->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

}