<?php
// appel de l'initiation de variable pour se  connecter à la BDD
include "bdd.php";

?>
<div class="row">

  <?php
  $id_user = $_GET['n'];
    $lineBHR ='<br/> <hr class="g-brd-gray-light-v4 g-my-0"> <br/>';

  // la requete SQL
    $query ="SELECT img_id, img_link FROM images WHERE id_user='$id_user' ORDER BY img_id DESC";
    // Lance la requete et envoi un instance de PDOStatement
    $stmt = $dbh->query($query);
    //Definir le mode de fetch
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row = $stmt->rowCount();

    $id1 = $_SESSION['user'];
    $id2 = $_GET['n'];

    $q1="SELECT friends_id FROM friends WHERE id_user1='".$id1."' AND id_user2='".$id2."'";
    $stmtQ1 = $dbh->query($q1);
    $stmtQ1->setFetchMode(PDO::FETCH_OBJ);

    if ($stmtQ1->rowCount()>0)
    {
    //tester si au moins une Image pour ce User
    if($stmt->rowCount()>0)
    {
      $j=1;

      while ($odata = $stmt->fetch())
      {
      if($j <= 3)
      {
        echo(
          '<div class="col-lg-4 g-mb-40 g-mb-0--lg g-brd-around g-pa-10 g-brd-gray-light-v4">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel g-mb-20">
              <figure>
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="upload/'.$odata->img_link.'" alt="Image Description">
              </figure>

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                  <!-- Figure name -->
                  <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                    <li class="list-inline-item align-middle g-mx-7 g-color-white">
                        <i class="fas fa-image"></i>  '.$odata->img_link.'
                    </li>
                  </ul>
                  <!-- End Figure name -->
                </div>
              </figcaption>
              <!-- End Figure Caption -->
            </div>
            <!-- End User Image -->
          </div>
          ');
        $j++;
      }
      else {
        echo($lineBHR);
        echo(
          '<div class="col-lg-4 g-mb-40 g-mb-0--lg g-brd-around g-pa-10 g-brd-gray-light-v4">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel g-mb-20">
              <figure>
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="upload/'.$odata->img_link.'" alt="Image Description">
              </figure>

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                  <!-- Figure name -->
                  <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                    <li class="list-inline-item align-middle g-mx-7 g-color-white">
                        <i class="fas fa-image"></i>  '.strrchr($odata->img_link,".").'
                    </li>
                  </ul>
                  <!-- End Figure name -->
                </div>
              </figcaption>
              <!-- End Figure Caption -->
            </div>
            <!-- End User Image -->
          </div>
          ');
      }
      }
}
else {
  echo'<p style="color:darkred; font-size:large">Vous n\'avez aucune publications à partager';
}
}
else {
  echo'<p style="color:darkred; font-size:large">Vous n\'avez pas accès à ce compte';
}

 ?>

</div>
