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
  <link rel="stylesheet" href="web/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="web/assets/vendor/animate.css">
  <link rel="stylesheet" href="web/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="web/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="web/assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="web/assets/css/unify-core.css">
  <link rel="stylesheet" href="web/assets/css/unify-components.css">
  <link rel="stylesheet" href="web/assets/css/unify-globals.css">

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

            <!--  Button sign out -->
            <div class="d-inline-block g-hidden-xs-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
              <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="includes/deconnexion.php">Se deconnecter</a>
              <!--  End button sign out -->
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->

    <!-- Breadcrumb -->
    <section class="g-my-9">
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
                <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> Profil</span>
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
                <span><i class="icon-heart g-pos-rel g-top-1 g-mr-8"></i> Publications</span>
              </a>
              <!-- End Reviews -->

              <!-- Settings -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between" id="choiseSetting">
                <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i> Paramètre</span>
              </a>
              <!-- End Settings -->
            </div>
            <!-- End Sidebar Navigation -->

          </div>
          <!-- End Profile Sidebar -->

          <!-- Profile Content -->

<!-- PART MAIN -->
        <div class="col-lg-9" id="hereChoiseMain" style="display:block">
          <div class="row g-mb-10">
              <div class="col-md-12 g-mb-30 g-mb-0--md">
                <div class="g-bg-blue g-color-white g-pa-25">
                  <header class="d-flex text-uppercase g-mb-40">
                    <i class="icon-people align-self-center display-4 g-mr-20"></i>

                    <div class="g-line-height-1">
                      <h4 class="h5">Overal Visits</h4>
                    </div>
                  </header>
                </div>
              </div>
            </div>
            <!-- End Overall Statistics -->

            <!-- Projects & News Feeds Panels -->
            <div class="row g-mb-10">
              <div class="col-lg-12 g-mb-10 g-mb-0--lg">
                <!-- Notifications Panel -->
                <div class="card border-0">
                  <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5
                       border-0 g-mb-10">
                    <h3 class="h6 mb-0">
                        <i class="icon-list g-pos-rel g-top-1 g-mr-5"></i> Dernières publications
                      </h3>
                  </div>
                  <?php include 'includes/lastImg.php' ?>
                </div>
                <!-- End Notifications Panel -->
              </div>
            </div>
            <!-- End Projects & News Feeds Panels -->
        </div>
<!-- END PART MAIN -->

<!-- PART PUBLISH -->
        <div class="col-lg-9" id="hereChoiseReview" style="display:none">
            <header class="text-center mb-4">
              <h3 class="h3 g-color-darkgrey g-font-weight-600">Mes publications</h3>
            </header>
          <?php include 'includes/myallimg.php'; ?>
        </div>
<!-- END PART PUBLISH -->

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
                   role="tab">Edit Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--2"
                   role="tab">Security Settings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--3"
                   role="tab">Payment Options</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--4"
                   role="tab">Notification Settings</a>
              </li>
            </ul>
            <!-- End Nav tabs -->

            <!-- Tab panes -->
            <div id="nav-1-1-default-hor-left-underline" class="tab-content">
              <!-- Edit Profile -->
              <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel">
                <h2 class="h4 g-font-weight-300">Manage your Name, ID and Email Addresses</h2>
                <p>Below are name, email addresse, contacts and more on file for your account.</p>

                <ul class="list-unstyled g-mb-30">
                  <!-- Name -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Name</strong>
                      <span class="align-top">John Doe</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Name -->

                  <!-- Your ID -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Your ID</strong>
                      <span class="align-top">FKJ-032440</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Your ID -->

                  <!-- Company Name -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Company name</strong>
                      <span class="align-top">Htmlstream</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Company Name -->

                  <!-- Position -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Position</strong>
                      <span class="align-top">Project Manager</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Position -->

                  <!-- Primary Email Address -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Primary email address</strong>
                      <span class="align-top">john.doe@htmlstream.com</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Primary Email Address -->

                  <!-- Linked Account -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Linked account</strong>
                      <span class="align-top">Facebook</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Linked Account -->

                  <!-- Website -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Website</strong>
                      <span class="align-top">https://htmlstream.com</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Website -->

                  <!-- Phone Number -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Phone number</strong>
                      <span class="align-top">(+123) 456 7890</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Phone Number -->

                  <!-- Office Number -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Office number</strong>
                      <span class="align-top">(+123) 456 7891</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Office Number -->

                  <!-- Address -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Address</strong>
                      <span class="align-top">795 Folsom Ave, Suite 600, San Francisco CA, US </span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                  </li>
                  <!-- End Address -->
                </ul>

                <div class="text-sm-right">
                  <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
                  <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
                </div>
              </div>
              <!-- End Edit Profile -->

              <!-- Security Settings -->
              <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--2" role="tabpanel">
                <h2 class="h4 g-font-weight-300">Security Settings</h2>
                <p class="g-mb-25">Reset your password, change verifications and so on.</p>

                <form>
                  <!-- Current Password -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Current password</label>
                    <div class="col-sm-9">
                      <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password" placeholder="Current password">
                        <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                          <i class="icon-lock"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Current Password -->

                  <!-- New Password -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">New password</label>
                    <div class="col-sm-9">
                      <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password" placeholder="New password">
                        <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                          <i class="icon-lock"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End New Password -->

                  <!-- Verify Password -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Verify password</label>
                    <div class="col-sm-9">
                      <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password" placeholder="Verify password">
                        <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                          <i class="icon-lock"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Verify Password -->

                  <!-- Login Verification -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Login verification</label>
                    <div class="col-sm-9">
                      <label class="form-check-inline u-check g-pl-25">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                        <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <!-- <i class="fa" data-check-icon='&#xf00c'> </i> -->
                        </div>
                        Verify login requests
                      </label>
                      <small class="d-block text-muted">You need to add a phone to your profile account to enable this feature.</small>
                    </div>
                  </div>
                  <!-- End Login Verification -->

                  <!-- Password Reset -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Password reset</label>
                    <div class="col-sm-9">
                      <label class="form-check-inline u-check g-pl-25">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                        <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                          <!-- <i class="fa" data-check-icon="&#xf00c"></i> -->
                        </div>
                        Require personal information to reset my password
                      </label>
                      <small class="d-block text-muted">When you check this box, you will be required to verify additional information before you can request a password reset with just your email address.</small>
                    </div>
                  </div>
                  <!-- End Password Reset -->

                  <!-- Save Password -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">Save password</label>
                    <div class="col-sm-9">
                      <label class="form-check-inline u-check mx-0">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="savePassword" type="checkbox">
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </label>
                      <small class="d-block text-muted">When you check this box, you will be saved automatically login to your profile account. Also, you will be always logged in all our services.</small>
                    </div>
                  </div>
                  <!-- End Save Password -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <div class="text-sm-right">
                    <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
                    <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
                  </div>
                </form>
              </div>
              <!-- End Security Settings -->

              <!-- Payment Options -->
              <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--3" role="tabpanel">
                <h2 class="h4 g-font-weight-300">Manage your Payment Settings</h2>
                <p class="g-mb-25">Below are the payment options for your account.</p>

                <form>
                  <!-- Payment Options -->
                  <div class="row">
                    <!-- Visa Card -->
                    <div class="col-md-3">
                      <label class="u-check w-100 g-mb-25">
                        <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Visa card</strong>
                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments" checked="">

                        <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                          <div class="media g-pa-12">
                            <div class="media-body align-self-center g-color-blue">
                              <i class="fa fa-cc-visa g-font-size-30 align-self-center mx-auto"></i>
                            </div>

                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                              <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <!-- End Visa Card -->

                    <!-- Master Card -->
                    <div class="col-md-3">
                      <label class="u-check w-100 g-mb-25">
                        <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Master card</strong>
                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments">

                        <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                          <div class="media g-pa-12">
                            <div class="media-body align-self-center g-color-lightred">
                              <i class="fa fa-cc-mastercard g-font-size-30 align-self-center mx-auto"></i>
                            </div>

                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                              <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <!-- End Master Card -->

                    <!-- Amazon Payments -->
                    <div class="col-md-3">
                      <label class="u-check w-100 g-mb-25">
                        <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Amazon payments</strong>
                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments">

                        <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                          <div class="media g-pa-12">
                            <div class="media-body align-self-center g-color-orange">
                              <i class="fa fa-amazon g-font-size-30 align-self-center mx-auto"></i>
                            </div>

                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                              <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <!-- End Amazon Payments -->

                    <!-- Paypal -->
                    <div class="col-md-3">
                      <label class="u-check w-100 g-mb-25">
                        <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Paypal</strong>
                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments">

                        <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                          <div class="media g-pa-12">
                            <div class="media-body align-self-center g-color-darkblue">
                              <i class="fa fa-paypal g-font-size-30 align-self-center mx-auto"></i>
                            </div>

                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                              <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <!-- End Paypal -->
                  </div>
                  <!-- End Payment Options -->

                  <!-- Card Name and Number -->
                  <div class="row">
                    <!-- Card Name -->
                    <div class="col-md-6">
                      <div class="form-group g-mb-20">
                        <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Name on card</label>
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" placeholder="John Doe">
                          <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                            <i class="icon-user"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Card Name -->

                    <!-- Card Number -->
                    <div class="col-md-6">
                      <div class="form-group g-mb-20">
                        <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Card number</label>
                        <div class="input-group g-brd-primary--focus">
                          <input id="inputGroup1_3" class="form-control form-control-md g-brd-right-none rounded-0 g-py-13" type="text" placeholder="XXXX-XXXX-XXXX-XXXX" data-mask="9999-9999-9999-9999">
                          <div class="input-group-addon d-flex align-items-center g-color-gray-dark-v5 rounded-0">
                            <i class="icon-credit-card"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Card Number -->
                  </div>
                  <!-- End Card Name and Number -->

                  <!-- Card Expiration Dates and CVV Code -->
                  <div class="row">
                    <!-- Expiration Month -->
                    <div class="col-md-4">
                      <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Expiration month</label>
                      <select class="js-custom-select u-select-v1 g-brd-gray-light-v2 g-color-gray-dark-v5 w-100 g-pt-11 g-pb-10" data-placeholder="Month" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                        <option selected="">Month</option>
                        <option value="1">January</option>
                        <option value="1">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </div>
                    <!-- End Expiration Month -->

                    <!-- Expiration Year -->
                    <div class="col-md-4">
                      <div class="form-group g-mb-20">
                        <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Expiration year</label>
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" placeholder="2021">
                          <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                            <i class="icon-calendar"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Expiration Year -->

                    <!-- CVV Code -->
                    <div class="col-md-4">
                      <div class="form-group g-mb-20">
                        <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">CVV code</label>
                        <div class="input-group g-brd-primary--focus">
                          <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" placeholder="2021">
                          <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                            <i class="icon-lock"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End CVV Code -->
                  </div>
                  <!-- End Card Expiration Dates and CVV Code -->

                  <!-- Billing Address -->
                  <div class="form-group">
                    <label class="d-block g-color-gray-dark-v2 g-font-weight-700 1text-sm-right g-mb-10">Billing address</label>
                    <label class="u-check g-pl-25 mb-0">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <!-- <i class="fa" data-check-icon="&#xf00c"></i> -->
                      </div>
                      Same as shipping address?
                    </label>
                  </div>
                  <!-- End Billing Address -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <div class="text-sm-right">
                    <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
                    <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
                  </div>
                </form>
              </div>
              <!-- End Payment Options -->

              <!-- Notification Settings -->
              <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--4" role="tabpanel">
                <h2 class="h4 g-font-weight-300">Manage your Notifications</h2>
                <p class="g-mb-25">Below are the notifications you may manage.</p>

                <form>
                  <!-- Email Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Email notification</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="emailNotification" type="checkbox" checked>
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Email Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-20">

                  <!-- Comments Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Send me email notification when a user comments on my blog</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="commentNotification" type="checkbox">
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Comments Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-20">

                  <!-- Update Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Send me email notification for the latest update</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="updateNotification" type="checkbox" checked>
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Update Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <!-- Message Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Send me email notification when a user sends me message</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="messageNotification" type="checkbox" checked>
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Message Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <!-- Newsletter Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Receive our monthly newsletter</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="newsletterNotification" type="checkbox">
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Newsletter Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <div class="text-sm-right">
                    <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
                    <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
                  </div>
                </form>
              </div>
              <!-- End Notification Settings -->
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

  <!--  FOOTER -->

  <!-- Copyright Footer -->
  <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-9">
  <div class="container">
   <div class="row">
     <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
       <div class="d-lg-flex">
         <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2018 © All Rights Reserved.</small>
         <ul class="u-list-inline">
           <li class="list-inline-item">
             <span>|</span>
           </li>
           <li class="list-inline-item">
             <a class="g-color-white-opacity-0_8 g-color-white--hover" href="../index.html">PintAOS</a>
           </li>
         </ul>
       </div>
     </div>
   </div>
  </div>
  </footer>
  <!-- End Copyright Footer -->

  <!--  END FOOTER -->

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
  <script src="web/assets/vendor/popper.min.js"></script>
  <script src="web/assets/vendor/jquery/jquery.min.js"></script>
  <script src="web/assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="web/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="web/assets/vendor/appear.js"></script>
  <script src="web/assets/vendor/circles/circles.min.js"></script>
  <script src="web/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="web/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

  <!-- JS Unify -->
  <script src="web/assets/js/hs.core.js"></script>
  <script src="web/assets/js/components/hs.tabs.js"></script>
  <script src="web/assets/js/components/hs.go-to.js"></script>
  <script src="web/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="web/assets/js/components/hs.header.js"></script>
  <script src="web/assets/js/components/hs.chart-pie.js"></script>
  <script src="web/assets/js/components/hs.scrollbar.js"></script>
  <script src="web/assets/js/components/hs.progress-bar.js"></script>


  <!-- JS Customization -->
  <script src="web/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of chart pies
        var items = $.HSCore.components.HSChartPie.init('.js-pie');

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );
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
