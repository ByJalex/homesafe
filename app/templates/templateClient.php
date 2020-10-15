<?php
session_start();
class template
{
    public static function header($title)
    {
?>
<?php
        #Detectar el idiomo en que se esta ejecutando la pagina
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <!--Importando todos los estilos-->
    <script src="<?php echo RUTA_PADRE ?>public/js/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="<?php echo RUTA_PADRE ?>public/css/client/all.min.css">
    <link rel="stylesheet" href="<?php echo RUTA_PADRE ?>public/css/client/bootstrap.css">
    <link rel="stylesheet" href="<?php echo RUTA_PADRE ?>public/css/client/responsive.css">
    <link rel="stylesheet" href="<?php echo RUTA_PADRE ?>public/css/client/ui.css">
    <link rel="stylesheet" href="<?php echo RUTA_PADRE ?>public/css/client/sweetalert.css">
    <link rel="stylesheet" href="<?php echo RUTA_PADRE ?>public/css/client/test.css">
    <link rel="stylesheet" href="<?php echo RUTA_PADRE ?>public/css/vanillatoasts.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="section-header">
        <?php
                #$_SESSION['id_usuario'] = "Josue";
                if (isset($_SESSION['id_usuario'])) {
                    #echo 'La variable existe';
                    #print_r($_SESSION['id_usuario']);
                } else {
                    #echo 'La variable no existe';
                ?>
        <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo RUTA_PADRE ?>login">Parece que no has
                            iniciado sesión, click aquí para continuar comprando.</a></li>
                </ul>
            </div>
        </nav>
        <?php
                }
                ?>

        <main>
            <section class="header-main border-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-4">
                            <a href="<?php echo RUTA_PADRE ?>home" class="brand-wrap">
                                <img class="logo" src="<?php echo RUTA_PADRE ?>public/images/logo.png">
                            </a> <!-- brand-wrap.// -->
                        </div>
                        <div id="search" class="col-lg-6 col-sm-12">
                            <form action="#" class="search">
                                <div class="input-group w-100">
                                    <input @keyup.enter="send" v-model="search" type="text" class="form-control"
                                        placeholder="Buscar (ej: lámpara, bocina)">
                                    <div class="input-group-append">
                                        <a :href="'search?p='+ search" class="btn btn-primary" type="submit">
                                            <i class='bx bx-search text-white'></i>
                                        </a>
                                    </div>
                                </div>
                            </form> <!-- search-wrap .end// -->
                        </div> <!-- col.// -->
                        <div class="col-lg-4 col-sm-6 col-12">

                            <div class="widgets-wrap float-md-right">
                                <div class="widget-header  mr-1" id="cart">
                                    <a href="<?php echo RUTA_PADRE ?>cart" class="icon icon-sm rounded-circle border"><i
                                            class='bx bx-cart-alt'></i></a>
                                    <span class="badge badge-pill bg-primary notify" v-cloak>{{counterCart}}</span>
                                </div>
                                <?php
                                    if (isset($_SESSION['id_usuario'])) {
                                    ?>
                                <div class="widget-header mr-4">
                                    <a href="<?php echo RUTA_PADRE ?>notifications"
                                        class="icon-sm rounded-circle border">
                                        <i class='bx bx-heart'></i></a>
                                    <span class="badge badge-pill bg-warning notify">0</span>
                                </div>
                                <?php
                                    }
                                    ?>
                                <!--Bav para mostrar Iniciar sesion y registrarse-->
                                <?php
                                    if (!isset($_SESSION['id_usuario'])) {
                                    ?>
                                <div class="widget-header icontext">
                                    <a href="<?php echo RUTA_PADRE ?>account"
                                        class="icon icon-sm rounded-circle border"><i class='bx bx-user'></i></a>
                                    <div class="text">
                                        <span class="text-muted">Bienvenido</span>
                                        <div>
                                            <a href="<?php echo RUTA_PADRE ?>login">Iniciar sesión</a> |
                                            <a href="<?php echo RUTA_PADRE ?>register"> Registrarse</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    } else {
                                    ?>
                                <!--Mostrar informacion si el usuario ya esta logeado-->
                                <div class="dropdown d-inline-block" id="login">
                                    <a href="<?php echo RUTA_PADRE ?>#" class="icontext mr-4 dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <img class="icon icon-xs rounded-circle"
                                            src="<?php echo RUTA_PADRE ?>public/images/person_3.jpg">
                                        <div class="text" v-cloak>
                                            Hola, {{userInformation.usu_c}}
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(150px, 32px, 0px);">
                                        <a class="dropdown-item" href="<?php echo RUTA_PADRE ?>account">Mi perfil</a>
                                        <a class="dropdown-item"
                                            href="<?php echo RUTA_PADRE ?>account/usersettings">Configuración</a>
                                        <a class="dropdown-item" href="<?php echo RUTA_PADRE ?>destroysession">Cerrar
                                            sesión</a>
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
        </main>
        <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
            <div class="container">

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="<?php echo RUTA_PADRE ?>home">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Marcas</a>
                            <div id="brand_nav">
                                <div class="dropdown-menu">
                                    <div v-for='item in allbrands'>
                                        <a class="dropdown-item" :href="'brand?m='+ item.nombre_m">{{item.nombre_m}}</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo RUTA_PADRE ?>news">Noticias</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo RUTA_PADRE ?>about">Sobre nosotros</a>
                        </li>
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>
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
                        <div>
                            <ul class="list-unstyled">
                                <li> <a href="<?php echo RUTA_PADRE ?>#"></a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Home Safe</h6>
                        <ul class="list-unstyled">
                            <li> <a href="About">Acerca de nosotros</a></li>
                            <li> <a href="<?php echo RUTA_PADRE ?>about/termsandconditions">Términos y condiciones</a>
                            </li>
                            <li> <a href="<?php echo RUTA_PADRE ?>#">Desarrolladores</a></li>
                            <li> <a href="<?php echo RUTA_PADRE ?>help/api">Api</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Ayuda</h6>
                        <ul class="list-unstyled">
                            <li> <a href="<?php echo RUTA_PADRE ?>#">Contáctanos</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Cuenta</h6>
                        <ul class="list-unstyled">
                            <li> <a href="<?php echo RUTA_PADRE ?>Login"> Inicio de sesión de usuario </a></li>
                            <li> <a href="<?php echo RUTA_PADRE ?>Register"> Registro de usuario </a></li>
                            <li> <a href="<?php echo RUTA_PADRE ?>Usersettings"> Configuración de cuenta </a></li>
                            <li> <a href="<?php echo RUTA_PADRE ?>Account"> Mis órdenes </a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Social</h6>
                        <ul class="list-unstyled">
                            <li><a target="__blank" href="https://www.facebook.com/Home-safe-101232988135757"> <i
                                        class='bx bxl-facebook'></i> Facebook </a></li>
                            <li><a target="__blank" href="https://www.instagram.com/homesafe.sv/"> <i
                                        class='bx bxl-instagram-alt'></i> Instagram </a></li>
                        </ul>
                    </aside>
                </div> <!-- row.// -->
            </section> <!-- footer-top.// -->

            <section class="footer-bottom border-top row">
                <div class="col-md-2">
                    <?php
                            #Detectar el idiomo en que se esta ejecutando la pagina
                            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
                            ?>
                    <p class="text-muted"> © <?php echo date("Y"); ?> Home Safe - <?php echo $lang ?></p>
                </div>
                <div class="col-md-8 text-md-center">
                    <span class="px-2">homesafesv@gmail.com</span>
                    <span class="px-2">+503 6147 3015</span>
                </div>

            </section>
        </div><!-- //container -->
    </footer>

    <script src="<?php echo RUTA_PADRE ?>app/core/vue/client/brand_nav.js"></script>
    <script src="<?php echo RUTA_PADRE ?>app/core/vue/client/inf.js"></script>
    <script src="<?php echo RUTA_PADRE ?>app/core/vue/client/cart.js"></script>
    <script src="<?php echo RUTA_PADRE ?>app/core/vue/client/search_product.js"></script>
    <script src="<?php echo RUTA_PADRE ?>public/js/vanillatoasts.js"></script>
    <script src="<?php echo RUTA_PADRE ?>public/js/client/jquery-2.0.0.min.js"></script>
    <script src="<?php echo RUTA_PADRE ?>public/js/client/bootstrap.bundle.min.js"></script>
    <script src="<?php echo RUTA_PADRE ?>public/js/client/sweetalert.min.js"></script>
    <script>
    var timeout;
    document.onmousemove = function() {
        clearTimeout(timeout);
        contadorSesion();
    }

    function contadorSesion() {
        timeout = setTimeout(function() {
            console.log("Se cierra la sesion")
            salir()
        }, 10000);
    }

    function salir() {
        window.location.href = "http://localhost/homesafe/login";
        axios.get("http://localhost/homesafe/api/auth/destruirSesion")
        .then(response=>{
            console.log("Se borraron todos los datos")
        })
    }
    </script>
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
                                            } ?>" href="<?php echo RUTA_PADRE ?>account"> Descripción de mi cuenta </a>
        <a class="list-group-item <?php if ($active == 2) {
                                                echo 'active';
                                            } ?>" href="<?php echo RUTA_PADRE ?>account/orders"> Mis ordenes </a>
        <a class="list-group-item <?php if ($active == 3) {
                                                echo 'active';
                                            } ?>" href="<?php echo RUTA_PADRE ?>account/wishlist"> Mi lista de deseos
        </a>
        <a class="list-group-item <?php if ($active == 4) {
                                                echo 'active';
                                            } ?>" href="<?php echo RUTA_PADRE ?>account/usersettings"> Configuracion de
            usuario </a>
    </ul>
</aside>
<?php
    }
}