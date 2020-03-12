<?php
//Aqui puedes consultar toda la informacion de los productos (Populares, listado de productos, etc)
require_once('database.php');
$pdo = conexion::conectar();

$respuesta = array('error' => false);
$accion = 'lectura';

if (!isset($_GET['accion'])) {
    //Esta mierda no va a hacer nada porque no existe la variable en la URL <3
    echo 'Lava variable no existe';
} else {
    $accion = $_GET['accion'];
    switch ($accion) {
        case 'popularProducts':
            //echo 'Productos Populares';
            $sql = $pdo->prepare('SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio", ROUND(AVG(estrellas),1) as Ranking FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto inner join resenia on resenia.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p, resenia.id_producto ORDER BY SUM(cantidad) DESC LIMIT 6;');
            $sql->execute();
            $listPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode(array('error' => false, 'popularProducts' => $listPopularProducts));
            break;
        case 'categoryProducts':

            break;
        default:
            #code
            break;
    }
}
