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

            <script src="../../../public/js/vue.js"></script>
            <script src="../../../public/js/axios.min.js"></script>

        </head>

        <body>
            <div id="app">
                <div class="site-wrap">
                    <!--Este es el menu de buscar...-->
                    <div class="site-navbar bg-white py-2">
                        <div class="search-wrap position-fixed">
                            <div class="container">
                                <a href="" class="search-close js-search-close"><span class="icon-close2"></span></a>
                                <input id="searchProd" type="text" class="form-control" placeholder="Busque por palabra clave">
                            </div>
                        </div>
                        <!--Aqui comienza el menu...-->
                        <div>
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
                                                <li class="<?php if ($active === 1) {
                                                                echo "active";
                                                            } ?>"><a href="index.php">Explorar</a></li>
                                                <!--
                                                <li class="has-children">
                                                    <a href="#">Marcas</a>
                                                    <ul class="dropdown">
                                                        
                                                            <span id="brand"></span>
                                                        
                                                    </ul>
                                                </li>
                                                -->
                                                <li class="<?php if ($active === 2) {
                                                                echo "active";
                                                            } ?>"><a href="brands.php">Marcas</a></li>
                                                <li class="<?php if ($active === 3) {
                                                                echo "active";
                                                            } ?>"><a href="categories.php">Categorias</a></li>
                                                <li class="<?php if ($active === 4) {
                                                                echo "active";
                                                            } ?>"><a href="login.php">Iniciar sesión</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="icons">
                                        <a href="#" class="icons-btn d-inline-block js-search-open">
                                            <span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABkElEQVRIS72VP1LCQBTGvxdnoJQj4AmEG4QjeAJtiQXQGKINjROxIRRCizfgBnIDvYFyA+yUGfc5L5OVgMlmQWG7ZPe937fv3xL2vGjP/pELCMNxlRxuAXAZqIkQAl4AzFjRMAiabzbiMgHh3TgCxc5zFwFR1/c6RZBfgLA/EpWnieGjIo5uri7lH27vH2oOUxvAub5R1/fqBUJW2ynl74rY1Y43HSSgGYBjMA2DblOgmevnBhJzOPwqpxRxPc+59pJAnuNvRSd5OVkBdNwLFKVlhv3RJA6XwWYFSGJvo37zFlJdeblIA1gMA9/bqjfC/shod1BAXJ67hAjAPPC9alYZHTDJ+y5TuZ5uNAIWX8QNU6MdMT0xULFuNB2/tVHBNFGOGq6NCuW0QHyhz0uJfpQ+G71OZ2HMwVoDWQw7UQ5iVwrDBDGOaxDa2kkiYA6mKRiRjIbeYFApL8syk3IhWzVVVgiKIH8GCDQNYeDs2vemqRwVPRl2+wIpLctu2nnyZtg52PXUv4TI+kXbVaXJ7hs49ukZ8jr2YAAAAABJRU5ErkJggg==" /></span></a>
                                        <a href="cart.php" class="icons-btn d-inline-block bag">
                                            <span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABcUlEQVRIS92UP1ICMRTGv2chpXIC8QQOJ9AbCCcQy80WQkM22FARQwMWZEv1BK430BtwA/UE0mJBnCAs68Budh2YcUyZ5L3fe9/7Q9jxoR37xz8CSKXNtuQiYBxwVrX+Yom2CQDwLjir/AAso5c34RBkrgA8CM4aRbLqKd0kYJC0XSuylGEFe+aVgEnAWbkIQCr9DODUAPUOZ9HGDOylVHoM4ARkLkXbv88D6Q4Gh6XP0of9O92flrut1iQVEKdK9CTaXi0PoKd0jYBHAC+Cs7OlzcY5SIsmCySVtpleGKDV4WyYCZjL1A8jGHOeJ/rknxmZ6nXbtxLPT+oky/6oAUN3hQCGbkXgNZM2matCKm0LdYAZHQvhvRWCuTJYdNNcVwKigLP69gGLmcjrWHC2pohzmy7az3bFkQv0K4DLqevdmcF3LcIRYBhAWnDPj/dWyn3uLlo5Wq3ypAzJDbxJnsw5SEax8wxcOme956rBnwZ8ATisixmbLARIAAAAAElFTkSuQmCC" /></span>
                                            <!--Icono del carrito de compras-->
                                            <span class="number">{{cantidadProd()}}</span>
                                        </a>
                                        <a href="#" class="icons-btn d-inline-block">
                                            <span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABdUlEQVRIS9VVO1LDMBB9MjM2HTlCcoLACTAnAUpMQxqMqNJ5QpM0CSXhJIQbkBOEI4QuygwWs0JhZPkjpTAM6qyV3tt9ertmaHmxlvHxNwTZw/QCYOeQiFWFDAspMb9Pk2f6dMVNVQoVDMfjzuE2epHAcZV0DHij/ab4JhRnw8FgvbtfIMhGMwLoA/gAkzf4DBbq4EEeQ7IJgCN9UcVzTRhQQjpOSdylyUmJQJUt2ROBi1B0zSzoMFUXbSNFKEIR18TfVRJMXvLb6/m3unploxldPjWD+zrMSPKVp4l6P5NAKsCc9Ti/okz2Xln22EUgV3SRp4nC/lWCliXSj8yA9SYUPfsRXXppi68k0Kl8ZNVA2qZkNdvPTQRW/yx5mvz0UanRtBX7viQ2uG3h0iwy/O4kcYEXXGRK4EPiA15LYHVuqRJf8EaCOhLaNwbismpsmGo4/we2XMY0dYI7K9hlYpLoPS9wbwKfaVrXJ06JXB3siv9/gi+EjA0o1wWtcwAAAABJRU5ErkJggg==" /></span>
                                        </a>
                                        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
                                            <span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAWklEQVRIS2NkoDFgpLH5DKMWEAxh+gdRe+e0/wSdhUdBZXkWiqMxfEBzCyhxPTa99I8DuvuA1DghGMnoPqC5BZQG2QiIZGxBhC9eSI7kAbGAlIgfoZE8soIIAFWfGBknFUh4AAAAAElFTkSuQmCC" /></span></a>
                                    </div>
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
            <script src="../../core/controllers/products.js"></script>
        </body>

        </html>
<?php
            }
        }

?>