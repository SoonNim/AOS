<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>PintAOS</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="web/assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="web/assets/vendor/animate.css">
  <link rel="stylesheet" href="web/assets/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="web/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="web/assets/vendor/hamburgers/hamburgers.min.css">
  <link  rel="stylesheet" href="web/assets/vendor/custombox/custombox.min.css">

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
                <li class="nav-item active g-mx-10--lg g-mx-15--xl">
                  <a href="index.html" class="nav-link g-py-7 g-px-0">Home</a>
                </li>
                <!-- End Intro -->

                <!-- Home -->
                <li class="hs-has-mega-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut" data-max-width="60%" data-position="left">
                  <a id="mega-menu-home" class="nav-link g-py-7 g-px-0" href="page-user.php" aria-haspopup="true" aria-expanded="false">Mon profil</a>
                </li>
                <!-- End Home -->
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

    <!-- Breadcrumbs -->
    <section class="g-bg-gray-light-v5 g-py-10">
      <div class="container">
        <ul class="u-list-inline">
          <li class="list-inline-item g-mr-7 g-color-primary">
            <i class="fa fa-home"></i>
            <a href="#!">Home</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- Blog Masonry Blocks -->
    <div class="container-fluid g-px-30 g-py-100">
      <div class="masonry-grid row">
        <div class="masonry-grid-sizer col-sm-1"></div>

        <?php include "includes/model/pint.php" ?>

      </div>
    </div>
    <!-- End Blog Masonry Blocks -->

    <!-- Pagination -->
    <div class="container g-pb-70">
      <nav class="text-center" aria-label="Page Navigation">
        <ul class="list-inline">
          <li class="list-inline-item float-left">
            <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="#!" aria-label="Previous">
              <span aria-hidden="true">
                <i class="fa fa-angle-left g-mr-5"></i> Previous
              </span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="list-inline-item g-hidden-sm-down">
            <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14" href="#!">1</a>
          </li>
          <li class="list-inline-item g-hidden-sm-down">
            <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#!">2</a>
          </li>
          <li class="list-inline-item float-right">
            <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="#!" aria-label="Next">
              <span aria-hidden="true">
                Next <i class="fa fa-angle-right g-ml-5"></i>
              </span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- End Pagination -->

    <!-- Copyright Footer -->
    <?php include "includes/foot.php"?>
    <!-- End Copyright Footer -->
    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="web/assets/vendor/jquery/jquery.min.js"></script>
  <script src="web/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="web/assets/vendor/popper.min.js"></script>
  <script src="web/assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="web/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="web/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="web/assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
  <script src="web/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script  src="web/assets/vendor/custombox/custombox.min.js"></script>


  <!-- JS Unify -->
  <script src="web/assets/js/hs.core.js"></script>
  <script src="web/assets/js/components/hs.header.js"></script>
  <script src="web/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="web/assets/js/components/hs.tabs.js"></script>
  <script src="web/assets/js/components/hs.popup.js"></script>
  <script src="web/assets/js/components/hs.go-to.js"></script>
  <script  src="web/assets/js/components/hs.modal-window.js"></script>

  <!-- JS Customization -->
  <script src="web/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
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

        // initialization of masonry
        $('.masonry-grid').imagesLoaded().then(function () {
          $('.masonry-grid').masonry({
            columnWidth: '.masonry-grid-sizer',
            itemSelector: '.masonry-grid-item',
            percentPosition: true
          });
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>







</body>

</html>
