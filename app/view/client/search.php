<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': compra en línea de productos tecnológicos y más');
?>

<div id="search_s">
    <section class="section-content padding-y">
        <div class="container">
            <div class="row">
                <main class="col-md-12">
                    <h4>Buscaste: <?php echo $_GET['p'] ?></h3>
                    <header class="border-bottom mb-4 pb-3">
                        <div class="form-inline">
                            <span class="mr-md-auto">{{counter}} artículos encontrados </span>
                            <div class="btn-group">
                                <a href="categories" class="btn  btn-outline-secondary" data-toggle="tooltip" title="" data-original-title="Grid view">
                                    <i class='bx bxs-grid-alt'></i></a>
                            </div>
                        </div>
                    </header><!-- sect-heading -->
                </main> <!-- col.// -->
            </div> <!-- row end.// -->

            <!--Contenido-->
            <article v-for="item in products" class="card card-product-list">
                <div class="card-body">
                    <div class="row">
                        <aside class="col-sm-3">
                            <a :href="'product?p='+ item.identificador + '&k=' + item.id_producto" class="img-wrap"><img :src="item.imagen"></a>
                        </aside> <!-- col.// -->
                        <article class="col-sm-6">
                            <a :href="'product?p='+ item.identificador + '&k=' + item.id_producto" class="title mt-2 h5">{{item.nombre_p}}</a>
                            <p>{{item.descripcion_p}}</p>

                        </article> <!-- col.// -->
                        <aside class="col-sm-3">
                            <div class="price-wrap mt-2">
                                <span class="price h5"> ${{item.precio_p}} </span>
                            </div> <!-- info-price-detail // -->

                            <p class="small text-success"> Envio gratis </p>
                            <br>
                            <p>
                                <a :href="'product?p='+ item.identificador + '&k=' + item.id_producto" class="btn btn-primary"> Ver producto </a>
                            </p>
                        </aside> <!-- col.// -->
                    </div> <!-- row.// -->
                </div> <!-- card-body .// -->
            </article>
            <!--Fin de contenido-->

        </div> <!-- container .//  -->
    </section>
</div>

<script src="<?php echo RUTA_PADRE ?>app/core/vue/client/search.js"></script>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>