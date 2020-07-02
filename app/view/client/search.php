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
            <div v-if="loaderSearch" class="loader text-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: 130px;background:#fff;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <path fill="none" stroke="#7d7c7c" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                        <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="3.125s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                    </path>
                </svg>
            </div>
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
                                <button @click="add(item.id_producto, 1, item.imagen,item.nombre_p, parseFloat(item.precio_p))" :href="'product?p='+ item.identificador + '&k=' + item.id_producto" class="btn btn-light mt-1"> Añadir al carrito </button>
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