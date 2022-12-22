<?php
//accède aux fonctions de gestion de la bd
require_once './inc/conn.inc.php';

/**
 * selectionne et retrourne toutes les personnes
 * @return array
 */
function getAllPersonnes(){

    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //préparation de la requête (compliation sur le serveur)

        $sql = "SELECT * FROM tb_personne";

        // la compilation de la requête sur le serveur retour un objet PDOStatment qui représente la requête sur le serveur
        $stmt = $dbh->prepare($sql);


        //exécution de la requête
        $stmt->execute();
        //choix du mode de récuperation
        $stmt->setFetchMode(PDO::FETCH_ASSOC);


        //récupération des données en un bloc
        $data = $stmt->fetchAll();

        return $data;

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
