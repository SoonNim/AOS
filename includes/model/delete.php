<?php
  //Activer le gestionnaire de session
    include 'bdd.php';

    $id = $_POST['delete'];

    //Connection base de donnée avec PDO
      try {
        // La requete SQL
        $q="DELETE FROM images WHERE img_id=' ".$id." ' ";
        $query ="SELECT * FROM images WHERE img_id='".$id."'";

        // Lancer la requete :renvoie une instance de PDOStatement
        $stmt = $dbh->query($query);
        // Definir le mode de fetch
        $stmt->setFetchMode(PDO::FETCH_OBJ);

        //tester si on a un utilisateur ou pas
        if($stmt->rowCount()==1){
          //Redirection
         $dbh->query($q);
          header("location:" . "../../page-user.php?");
          exit;
        }
        else {
                    // récuperer l'objet qui contient les données
                    $odata = $stmt->fetch();

                    //aucune ligne avec cette id
                    $msg = "alert";

                    //Redirection
                    header("location:" . "../../page-user.php?msg=$msg");
                exit;
        }
      }
        //Renvoie un PDOException
      catch (PDOException $e) {
        //Appel de la methode getMessage() de PDOException
        echo $e->getMessage().   "<br/>";
      }

?>
