<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': Mi lista de deseos');
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
            $account = template::profile(3);
            ?>
            <main class="col-md-9">

                <article class="card mb-3">
                    <div class="card-body">

                        <!--Componente para iterar-->
                        <article class="card card-product-list">
                            <div class="card-body">
                                <div class="row">
                                    <aside class="col-sm-4">
                                        <a href="#" class="img-wrap"><img src="../../../public/images/Products/84850.jpg"></a>
                                    </aside> <!-- col.// -->
                                    <div class="col-sm-8">
                                        <a href="#" class="btn-link float-right"><i class='bx bxs-heart'></i></a>
                                        <a href="#" class="title mt-2 h5">Google Home</a>
                                        <div class="d-flex mb-3">
                                            <div class="price-wrap mr-4">
                                                <span class="price h5">$299.00</span>
                                            </div> <!-- price-dewrap // -->

                                            <div class="rating-wrap">
                                                <ul class="rating-stars">
                                                    <li class="">
                                                        <i class='bx bxs-star text-warning'></i>
                                                        <i class='bx bxs-star text-warning'></i>
                                                        <i class='bx bxs-star text-warning'></i>
                                                        <i class='bx bxs-star text-warning'></i>
                                                        <i class='bx bxs-star text-warning'></i>
                                                    </li>
                                                </ul>
                                                <small class="label-rating text-muted">5/5</small>
                                            </div> <!-- rating-wrap.// -->
                                        </div>

                                        <ul class="list-bullet">
                                            <li>Google Home, es un altavoz inteligente desarrollado por Google. ... Google Home permite a los usuarios utilizar comando de voz para interactuar con servicios del asistente personal de Google, llamado Google Assistant.</li>
                                        </ul>

                                        <div class="form-row">
                                            <div class="form-group col-md flex-grow-0">
                                                <div class="input-group input-spinner">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-light" type="button" id="button-plus"> - </button>
                                                    </div>
                                                    <input type="text" class="form-control" value="1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-light" type="button" id="button-minus"> + </button>
                                                    </div>
                                                </div> <!-- input-spinner.// -->
                                            </div> <!-- col.// -->
                                            <div class="form-group col-md">
                                                <a href="#" class="btn btn-primary"> <span class="text">Añadir al carro</span><i class='bx bx-cart-alt' ></i> </a>
                                            </div> <!-- col.// -->
                                        </div> <!-- row.// -->
                                    </div> <!-- col.// -->
                                </div> <!-- row.// -->
                            </div> <!-- card-body .// -->
                        </article>


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