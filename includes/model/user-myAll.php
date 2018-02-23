<?php
// appel de l'initiation de variable pour se  connecter à la BDD
include "bdd.php";

?>
<div class="row">

  <?php
  $id_user = $_SESSION['user'];
    $lineBHR ='<br/> <hr class="g-brd-gray-light-v4 g-my-0"> <br/>';

  // la requete SQL
    $query ="SELECT img_id, img_link FROM images WHERE id_user='$id_user' ORDER BY img_id DESC";
    // Lance la requete et envoi un instance de PDOStatement
    $stmt = $dbh->query($query);
    //Definir le mode de fetch
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row = $stmt->rowCount();
    $records_par_page =3;

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
            <!-- User Skills -->
            <form method="post" action="includes/model/delete.php">
                <div class="d-flex flex-wrap text-center">
                  <button class="btn btn-block u-btn-darkgray g-rounded-50 g-py-12 g-mb-10" name="delete" value="'.$odata->img_id.'">
                    <i class="fas fa-trash"></i>  Supprimer
                  </button>
                </div>
            </form>
            <!-- End User Skills -->
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
            <!-- User Skills -->
            <form method="post" action="includes/model/delete.php">
                <div class="d-flex flex-wrap text-center">
                  <button class="btn btn-block u-btn-darkgray g-rounded-50 g-py-12 g-mb-10" name="delete" value="'.$odata->img_id.'">
                    <i class="fas fa-trash"></i>  Supprimer
                  </button>
                </div>
            </form>
            <!-- End User Skills -->
          </div>
          ');
      }
      }

    //
    //   echo '
    //   <br/>
    //   <hr class="g-brd-gray-light-v4 g-my-0">
    //   <br/>
    //   <!-- Pagination -->
    //   <nav class="text-center" aria-label="Page Navigation">
    // '.paginglink($row,$records_per_page).'</nav>';

}
else {
  echo'<p style="color:darkred; font-size:large">Vous n\'avez aucune publications à partager';
}

    // //Gère liens de la pagination
    // function paginglink($row,$records_per_page)
    // {
    //     // La page courante
    //     $self = $_SERVER['PHP_SELF'];
    //
    //     //$result->execute();
    //
    //     $total_no_of_records = $row;//compte le nombre d'images totales
    //
    //       echo  '<ul class="list-inline">';
    //
    //         // Nb total de pages = ceil(total des lignes / nb lignes par page)
    //         $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
    //
    //         // Page courante par défaut
    //         $current_page=1;
    //
    //         // Page courante lue dans $_GET["page_no"]
    //         if(isset($_GET["page_no"]))
    //         {
    //             $current_page=$_GET["page_no"];
    //         }
    //
    //         // Si on n'est pas à la 1ère page
    //         if($current_page!=1){
    //             // On peut revenir, définir $previous
    //             $previous =$current_page-1;
    //
    //             // Afficher les liens : Premier et Précédent
    //             echo'<li class="list-inline-item float-sm-left">
    //               <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-16" href="'.$self.'" aria-label="Previous" page_no="'.$previous.'">
    //                 <span aria-hidden="true">
    //                   <i class="fa fa-angle-left g-mr-5"></i> Précédent
    //                 </span>
    //               </a>
    //             </li>';
    //         }
    //
    //         // Boucler pour avoir les liens intermédiaires
    //         for($i=1;$i<=$total_no_of_pages;$i++){
    //             if($i==$current_page){
    //                 echo "<li><a href='".$self./*"?$param" . */"page_no=".$i."' style='color:red;'>".$i."</a></li>";
    //                 echo'<li class="list-inline-item g-hidden-sm-down">
    //                   <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14" href="'.$self.'" page_no="'.$i.'">'.$i.'</a>
    //                 </li>';
    //             }
    //             else{
    //                 echo "<li><a href='".$self./*"?$param" . */"page_no=".$i."'>".$i."</a></li>";
    //                 echo'<li class="list-inline-item g-hidden-sm-down">
    //                   <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="'.$self.'" page_no="'.$i.'">'.$i.'</a>
    //                 </li>';
    //             }
    //         }
    //
    //         // Si on n'est pas à la dernière page, créer les liens Suivant et Dernier
    //         if($current_page!=$total_no_of_pages){
    //             $next=$current_page+1;
    //           echo '<li class="list-inline-item float-sm-right">
    //               <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-16" href="'.$self.'" aria-label="Next" page_no="'.$next.'">
    //                 <span aria-hidden="true">
    //                   Suivant <i class="fa fa-angle-right g-ml-5"></i>
    //                 </span>
    //               </a>
    //             </li>';
    //         }
    //       echo  '</ul>';
    // } // Fin liens de la pagination


 ?>

</div>
