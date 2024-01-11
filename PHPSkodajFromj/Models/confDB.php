<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'dpmvc');
define('DB_USER', 'root');
define('DB_PASS', '');

class confDB {
    public function __construct() {
        try {
            $this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Error: '.$e->getMessage());
        }
    }
}

