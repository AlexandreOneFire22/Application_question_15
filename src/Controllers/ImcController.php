<?php

namespace App\Controllers;



class ImcController {

    public function calculeImc(){

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            if (!isset($_POST["taille"]) || !isset($_POST["poids"])){
                exit("test");
            }

            if ($_POST["taille"] == 0){
                $imc = "La taille doit être différente de 0";
                $categorie = "erreur sur les données saisie";
                require __DIR__."/../views/imc.php";
                exit();
            }

            $imc = $_POST["poids"] / (($_POST["taille"] /100) ** 2);
            $imc = round($imc,2);

            switch (true) {

                case $imc < 18.5 :
                    $categorie = "Sous-poids (inférieur à 18,5)";
                    break;

                case $imc < 25 :
                    $categorie = "Normal (de 18,5 à 25)";
                    break;

                case $imc < 30 :
                    $categorie = "Surpoids (de 25 à 30)";
                    break;

                case $imc < 40 :
                    $categorie = "Obésité modérée (de 30 à 40)";
                    break;

                default :
                    $categorie = "Obésité sévère (supérieur à 40)";
                    break;
            }




        }
        require __DIR__."/../views/imc.php";
    }
}