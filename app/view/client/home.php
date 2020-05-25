<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': compra en línea de productos tecnológicos y más');
?>

<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div class="container">

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explorar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="news">Noticias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about">Sobre nosotros</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Marcas</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Xiaomi</a>
                        <a class="dropdown-item" href="#">Samsumg</a>
                        <a class="dropdown-item" href="#">Philips</a>
                        <a class="dropdown-item" href="#">LG</a>
                        <a class="dropdown-item" href="#">Google</a>
                    </div>
                </li>
            </ul>
        </div> <!-- collapse .// -->
    </div> <!-- container .// -->
</nav>

<section class="section-main bg padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-md-3">
                <nav class="card">
                    <ul class="menu-category">
                        <li><a href="categories">Sala</a></li>
                        <li><a href="categories">Habitación</a></li>
                        <li><a href="categories">Baño</a></li>
                        <li><a href="categories">Cocina</a></li>
                        <li><a href="categories">Iluminación interior</a></li>
                        <li><a href="categories">Iluminación interior</a></li>
                        <li><a href="categories"><strong>Más categorías</strong></a></li>
                    </ul>
                </nav>
            </aside> <!-- col.// -->
            <div class="col-md-9">
                <article class="banner-wrap">
                    <img src="<?php echo RUTA_URL ?>public/images/site/banner.jpg" class="w-100 rounded">
                </article>
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- container //  -->
</section>

<section class="section-name padding-y-sm">
    <div class="container">

        <header class="section-heading">
            <a href="#" class="btn btn-outline-primary float-right">Ver todos</a>
            <h3 class="section-title">Productos populares</h3>
        </header><!-- sect-heading -->

        <div class="row" id="prod">
            <!--Este producto se ira iterando-->
            <div class="col-md-3" v-for="item in popularProducts">
                <div :href="'product/'+ item.identificador" class="card card-product-grid">
                    <a :href="'product/'+ item.identificador" class="img-wrap"> <img src="<?php echo RUTA_URL ?>public/images/Products/84850.jpg"> </a>
                    <figcaption class="info-wrap">
                        <a :href="'product/'+ item.identificador" @click="" class="title">{{item.Producto}}</a>
                        <div class="price mt-1">${{item.Precio}}</div> <!-- price-wrap.// -->
                        <ul class="rating-stars">
                            <li class="">
                                <i :class="['bx bxs-star' , item.ranking < 1 ? 'text-gray' : 'text-warning']"></i>
                                <i :class="['bx bxs-star' , item.ranking < 2 ? 'text-gray' : 'text-warning']"></i>
                                <i :class="['bx bxs-star' , item.ranking < 3 ? 'text-gray' : 'text-warning']"></i>
                                <i :class="['bx bxs-star' , item.ranking < 4 ? 'text-gray' : 'text-warning']"></i>
                                <i :class="['bx bxs-star' , item.ranking < 5 ? 'text-gray' : 'text-warning']"></i>
                            </li>
                        </ul>
                    </figcaption>
                </div>
            </div> <!-- col.// -->

        </div> <!-- row.// -->

    </div><!-- container // -->
</section>

<section class="section-name padding-y bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Próximamente Home Safe app</h3>
                <p>Nuestro equipo está trabajando arduamente para que tú puedas descargar nuestra app.</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#"><img src="<?php echo RUTA_URL ?>public/images/site/appstore.png" height="40"></a>
                <a href="#"><img src="<?php echo RUTA_URL ?>public/images/site/appstore.png" height="40"></a>
            </div>
        </div> <!-- row.// -->
    </div><!-- container // -->
</section>

<script src="app/core/vue/products.js"></script>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>