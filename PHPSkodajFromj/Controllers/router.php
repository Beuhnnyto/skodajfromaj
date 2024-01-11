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

    case 'contact' :
        include_once('Controllers/contactController.php');
        $contactController = new contactController();
        break;

    case 'catalogue' :
        include_once('Controllers/catalogueController.php');
        $catalogueController = new catalogueController();
        break;

     case 'velo'    :
        include_once('Controllers/veloController.php');
        $veloController = new veloController();
        break;

    case 'commande'     :
    include_once('Controllers/commandeController.php');
    $commandeController = new commandeController();
    break;



        default :
        include_once('./Views/404.php');
        break;
    }
