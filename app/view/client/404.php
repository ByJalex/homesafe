<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Home Safe - inicio';
$header = template::header($title);
?>

<div class="container mt-5 mb-5">
    <div class="text-center">
        <div class="-404">
            <h1>Oops!</h1>
            <h2>404 - La página no se puede encontrar</h2>
        </div>
        <a href="home" class="btn btn-lg btn-primary">Ir a la pagina principal</a>    
    </div>
</div>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>