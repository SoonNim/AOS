<?php
include "includes/model/bdd.php";

$id = $_SESSION['user'];

// la requete SQL
$query="SELECT id_user1, friends_id, dateUnion FROM friends WHERE id_user2='".$id."'";
//lance la requete -->renvoie une instance PDOStatement
$stmt=$dbh->query($query);
//definir le mode de fetch
$stmt->setFetchMode(PDO::FETCH_OBJ);

if ($stmt->rowCount()>0) {
  while ($odata=$stmt->fetch()) {
        //la requete SQL users
        $quer1 ="SELECT * FROM users WHERE users_id='".$odata->id_user1."'";
        $stm=$dbh->query($quer1);
        $stm->setFetchMode(PDO::FETCH_OBJ);
        $user=$stm->fetch();

        $name = strtoupper($user->users_nom)."       ".ucfirst(strtolower($user->users_prenom));

            echo '
            <!-- Team Block -->
              <div class="col-lg-4 g-mb-30">
                <!-- Figure -->
                <figure class="u-shadow-v20 g-bg-cyan-gradient-opacity-v1 g-rounded-4 g-pa-30">
                  <div class="d-flex justify-content-start">
                    <!-- Figure Image -->
                    <img class="align-self-center g-width-80 g-height-80 rounded-circle mr-4" src="upload/profil/'.$user->users_photo.'" alt="Image Description">
                    <!-- Figure Image -->

                    <!-- Figure Info -->
                    <div class="d-block align-self-center">
                      <h4 class="g-font-weight-600 g-font-size-16 g-color-white mb-2">'.$name.'</h4>
                      <h6 class="g-font-weight-200 g-font-size-12 g-color-white mb-2">connecté depuis le : '.date('d/m/Y', $odata->dateUnion).'</h6>


                      <!-- Figure Social Icons -->
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item g-mx-1">
                          <a class="u-icon-v1 u-icon-size--sm g-color-white-opacity-0_8 g-color-black--hover g-bg-white--hover rounded-circle" href="page-profile.php?n='.$user->users_id.'">
                            <i class="fas fa-user-circle g-color-indigo"></i>
                          </a>
                        </li>
                        <li class="list-inline-item g-mx-1">
                          <a class="u-icon-v1 u-icon-size--sm g-color-white-opacity-0_8 g-color-black--hover g-bg-white--hover rounded-circle" href="includes/model/delete.php?id='.$odata->friends_id.'">
                            <i class="fas fa-trash g-color-lightred"></i>
                          </a>
                        </li>

                      </ul>
                      <!-- End Figure Social Icons -->
                    </div>
                    <!-- End Figure Info -->
                  </div>
                </figure>
                <!-- End Figure -->
              </div>
            <!-- End Team Block -->
            ';
  }
}
else {
   echo'<p style="color:darkred; font-size:large">Vous n\'avez aucun abonnés';
}
 ?>
