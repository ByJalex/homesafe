<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Marcas';
$header = template::header($title);
?>

<div id="brand_c">
    <section class="section-pagetop bg">
        <div class="container">
            <h2 class="title-page">Marcas</h2>
            <nav>
                <ol class="breadcrumb text-white">
                    <li class="breadcrumb-item"><a href="<?php echo RUTA_PADRE ?>home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{urlParameter}}</li>
                </ol>
            </nav>
        </div> <!-- container //  -->
    </section>

    <section class="section-content padding-y">
        <div class="container">

            <div class="row">

                <main class="col-md-12">

                    <header class="border-bottom mb-4 pb-3">
                        <div class="form-inline">
                            <span class="mr-md-auto">{{counter}} artículos encontrados </span>
                            <select class="mr-2 form-control">
                                <option>Todos</option>
                                <option>Últimos artículos</option>
                                <option>Lo mas barato</option>
                            </select>
                            <div class="btn-group">
                                <a href="categories" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="" data-original-title="Grid view">
                                    <i class='bx bxs-grid-alt'></i></a>
                            </div>
                        </div>
                    </header><!-- sect-heading -->
                    <div class="row">
                        <!-- inicio de la card// -->
                        <div class="loader col-lg-12 text-center m-5" v-if="loaderProduct">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <path fill="none" stroke="#7d7c7c" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                                    <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="3.125s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                                </path>
                            </svg>
                        </div>
                        <div class="col-md-4" v-for="item in allbrand">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">
                                    <a href="product.php" class="img-wrap"> <img :src="item.imagen">
                                        <a class="btn-overlay" :href="'product?p='+ item.identificador + '&k=' + item.id_producto"><i class='bx bx-search'></i> Vista rápida</a>
                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="fix-height">
                                        <a :href="'product?p='+ item.identificador + '&k=' + item.id_producto" class="title">{{item.nombre_p}}</a>
                                        <small>{{item.nombre_m}}</small>
                                        <div class="price-wrap mt-2">
                                            <span class="price">${{item.precio_p}}</span>
                                        </div> <!-- price-wrap.// -->
                                    </div>
                                    <a :href="'product?p='+ item.identificador + '&k=' + item.id_producto" class="btn btn-block btn-light">Ver producto</a>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                        <!-- Fin de la card -->

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


<script src="app/core/vue/client/brand.js"></script>



<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>