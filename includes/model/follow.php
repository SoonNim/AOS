<?php
include "bdd.php";

$id1 = $_SESSION['user'];
$id2 = $_GET['n'];

// la requete SQL
$query="SELECT friends_id FROM friends WHERE id_user1='".$id1."' AND id_user2='".$id2."'";
  // Lance la requete et envoi un instance de PDOStatement
  $stmt = $dbh->query($query);
  //Definir le mode de fetch
  $stmt->setFetchMode(PDO::FETCH_OBJ);
  $odata=$stmt->fetch();

  if($stmt->rowCount()>0)
  {
  echo  '<div class="d-flex flex-wrap text-center">
      <a class="btn btn-block u-btn-outline-darkgray g-rounded-50 g-py-12 g-mb-10" href="includes/model/gereFollow.php?friend='.$odata->friends_id.'&user='.$id2.'">
        Ne plus suivre <i class="fas fa-minus"></i>
      </a>
    </div>';
  }
  else {
    echo ' <div class="d-inline-block g-hidden-xs-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
      <a class="btn btn-block u-btn-primary g-rounded-50 g-py-12 g-mb-10 g-px-15" href="includes/model/gereFollow.php?id='.$id1.'&id2='.$id2.'">Suivre <i class="fas fa-plus"></i></a>
    </div>';
  }

 ?>
