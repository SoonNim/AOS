<?php
  //Activer le gestionnaire de session
    //session_start();

  if (!empty($_POST['envmyimg'])) {

    $fichier = basename($_FILES['myimg']['name']);
    /* Comme il s'agit d'un avatar pour l'exemple, on ne prend que des extensions
     d'images. */
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    // récupère la partie de la chaine à partir du dernier . pour connaître l'extension.
    $extension = strrchr($_FILES['myimg']['name'], '.');
    // taille maximum (en octets)
    $taille_maxi = 10000000;
    //Taille du fichier
    $taille = filesize($_FILES['myimg']['tmp_name']);


    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
      $msg = "error";
      $error = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';

      //Redirection
      header("location:" . "page-user.php?msg=$msg&error=$error");
    }
    else {
      if($taille>$taille_maxi)
      {
           $error = 'Le fichier est trop gros...';
           $msg = "error";

           //Redirection
           header("location:" . "page-user.php?msg=$msg&error=$error");
      }
      else {
        //On remplace les lettres accentutées par les non accentuées dans $fichier.
        //Et on récupère le résultat dans fichier
        $fichier = strtr($fichier,
             'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
             'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

        //En dessous, il y a l'expression régulière qui remplace tout ce qui n'est pas une lettre non accentuées ou un chiffre
        //dans $fichier par un tiret "-" et qui place le résultat dans $fichier.
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

        $id=31;

        try {
          include 'bdd.php';

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
            $msg = "error";

            //Redirection
            header("location:" . "../page-user.php?msg=$msg");
            exit;
          }
          else {

                  $dbh->query($queryI);
                   //deplacer dans le dossier...
                   $dossier = 'upload/';
                   $fichier = basename($_FILES['myimg']['name']);

                  if($_FILES['myimg']){
                    move_uploaded_file($_FILES['myimg']['tmp_name'], $dossier . $fichier);
                    //Redirection
                    $msg="success";
                  }
                  else{
                    //Redirection
                    $msg="error";
                  }

                  header("location:" . "../page-user.php?msg=$msg");

                  exit;

          }

        } catch (PDOException $e) {
          //Appel de la methode getMessage() de PDOException
          echo $e->getMessage().   "<br/>";
        }
      }
    }
  }
?>
