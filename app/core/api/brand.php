<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
//Aqui puedes consultar toda la informacion de los productos (Populares, listado de productos, etc)
require_once('database.php');
$pdo = conexion::conectar();

$respuesta = array('error' => false);
$accion = 'lectura';

if (!isset($_GET['accion'])) {
    echo 'Lava variable no existe';
} else {
    $accion = $_GET['accion'];
    switch ($accion) {
        case 'allBrands':
            $sql = $pdo->prepare('SELECT id_marca, nombre_m from marca');
            $sql->execute();
            $listPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode(array('error' => false, 'allBrands' => $listPopularProducts));
            break;
        case '':
            
            break;
        default:
            #code
            break;
    }
}
