<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Iniciar sesión';
$header = template::header($title);
?>

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Categorias</h2>
        <nav>
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nombre de la categoria</li>
            </ol>
        </nav>
    </div> <!-- container //  -->
</section>

<div class="container">
    <div class="row">
        <div id="category_home">
            <div class="card ml-4 mb-4" style="width: 18rem;" v-for = "item in allCategory">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{item.categoria_p}}</h5>
                    <a href="#" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="app/core/vue/client/category_home.js"></script>
<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>