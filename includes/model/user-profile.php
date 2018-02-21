<?php
include "bdd.php";
// la requete SQL Images
$query="SELECT id_user FROM images WHERE img_link='".$img."'";
// lance la requete et envoi une instance de PDOStatement
$stmt=$dbh->query($query);
//definir le mode de fetch
$stmt->setFetchMode(PDO::FETCH_OBJ);
$images = $stmt->fetch();

//la requete SQL users
$quer1 ="SELECT * FROM users WHERE users_id='".$images->id_user."'";
$stm=$dbh->query($quer1);
$stm->setFetchMode(PDO::FETCH_OBJ);
$user=$stm->fetch();

//la requete SQL All Images
$quer2 ="SELECT * FROM images WHERE id_user='".$images->id_user."'";
$st=$dbh->query($quer2);
$st->setFetchMode(PDO::FETCH_OBJ);
$nbImg = $st->rowCount();

$name = strtoupper($user->users_nom)."       ".ucfirst(strtolower($user->users_prenom));
if($nbImg<2)
{
  $nb =$nbImg." publication";
}
else {
  $nb=$nbImg." publications";
}

echo '<div class="col-md-10 g-mb-30">
  <!-- Figure -->
  <figure class="g-bg-cover g-bg-size-cover g-bg-pos-center g-bg-black-opacity-0_7--after text-center" style="background-image: url(../../assets/img-temp/900x900/img3.jpg);">
    <div class="g-pos-rel g-z-index-1 ">
      <div class="g-py-40 g-px-20">
        <!-- Figure Image -->
        <img class="g-width-100 g-height-100 rounded-circle g-mb-30" src="upload/'.$user->users_photo.'" alt="Image Description">
        <!-- Figure Image -->

        <!-- Figure Info -->
        <h4 class="g-color-white g-font-weight-600 g-font-size-16 g-mb-15">'.$name.'</h4>
        <span class="d-block g-color-primary g-font-weight-700 g-font-size-13 g-mb-15">Follow??</span>
        <!-- End Figure Info -->
      </div>

      <!-- Figure Footer -->
      <footer class="d-flex justify-content-between g-brd-top g-brd-white-opacity-0_2 g-py-20 g-px-40">
        <a class="g-color-white-opacity-0_6 g-color-white--hover g-font-size-13 g-text-underline--none--hover" href="page-user.php?msg=pasLaBonneSession">Voir le profil</a>
        <p class="g-color-white-opacity-0_6 g-color-white--hover g-font-weight-600--hover g-font-size-13">'.$nb.'</p>
      </footer>
      <!-- End Figure Footer -->
    </div>
  </figure>
  <!-- End Figure -->
</div>';
 ?>
