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

   // header ('location:accueil.php');
}




$data=getArticleByid($id);

include 'view/detailarticle.view.php';



//reduge vers accueil pour afficher le tableau a jour




