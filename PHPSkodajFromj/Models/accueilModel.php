<?php 
include_once('./Models/confDB.php');
class accueilModel {

    public function __construct() {
        $this->db = new confDB();
    
    }

    public function getAccueil() {
        $sql = "SELECT * FROM velos ORDER BY id DESC LIMIT 1";
        $query = $this->db->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

}
