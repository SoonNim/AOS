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
              <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel">

                <ul class="list-unstyled g-mb-30">
                  <!-- Name -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Nom</strong>
                      <span class="align-top"><?php echo($_SESSION['nom'] )?></span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Name -->

                  <!-- FirstName -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Prenom</strong>
                      <span class="align-top"><?php echo($_SESSION['prenom']) ?></span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End FirstName -->

                  <!-- Your login -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Votre identifiant</strong>
                      <span class="align-top"><?echo($_SESSION['auth'])?></span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Your Login -->

                    <!-- Primary Email Address -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Votre adresse mail</strong>
                      <span class="align-top"><?echo($_SESSION['mail'])?></span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Primary Email Address -->

                  <!-- Your face -->
                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                  <div class="g-pr-10">
                    <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Votre photo de profil</strong>
                    <span class="align-top"><?echo($_SESSION['mail'])?></span>
                    <input type="file" name="face" />
                  </div>
                  <span>
                      <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                    </span>
                </li>
                <!-- End your face -->
                </ul>

                <div class="text-sm-right">
                  <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Annuler</a>
                  <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Enregistrer</a>
                </div>
              </div>
              <!-- End Edit Profile -->

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
