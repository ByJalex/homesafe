<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Iniciar sesión';
$header = template::header($title);
?>

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Categorias</h2>
        <nav>
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nombre de la categoria</li>
            </ol>
        </nav>
    </div> <!-- container //  -->
</section>

<div class="container" id="category_home">
    <div class="row">
        
        <!--Inicio de la tarjeta-->
            <div class="col-md-4" v-for="item in categories">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <a href="product.php" class="img-wrap"> <img :src="item.imagen_c">
                                    <a class="btn-overlay" href="#"><i class='bx bx-search'></i> Vista rápida</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="text-center">
                                <div class="pt-3">
                                    <h5 class="">{{item.categoria_p}}</h5>
                                </div>
                                <div class="p-3">
                                    <a :href="'categories?c='+ item.categoria_p" class="btn btn-block btn-primary">Ver categoria</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->
        <!--Fin de la tarjeta-->

    </div>
</div>

<script src="app/core/vue/client/category_home.js"></script>
<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>