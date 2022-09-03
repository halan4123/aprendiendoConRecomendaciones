    <!--
    ========================
    HEADER
    =======================
    -->
    <?php require 'header.php'; ?>

    <!--
    ========================
    CAROUSEL
    =======================
    -->

    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/slider_1.png" class="d-block w-100" alt="slide_1">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slider_2.png" class="d-block w-100" alt="slide_2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!--
    ========================
    INTRO
    =======================
    -->
    <section class="container-fluid pt-5 pb-5">
        <div class=" text-center" id="intro">
            <h1 class="p-3 fs-2">
                <!--border-top border-3-->
                "Un idioma diferente es una visión diferente de la vida" <br>
                <span class="text-primary">Federico Fellini</span>
            </h1>
            <p class="p-3 fs-4"><span class="text-primary">Aprendiendo Español</span> es la pagina web donde te ayudamos a encontrar recomendaciones para tu aprendizaje como videos, series, peliculas, entre muchas cosas mas.</p>

        </div>
    </section>

    <!--
    ========================
    RECOMENDACIONES
    =======================
    -->
    <section id="reco" class="container-fluid pt-5 pb-5 section-background">

        <div class="text-center " id="intro">
            <h1 class="pb-5 fs-2 text-white">
                Nuestras Recomendaciones
            </h1>
        </div>

        <section class="conteiner-fluid">

            <div class="row w-75 mx-auto categoria-fila text-center">

                <div class="col-lg-4 col-md-12 col-sm-12 d-flex my-5 icono-warp">
                    <a href="youtube.php" class="links">
                        <div class="row ">
                            <div class="col">
                                <img src="assets/img/cate-1.jpg" alt="Peliculas" width="180" height="160">
                                <h3 class="fs-5 mt-4 px-4 pb-1">Peliculas</h3>
                                <p class="px-4">Mejora tu comprensión auditiva escuchando material en español.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 d-flex my-5 icono-warp">
                    <a href="youtube.php?pagina=1" class="links">
                        <div class="row ">
                            <div class="col">
                                <img src="assets/img/cate-2.jpg" alt="Youtube" width="180" height="160">
                                <h3 class="fs-5 mt-4 px-4 pb-1">Canales De Youtube</h3>
                                <p class="px-4">Mejora tu comprensión escuchando material en español.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 d-flex my-5 icono-warp">
                    <a href="youtube.php" class="links">
                        <div class="row ">
                            <div class="col">
                                <img src="assets/img/cate-3.jpg" alt="Musica" width="180" height="160">
                                <h3 class="fs-5 mt-4 px-4 pb-1">Música</h3>
                                <p class="px-4">Mejora tu comprensión auditiva escuchando material en español.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 d-flex my-5 icono-warp">
                    <a href="youtube.php" class="links">
                        <div class="row ">
                            <div class="col">
                                <img src="assets/img/cate-4.jpg" alt="series" width="180" height="160">
                                <h3 class="fs-5 mt-4 px-4 pb-1">Series</h3>
                                <p class="px-4">Mejora tu comprension auditiva escuchando material en español.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 d-flex my-5 icono-warp">
                    <a href="youtube.php" class="links">
                        <div class="row ">
                            <div class="col">
                                <img src="assets/img/cate-5.jpg" alt="conversacion" width="180" height="160">
                                <h3 class="fs-5 mt-4 px-4 pb-1">Conversación</h3>
                                <p class="px-4">Mejora tu comprension auditiva escuchando material en español.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 d-flex my-5 icono-warp">
                    <a href="youtube.php" class="links">
                        <div class="row ">
                            <div class="col">
                                <img src="assets/img/cate-6.jpg" alt="podcast" width="180" height="160">
                                <h3 class="fs-5 mt-4 px-4 pb-1">Podcast</h3>
                                <p class="px-4">Mejora tu comprension auditiva escuchando material en español.</p>
                            </div>
                        </div>
                    </a>
                </div>


            </div>

        </section>

    </section>

    <!--
    ========================
    FOOTER
    =======================
    -->
    <?php require 'footer.php'; ?>