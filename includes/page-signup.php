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
  <link rel="shortcut icon" href="favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="web/assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="web/assets/vendor/animate.css">
  <link rel="stylesheet" href="web/assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="web/assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
  <link rel="stylesheet" href="web/assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
  <link rel="stylesheet" href="web/assets/vendor/hs-bg-video/hs-bg-video.css">
  <link rel="stylesheet" href="web/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="web/assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="../web/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../web/assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="../web/assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="../web/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="../web/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="../web/assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="../web/assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
  <link rel="stylesheet" href="../web/assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
  <link rel="stylesheet" href="../web/assets/vendor/animate.css">
  <link rel="stylesheet" href="../web/assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">
  <link rel="stylesheet" href="../web/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../web/assets/vendor/hamburgers/hamburgers.min.css">
  <link rel="stylesheet" href="../web/assets/vendor/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="../web/assets/vendor/slick-carousel/slick/slick.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="web/assets/css/unify-core.css">
  <link rel="stylesheet" href="web/assets/css/unify-components.css">
  <link rel="stylesheet" href="web/assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="web/assets/css/custom.css">
  <?php include 'includes/header.php'; ?>
</head>

<body>
  <main>

    <!-- Login -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall"
             data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
      <!-- Promo Block - Parallax Video -->
      <div class="dzsparallaxer--target" style="width: 100%; height: 130%;" data-forcewidth_ratio="1.77">
        <div class="js-bg-video g-pos-abs w-100 h-100 u-bg-overlay g-bg-size-cover g-bg-primary-gradient-opacity-v1--after" data-hs-bgv-type="vimeo"
             data-hs-bgv-id="167434033" data-hs-bgv-loop="1"></div>
      </div>
      <!-- End Promo Block - Parallax Video -->

      <div class="container g-pt-100 g-pb-20">
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-5 flex-md-unordered align-self-center g-mb-80">
            <div class="g-bg-white rounded g-pa-50">
              <header class="text-center mb-4">
                  <img src="web/assets/img/favicon.png" alt="Smiley face" height="50" width="50">
                <h3 class="h3 g-color-black g-font-weight-600">Bienvenue sur PintAOS !</h3>
              </header>

              <!-- Form -->
              <form class="g-py-15" method="post" action="includes/inscription.php">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 mb-4">
                    <div class="input-group">
                      <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                            <i class="icon-finance-067 u-line-icon-pro"></i>
                          </span>
                      <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15"
                             type="text" name="nom" id="nom" placeholder="DOE">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-6 mb-4">
                    <div class="input-group">
                      <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                            <i class="icon-finance-067 u-line-icon-pro"></i>
                          </span>
                      <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15"
                             type="text" name="prenom" id="prenom" placeholder="John">
                    </div>
                  </div>
                </div>

                <div class="mb-4">
                  <div class="input-group">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-communication-062 u-line-icon-pro"></i>
                        </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15"
                           type="email"  name="mail" id="mail" placeholder="johndoe@gmail.com">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-6 mb-4">
                    <div class="input-group">
                      <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                            <i class="icon-media-094 u-line-icon-pro"></i>
                          </span>
                      <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15"
                             type="text" name="login" id="login" placeholder="jhondoe">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-6 mb-4">
                    <div class="input-group">
                      <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                            <i class="icon-media-094 u-line-icon-pro"></i>
                          </span>
                      <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15"
                             type="password" name="password" id="password" placeholder="***********">
                    </div>
                  </div>
                </div>

                <div class="mb-5">
                  <button class="btn btn-md btn-block u-btn-primary g-py-13 g-px-25" type="submit" id="inscription" name="inscription" value="Inscription">S'inscrire</button>
                </div>
              </form>
              <!-- End Form -->

              <?php
              if($_GET['msg']=="alert")
              {
                include 'includes/ohSnapUser.php';
              }
              elseif($_GET['msg']=="success")
              {
                include 'includes/wellDoneUser.php';
              }
               ?>

              <footer class="text-center">
                <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Vous avez déjà un compte ?
                    <a class="g-font-weight-600" href="index.php">Se connecter</a>
                </p>
              </footer>
            </div>
          </div>

        <?php  include 'includes/notInscript.php';  ?>
        </div>

      </div>
       <!-- Copyright Footer -->
     <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-7">
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
    </section>
    <!-- End Login -->

  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="web/assets/vendor/jquery/jquery.min.js"></script>
  <script src="web/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="web/assets/vendor/popper.min.js"></script>
  <script src="web/assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="web/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="web/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="web/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="web/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
  <script src="web/assets/vendor/hs-bg-video/hs-bg-video.js"></script>
  <script src="web/assets/vendor/hs-bg-video/vendor/player.min.js"></script>

  <!-- JS Unify -->
  <script src="web/assets/js/hs.core.js"></script>
  <script src="web/assets/js/components/hs.header.js"></script>
  <script src="web/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="web/assets/js/components/hs.tabs.js"></script>
  <script src="web/assets/js/helpers/hs.bg-video.js"></script>
  <script src="web/assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="web/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of video on background
        $.HSCore.helpers.HSBgVideo.init('.js-bg-video');
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
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>







</body>

</html>
