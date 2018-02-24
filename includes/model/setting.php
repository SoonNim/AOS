<?php
include "../../protection.php";
include "bdd.php";
include "../alert.php";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['ID'];
$mail =$_POST['mail'];
$id = $_SESSION['user'];
$photo = $_FILES['img']['name'];
$mdp = $_POST['pw'];

if (!empty($photo))
{
  include "uploadUser";
}
if (empty($nom))
{
  $nom = $_SESSION['nom'];
}

if (empty($prenom))
{
$prenom = $_SESSION['prenom'];
}

if (empty($login))
{
$login = $_SESSION['auth'];
}

if (empty($mdp))
{
$mdp = $_SESSION['mdp'];
}

if (empty($mail))
{
$mail = $_SESSION['mail'];
}

if (empty($photo))
{
$photo = $_SESSION['photo'];
}


if ($msg =1)
{
  $Qsetting ="UPDATE users
  SET users_nom = '$nom' , users_prenom='$prenom', users_mail='$mail', users_photo='$photo', users_login='$login', users_mdp='$mdp'
  WHERE users_id='$id'";

  $dbh->query($Qsetting);

  $Qverif = "SELECT * FROM users WHERE users_id='$id'AND users_nom = '$nom' AND
  users_prenom='$prenom'AND users_mail='$mail' AND users_photo='$photo' AND
  users_login='$login' AND users_mdp='$mdp'";

  $stmtQVerif = $dbh->query($Qverif);
  $stmtQVerif->setFetchMode(PDO::FETCH_OBJ);

  if ($stmtQVerif->rowCount()==1) {

    $_SESSION['nom'] = strtoupper($nom);
    $_SESSION['auth'] = $login;
    $_SESSION['prenom'] = ucfirst(strtolower($prenom));
    $_SESSION['mail'] = $mail;
    $_SESSION['photo'] = $photo;
    $_SESSION['mdp'] = $mdp;
    //Redirection
    header("location:" . "../../page-user.php?msg=$msg");
    exit;
  }
  else {
    //Déjà présent utilisateur
    $msg = "alert";

    //Redirection
    header("location:" . "../../page-user.php?msg=$msg");
    exit;
  }
}
else {
    //Redirection
    header("location:" . "../../page-user.php?update=$user_update_danger");
    exit;
}

 ?>
