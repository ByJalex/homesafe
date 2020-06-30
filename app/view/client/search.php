<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': compra en línea de productos tecnológicos y más');
?>

<div id="search_s">
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
                        <div v-for="item in products">
                            <article class="card card-product-list">
                                <div class="row no-gutters">
                                    <aside class="col-md-3">
                                        <a href="#" class="img-wrap"><img src="../../../public/images/Products/84850.jpg"></a>
                                    </aside> <!-- col.// -->
                                    <div class="col-md-6">
                                        <div class="info-main">
                                            <a href="#" class="h5 title">{{item.nombre_p}}</a>
                                        </div> <!-- rating-wrap.// -->

                                        <p> {{item.descripcion_p}} </p>
                                    </div> <!-- info-main.// -->
                                </div> <!-- col.// -->
                                <aside class="col-sm-3">
                                    <div class="info-aside">
                                        <div class="price-wrap">
                                            <span class="price h5"> ${{item.precio_p}} </span>
                                        </div> <!-- info-price-detail // -->
                                        <br>
                                        <p>
                                            <a href="product.php" class="btn btn-primary btn-block"> Ver producto </a>
                                        </p>
                                    </div> <!-- info-aside.// -->
                                </aside> <!-- col.// -->
                        </div> <!-- row.// -->
                        </article>
                    </div>

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
</div>

<script src="<?php echo RUTA_PADRE ?>app/core/vue/client/search.js"></script>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>