<?php
include "protection.php";
$img = $_GET['img'];
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Title -->
    <title>PintAOS</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700%7CPlayfair+Display%7CRaleway%7CSpectral%7CRubik">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="web/assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="web/assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="web/assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="web/assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="web/assets/vendor/animate.css">
    <link rel="stylesheet" href="web/assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="web/assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="web/assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="web/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="web/assets/css/styles.e-commerce.css">

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
                <img src="includes/web/assets/img/logo-8.png" alt="Image Description">
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
                    <a id="mega-menu-home" class="nav-link g-py-7 g-px-0" href="page-user.php" aria-haspopup="true" aria-expanded="false">Profil</a>
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
              <a class="u-link-v5 g-color-text" href="page-pint.php">Home</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-color-primary">
              <span><?php echo($img); ?></span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Product Description -->
      <div class="container g-pt-50 g-pb-100">
        <div class="row">
          <div class="col-lg-4">
            <!-- Carousel -->
              <!-- <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after"> -->
                <img class="g-width-450 g-height-450" src= '<?php echo("upload/".$img) ?>' alt="Image Description">
              <!-- </div> -->
            <!-- End Carousel -->
          </div>

          <div class="col-lg-5">
            <!-- <div class="g-px-40--lg g-pt-70"> -->
              <!-- Product Info -->
              <div class="g-mb-30">
                <h1 class="g-font-weight-300 mb-4"><?php echo $img; ?></h1>
              </div>
              <!-- End Product Info -->

              <!-- Cart  User -->
<!-- Team Block -->
<div class="row">
  <?php include "includes/model/user-profile.php" ?>
              <!-- End Cart User -->

              <!-- Buttons -->
              <div class="row g-mx-minus-5 g-mb-20">
                <div class="col g-px-5 g-mb-10">
                  <button class="btn btn-block u-btn-outline-black g-brd-gray-dark-v5 g-brd-black--hover g-color-gray-dark-v4 g-color-white--hover g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">
                    <i class="fas fa-trash"></i>  Supprimer
                  </button>
                </div>
              </div>
              <!-- End Buttons -->

            </div>
          <!-- </div> -->
        </div>
      </div>
      <!-- End Product Description -->

      <!-- Review -->
      <?php include "includes/review.php" ?>
      <!-- End Review -->


      <a class="js-go-to u-go-to-v2" href="#!"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

    <div class="u-outer-spaces-helper"></div>

    <!-- JS Global Compulsory -->
    <script src="web/assets/vendor/jquery/jquery.min.js"></script>
    <script src="web/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="web/assets/vendor/popper.min.js"></script>
    <script src="web/assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="web/assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="web/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="web/assets/vendor/jquery.countdown.min.js"></script>
    <script src="web/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- JS Unify -->
    <script src="web/assets/js/hs.core.js"></script>
    <script src="web/assets/js/components/hs.header.js"></script>
    <script src="web/assets/js/helpers/hs.hamburgers.js"></script>
    <script src="web/assets/js/components/hs.dropdown.js"></script>
    <script src="web/assets/js/components/hs.scrollbar.js"></script>
    <script src="web/assets/js/components/hs.countdown.js"></script>
    <script src="web/assets/js/components/hs.carousel.js"></script>
    <script src="web/assets/js/components/hs.tabs.js"></script>
    <script src="web/assets/js/components/hs.count-qty.js"></script>
    <script src="web/assets/js/components/hs.go-to.js"></script>
    <script src="web/assets/js/helpers/hs.rating.js"></script>

    <!-- JS Customization -->
    <script src="web/assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu plugin
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));

        // initialization of quantity counter
        $.HSCore.components.HSCountQty.init('.js-quantity');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of rating
        $.HSCore.helpers.HSRating.init();
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
    </script>
  </body>
</html>
