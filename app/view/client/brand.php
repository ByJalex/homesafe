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
                    <div class="col-md-4" v-for="item in allbrand">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <a href="product.php" class="img-wrap"> <img :src="item.imagen">
                                    <a class="btn-overlay" href="#"><i class='bx bx-search'></i> Vista rápida</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">{{item.nombre_p}}</a>
                                    <small>{{item.nombre_m}}</small>
                                    <div class="price-wrap mt-2">
                                        <span class="price">${{item.precio_p}}</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-light">Ver producto</a>
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