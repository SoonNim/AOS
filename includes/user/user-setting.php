<?php session_start(); ?>

<header class="text-center mb-4">
                <h3 class="h3 g-color-darkgrey g-font-weight-600">Paramètre du compte</h3>
              </header>
            <!-- Nav tabs -->
            <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20"
                role="tablist" data-target="nav-1-1-default-hor-left-underline" data-tabs-mobile-type="slide-up-down"
                data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
              <li class="nav-item">
                <a class="nav-link g-py-10 active" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--1"
                   role="tab">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--2"
                   role="tab">Sécurité</a>
              </li>
            </ul>
            <!-- End Nav tabs -->

            <!-- Tab panes -->
            <div id="nav-1-1-default-hor-left-underline" class="tab-content">
              <!-- Edit Profile -->
              <form class="g-py-15" method="post" action="includes/model/setting.php" enctype="multipart/form-data">
              <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel">

                <ul class="list-unstyled g-mb-30">
                  <!-- Name -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Nom</strong>
                      <span class="align-top"><?php echo($_SESSION['nom']) ?></span>
                    </div>
                    <div class="row">
                    <div class="col-xs-6">
                      <input class="form-control rounded-0 form-control-md" type="text" name ="nom" value="<?php echo($_SESSION['nom'] )?>" id="showNom" style="display:none">
                    </div>
                  </div>
                    <span>
                      <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1" id="setNom"></i>
                    </span>

                  </li>
                  <!-- End Name -->

                  <!-- FirstName -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Prenom</strong>
                      <span class="align-top"><?php echo($_SESSION['prenom']) ?></span>
                    </div>
                    <div class="row">
                    <div class="col-xs-6">

                      <input class="form-control rounded-0 form-control-md" type="text" name ="prenom" value="<?php echo($_SESSION['prenom'] )?>" id="showPrenom" style="display:none">

                    </div>
                  </div>
                    <span>
                      <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-pos-rel g-top-1" id="setPrenom"></i>
                    </span>

                  </li>
                  <!-- End FirstName -->

                  <!-- Your login -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Votre identifiant</strong>
                      <span class="align-top"><?echo($_SESSION['auth'])?></span>
                    </div>
                    <div class="row">
                    <div class="col-xs-6">

                      <input class="form-control rounded-0 form-control-md" type="text" name="ID" value="<?php echo($_SESSION['auth'] )?>" id="showID" style="display:none">

                    </div>
                  </div>
                    <span>
                      <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1" id="setID"></i>
                    </span>
                  </li>
                  <!-- End Your Login -->

                    <!-- Primary Email Address -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Votre adresse mail</strong>
                      <span class="align-top"><?echo($_SESSION['mail'])?></span>
                    </div>
                    <div class="row">
                    <div class="col-xs-6">

                      <input class="form-control rounded-0 form-control-md" type="email" name="mail" value="<?php echo($_SESSION['mail'] )?>" id="showMail" style="display:none">

                    </div>
                  </div>
                    <span>
                      <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1" id="setMail"></i>
                    </span>
                  </li>
                  <!-- End Primary Email Address -->

                  <!-- Your face -->
                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Votre photo de profil</strong>
                    <form class="g-py-15" method="post" action="includes/model/upload.php" enctype="multipart/form-data">
                    <span class="align-top"><?echo'<img class="align-self-center g-width-80 g-height-80 rounded-circle mr-4"
                    src="upload/'.$_SESSION['photo'].'" alt="Image Description">'?></span>
                    </form>


                  </div>
                  <div class="row">
                  <div class="col-xs-6">
                    <input type="file" class="form-control-file"  aria-describedby="fileHelp" name="img" value="<?php echo($_SESSION['photo'] )?>" id="showImg" style="display:none">
                  </div>
                </div>
                  <span>
                    <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1" id="setImg"></i>
                  </span>
                </li>
                <!-- End your face -->
                </ul>

                <div class="text-sm-right">
                  <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Annuler</a>
                  <button class="btn u-btn-primary rounded-0 g-py-12 g-px-25" type = "submit" id="upload" name="uplaod" value="upload">Enregistrer</button>
                </div>
              </div>
              <!-- End Edit Profile -->
            </form>
              <!-- Security Settings -->
              <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--2" role="tabpanel">
                <h2 class="h4 g-font-weight-300">Sécurité</h2>

                <form>
                  <!-- Current Password -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Mot de passe actuel</label>
                    <div class="col-sm-9">
                      <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password">
                        <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                          <i class="icon-lock"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Current Password -->

                  <!-- New Password -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Nouveau mot de passe</label>
                    <div class="col-sm-9">
                      <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password">
                        <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                          <i class="icon-lock"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End New Password -->

                  <!-- Verify Password -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Confirmer mot de passe</label>
                    <div class="col-sm-9">
                      <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password">
                        <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                          <i class="icon-lock"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Verify Password -->

                  <div class="text-sm-right">
                    <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Annuler</a>
                    <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Enregistrer</a>
                  </div>
                </form>
              </div>
              <!-- End Security Settings -->

            </div>
            <!-- End Tab panes -->

<script>
            document.getElementById('setNom').onclick =
            function()
            {
              //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
              if(document.getElementById('showNom').style.display == "none")
              {
                document.getElementById('showNom').style.display = "block";
                document.getElementById('setNom').className="icon-action-undo g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1";
              }
              else {
                document.getElementById('showNom').style.display = "none";
                document.getElementById('setNom').className="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1";
              }
              return false; //Un simple return false ici désacative la suite de l'événement : le href
            }


            document.getElementById('setPrenom').onclick =
            function()
            {
              //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
              if(document.getElementById('showPrenom').style.display == "none")
              {
                document.getElementById('showPrenom').style.display = "block";
                document.getElementById('setPrenom').className="icon-action-undo g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1";

              }
              else {
                document.getElementById('showPrenom').style.display = "none";
                document.getElementById('setPrenom').className="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1";

              }
              return false; //Un simple return false ici désacative la suite de l'événement : le href
            }


            document.getElementById('setID').onclick =
            function()
            {
              //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
              if(document.getElementById('showID').style.display == "none")
              {
                document.getElementById('showID').style.display = "block";
                document.getElementById('setID').className="icon-action-undo g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1";

              }
              else {
                document.getElementById('showID').style.display = "none";
                document.getElementById('setID').className="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1";

              }
              return false; //Un simple return false ici désacative la suite de l'événement : le href
            }


            document.getElementById('setMail').onclick =
            function()
            {
              //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
              if(document.getElementById('showMail').style.display == "none")
              {
                document.getElementById('showMail').style.display = "block";
                document.getElementById('setMail').className="icon-action-undo g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1";

              }
              else {
                document.getElementById('showMail').style.display = "none";
                document.getElementById('setMail').className="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1";

              }
              return false; //Un simple return false ici désacative la suite de l'événement : le href
            }


            document.getElementById('setImg').onclick =
            function()
            {
              //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
              if(document.getElementById('showImg').style.display == "none")
              {
                document.getElementById('showImg').style.display = "block";
                document.getElementById('setImg').className="icon-action-undo g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1";

              }
              else {
                document.getElementById('showImg').style.display = "none";
                document.getElementById('setImg').className="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer  g-pos-rel g-top-1";

              }
              return false; //Un simple return false ici désacative la suite de l'événement : le href
            }
</script>
