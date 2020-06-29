<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': Mis ordenes');
?>

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Mi cuenta</h2>
    </div> <!-- container //  -->
</section>

<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <?php
            $account = template::profile(2);
            ?>
            <main class="col-md-9">
                <article class="card  mb-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Ordenes recientes</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <figure class="itemside  mb-3">
                                    <div class="aside"><img src="../../../public/images/Products/84850.jpg" class="border img-sm"></div>
                                    <figcaption class="info">
                                        <time class="text-muted"><i class='bx bx-calendar' ></i> 12.09.2019</time>
                                        <p>Orden #1789</p>
                                        <span class="text-warning">Pendiente</span>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                            <div class="col-md-6">
                                <figure class="itemside  mb-3">
                                    <div class="aside"><img src="../../../public/images/Products/84850.jpg" class="border img-sm"></div>
                                    <figcaption class="info">
                                        <time class="text-muted"><i class='bx bx-calendar' ></i> 12.09.2019</time>
                                        <p>Orden #1789</p>
                                        <span class="text-success">Completa</span>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                            <div class="col-md-6">
                                <figure class="itemside mb-3">
                                    <div class="aside"><img src="../../../public/images/Products/84850.jpg" class="border img-sm"></div>
                                    <figcaption class="info">
                                        <time class="text-muted"><i class='bx bx-calendar' ></i> 12.09.2019</time>
                                        <p>Orden #1789</p>
                                        <span class="text-success">Completa</span>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->

                        <a href="#" class="btn btn-outline-primary"> Ver todas mis ordenes </a>
                    </div> <!-- card-body .// -->
                </article> <!-- card.// -->

            </main> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->
</section>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>