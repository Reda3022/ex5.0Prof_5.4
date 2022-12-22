<?php

// chargement de la configuration
require './inc/config.php';

//chargement du modèle
require MODEL_DIR . 'personne.model.php';
require MODEL_DIR . 'article.model.php';

// récupération des données deouis le modèle
$data = getAllArticles();
//var_dump($data);

//include VIEW_DIR . 'header.view.php';
//include VIEW_DIR . 'all.view.php';
//include VIEW_DIR . 'footer.view.php';

include 'view\header.view.php';
include 'view\all.view.php';
include 'view\footer.view.php';



