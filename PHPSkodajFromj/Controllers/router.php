<?php
$page = @$_GET ['page']; 


switch ($page) {
    case '' :
        include_once('Controllers/accueilController.php');
        $accueilController = new accueilController();
        break;

    case 'accueil' :
        include_once('Controllers/accueilController.php');
        $accueilController = new accueilController();
        break;

    default :
        include_once('./Views/404.php');
        break;
    }
