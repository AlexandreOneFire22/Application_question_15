<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>imc</title>
</head>
<body>

<h1> Calculer votre imc :</h1>

<div>
    <form action="" method="post" novalidate>

        <div>
            <label for="taille">taille (cm)* :</label>
            <input type="number"
                   id="taille"
                   name="taille"
                   value="<?= (isset($_POST["taille"])) ? $_POST["taille"] : null ?>"
                   placeholder="taille en cm">
        </div>

        <div>
            <label for="poids">Poids (kg)* :</label>
            <input type="number"
                   id="poids"
                   name="poids"
                   value="<?= (isset($_POST["poids"])) ? $_POST["poids"] : null ?>"
                   placeholder="poids en kg">
        </div>

        <span>
                <button type="submit">Valider</button>
        </span>
    </form>
</div>


<?php if (isset($imc)) :?>

<h2>Votre IMC est de : <?=$imc?></h2>
<h2>cela correspond à la catégorie : <?=$categorie?> </h2>

<?php endif; ?>


<h2> retourner à l'accueil : <a href="index.php?route=accueil"> Accueil </a></h2>

</body>
</html>