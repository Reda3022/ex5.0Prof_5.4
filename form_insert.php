<?php


/**
 * Created by PhpStorm.
 * User: LMO
 * Date: 22.11.2017
 * Time: 21:38
 * fonction : contrôlleur pour effacement d'un article
 */

// chargement de la configuration
require './inc/config.php';




//chargement du modèle
require 'model\personne.model.php';
require 'model\article.model.php';








include 'view\header.view.php';
include 'view\footer.view.php';


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert</title>
</head>
<body>

<main>

    <form action="test_insert.php"method="post">


        <label for="categorie">Categorie</label>
        <input name="cat" type="text">
        <br>
        <label for="description">Description</label>
        <input name="desc" type="text">
        <br>
        <label for="prix">Prix</label>
        <input name="prix" type="text">
        <br>
        <label for="img">image</label>
        <input name="img" type="text">
        <br>

        <button name="insert" type="submit">insérer</button>



    </form>
</main>




</body>
</html>
