<?php
require_once(RUTA_APP . 'templates/templateClient.php');
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
                    <a class="nav-link" href="Home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explorar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="News">Noticias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="About">Sobre nosotros</a>
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

<section>
    <div class="container">
    <h3 class="section-title mt-3">Noticias</h3>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="card mb-3">
                    <img src="<?php echo RUTA_URL?>public/images/site/banner-noticia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Esta base inalámbrica de Logitech lo tiene todo para tus cacharros de Apple</h5>
                        <p class="card-text">Las bases de carga inalámbrica se están popularizando a pasos agigantados. Cada vez hay más dispositivos que son compatibles con esta tecnología -sin ir más lejos los auriculares de realme que hemos analizado hoy-, por lo que el usuario empieza a encontrar atractivo esta clase de accesorios que no hacen más que facilitarnos un poco más el día a día y quitarnos cables de la vista.</p>
                        <p class="card-text"><small class="text-muted">Leer más</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="card mb-3">
                    <img src="<?php echo RUTA_URL?>public/images/site/banner-noticia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">La nueva lámpara de techo de Xiaomi es capaz de iluminar y calentar el ambiente</h5>
                        <p class="card-text">La idea de tener dispositivos capaces de realizar funciones diferentes siempre ha sido interesante. Si además pueden hacelas al mismo tiempo, mejor aún. Eso sí, mientras la experiencia de uso no se vea afectada. Pues bien, el producto que Xiaomi ha lanzado a través de su plataforma de crowdfunding YouPin parece que va por ese camino: una lámpara capaz de iluminar y calentar.</p>
                        <p class="card-text"><small class="text-muted">Leer más</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="card mb-3">
                    <img src="<?php echo RUTA_URL?>public/images/site/banner-noticia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Si tienes bombillas Philips Hue, actualiza o podrán acceder a tu red</h5>
                        <p class="card-text">Las bombillas inteligentes de Philips podrían permitir a un atacante acceder a tu red de casa. Así lo ha descubierto Check Point Security y, aunque no es un método fácil, pone en entredicho una vez más hasta qué punto compensa la domótica doméstica. Especialmente cuando es una simple bombilla la que podría causar los problemas.</p>
                        <p class="card-text"><small class="text-muted">Leer más</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="card mb-3">
                    <img src="<?php echo RUTA_URL?>public/images/site/banner-noticia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">¿Una lámpara que elimina virus? Sí, existe, y es de Xiaomi</h5>
                        <p class="card-text">Xiaomi tiene un nuevo dispositivo listo y dispuesto para aterrizar en tu mesilla de noche (o donde tú mejor consideres, claro). Se trata de una lámpara que no llamaría demasiado nuestra atención si no fuera porque asegura ser capaz de eliminar los virus de nuestra casa. Sí, lo que estás leyendo.</p>
                        <p class="card-text"><small class="text-muted">Leer más</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>