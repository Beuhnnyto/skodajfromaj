<?php
$page = @$_GET ['page']; 


switch ($page) {
    case '' :
        include_once('Views/accueilView.php');
        break;

    case 'accueil' :
        include_once('Views/accueilView.php');
        break;

    case 'catalogueVoiture' :
        include_once('Views/catalogueVoitureView.php');
        break;

    case 'cataloguePieces' :
        include_once('Views/cataloguePiecesView.php');
        break;

    case 'contact' :
        include_once('Views/contactView.php');
        break;

    case 'skodaVous' :
        include_once('Views/skodaVousView.php');
        break;

    case 'configurator' :
        include_once('Views/configView.php');
        break;

    default :
        include_once('./Views/404.php');
        break;
    }
