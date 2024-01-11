<?php

include_once('./Models/confDB.php');

class veloModel {

    public function __construct() {
        $this->db = new confDB();
    
    }


    public function getVelo($id) {
        $sql = "SELECT * FROM velos WHERE id = :id";
        $query = $this->db->db->prepare($sql);
        $query->execute(array(':id' => $id));
        return $query->fetchAll();
    }


}