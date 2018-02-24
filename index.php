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
  <link rel="shortcut icon" href="web/favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="web/assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="web/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="web/assets/vendor/animate.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="web/assets/css/unify-core.css">
  <link rel="stylesheet" href="web/assets/css/unify-components.css">
  <link rel="stylesheet" href="web/assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="web/assets/css/custom.css">

</head>

<body id="backgroundAnimation" style="background-image: url(web/assets/img/img-login.jpeg);">
  <main>
    <!-- Login -->
    <section class="g-min-height-100vh g-flex-centered">
      <div class="container g-py-100">
        <div class="row justify-content-center">
          <div class="col-sm-8 col-lg-5">
            <div class="u-shadow-v24 g-bg-white rounded g-py-40 g-px-30">
              <header class="text-center mb-4">
                  <img src="web/assets/img/favicon.png" alt="Smiley face" height="70" width="70">
                <h2 class="h2 g-color-black g-font-weight-600">Bienvenue sur PintAOS !</h2>
                <h3 class="h4 g-color-gray g-font-weight-300">Partager vos souvenirs en un clic ...</h3>
              </header>

              <!-- Form -->
              <form class="g-py-15" method="post" action="includes/model/connexion.php">
                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Identifiant :</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4
                         g-brd-primary--hover rounded g-py-15 g-px-15" type ="text" id="login" name ="login">
                </div>

                <div class="g-mb-35">
                  <div class="row justify-content-between">
                    <div class="col align-self-center">
                      <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password:</label>
                    </div>
                  </div>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4
                         g-brd-primary--hover rounded g-py-15 g-px-15 mb-3" type="password" id="inputPassword4" name="password" aria-describedby="passwordHelpInline">
                  <div class="row justify-content-between">
                    <div class="col-12 align-self-center text-center">
                        <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-150" type = "submit" id="submit" name="submit" value="Connexion">Se connecter</button>
                    </div>
                  </div>
                </div>
              </form>
              <!-- End Form -->

              <?php
              if($_GET['c']=="alert")
              {
                include 'includes/alert.php';
                $m=$_GET['msg'];
                echo '<div class="alert alert-dismissible fade show g-bg-red g-color-white rounded-0" role="alert">
                      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>

                      <div class="media">
                        <span class="d-flex g-mr-10 g-mt-5">
                          <i class="icon-ban g-font-size-25"></i>
                        </span>
                        <span class="media-body align-self-center">
                          <strong>Ouups!</strong> '.$m.'
                        </span>
                      </div>
                    </div>';
              }
               ?>

              <footer class="text-center">
                <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Vous n'avez pas de compte ?
                    <a class="g-font-weight-600" href="page-signup.php">S'inscrire</a>
                </p>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Login -->
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="web/assets/vendor/jquery/jquery.min.js"></script>
  <script src="web/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="web/assets/vendor/popper.min.js"></script>
  <script src="web/assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Unify -->
  <script src="web/assets/js/hs.core.js"></script>

  <!-- JS Customization -->
  <script src="web/assets/js/custom.js"></script>


</body>

</html>
