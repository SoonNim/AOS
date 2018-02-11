<div class="alert alert-dismissible fade show g-bg-red g-color-white rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">
          <i class="icon-ban g-font-size-25"></i>
        </span>
        <span class="media-body align-self-center">
          <strong>Ouups!</strong> Un petit problème avec votre image !
          <?php echo($_GET['error']); ?>
        </span>
      </div>
    </div>
