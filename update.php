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

//lire la valeur passer dans l'url

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (($id=== false)||($id===null)){
    echo "redige vers aceuil";
}
$data=getArticleByid($id);
$data1=getAllArticles();

if (isset($_POST['modif'])) {
    $cat = filter_input(INPUT_POST, 'cat', FILTER_VALIDATE_INT);
    $desc = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
    $prix = filter_input(INPUT_POST, 'prix', FILTER_VALIDATE_FLOAT);
    $img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);
    $update = ModifArticleByid($id,$cat,$desc,$prix,$img);

    header('location:accueil.php');
}


include 'view/form.view.php';