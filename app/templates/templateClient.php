<?php
session_start();
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
            <script src="<?php echo RUTA_URL ?>public/js/axios.min.js"></script>
            <script src="<?php echo RUTA_URL ?>public/js/vue.js"></script>
            <link rel="stylesheet" href="<?php echo RUTA_URL ?>public/css/client/all.min.css">
            <link rel="stylesheet" href="<?php echo RUTA_URL ?>public/css/client/bootstrap.css">
            <link rel="stylesheet" href="<?php echo RUTA_URL ?>public/css/client/responsive.css">
            <link rel="stylesheet" href="<?php echo RUTA_URL ?>public/css/client/ui.css">
            <link rel="stylesheet" href="<?php echo RUTA_URL ?>public/css/client/sweetalert.css">
            <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        </head>

        <body>

            <header class="section-header">
                <?php
                if (isset($_SESSION['id_usuario'])) {
                    #echo 'La variable existe';
                    #print_r($_SESSION['id_usuario']);
                } else {
                    #echo 'La variable no existe';
                ?>
                    <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
                        <div class="container">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="login.php">Parece que no has iniciado sesión, click aqui para continuar comprando.</a></li>
                            </ul>
                        </div>
                    </nav>
                <?php
                }
                ?>


                <section class="header-main border-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-4">
                                <a href="home" class="brand-wrap">
                                    <img class="logo" src="<?php echo RUTA_URL ?>public/images/logo.png">
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
                                    <div class="widget-header  mr-1">
                                        <a href="Cart" class="icon icon-sm rounded-circle border"><i class='bx bx-cart-alt'></i></a>
                                        <span class="badge badge-pill bg-primary notify">0</span>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['id_usuario'])) {
                                    ?>
                                        <div class="widget-header mr-4">
                                            <a href="notifications.php" class="icon-sm rounded-circle border">
                                                <i class='bx bx-bell'></i></a>
                                            <span class="badge badge-pill bg-warning notify">1</span>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <!--Bav para mostrar Iniciar sesion y registrarse-->
                                    <?php
                                    if (!isset($_SESSION['id_usuario'])) {
                                    ?>
                                        <div class="widget-header icontext">
                                            <a href="account.php" class="icon icon-sm rounded-circle border"><i class='bx bx-user'></i></a>
                                            <div class="text">
                                                <span class="text-muted">Bienvenido</span>
                                                <div>
                                                    <a href="Login">Iniciar sesión</a> |
                                                    <a href="Register"> Registrarse</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <!--Mostrar informacion si el usuario ya esta logeado-->
                                        <div class="dropdown d-inline-block" id="login">
                                            <a href="#" class="icontext mr-4 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <img class="icon icon-xs rounded-circle" src="<?php echo RUTA_URL ?>public/images/person_3.jpg">
                                                <div class="text" v-for="name in myUsername">
                                                    Hola, {{name.usu_c}}
                                                </div>
                                            </a> <!-- iconbox // -->
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(150px, 32px, 0px);">
                                                <a class="dropdown-item" href="account.php">Mi perfil</a>
                                                <a class="dropdown-item" href="usersettings.php">Configuración</a>
                                                <a class="dropdown-item" href="../../core/controllers/cerrarSesion.php">Cerrar sesión</a>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>


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
                                    <li> <a href="About">Acerca de nosotros</a></li>
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
                                    <li> <a href="Login"> Inicio de sesión de usuario </a></li>
                                    <li> <a href="Register"> Registro de usuario </a></li>
                                    <li> <a href="Usersettings"> Configuración de cuenta </a></li>
                                    <li> <a href="Account"> Mis ordenes </a></li>
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

            <script src="<?php echo RUTA_URL ?>public/js/client/jquery-2.0.0.min.js"></script>
            <script src="<?php echo RUTA_URL ?>public/js/client/bootstrap.bundle.min.js"></script>
            <script src="<?php echo RUTA_URL ?>public/js/client/sweetalert.min.js"></script>
            <script src="../../core/controllers/client.js"></script>
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
                                            } ?>" href="usersettings.php"> Configuracion de usuario </a>
            </ul>
        </aside>
<?php
    }
}
