<div class="row">
<?php
//Connexion base de donnée avec PDO
  include "includes/model/bdd.php";
// Variables
$id = $_SESSION['user'];

// requete SQL
$query = "SELECT img_link FROM images WHERE id_user='$id'";
// lancer la requete --> renvoie une instance de PDOStatement
$stm = $dbh->query($query);

// definir le mode de fetch
$stm->setFetchMode(PDO::FETCH_OBJ);
//test s'il y a au moins une image pour cet utilisateur


if($stm->rowCount()>0){
  //recuperation des données
  //$odata = $stm->fetch();

  // fixe la limite si plus de 12 images
  if ($stm->rowCount > 12) {
  $max = 12;
  }
  else {
    $max = $stm->rowCount();
  }

$i=1;

while ($odata = $stm->fetch()) {
  if ($i<=$max) {
    echo '<div class="col-md-2 g-mb-30">'.
    '<a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--col6" data-src="web/assets/img-temp/400x270/img13.jpg" data-caption="Lightbox Gallery">
      '.
      '<img class="img-fluid" src="upload/'.$odata->img_link.'" alt="Image Description">'.
    ' </a></div>' ;
      $i++;
  }
}

}
else {
  echo'<p style="color:darkred; font-size:large">Vous n\'avez aucune photos à partager';
}

 ?>

</div>
