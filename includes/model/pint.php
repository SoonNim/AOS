<?php
//appel de l'initialisation de variable pour se connecter à la bdd
include "bdd.php";

$short ='<div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
  <article class="u-shadow-v11 g-bg-blue g-pa-30">
    <h3 class="h5 g-color-black g-font-weight-600 text-capitalize mb-0">
        <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">10 Typography Tips Every Business Should Know</a>
      </h3>
  </article>
</div>';


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
  while ($odata=$stmt->fetch()) {
    //la requete SQL users
    $quer1 ="SELECT * FROM users WHERE users_id='".$odata->id_user."'";
    $stm=$dbh->query($quer1);
    $stm->setFetchMode(PDO::FETCH_OBJ);
    $user=$stm->fetch();

    $name = strtoupper($user->users_nom)."       ".ucfirst(strtolower($user->users_prenom));

    if($j<=5){
      echo '  <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
          <!-- Article -->
          <article class="u-shadow-v11 g-bg-white g-pos-rel">
            <img class="img-fluid w-100" src="upload/'.$odata->img_link.'" alt="Image Description">
            <div class="g-pa-30">
              <h5 class="h5 g-color-black g-font-weight-600 text-capitalize mb-3">
                  <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">
                  '.$odata->img_link.'</a>
                </h5>
              <p>
              <!-- Figure Image -->
              <img class="g-width-30 g-height-30 rounded-circle g-mb-30" src="upload/'.$user->users_photo.'" alt="Image Description">'.$name.'
              <!-- Figure Image -->
              </p>
            </div>
          </article>
          <!-- End Article -->
        </div>

        ';
        $j++;
    }
    else {
      echo $short;
      $j =1;
    }
  }
}
 ?>
