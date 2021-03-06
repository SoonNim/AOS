<?php include "protection.php";?>

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
  <link  rel="stylesheet" href=".web/assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">

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
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a href="index.html" class="navbar-brand">
              <img src="web/assets/img/logo-8.png" alt="Image Description">
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                <!-- Intro -->
                <li class="hs-has-mega-menu nav-item  g-mx-10--lg g-mx-15--xl ">
                  <a href="page-pint.php" class="nav-link g-py-7 g-px-0">Home</a>
                </li>
                <!-- End Intro -->
              </ul>
            </div>
            <!-- End Navigation -->

            <!--  Button sign out -->
            <div class="d-inline-block g-hidden-xs-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
              <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="includes/model/deconnexion.php">Se deconnecter</a>
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
            <i class="fa fa-home"></i>
            <a class="u-link-v5 g-color-main g-color-primary--hover" href="page-pint.php">Home</a>
            <i class="fa fa-angle-right g-ml-7"></i>
          </li>
          <li class="list-inline-item g-color-primary">
            <i class="fa fa-user"></i>
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
                <?php  echo  '<img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                         src="upload/'.$_SESSION['photo'].'" alt="Image Description">'; ?>
              </figure>



              <!-- User Info -->
              <span class="g-pos-abs g-top-20 g-left-0">
                  <a class="btn btn-sm u-btn-primary rounded-0" href="#!">
                    <?php   echo($_SESSION['nom']." ".$_SESSION['prenom']); ?>
                </a>
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
              <a href="?page_no=1" class="list-group-item list-group-item-action justify-content-between" id="choiseReview">
                <span><i class="icon-heart g-pos-rel g-top-1 g-mr-8"></i> Publications</span>
              </a>
              <!-- End Reviews -->

              <!-- Settings -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between" id="choiseSetting">
                <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i> Paramètres</span>
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
            <?php
            if(!empty($update)){
              echo $update;
            }
             ?>
              <div class="col-md-12 g-mb-30 g-mb-0--md">
                <div class="g-bg-blue g-color-white g-pa-25">
                  <header class="d-flex text-uppercase g-mb-40">
                    <i class="icon-people align-self-center display-4 g-mr-20"></i>

                    <div class="g-line-height-1">
                      <h4 class="h5">Publier une photo</h4>
                    <form class="g-py-15" method="post" action="includes/model/upload.php" enctype="multipart/form-data">
                      <input type="file" name="myimg" id="myimg">
                      <br/>
                        <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-20" type = "upload" id="upload" name="uplaod" value="upload">Publier</button>
                    </form>
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
                  <?php include 'includes/user/user-lastImg.php' ?>

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
          <?php include 'includes/model/user-myAll.php';
          // avec pagination?>
        </div>
<!-- END PART PUBLISH -->

<!-- PART SETTING -->
          <div class="col-lg-9" id="hereChoiseSetting" style="display:none">
          <?php include "includes/user/user-setting.php" ?>
          </div>
<!-- END PART SETTING -->

<!-- PART FRIENDS -->
          <div class="col-lg-9" id="hereChoiseFriends" style="display:none">
              <header class="text-center mb-4">
                <h3 class="h3 g-color-darkgrey g-font-weight-600">NB Abonné(s)</h3>
              </header>
              <div class="row">
             <?php include "includes/user/user-follower.php";
             // avec pagination?>
           </div>
          </div>
<!-- END PART FRIENDS -->

<!-- PART FOLLOW -->
          <div class="col-lg-9" id="hereChoiseFollow" style="display:none">
            <header class="text-center mb-4">
              <h3 class="h3 g-color-darkgrey g-font-weight-600">NB Abonnement(s)</h3>
            </header>
            <div class="row g-mb-40">
                <?php  include "includes/user/user-follow.php";
                //avec paginiation?>
              </div>
          </div>
<!-- END PART FOLLOW -->

          <!-- End Profile Content -->
        </div>
      </div>
    </section>

    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- jQuery UI Helpers -->
  <script  src="web/assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
  <script  src="web/assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>

  <!-- jQuery UI Widgets -->
  <script  src="web/assets/vendor/jquery-ui/ui/widgets/autocomplete.js"></script>

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
  <script  src="web/assets/js/components/hs.autocomplete.js"></script>



  <!-- JS Customization -->
  <script src="web/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of autocomplet
        $.HSCore.components.HSAutocomplete.init('#autocomplete2');

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
