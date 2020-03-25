<?php
require_once('../../templates/templateClient.php');
$title = 'Iniciar sesión';
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

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Carrito de compras</h2>
    </div> <!-- container //  -->
</section>

<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <main class="col-md-9">
                <div class="card">

                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Producto</th>
                                <th scope="col" width="120">Cantidad</th>
                                <th scope="col" width="120">Precio</th>
                                <th scope="col" class="text-right" width="200"> </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <figure class="itemside">
                                        <div class="aside"><img src="../../../public/images/Products/84850.jpg" class="img-sm"></div>
                                        <figcaption class="info">
                                            <a href="#" class="title text-dark">Google Home</a>
                                            <p class="text-muted small"><strong>Marca:</strong> Google</p>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price">$1156.00</var>
                                        <small class="text-muted"> $315.20 Unitario </small>
                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td class="text-right">
                                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class='bx bxs-heart' ></i></a>
                                    <a href="" class="btn btn-light"> Eliminar</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>

                    <div class="card-body border-top">
                        <a href="#" class="btn btn-primary float-md-right"> Realizar compra <i class='bx bx-right-arrow-alt' ></i> </a>
                        <a href="index.php" class="btn btn-light"> <i class='bx bx-left-arrow-alt' ></i> Continuar comprando </a>
                    </div>
                </div> <!-- card.// -->

                <div class="alert alert-success mt-3">
                    <p class="icontext"><i class='bx bxs-truck mr-3'></i> Entrega gratuita dentro de 1-2 semanas</p>
                </div>

            </main> <!-- col.// -->
            <aside class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>¿Tienes un cupon?</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="" placeholder="Cupon">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary">Aplicar</button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Precio total:</dt>
                            <dd class="text-right">USD 568</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Descuento:</dt>
                            <dd class="text-right">USD 658</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right  h5"><strong>$1,650</strong></dd>
                        </dl>
                        <hr>
                        <p class="text-center mb-3">
                            <!--<img src="images/misc/payments.png" height="26">-->
                        </p>

                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->
            </aside> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->
</section>

<?php
require_once('../../templates/templateClient.php');
$footer = template::footer();
?>