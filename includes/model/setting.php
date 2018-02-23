<?php
include "bdd.php";
include "../alert.php";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['ID'];
$mail =$_POST['mail'];
$id = $_SESSION['user'];


  $dossier = '../../upload/';
  $fichier = basename($_FILES['img']['name']);
  $error ="";

  //On fait un tableau contenant les extensions autorisées.
  //Comme il s'agit d'un avatar pour l'exemple, on ne prend que des extensions d'images.
  $extensions = array('.png', '.gif', '.jpg', '.jpeg');
  // récupère la partie de la chaine à partir du dernier . pour connaître l'extension.
  $extension = strrchr($_FILES['img']['name'], '.');

  if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
  {
       $error = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
       return $error;
       exit;
  }
  else {
    // taille maximum (en octets)
    $taille_maxi = 10000000;
    //Taille du fichier
    $taille = filesize($_FILES['img']['tmp_name']);

    if($taille>$taille_maxi)
    {
         $error = 'Le fichier est trop gros...';
         return $error;
         exit;
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

           if(move_uploaded_file($_FILES['img']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
           {
             $error="Valide";
             return $error;



            try {
              // La requete SQL
              $queryI = "INSERT INTO images (img_id, img_link, id_user)
              VALUES('','$fichier', '$id')";

              $query = "SELECT * FROM images WHERE img_link='$fichier' AND id_user='$id' ";
              $Qsetting ="UPDATE users
              SET users_nom = '$nom' , users_prenom='$prenom', users_mail='$mail', users_photo='$fichier', users_login='$login'
              WHERE users_id='$id'";

              $Qverif = "SELECT * FROM users WHERE users_id='$id' ";


              // Lancer la requete :renvoie une instance de PDOStatement
              $stmt = $dbh->query($query);
              $stmtV= $dbh->query($Qverif);

              // Definir le mode de fetch
              $stmt->setFetchMode(PDO::FETCH_OBJ);
              $stmtV->setFetchMode(PDO::FETCH_OBJ);

              //tester si on a un une image ou pas
              if($stmt->rowCount()<1){
                      $dbh->query($queryI);
                      $dbh->query($Qsetting);
                      if ($stmtV->rowCount()==1) {
                        $u=$stmtV->fetch();
                        if ($u->users_nom == $nom && $u->users_prenom == $prenom &&
                        $u->users_mail == $mail && $u->users_login == $login && $u->users_photo == $fichier ) {
                          header("location:" . "../../page-user.php");
                        }
                        else {
                          echo " nom : ".$nom."<br/> prenom : ".$prenom."<br/> login : ".$login."<br/> mail : ".$mail."<br/> photo : ".$photo."<br/> id : ".$id."";
                        }
                      }
                      exit;
              }
            } catch (PDOException $e) {
              //Appel de la methode getMessage() de PDOException
              echo $e->getMessage().   "<br/>".$id;
            }

















           }
           else //Sinon (la fonction renvoie FALSE).
           {
                $error = 'Echec de l\'upload !';
                exit;
           }
         }
    }

    $qrep =



// if (empty($error)) {
// $Qsetting ="UPDATE users
// SET users_nom = '$nom' , users_prenom='$prenom', users_mail='$mail', users_photo='$photo', users_login='$login'
// WHERE users_id='$id'";
//
// // Lancer la requete :renvoie une instance de PDOStatement
// $dbh->query($Qsetting);
// header("location:" . "../../page-user.php");

// echo " nom : ".$nom."<br/> prenom : ".$prenom."<br/> login : ".$login."<br/> mail : ".$mail."<br/> photo : ".$photo."<br/> id : ".$id."";
// }
// else {
//   //Redirection
//   header("location:" . "../../page-user.php?update=$user_update_danger");
// }






 ?>
