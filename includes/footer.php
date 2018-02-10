


  <!-- JS Global Compulsory -->
  <script src="../web/assets/vendor/jquery/jquery.min.js"></script>
  <script src="../web/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="../web/assets/vendor/popper.min.js"></script>
  <script src="../web/assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="../web/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

  <!-- JS Unify -->
  <script src="../web/assets/js/hs.core.js"></script>
  <script src="../web/assets/js/components/hs.header.js"></script>
  <script src="../web/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="../web/assets/js/components/hs.tabs.js"></script>
  <script src="../web/assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="../web/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

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
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>
