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

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-3">
                <h3 class="section-title">Sobre nosotros</h3>
                <p>Somos una empresa la cual ofrece productos inteligentes para el hogar con la finalidad de proporcionar a los habitantes de El Salvador una experiencia única en la automatización del hogar.</p>
            </div>
            <div class="col-lg-6 text-center mt-3">
                <h3 class="section-title">Visión</h3>
                <p>En un periodo de 10 años lograr que nuestros productos y servicios estén presente en el 50% de la población haciendo de El Salvador el mejor país de centro américa en tener casa inteligente y seguridad.</p>
            </div>
            <div class="col-lg-6 text-center mt-3">
                <h3 class="section-title">Misión</h3>
                <p>Somos una empresa salvadoreña comprometidos a llevar tecnología de punta a los hogares salvadoreños y brindarles de una gran experiencia de casa autónomas y gran seguridad, para ellos contaremos como productos para cada necesidad y de alta calidad.</p>
            </div>

            <div class="col-lg-12 text-center mt-3 mb-2">
                <h3 class="section-title">Directores</h3>
                <img src="../../../public/images/img_profile.jpg" class="img-fluid rounded mb-3" width="150">
                <img src="../../../public/images/owner2.jpg" class="img-fluid rounded mb-3" width="150">
            </div>
            
        </div>
    </div>
</section>

<?php
require_once('../../templates/templateClient.php');
$footer = template::footer();
?>