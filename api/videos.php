<?php
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $requete2 = $pdo->prepare("SELECT vid_nom, vid_id, id_user FROM videos");
            $requete2->execute();
            $resultats2 = $requete2->fetchAll();

            $retour2["videos"]["donnee"] = $resultats2; 
            $retour2["nombre de videos"] = count($resultats2);

            retour_json(true,'Voici les donnees videos',$retour2);
            http_response_code(200);
}

else if ($_SERVER['REQUEST_METHOD'] == "POST") {
            retour_json(false,'La methode POST n est pas encore disponible ');
            http_response_code(405);

}

else if ($_SERVER['REQUEST_METHOD'] == "PUT") {
            retour_json(false,'La methode PUT n est pas encore disponible ');
            http_response_code(405);

}

else if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
    if(isset($_GET['id'])&& !empty( $_GET['id'] )){
        $id=$_GET['id'];

     
         //Requete SQL pour supprimer dans la base
        $req = "DELETE FROM videos WHERE vid_id = '$id'";
          
        //execution de la requete et obtention d'un statement
        $stmt = $pdo->query($req);

        //mode de fetch
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        http_response_code(200);        

        $requete2 = $pdo->prepare("SELECT vid_nom, vid_id, id_user FROM videos");
            $requete2->execute();
            $resultats2 = $requete2->fetchAll();

            $retour2["videos"]["donnee"] = $resultats2; 
            $retour2["nombre de videos"] = count($resultats2);

            retour_json(true,'Donnees videos après DELETE',$retour2);
        }
        

    else {
        http_response_code(404);
        retour_json(false,'ID NON VALIDE');
    }
}

    ?>