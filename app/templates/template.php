<?php

class template
{

    public static function header($title, $active)
    {
?>
        <?php
        session_start();
        ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <title>Home Safe</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <style type="text/css">
                .minh-100 {
                    height: 100vh;
                }
            </style>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
            <link rel="stylesheet" href="../../../public/fonts/icomoon/style.css">
            <link rel="stylesheet" href="../../../public/css/bootstrap.min.css">
            <link rel="stylesheet" href="../../../public/css/magnific-popup.css">
            <link rel="stylesheet" href="../../../public/css/jquery-ui.css">
            <link rel="stylesheet" href="../../../public/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../../../public/css/owl.theme.default.min.css">
            <link rel="stylesheet" href="../../../public/css/aos.css">
            <link rel="stylesheet" href="../../../public/css/style.css">
            <link rel="stylesheet" href="../../../public/css/stylev2.css" type="text/css">
            <link rel="stylesheet" href="../../../public/css/font-awesome-4.7/css/font-awesome.min.css" type="text/css">
            <link rel="stylesheet" href="../../../public/css/font-awesome-5/css/fontawesome-all.min.css" type="text/css">
            
        </head>

        <body>

            <div class="site-wrap">
                <!--Este es el menu de buscar...-->
                <div class="site-navbar bg-white py-2">
                    <div class="search-wrap position-fixed">
                        <div class="container">
                            <a href="" class="search-close js-search-close"><span class="icon-close2"></span></a>
                            <form>
                                <input id="searchProd" type="text" class="form-control" placeholder="Busque por palabra clave">
                            </form>
                        </div>
                    </div>
                    <!--Aqui comienza el menu...-->
                    <div class="container-fluid fixed-top shadow">
                        <div class="d-flex align-items-center justify-content-between  bg-white">
                            <div class="logo">
                                <div class="site-logo mb-0 p-2">
                                    <a href="index.php" class="js-logo-clone">HOME SAFE</a>
                                </div>
                            </div>
                            <div class="main-nav d-none d-lg-block">
                                <nav class="site-navigation text-right text-md-center" role="navigation">
                                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                                        <li class="<?php if ($active === 1) {echo "active";}?>"><a href="index.php">Explorar</a></li>
                                        <li class="has-children">
                                            <a href="#">Marcas</a>
                                            <ul class="dropdown">
                                                <!--Peticion a la base de datos, marcas mas usadas...-->
                                                <li><a href="#">Nombre de la marca</a></li>
                                                <li><a href="#">Nombre de la marca</a></li>
                                                <li><a href="#">Nombre de la marca</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?php if ($active === 3) {echo "active";}?>"><a href="categories.php">Categorias</a></li>
                                        <li class="<?php if ($active === 4) {echo "active";}?>"><a href="login.php">Iniciar sesión</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="icons">
                                <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                                <a href="cart.php" class="icons-btn d-inline-block bag">
                                    <span class="icon-shopping-bag"></span>
                                    <!--Icono del carrito de compras-->
                                    <!--<span class="number">4</span>-->
                                </a>
                                <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
                                <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }

        public static function footer()
        {
            ?>
                <footer class="">
                    <!--PONER CLASE fixed-bottom (en el nav)-->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.facebook.com/Home-safe-101232988135757/?modal=admin_todo_tour"> <i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.instagram.com/homesafe.sv/?hl=es-la"><i class="fab fa-instagram"></i></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i></a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0 ">
                                <a href="aboutus.php" class="mb-1 p-2 font-weight-light colora">Sobre nosotros </a>
                                <a href="" class="mb-1 p-2 font-weight-light colora">Privacidad</a>
                                <a href="terms_of_sale.php" class="mb-1 p-2 font-weight-light colora">Condiciones de venta</a>
                                <a href="" class="mb-1 p-2 font-weight-light colora">Condiciones de servicio</a>
                                <a href="contact.php" class="mb-1 p-2 font-weight-light colora">Ayuda</a>
                            </form>
                        </div>
                    </nav>
                </footer>
            </div>

            <?php

            ?>

            <script src="../../../public/js/jquery-3.3.1.min.js"></script>
            <script src="../../../public/js/jquery-ui.js"></script>
            <script src="../../../public/js/popper.min.js"></script>
            <script src="../../../public/js/bootstrap.min.js"></script>
            <script src="../../../public/js/owl.carousel.min.js"></script>
            <script src="../../../public/js/jquery.magnific-popup.min.js"></script>
            <script src="../../../public/js/aos.js"></script>
            <script src="../../../public/js/main.js"></script>

        </body>

        </html>
<?php
        }
    }

?>