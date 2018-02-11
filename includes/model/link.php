<?php
session_start();
// Variables session USER
$_SESSION['nom'] = strtoupper($odata->users_nom);
$_SESSION['active'] = $odata->users_active;
$_SESSION['auth'] = $odata->users_login;
$_SESSION['prenom'] = ucfirst(strtolower($odata->users_prenom));
$_SESSION['mail'] = $odata->users_mail;
$_SESSION['id_utilisateur'] = "62570 -".$odata->users_id;
$_SESSION['user'] = $odata->users_id;

// Variable session IMAGES
$_SESSION['img_link'] = $odata->img_link;
$_SESSION['img_user'] = $odata->id_user;

 ?>
