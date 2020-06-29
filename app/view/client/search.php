<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': compra en línea de productos tecnológicos y más');
?>

<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <main class="col-md-12">

                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <span class="mr-md-auto">32 artículos encontrados </span>
                        <div class="btn-group">

                                <a href="categories" class="btn  btn-outline-secondary" data-toggle="tooltip" title="" data-original-title="Grid view">
                                    <i class='bx bxs-grid-alt'></i></a>
                        </div>
                    </div>
                </header><!-- sect-heading -->

                <div class="row">


                    <!--Articulo para iterar-->
                    <article class="card card-product-list">
                        <div class="row no-gutters">
                            <aside class="col-md-3">
                                <a href="#" class="img-wrap"><img src="../../../public/images/Products/84850.jpg"></a>
                            </aside> <!-- col.// -->
                            <div class="col-md-6">
                                <div class="info-main">
                                    <a href="#" class="h5 title"> Google Home </a>
                                    <div class="rating-wrap mb-3">
                                        <ul class="rating-stars">
                                            <li class="">
                                                <i class='bx bxs-star text-warning'></i>
                                                <i class='bx bxs-star text-warning'></i>
                                                <i class='bx bxs-star text-warning'></i>
                                                <i class='bx bxs-star text-warning'></i>
                                                <i class='bx bxs-star text-warning'></i>
                                            </li>
                                        </ul>
                                        <div class="label-rating">5/5</div>
                                    </div> <!-- rating-wrap.// -->

                                    <p> Google Home, es un altavoz inteligente desarrollado por Google. ... Google Home permite a los usuarios utilizar comando de voz para interactuar con servicios del asistente personal de Google, llamado Google Assistant. </p>
                                </div> <!-- info-main.// -->
                            </div> <!-- col.// -->
                            <aside class="col-sm-3">
                                <div class="info-aside">
                                    <div class="price-wrap">
                                        <span class="price h5"> $1280 </span>
                                    </div> <!-- info-price-detail // -->
                                    <br>
                                    <p>
                                        <a href="product.php" class="btn btn-primary btn-block"> Detalle </a>
                                        
                                    </p>
                                </div> <!-- info-aside.// -->
                            </aside> <!-- col.// -->
                        </div> <!-- row.// -->
                    </article>

                </div> <!-- row end.// -->


                <nav class="mt-4" aria-label="Page navigation sample">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

            </main> <!-- col.// -->

        </div>

    </div> <!-- container .//  -->
</section>


<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>