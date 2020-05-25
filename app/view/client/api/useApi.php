<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Home Safe - api';
$header = template::header($title);
?>

<div class="container mt-5 mb-5">
    <h4>HomeSafe - Api</h4>
    <p>HomeSafe te permite utilizar su api de una manera sencilla, accediendo a cada uno de sus endpoints.</p>
    <hr>
    <h4>Api endpoints</h4>
    A continuación se describen los puntos finales REST disponibles que puede usar para buscar países
    <hr>
    <p><strong>Productos populares:</strong> <a target="__blank" href="https://homesafe-sv.herokuapp.com/api/product/popular">https://homesafe-sv.herokuapp.com/api/product/popular</a> </p>
    <p><strong>Producto individual:</strong> <a target="__blank" href="https://homesafe-sv.herokuapp.com/api/product/individual/{name}">https://homesafe-sv.herokuapp.com/api/product/individual/{name}</a> </p>
</div>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>