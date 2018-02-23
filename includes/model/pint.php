<?php
//appel de l'initialisation de variable pour se connecter à la bdd
include "protection.php";
include "bdd.php";



//la requete SQL
$query="SELECT img_id, img_link, id_user FROM images ORDER BY img_id DESC";
//lance la requete et envoi une instance de PDOStatement
$stmt=$dbh->query($query);
//Definir le mode de fetch
$stmt->setFetchMode(PDO::FETCH_OBJ);
$odata=$stmt->fetch();

//tester si au moins une image pour ce USER
if($stmt->rowCount()>0){
  $j=1;
  $k=0;
  while ($odata=$stmt->fetch()) {
    //la requete SQL users
    $quer1 ="SELECT * FROM users WHERE users_id='".$odata->id_user."'";
    $stm=$dbh->query($quer1);
    $stm->setFetchMode(PDO::FETCH_OBJ);
    $user=$stm->fetch();

    $name = strtoupper($user->users_nom)."       ".ucfirst(strtolower($user->users_prenom));

    if ($user->users_id == $_SESSION['user']) {
      $link='<a class="u-link-v5 g-color-main g-color-primary--hover" href="page-user.php">'.$name.'</a>';
    }
    else {
      $link='<a class="u-link-v5 g-color-main g-color-primary--hover" href="page-profile.php?n='.$user->users_id.'">'.$name.'</a>';
    }

    $A='  <div class="masonry-grid-item col-lg-3 g-mb-30">
              <!-- Article -->
              <article class="u-shadow-v11 g-bg-white g-pos-rel">
                <img class="g-width-400 g-height-250" src="upload/'.$odata->img_link.'" alt="Image Description">
                <div class="g-pa-30">
                    <b><u>Publié par :</u></b>
                    <img class="g-width-40 g-height-40 rounded-circle g-mb-20" src="upload/profil/'.$user->users_photo.'" alt="Image Description">
                      '.$link.'
                </div>
              </article>
              <!-- End Article -->
            </div>';

    if($j<=5){
        echo $A;
        $j++;
    }
    else {
      echo $short;
      $j =1;
    }
  }
}
 ?>
