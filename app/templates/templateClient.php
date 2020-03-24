<?php

class template
{
    public static function header($title)
    {
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $title ?></title>
            <!--Importando todos los estilos-->
            <link rel="stylesheet" href="../../../public/css/client/all.min.css">
            <link rel="stylesheet" href="../../../public/css/client/bootstrap.css">
            <link rel="stylesheet" href="../../../public/css/client/responsive.css">
            <link rel="stylesheet" href="../../../public/css/client/ui.css">
            <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        </head>

        <body>

            <header class="section-header">

                <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
                    <div class="container">
                        <ul class="navbar-nav d-none d-md-flex mr-auto">
                            <li class="nav-item"><a class="nav-link" href="login.php">Parece que no has iniciado sesión, click aqui para continuar comprando.</a></li>
                        </ul>
                    </div> <!-- navbar-collapse .// -->
                    <!-- container //  -->
                </nav>

                <section class="header-main border-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-4">
                                <a href="index.php" class="brand-wrap">
                                    <img class="logo" src="../../../public/images/logo.png">
                                </a> <!-- brand-wrap.// -->
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <form action="#" class="search">
                                    <div class="input-group w-100">
                                        <input type="text" class="form-control" placeholder="Buscar (ej: lampara, bocina)">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class='bx bx-search'></i>
                                            </button>
                                        </div>
                                    </div>
                                </form> <!-- search-wrap .end// -->
                            </div> <!-- col.// -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="widgets-wrap float-md-right">
                                    <div class="widget-header  mr-3">
                                        <a href="cart.php" class="icon icon-sm rounded-circle border"><i class='bx bx-cart-alt'></i></a>
                                        <span class="badge badge-pill badge-danger notify">0</span>
                                    </div>
                                    <div class="widget-header icontext">
                                        <a href="account.php" class="icon icon-sm rounded-circle border"><i class='bx bx-user'></i></a>
                                        <div class="text">
                                            <span class="text-muted">Bienvenido</span>
                                            <div>
                                                <a href="login.php">Iniciar sesión</a> |
                                                <a href="register.php"> Registrarse</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- widgets-wrap.// -->
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                    </div> <!-- container.// -->
                </section> <!-- header-main .// -->
            </header>

        <?php
    }

    public static function footer()
    {
        ?>
            <footer class="section-footer border-top">
                <div class="container">
                    <section class="footer-top padding-y">
                        <div class="row">
                            <aside class="col-md col-6">
                                <h6 class="title">Marcas</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="#">Xiaomi</a></li>
                                    <li> <a href="#">Samsumg</a></li>
                                    <li> <a href="#">Philips</a></li>
                                    <li> <a href="#">LG</a></li>
                                </ul>
                            </aside>
                            <aside class="col-md col-6">
                                <h6 class="title">Home Safe</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="#">Cerca de nosotros</a></li>
                                    <li> <a href="#">Terminos y condiciones</a></li>
                                    <li> <a href="#">Desarrolladores</a></li>
                                    <li> <a href="#">Api</a></li>
                                </ul>
                            </aside>
                            <aside class="col-md col-6">
                                <h6 class="title">Ayuda</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="#">Contactanos</a></li>
                                </ul>
                            </aside>
                            <aside class="col-md col-6">
                                <h6 class="title">Cuenta</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="#"> Inicio de sesión de usuario </a></li>
                                    <li> <a href="#"> Registro de usuario </a></li>
                                    <li> <a href="#"> Configuración de cuenta </a></li>
                                    <li> <a href="#"> Mis ordenes </a></li>
                                </ul>
                            </aside>
                            <aside class="col-md">
                                <h6 class="title">Social</h6>
                                <ul class="list-unstyled">
                                    <li><a target="__blank" href="https://www.facebook.com/Home-safe-101232988135757"> <i class='bx bxl-facebook'></i> Facebook </a></li>
                                    <li><a target="__blank" href="https://www.instagram.com/homesafe.sv/"> <i class='bx bxl-instagram-alt'></i> Instagram </a></li>
                                </ul>
                            </aside>
                        </div> <!-- row.// -->
                    </section> <!-- footer-top.// -->

                    <section class="footer-bottom border-top row">
                        <div class="col-md-2">
                            <p class="text-muted"> © 2020 Home Safe </p>
                        </div>
                        <div class="col-md-8 text-md-center">
                            <span class="px-2">homesafesv@gmail.com</span>
                            <span class="px-2">+503 6147 3015</span>
                        </div>

                    </section>
                </div><!-- //container -->
            </footer>

            <script src="../../../public/js/client/jquery-2.0.0.min.js"></script>
            <script src="../../../public/js/client/bootstrap.bundle.min.js"></script>

        </body>

        </html>
    <?php
    }

    public static function profile($active)
    {
    ?>
        <aside class="col-md-3">
            <ul class="list-group">
                <a class="list-group-item <?php if ($active == 1) {
                                                echo 'active';
                                            } ?>" href="account.php"> Descripción de mi cuenta </a>
                <a class="list-group-item <?php if ($active == 2) {
                                                echo 'active';
                                            } ?>" href="orders.php"> Mis ordenes </a>
                <a class="list-group-item <?php if ($active == 3) {
                                                echo 'active';
                                            } ?>" href="wishlist.php"> Mi lista de deseos </a>
                <a class="list-group-item <?php if ($active == 4) {
                                                echo 'active';
                                            } ?>" href="#">Configuración </a>
            </ul>
        </aside>
<?php
    }
}
