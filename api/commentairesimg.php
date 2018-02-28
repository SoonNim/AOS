<?php
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
        	$requete2 = $pdo->prepare("SELECT * FROM img_comments");
			$requete2->execute();
			$resultats2 = $requete2->fetchAll();

			$retour2["commentaires"]["donnees"] = $resultats2; 
			$retour2["nombre de commentaires"] = count($resultats2);

			retour_json(true,'Voici les donnees des commentaires images',$retour2);
			http_response_code(200);
}


else if ($_SERVER['REQUEST_METHOD'] == "POST") {
            retour_json(false,'La methode POST n est pas encore disponible');
            http_response_code(405);

}
                        
else if ($_SERVER['REQUEST_METHOD'] == "PUT") {
    retour_json(false,'La methode PUT n est pas encore disponible');
            http_response_code(405);
}

else if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
	if(isset($_GET['id'])&& !empty($_GET['id'])){
        $id=$_GET['id'];

	 
         //Requete SQL pour supprimer dans la base
        $req = "DELETE FROM img_comments WHERE comimg_id = '$id'";
          
        //execution de la requete et obtention d'un statement
        $stmt = $pdo->query($req);
        //mode de fetch
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        http_response_code(200);        

        $requete2 = $pdo->prepare("SELECT comimg_id,comm,id_date,id_friend,id_img FROM img_comments");
		$requete2->execute();
		$resultats2 = $requete2->fetchAll();

		$retour2["commentaires"]["donnees"] = $resultats2; 
		$retour2["nombre de commentaires"] = count($resultats2);

		retour_json(true,'Voici les donnees des commentaires images après DELETE',$retour2);
        }
        

    else {
    	http_response_code(404);
    	retour_json(false,'ID NON VALIDE');
    }
}

	?>