<?php

namespace App\Controllers;



class ImcController {
    public function calculeImc(){

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $imc = $_POST["poids"] / (($_POST["taille"] /100) ** 2);
            $imc = round($imc,2);
        }

        switch (true){

            case $imc<18.5 :
                $categorie = "Sous-poids";
                break;

            case $imc<25 :
                $categorie = "Normal";
                break;

            case $imc<30 :
                $categorie = "Surpoids";
                break;

            case $imc<35 :
                $categorie = "Obésité modérée";
                break;

            default :
                $categorie = "Obésité sévère";
                break;




        }
        require __DIR__."/../views/imc.php";
    }
}