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
        <div class="loader col-lg-12 text-center m-5" v-if="loaderProduct">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <path fill="none" stroke="#7d7c7c" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                    <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="3.125s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                </path>
            </svg>
        </div>
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