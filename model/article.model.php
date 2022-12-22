<?php
//accède aux fonctions de gestion de la bd
require_once './inc/conn.inc.php';

/**
 * selectionne et retrourne toutes les personnes
 * @return array
 */
function getAllArticles()
{

    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //préparation de la requête (compliation sur le serveur)

        $sql = "SELECT * FROM tb_articles";

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

function deleteArticleByid($id){
    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //préparation de la requête (compliation sur le serveur)

        $sql = "DELETE FROM tb_articles WHERE id=$id";

        // la compilation de la requête sur le serveur retour un objet PDOStatment qui représente la requête sur le serveur
        $stmt = $dbh->prepare($sql);


        //exécution de la requête
        $stmt->execute();



        //récupére le nombre de lignes affecté par la requete delete
        $nombreLigne = $stmt->rowCount();


        return $nombreLigne;

    } catch (PDOException $e) {
        die($e->getMessage());
    }


}



function insertArticle($cat,$desc,$prix,$img){

    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //préparation de la requête (compliation sur le serveur)

        $sql = "insert into tb_articles(categorie,descr,prix,img) values (:cat, :desc, :prix, :img) ";


        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(':cat',$cat, PDO::PARAM_INT );
        $stmt->bindParam(':desc',$desc, PDO::PARAM_STR );
        $stmt->bindParam(':prix',$prix, PDO::PARAM_STR );
        $stmt->bindParam(':img',$img, PDO::PARAM_STR );



        $stmt->execute();

        //récupére le nombre de lignes affecté par la requete insert
        $nombreLigne = $stmt->rowCount();


    } catch (PDOException $e) {
        die($e->getMessage());
    }



        return $nombreLigne;

    }

function getArticleByid($id){

    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //préparation de la requête (compliation sur le serveur)

        $sql = " SELECT * FROM tb_articles WHERE id=:id ";



        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(':id',$id, PDO::PARAM_INT );




        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);


        //récupération des données en un bloc
        $data = $stmt->fetchAll();



    } catch (PDOException $e) {
        die($e->getMessage());
    }



    return $data;

}


function ModifArticleByid($id,$cat,$desc,$prix,$img){

    try {

        //ouverture de la connexion
        $dbh = connectDb();

        //préparation de la requête (compliation sur le serveur)
        $sql = " SELECT * FROM tb_articles WHERE id=:id ";



        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(':id',$id, PDO::PARAM_INT );


        $stmt->execute();

        $nombreLigne = $stmt->rowCount();

        if ($nombreLigne!=0){

            $sql1 = " UPDATE tb_articles SET categorie=:cat,descr=:desc,prix=:prix,img=:img WHERE id=:id ";


            $stmt1 = $dbh->prepare($sql1);

            $stmt1->bindParam(':cat',$cat, PDO::PARAM_INT );
            $stmt1->bindParam(':desc',$desc, PDO::PARAM_STR );
            $stmt1->bindParam(':prix',$prix, PDO::PARAM_STR );
            $stmt1->bindParam(':img',$img, PDO::PARAM_STR );
            $stmt1->bindParam(':id',$id, PDO::PARAM_INT );


            $stmt1->execute();


        }



        //récupération des données en un bloc




    } catch (PDOException $e) {
        die($e->getMessage());
    }



    return $nombreLigne ;

}


