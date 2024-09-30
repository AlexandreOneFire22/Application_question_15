<?php

require_once __DIR__.'/../vendor/autoload.php';

$route = $_GET['route'] ?? 'accueil' ;

switch ($route) {

    case "accueil" :
        $accueilController = new \App\Controllers\AccueilController();
        $accueilController->Accueil();

        break;

    case "imc" :

        $imcController = new \App\Controllers\ImcController();

        $imcController->calculeImc();

        break;

    case "orage" :

        $imcController = new \App\Controllers\OrageController();

        $imcController->calculeOrage();

        break;

}



































