<?php
include "../../protection.php";
// appel de l'initiation de variable pour se  connecter à la BDD
include "bdd.php";

?>

<div class="row">

  <?php
  $id_user = $_SESSION['user'];
    $lineBHR ='<br/> <hr class="g-brd-gray-light-v4 g-my-0"> <br/>';

  // la requete SQL
    $query ="SELECT * FROM images WHERE id_user='$id_user'";
    // Lance la requete et envoi un instance de PDOStatement
    $stmt = $dbh->query($query);
    //Definir le mode de fetch
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //tester si au moins une Image pour ce User
    if($stmt->rowCount()==1)
    {
      $odata = $stmt->fetch();
      $j=1;

      for ($i=1; $i <= $stmt->rowCount(); $i++) {
        if($j <= 3)
        {
          publish();
          $j++;
        }
        else {
          $j =1;
          echo($lineBHR);
          publish();
        }
      }
    }
    else{
      echo('count : '.$stmt->rowCount());

      echo('<br/> id : '.$_SESSION['user']);
    }

   ?>

</div>

<?php

function publish ()
{
  $link = $_SESSION['img_link'];
  $title = strrchr($_SESSION['img_link'], '.');

  $publish =
  '<div class="col-lg-4 g-mb-40 g-mb-0--lg g-brd-around g-pa-10 g-brd-gray-light-v4">
    <!-- User Image -->
    <div class="u-block-hover g-pos-rel g-mb-20">
      <figure>
        <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="upload/'.$link.'" alt="Image Description">
      </figure>

      <!-- Figure Caption -->
      <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
        <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
          <!-- Figure name -->
          <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
            <li class="list-inline-item align-middle g-mx-7 g-color-white">
                <i class="fas fa-image"></i>  '.$title.'
            </li>
          </ul>
          <!-- End Figure name -->
        </div>
      </figcaption>
      <!-- End Figure Caption -->
    </div>
    <!-- End User Image -->
    <!-- User Skills -->
    <div class="d-flex flex-wrap text-center">
      <a class="btn btn-block u-btn-darkgray g-rounded-50 g-py-12 g-mb-10" href="#!">
        <i class="fas fa-trash"></i>  Supprimer
      </a>
    </div>
    <!-- End User Skills -->
  </div>
  ';
  return $publish ;
}
 ?>
