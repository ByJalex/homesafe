<?php
require_once('../../templates/template.php');
template::header('Home Safe', 1);
?>
<style>
    .abs-center {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }
</style>
<!--Saltos de linea para contenerdor (Todo el contenido)-->

<div class="abs-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center ">
                <span class="icon-check_circle display-3 text-success"></span>
                <h2 class="display-4 text-black">Gracias</h2>
                <p class="lead">Tu orden a sido completada</p>
                <p><a href="shop.html" class="btn btn-sm height-auto px-4 py-3 btn-primary">Volver a la tienda</a></p>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../../templates/template.php');
template::footer();
?>