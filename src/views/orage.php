<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>orage</title>
</head>
<body>

<h1> Calculer la distance d'un orage :</h1>

<div>
    <form action="" method="post" novalidate>

        <div class="mb-3">
            <label for="temps" class="form-label">Temps (s)* :</label>
            <input type="number"
                   class="form-control"
                   id="temps"
                   name="temps"
                   value="<?= (isset($_POST["temps"])) ? $_POST["temps"] : null ?>"
                   placeholder="temps en seconde">
        </div>
        <span>
                <button type="submit">Valider</button>
        </span>
    </form>
</div>


<?php if (isset($distanceOrage)) :?>

    <h2>L'orage se trouve à une distance de : <?=$distanceOrage?> km</h2>

<?php endif; ?>



<h2> retourner à l'accueil : <a href="index.php?route=accueil"> Accueil </a></h2>

</body>
</html>