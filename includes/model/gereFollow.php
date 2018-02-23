<?php
date_default_timezone_set('UTC');
include "bdd.php";

$user1=$_GET['id'];
$user2=$_GET['id2'];
$id_friends = $_GET['friend'];
$id_friends2 = $_GET['user'];
$date = date('Y/m/d') ;

if (!empty($user1)&&!empty($user2)) {
  $q1 = "INSERT INTO friends (friends_id, id_user1, id_user2,dateUnion)
  VALUES ('','$user1','$user2','$date')";
  $dbh->query($q1);
  header("location:" . "../../page-profile.php?n=$user2");
}

if (!empty($id_friends)) {
  $q2="DELETE FROM friends WHERE friends_id=' ".$id_friends." ' ";
  $dbh->query($q2);
  header("location:" . "../../page-profile.php?n=$id_friends2");
}

 ?>
