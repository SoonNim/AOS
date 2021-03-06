<?php
  //Activer le gestionnaire de session
      include "bdd.php";

  if (!empty($_POST['submit'])) {
    $login=$_POST['login'];
    $password=$_POST['password'];

    //Connexion base de donnée avec PDO
    try {

      // La requete SQL
      $query = "SELECT * FROM users WHERE users_login = '$login' AND users_mdp = '$password'";

      // Lancer la requete :renvoie une instance de PDOStatement
      $stmt = $dbh->query($query);

      // Definir le mode de fetch
      $stmt->setFetchMode(PDO::FETCH_OBJ);

      //tester si on a un utilisateur ou pas
      if($stmt->rowCount()==1){
        // récuperer l'objet qui contient les données
        $odata = $stmt->fetch();

          //Compte actif ou pas?
        if($odata->users_active == 1){
          //Test des droits
          include "link.php";
          switch($odata->users_role){
            case 'ADMIN': header("Location: ../../page-user.php");
            exit;
            break;

            case 'USER': header("Location: ../../page-pint.php");
            exit;
            break;

          }
        }
        else{
          //Le compte est inactif
          $msg = "Contacter l'administrateur votre compte n'est pas actif !";

          //Redirection
          header("location:" . "../../index.php?msg=$msg&c=alert");
          exit;
        }

      }
      else {
        //Aucun utilisateur
        $msg = "Login ou mot de passe incorrect";

        //Redirection
        header("location:" . "../../index.php?msg=$msg&c=alert");
        exit;
      }


    }
      //Renvoie un PDOException
    catch (PDOException $e) {
      //Appel de la methode getMessage() de PDOException
      echo $e->getMessage().   "<br/>";
    }
  }
?>
