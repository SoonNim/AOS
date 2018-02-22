<?php
include "includes/model/bdd.php";

$id = $_SESSION['user'];

// la requete SQL
$query="SELECT friends_id, id_user2, dateUnion FROM friends WHERE id_user1='".$id."'";
//lance la requete -->renvoie une instance PDOStatement
$stmt=$dbh->query($query);
//definir le mode de fetch
$stmt->setFetchMode(PDO::FETCH_OBJ);

if($stmt->rowCount()>0){
  $j=1;
  $k=0;
  while ($odata=$stmt->fetch()) {
    //la requete SQL users
    $quer1 ="SELECT * FROM users WHERE users_id='".$odata->id_user2."'";
    $stm=$dbh->query($quer1);
    $stm->setFetchMode(PDO::FETCH_OBJ);
    $user=$stm->fetch();

    $name = strtoupper($user->users_nom)."       ".ucfirst(strtolower($user->users_prenom));

    echo '
         <!-- User Contacts -->

               <div class="col-md-4 g-mb-30 g-mb-0--md">
                 <!-- Figure -->
                 <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                   <div class="g-py-40 g-px-20">
                     <!-- Figure Image -->
                     <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="upload/profil/'.$user->users_photo.'" alt="Image Description">
                     <!-- Figure Image -->

                     <!-- Figure Info -->
                     <h4 class="h4 g-mb-5">'.$name.'</h4>

                     <h6 class="h6 g-mb-5"> abonné depuis le : '.date('d/m/Y', $odata->dateUnion).'</h6>
                     <!-- End Figure Info -->
                   </div>

                   <hr class="g-brd-gray-light-v4 g-my-0">

                   <!-- Figure List -->
                   <ul class="row list-inline g-py-20 g-ma-0">
                     <li class="col g-brd-right g-brd-gray-light-v4">
                       <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="page-profile.php?n='.$user->users_id.'">
                         <i class="fas fa-user-circle"></i>
                       </a>
                     </li>
                     <li class="col g-brd-right g-brd-gray-light-v4">
                       <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="includes/model/delete.php?id='.$odata->friends_id.'">
                         <i class="fas fa-trash"></i>
                       </a>
                     </li>
                   </ul>
                   <!-- End Figure List -->
                 </figure>
                 <!-- End Figure -->
               </div>
             <!-- End User Contacts -->
             ';
           }
         }
         else {
           echo'<p style="color:darkred; font-size:large">Vous n\'avez aucun abonnements';
         }
          ?>
