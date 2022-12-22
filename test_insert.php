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
require 'model/personne.model.php';
require 'model/article.model.php';


$data1=getAllArticles();



if (isset($_POST['insert'])) {
    $cat = filter_input(INPUT_POST, 'cat', FILTER_VALIDATE_INT);
    $desc = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
    $prix = filter_input(INPUT_POST, 'prix', FILTER_VALIDATE_FLOAT);
    $img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);

    $insert = insertArticle($cat, $desc, $prix, $img);

    echo $insert, ' ', 'ligne a été ajouter';

    // redirection
    header("location:accueil.php");

}


include 'view/form.view.insert.php';


