<?php

namespace App\Controllers;

class OrageController {
    public function calculeOrage(){

        if ($_SERVER["REQUEST_METHOD"] === "POST"){

            $distanceOrage = ($_POST["temps"]*340.29)/1000;
            $distanceOrage = round($distanceOrage,2);
        }
            require __DIR__."/../views/orage.php";
    }
}