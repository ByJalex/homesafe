<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Nombre del producto';
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

<div class="card">
    <div class="row no-gutters">
        <aside class="col-md-6">
            <article class="gallery-wrap">
                <div class="img-big-wrap">
                    <div> <a href="#"><img src="<?php echo RUTA_URL?>public/images/Products/84850.jpg"></a></div>
                </div> <!-- slider-product.// -->
                <div class="thumbs-wrap">
                    <a href="#" class="item-thumb"> <img src="<?php echo RUTA_URL?>public/images/Products/84850.jpg"></a>
                    <a href="#" class="item-thumb"> <img src="<?php echo RUTA_URL?>public/images/Products/84850.jpg"></a>
                    <a href="#" class="item-thumb"> <img src="<?php echo RUTA_URL?>public/images/Products/84850.jpg"></a>
                </div> <!-- slider-nav.// -->
            </article> <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-md-6 border-left">
            <article class="content-body">

                <h2 class="title">Google Home</h2>

                <div class="rating-wrap my-3">
                    <ul class="rating-stars">
                        <li class="">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </li>
                    </ul>
                    <small class="label-rating text-muted">132 comentarios</small>
                    <small class="label-rating text-success"> <i class='bx bxs-cart-download' ></i> 154 ordenes </small>
                </div> <!-- rating-wrap.// -->

                <div class="mb-3">
                    <var class="price h4">$815.00</var>
                </div> <!-- price-detail-wrap .// -->

                <p>Google Home, es un altavoz inteligente desarrollado por Google. ... Google Home permite a los usuarios utilizar comando de voz para interactuar con servicios del asistente personal de Google, llamado Google Assistant.</p>


                <dl class="row">
                    <dt class="col-sm-3">Marca:</dt>
                    <dd class="col-sm-9">Google</dd>

                    <dt class="col-sm-3">Modelo:</dt>
                    <dd class="col-sm-9">#Modelo</dd>

                    <dt class="col-sm-3">Categoria:</dt>
                    <dd class="col-sm-9">Interiores </dd>
                </dl>

                <hr>
                <div class="form-row">
                    <div class="form-group col-md flex-grow-0">
                        <label>Cantidad</label>
                        <div class="input-group mb-3 input-spinner">
                            <div class="input-group-prepend">
                                <button class="btn btn-light" type="button" id="button-plus"> - </button>
                            </div>
                            <input type="text" class="form-control" value="1">
                            <div class="input-group-append">
                                <button class="btn btn-light" type="button" id="button-minus"> + </button>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->

                <a href="#" class="btn  btn-primary"> Comprar ahora </a>
                <a href="#" class="btn  btn-outline-primary"> <span class="text">Añadir al carrito</span> <i class='bx bx-cart-alt' ></i> </a>
            </article> <!-- product-info-aside .// -->
        </main> <!-- col.// -->
    </div> <!-- row.// -->
</div> <!-- card.// -->

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>