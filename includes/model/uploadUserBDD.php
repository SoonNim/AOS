<?php
include "../../protection.php";
  include "bdd.php";
  $id=$_SESSION['user'];
  try {
    // La requete SQL
    $queryI = "INSERT INTO images (img_id, img_link, id_user)
    VALUES('','$fichier', '$id')";

    $query = "SELECT * FROM images WHERE img_link='$fichier' AND id_user='$id' ";

    // Lancer la requete :renvoie une instance de PDOStatement
    $stmt = $dbh->query($query);

    // Definir le mode de fetch
    $stmt->setFetchMode(PDO::FETCH_OBJ);

    //tester si on a un utilisateur ou pas
    if($stmt->rowCount()==1){
      // récuperer l'objet qui contient les données
      $odata = $stmt->fetch();
      //Déjà présent utilisateur
      $error = "existe déjà";
      exit;
    }
    else {

            $dbh->query($queryI);
            exit;
    }
  } catch (PDOException $e) {
    //Appel de la methode getMessage() de PDOException
    echo $e->getMessage().   "<br/>".$id;
  }
?>
