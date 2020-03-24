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
        case 'allCategorys':
            $sql = $pdo->prepare('SELECT * from categoria_p');
            $sql->execute();
            $listPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode(array('error' => false, 'allCategorys' => $listPopularProducts));
            break;
        case '':
            
            break;
        default:
            #code
            break;
    }
}