<?php
session_start();

//test de l'existence de $_SESSION[auth] ----> users_login
if (!isset($_SESSION['auth'])) {
  //pas authentifié
  $msg="Vous n'êtes pas authentifié"; // message erreur

  header("location:" . "index.php?msg=" . $msg);
  //redirige vars la page de connexion
}

 ?>
