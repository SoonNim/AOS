<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">


<head>
  <!-- Title -->
  <title>PintAOS</title>
  <meta charset="utf-8">

  <!-- Required Meta Tags Always Come First -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="web/assets/vendor/bootstrap/bootstrap.min.css">

  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="web/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="web/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-line/css/simple-line-icons.css">
  <link  rel="stylesheet" href="../../assets/vendor/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="web/assets/vendor/hamburgers/hamburgers.min.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="web/assets/vendor/animate.css">



  <!-- CSS Unify -->
  <link rel="stylesheet" href="web/assets/css/unify-components.css">
  <link rel="stylesheet" href="web/assets/css/unify-globals.css">
  <link rel="stylesheet" href="web/assets/css/unify-core.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="web/assets/css/custom.css">



</head>

<body>
  <main>

    <!-- Header -->
     <header id="js-header" class="u-header u-header--static">
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1
                    g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button"
                    aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                    data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a href="page-pint.html" class="navbar-brand">
              <img src="web/assets/img/logo-8.png" alt="Image Description">
            </a>
            <!-- End Logo -->
            <div class="d-inline-block g-hidden-xs-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
              <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="includes/deconnexion.php">Se deconnecter</a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->

    <!-- Breadcrumb -->
    <section class="g-my-30">
      <div class="container">
        <ul class="u-list-inline">
          <li class="list-inline-item g-mr-7">
            <a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Home</a>
            <i class="fa fa-angle-right g-ml-7"></i>
          </li>
          <li class="list-inline-item g-color-primary">
            <span> <?php   echo($_SESSION['nom']." ".$_SESSION['prenom']); ?></span>
          </li>
        </ul>
      </div>
    </section>
    <!-- End Breadcrumb -->

    <section class="g-mb-100">
      <div class="container">
        <div class="row">
          <!-- Profile Sidebar -->
          <div class="col-lg-3 g-mb-50 g-mb-0--lg">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel">
              <figure>
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                     src="web/assets/img-temp/400x450/img5.jpg" alt="Image Description">
              </figure>



              <!-- User Info -->
              <span class="g-pos-abs g-top-20 g-left-0">
                  <a class="btn btn-sm u-btn-primary rounded-0" href="#!"><?php   echo($_SESSION['nom']." ".$_SESSION['prenom']); ?></a>
                </span>
              <!-- End User Info -->
            </div>
            <!-- User Image -->

            <!-- Sidebar Navigation -->

            <div class="list-group list-group-border-0 g-mb-40">
              <!-- Overall -->
              <a href="#" class="list-group-item justify-content-between active" id="choiseMain">
                <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> Overall</span>

                <span class="u-label g-font-size-11 g-bg-gray-dark-v2 g-rounded-20 g-px-10">2</span>
              </a>
              <!-- End Overall -->

              <!-- Users Contacts -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between" id="choiseFriends">
                <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Abonné(s)</span>
              </a>
              <!-- End Users Contacts -->
              <!-- Users Contacts -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between" id="choiseFollow">
                <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Abonnement(s)</span>
              </a>
              <!-- End Users Contacts -->

              <!-- Reviews -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between" id="choiseReview">
                <span><i class="icon-heart g-pos-rel g-top-1 g-mr-8"></i> Reviews</span>
              </a>
              <!-- End Reviews -->

              <!-- Settings -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between" id="choiseSetting">
                <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i> Paramètre</span>
                <span class="u-label g-font-size-11 g-bg-cyan g-rounded-20 g-px-8">3</span>
              </a>
              <!-- End Settings -->
            </div>
            <!-- End Sidebar Navigation -->

          </div>
          <!-- End Profile Sidebar -->

          <!-- Profile Content -->


<!-- PART MAIN -->
        <div class="col-lg-9" id="hereChoiseMain" style="display:block">
          <div class="row g-mb-40">
              <div class="col-md-6 g-mb-30 g-mb-0--md">
                <div class="g-bg-cyan g-color-white g-pa-25">
                  <header class="d-flex text-uppercase g-mb-40">
                    <i class="icon-people align-self-center display-4 g-mr-20"></i>

                    <div class="g-line-height-1">
                      <h4 class="h5">Overal Visits</h4>
                      <div class="js-counter g-font-size-30" data-comma-separated="true">52147</div>
                    </div>
                  </header>

                  <div class="d-flex justify-content-between text-uppercase g-mb-25">
                    <div class="g-line-height-1">
                      <h5 class="h6 g-font-weight-600">Last Week</h5>
                      <div class="js-counter g-font-size-16" data-comma-separated="true">1385</div>
                    </div>

                    <div class="text-right g-line-height-1">
                      <h5 class="h6 g-font-weight-600">Last Month</h5>
                      <div class="js-counter g-font-size-16" data-comma-separated="true">6048</div>
                    </div>
                  </div>

                  <h6 class="g-mb-10">Project Completeness <span class="float-right g-ml-10">72%</span></h6>
                  <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-10">
                    <div class="js-hr-progress-bar-indicator progress-bar g-bg-white u-progress-bar--xs" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small class="g-font-size-12">11% less than last month</small>
                </div>
              </div>

              <div class="col-md-6">
                <div class="g-bg-purple g-color-white g-pa-25">
                  <header class="d-flex text-uppercase g-mb-40">
                    <i class="icon-layers align-self-center display-4 g-mr-20"></i>

                    <div class="g-line-height-1">
                      <h4 class="h5">Overal Views</h4>
                      <div class="js-counter g-font-size-30" data-comma-separated="true">324056</div>
                    </div>
                  </header>

                  <div class="d-flex justify-content-between text-uppercase g-mb-25">
                    <div class="g-line-height-1">
                      <h5 class="h6 g-font-weight-600">Last Week</h5>
                      <div class="js-counter g-font-size-16" data-comma-separated="true">26904</div>
                    </div>

                    <div class="text-right g-line-height-1">
                      <h5 class="h6 g-font-weight-600">Last Month</h5>
                      <div class="js-counter g-font-size-16" data-comma-separated="true">124766</div>
                    </div>
                  </div>

                  <h6 class="g-mb-10">Project Completeness <span class="float-right g-ml-10">89%</span></h6>
                  <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-10">
                    <div class="js-hr-progress-bar-indicator progress-bar g-bg-white u-progress-bar--xs" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small class="g-font-size-12">16% higher than last month</small>
                </div>
              </div>
            </div>
            <!-- End Overall Statistics -->

            <!-- Projects & News Feeds Panels -->
            <div class="row g-mb-40">
              <div class="col-lg-12 g-mb-40 g-mb-0--lg">
                <!-- Notifications Panel -->
                <div class="card border-0">
                  <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5
                       border-0 g-mb-15">
                    <h3 class="h6 mb-0">
                        <i class="icon-list g-pos-rel g-top-1 g-mr-5"></i> Dernières Publications
                      </h3>
                  </div>

                  <div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
                  <?php include 'includes/lastImg.php' ?>
                  </div>
                </div>
                <!-- End Notifications Panel -->
              </div>
              </div>
            <!-- End Projects & News Feeds Panels -->
        </div>
<!-- END PART MAIN -->

<!-- PART REVIEW -->
          <div class="col-lg-9" id="hereChoiseReview" style="display:none">
              <header class="text-center mb-4">
                <h3 class="h3 g-color-darkgrey g-font-weight-600">Derniers posts</h3>
              </header>
            <!-- Reviews (Option 1) -->
            <div class="card border-0 g-mb-40">
              <!-- Panel Header -->
              <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                <h3 class="h6 mb-0">
                    <i class="icon-heart g-pos-rel g-top-1 g-mr-5"></i> Reviews <small>(option 1)</small>
                  </h3>
                <div class="dropdown g-mb-10 g-mb-0--md">
                  <span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-options-vertical g-pos-rel g-top-1"></i>
                    </span>
                  <div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
                    <a class="dropdown-item g-px-10" href="#!">
                      <i class="icon-layers g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Projects
                    </a>
                    <a class="dropdown-item g-px-10" href="#!">
                      <i class="icon-wallet g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Wallets
                    </a>
                    <a class="dropdown-item g-px-10" href="#!">
                      <i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Reports
                    </a>
                    <a class="dropdown-item g-px-10" href="#!">
                      <i class="icon-settings g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Users Setting
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item g-px-10" href="#!">
                      <i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> View More
                    </a>
                  </div>
                </div>
              </div>
              <!-- End Panel Header -->

              <!-- Panel Body -->
              <div class="card-block g-pa-0">
                <div class="media g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-20">
                  <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-2 g-mr-20" src="web/assets/img-temp/100x100/img4.jpg" alt="Image Description">
                  <div class="media-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center g-mb-15 g-mb-10--sm">
                      <header class="g-mb-5 g-mb-0--sm">
                        <h5 class="h4 g-font-weight-300 g-mr-10 g-mb-5">James Coolman</h5>
                        <div class="js-rating g-color-yellow" data-rating="5"></div>
                      </header>
                      <div class="text-nowrap g-font-size-12">
                        <span class="text-muted">2 days ago</span>
                      </div>
                    </div>

                    <p>First of all, thank you very much for making this theme! It is beautiful both when looked at in the browser and especially also when looking at the HTML, CSS etc. source code. Close too Bootstrap, great technical quality and documentation:
                      your theme is clearly the best! And I've really looked at and compared *lots* of them! :-)</p>

                    <ul class="list-inline my-0">
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 214
                        </a>
                      </li>
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 35
                        </a>
                      </li>
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-share g-pos-rel g-top-1 g-mr-3"></i> 52
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="media g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-20">
                  <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-2 g-mr-20" src="web/assets/img-temp/100x100/img7.jpg" alt="Image Description">
                  <div class="media-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center g-mb-15 g-mb-10--sm">
                      <header class="g-mb-5 g-mb-0--sm">
                        <h5 class="h4 g-font-weight-300 g-mr-10 g-mb-5">David Lee</h5>
                        <div class="js-rating g-color-yellow" data-rating="5"></div>
                      </header>
                      <div class="text-nowrap g-font-size-12">
                        <span class="text-muted">3 days ago</span>
                      </div>
                    </div>

                    <p>Thanks a lot. You have no idea how much I appreciate all your help. You are not just a great designer but an amazing human being, because so many people won't give a rat ass about what happen to their clients AFTER THE SALE, and you
                      are not. Again, thanks a lot</p>

                    <ul class="list-inline my-0">
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 178
                        </a>
                      </li>
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 14
                        </a>
                      </li>
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-share g-pos-rel g-top-1 g-mr-3"></i> 12
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="media g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-20">
                  <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-2 g-mr-20" src="web/assets/img-temp/100x100/img5.jpg" alt="Image Description">
                  <div class="media-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center g-mb-15 g-mb-10--sm">
                      <header class="g-mb-5 g-mb-0--sm">
                        <h5 class="h4 g-font-weight-300 g-mr-10 g-mb-5">Sally Manning</h5>
                        <div class="js-rating g-color-yellow" data-rating="5"></div>
                      </header>
                      <div class="text-nowrap g-font-size-12">
                        <span class="text-muted">2 days ago</span>
                      </div>
                    </div>

                    <p>First of all, thank you very much for making this theme! It is beautiful both when looked at in the browser and especially also when looking at the HTML, CSS etc. source code. Close too Bootstrap, great technical quality and documentation:
                      your theme is clearly the best! And I've really looked at and compared *lots* of them! :-)</p>

                    <ul class="list-inline my-0">
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 214
                        </a>
                      </li>
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 35
                        </a>
                      </li>
                      <li class="list-inline-item g-mr-20">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                          <i class="icon-share g-pos-rel g-top-1 g-mr-3"></i> 52
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

                <a class="btn btn-block u-btn-darkgray rounded-0 g-py-10" href="#!">Load More</a>
              </div>
              <!-- End Panel Body -->
            </div>
            <!-- End Reviews (Option 1) -->
          </div>
<!-- END PART REVIEW -->

<!-- PART SETTING -->
          <div class="col-lg-9" id="hereChoiseSetting" style="display:none">
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
                  <!-- Your ID -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">votre ID Utilisateur</strong>
                      <span class="align-top"><?php echo($_SESSION[id_utilisateur]) ?></span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Your ID -->

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
          </div>
<!-- END PART SETTING -->

<!-- PART FRIENDS -->
          <div class="col-lg-9" id="hereChoiseFriends" style="display:none">
              <header class="text-center mb-4">
                <h3 class="h3 g-color-darkgrey g-font-weight-600">NB Abonné(s)</h3>
              </header>
             <!-- User Contacts -->
                <div class="row g-mb-40">
                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img2.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Mikel Andrews</h4>
                        <div class="d-block">
                          <span class="g-color-cyan g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img2.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Natasha Kolnikova</h4>
                        <div class="d-block">
                          <span class="g-color-pink g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img3.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Frank Heller</h4>
                        <div class="d-block">
                          <span class="g-color-purple g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>
                </div>
                <!-- End User Contacts -->

                <!-- User Contacts -->
                <div class="row g-mb-40">
                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img4.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Maria Parker</h4>
                        <div class="d-block">
                          <span class="g-color-cyan g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img5.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Bryant Gordon</h4>
                        <div class="d-block">
                          <span class="g-color-pink g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img6.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Kelly Harrington</h4>
                        <div class="d-block">
                          <span class="g-color-purple g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>
                </div>
                <!-- End User Contacts -->

                <!-- User Contacts -->
                <div class="row g-mb-40">
                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img2.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Claire Jensen</h4>
                        <div class="d-block">
                          <span class="g-color-cyan g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img8.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Darrel Park</h4>
                        <div class="d-block">
                          <span class="g-color-pink g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img9.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Sally Manning</h4>
                        <div class="d-block">
                          <span class="g-color-purple g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>
                </div>
                <!-- End User Contacts -->

                <!-- User Contacts -->
                <div class="row g-mb-40">
                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img20.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Dave Carlson</h4>
                        <div class="d-block">
                          <span class="g-color-cyan g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img21.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Julia Copeland</h4>
                        <div class="d-block">
                          <span class="g-color-pink g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img22.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Willis Roy</h4>
                        <div class="d-block">
                          <span class="g-color-purple g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>
                </div>
                <!-- End User Contacts -->

                <!-- Pagination -->
                <nav class="text-center" aria-label="Page Navigation">
                  <ul class="list-inline">
                    <li class="list-inline-item float-sm-left">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-16" href="#!" aria-label="Previous">
                        <span aria-hidden="true">
                          <i class="fa fa-angle-left g-mr-5"></i> Previous
                        </span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#!">1</a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14" href="#!">2</a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#!">3</a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                      <a class="g-pa-7-14">...</a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#!">80</a>
                    </li>
                    <li class="list-inline-item float-sm-right">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-16" href="#!" aria-label="Next">
                        <span aria-hidden="true">
                          Next <i class="fa fa-angle-right g-ml-5"></i>
                        </span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- End Pagination -->
          </div>
<!-- END PART FRIENDS -->

<!-- PART FOLLOW -->
          <div class="col-lg-9" id="hereChoiseFollow" style="display:none">
              <header class="text-center mb-4">
                <h3 class="h3 g-color-darkgrey g-font-weight-600">NB Abonnement(s)</h3>
              </header>
             <!-- User Contacts -->
                <div class="row g-mb-40">
                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img2.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Mikel Andrews</h4>
                        <div class="d-block">
                          <span class="g-color-cyan g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img2.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Natasha Kolnikova</h4>
                        <div class="d-block">
                          <span class="g-color-pink g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img3.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Frank Heller</h4>
                        <div class="d-block">
                          <span class="g-color-purple g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>
                </div>
                <!-- End User Contacts -->

                <!-- User Contacts -->
                <div class="row g-mb-40">
                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img4.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Maria Parker</h4>
                        <div class="d-block">
                          <span class="g-color-cyan g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img5.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Bryant Gordon</h4>
                        <div class="d-block">
                          <span class="g-color-pink g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img6.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Kelly Harrington</h4>
                        <div class="d-block">
                          <span class="g-color-purple g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>
                </div>
                <!-- End User Contacts -->

                <!-- User Contacts -->
                <div class="row g-mb-40">
                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img2.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Claire Jensen</h4>
                        <div class="d-block">
                          <span class="g-color-cyan g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img8.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Darrel Park</h4>
                        <div class="d-block">
                          <span class="g-color-pink g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img9.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Sally Manning</h4>
                        <div class="d-block">
                          <span class="g-color-purple g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>
                </div>
                <!-- End User Contacts -->

                <!-- User Contacts -->
                <div class="row g-mb-40">
                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img20.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Dave Carlson</h4>
                        <div class="d-block">
                          <span class="g-color-cyan g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4 g-mb-30 g-mb-0--md">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img21.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Julia Copeland</h4>
                        <div class="d-block">
                          <span class="g-color-pink g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>

                  <div class="col-md-4">
                    <!-- Figure -->
                    <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                      <div class="g-py-40 g-px-20">
                        <!-- Figure Image -->
                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="web/assets/img-temp/125x125/img22.jpg" alt="Image Description">
                        <!-- Figure Image -->

                        <!-- Figure Info -->
                        <h4 class="h5 g-mb-5">Willis Roy</h4>
                        <div class="d-block">
                          <span class="g-color-purple g-font-size-default g-mr-3">
                            <i class="icon-user"></i>
                          </span>
                          <em class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                        </div>
                        <!-- End Figure Info -->
                      </div>

                      <hr class="g-brd-gray-light-v4 g-my-0">

                      <!-- Figure List -->
                      <ul class="row list-inline g-py-20 g-ma-0">
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover" href="#!">
                            <i class="icon-speech"></i>
                          </a>
                        </li>
                        <li class="col g-brd-right g-brd-gray-light-v4">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover" href="#!">
                            <i class="icon-envelope-letter"></i>
                          </a>
                        </li>
                        <li class="col">
                          <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover" href="#!">
                            <i class="icon-screen-smartphone"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- End Figure List -->
                    </figure>
                    <!-- End Figure -->
                  </div>
                </div>
                <!-- End User Contacts -->

                <!-- Pagination -->
                <nav class="text-center" aria-label="Page Navigation">
                  <ul class="list-inline">
                    <li class="list-inline-item float-sm-left">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-16" href="#!" aria-label="Previous">
                        <span aria-hidden="true">
                          <i class="fa fa-angle-left g-mr-5"></i> Previous
                        </span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#!">1</a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14" href="#!">2</a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#!">3</a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                      <a class="g-pa-7-14">...</a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#!">80</a>
                    </li>
                    <li class="list-inline-item float-sm-right">
                      <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-16" href="#!" aria-label="Next">
                        <span aria-hidden="true">
                          Next <i class="fa fa-angle-right g-ml-5"></i>
                        </span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- End Pagination -->
          </div>
<!-- END PART FOLLOW -->

          <!-- End Profile Content -->
        </div>
      </div>
    </section>

    <!-- Footer -->
     <div class="shortcode-html">
            <!-- Footer -->
            <footer class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 text-center g-pt-60 g-pb-40">
              <!-- Footer Content -->
              <div class="container">
                <a class="d-block g-width-200 g-opacity-0_5 mx-auto g-mb-30" href="../index.html">
                  <img class="img-fluid" src="web/assets/img/logo.png" alt="Logo">
                </a>

                <ul class="list-inline g-mb-20">
                  <li class="list-inline-item g-mx-5">
                    <a class="u-icon-v2 u-icon-size--sm g-font-size-16 g-color-white-opacity-0_8 g-color-white--hover g-bg-primary--hover g-brd-white-opacity-0_2 g-brd-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-5">
                    <a class="u-icon-v2 u-icon-size--sm g-font-size-16 g-color-white-opacity-0_8 g-color-white--hover g-bg-primary--hover g-brd-white-opacity-0_2 g-brd-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-pinterest-p"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-5">
                    <a class="u-icon-v2 u-icon-size--sm g-font-size-16 g-color-white-opacity-0_8 g-color-white--hover g-bg-primary--hover g-brd-white-opacity-0_2 g-brd-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-5">
                    <a class="u-icon-v2 u-icon-size--sm g-font-size-16 g-color-white-opacity-0_8 g-color-white--hover g-bg-primary--hover g-brd-white-opacity-0_2 g-brd-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>

                <div class="g-width-70x--md mx-auto">
                  <p class="mb-0">Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi facilisis lobortis. Praesent malesuada facilisis maximus. Donec sed lobortis tortor.</p>
                </div>
              </div>
              <!-- End Footer Content -->
              <hr class="g-brd-white-opacity-0_2 g-my-40">
              <!-- Copyright -->
              <div class="container">
                <small class="g-font-size-default">2018 All right reserved. Unify Development by
                  <a class="g-color-white" href="#!">Htmlstream</a>
                </small>
              </div>
              <!-- End Copyright -->
            </footer>
            <!-- End Footer -->
          </div>
    <!-- End Footer -->

    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="web/assets/js/choiseJS.js"></script>
  <script src="web/assets/vendor/jquery/jquery.min.js"></script>
  <script src="web/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="web/assets/vendor/popper.min.js"></script>
  <script src="web/assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="web/assets/vendor/appear.js"></script>
  <script src="web/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="web/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script  src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>

  <!-- JS Unify -->
  <script src="web/assets/js/hs.core.js"></script>
  <script src="web/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="web/assets/js/components/hs.header.js"></script>
  <script src="web/assets/js/components/hs.tabs.js"></script>
  <script src="web/assets/js/components/hs.progress-bar.js"></script>
  <script src="web/assets/js/components/hs.scrollbar.js"></script>
  <script src="web/assets/js/components/hs.go-to.js"></script>
  <script  src="../../assets/js/components/hs.popup.js"></script>


  <!-- JS Customization -->
  <script src="web/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox', {
          transitionEffect: false
        });
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });

        // initialization of horizontal progress bars
        setTimeout(function () { // important in this case
          var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
            direction: 'horizontal',
            indicatorSelector: '.js-hr-progress-bar-indicator'
          });
        }, 1);
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>

</body>

</html>
