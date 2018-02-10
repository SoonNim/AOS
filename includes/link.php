<?php
//Activer le gestionnaire de session
  session_start();

  // Variables session USER
$_SESSION['nom'] = strtoupper($odata->users_nom);
$_SESSION['active'] = $odata->users_active;
$_SESSION['auth'] = $odata->users_login;
$_SESSION['prenom'] = ucfirst(strtolower($odata->users_prenom));
$_SESSION['mail'] = $odata->users_mail;
//$_SESSION['id_utilisateur'] = rand(10000 , 99999)."-".$odata->users_id;
$_SESSION['id_utilisateur'] = "62570 -".$odata->users_id;




 ?>
