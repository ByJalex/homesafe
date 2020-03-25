<?php
require_once('../../templates/templateClient.php');
$title = 'Home Safe - inicio';
$header = template::header($title);
?>

<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div class="container">

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="main_nav" style="">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explorar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="news.php">Noticias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">Sobre nosotros</a>
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
                        <li><a href="categories.php">Sala</a></li>
                        <li><a href="categories.php">Habitación</a></li>
                        <li><a href="categories.php">Baño</a></li>
                        <li><a href="categories.php">Cocina</a></li>
                        <li><a href="categories.php">Iluminación interior</a></li>
                        <li><a href="categories.php">Iluminación interior</a></li>
                        <li class="has-submenu"><a href="#"><strong>Más categorias</strong></a>
                            <ul class="submenu">
                                <li><a href="categories.php">Ventanas</a></li>
                                <li><a href="categories.php">Seguridad</a></li>
                                <li><a href="categories.php">Patio</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside> <!-- col.// -->
            <div class="col-md-9">
                <article class="banner-wrap">
                    <img src="../../../public/images/site/banner.jpg" class="w-100 rounded">
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


        <div class="row">

            <!--Este producto se ira iterando-->
            <div class="col-md-3">
                <div href="product.php" class="card card-product-grid">
                    <a href="product.php" class="img-wrap"> <img src="../../../public/images/Products/84850.jpg"> </a>
                    <figcaption class="info-wrap">
                        <a href="product.php" class="title">Google Home</a>
                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div> <!-- col.// -->

            <div class="col-md-3">
                <div href="product.php" class="card card-product-grid">
                    <a href="product.php" class="img-wrap"> <img src="../../../public/images/Products/84850.jpg"> </a>
                    <figcaption class="info-wrap">
                        <a href="product.php" class="title">Google Home</a>
                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div> <!-- col.// -->

            <div class="col-md-3">
                <div href="product.php" class="card card-product-grid">
                    <a href="product.php" class="img-wrap"> <img src="../../../public/images/Products/84850.jpg"> </a>
                    <figcaption class="info-wrap">
                        <a href="product.php" class="title">Google Home</a>
                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div> <!-- col.// -->

            <div class="col-md-3">
                <div href="product.php" class="card card-product-grid">
                    <a href="product.php" class="img-wrap"> <img src="../../../public/images/Products/84850.jpg"> </a>
                    <figcaption class="info-wrap">
                        <a href="product.php" class="title">Google Home</a>
                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
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
                <h3>Proximamente Home Safe app</h3>
                <p>Nuestro equipo esta trabajando arduamente para que tu puedas descargar nuestra app.</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#"><img src="../../../public/images/site/appstore.png" height="40"></a>
                <a href="#"><img src="../../../public/images/site/appstore.png" height="40"></a>
            </div>
        </div> <!-- row.// -->
    </div><!-- container // -->
</section>

<?php
require_once('../../templates/templateClient.php');
$footer = template::footer();
?>