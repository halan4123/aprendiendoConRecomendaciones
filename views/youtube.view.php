  <!--
    ========================
    HEADER
    =======================
    -->
  <?php require 'header.php'; ?>

  <section class="conteiner-fluid section-background">

    <div class="row w-75 mx-auto categoria-fila text-center">

      <div class="col-12 pt-5 pb-5">
        <h1>Youtube</h1>
      </div>

      <a href="admin/admin.youtube.php">Admin</a>

      <?php foreach ($youtube as $canal) : ?>

        <div class="col-lg-4 col-md-6 col-sm-12 d-flex p-3">

          <a href="<?= $canal['url_channel'] ?>" class="links" target="_blank">

            <div class="row ">
              <div class="col">

                <iframe width="100%" height="230" src="<?= $canal['url_video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h3 class="fs-5 mt-4 px-4 pb-1"> <?= $canal['channel_name'] ?></h3>

                <span><?= $canal['level'] ?></span>

                <p class="px-4"><?= $canal['text'] ?></p>

              </div>
            </div>
          </a>
        </div>

      <?php endforeach; ?>

      <?php require 'paginacion.php'; ?>

    </div>

  </section>



  <!--
    ========================
    FOOTER
    =======================
    -->
  <?php require 'footer.php'; ?>