<?php
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
        	$requete2 = $pdo->prepare("SELECT * FROM images");
			$requete2->execute();
			$resultats2 = $requete2->fetchAll();

			$retour2["images"]["donnees"] = $resultats2;
			$retour2["nombre d'images"] = count($resultats2);

			retour_json(true,'Voici les données images',$retour2);
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
        $requete = $pdo->prepare("DELETE FROM images WHERE img_id = '$id'");
		$requete->execute();
		$resultats = $requete->fetchAll();
        http_response_code(200);

        $requete2 = $pdo->prepare("SELECT img_nom, img_id, id_user FROM images");
		$requete2->execute();
		$resultats2 = $requete2->fetchAll();

		$retour2["images"]["donnee"] = $resultats2;
		$retour2["nombre d'images"] = count($resultats2);

		retour_json(true,'Voici les données images après DELETE',$retour2);
        }


    else {
    	http_response_code(404);
    	retour_json(false,'ID NON VALIDE');
    }
}
?>
