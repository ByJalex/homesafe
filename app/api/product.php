<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';
class product
{
    function __construct()
    {
    }

    public function product()
    {
        echo 'Hola como estas';
    }

    public function popular()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio", ROUND(AVG(estrellas),1) as Ranking FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto inner join resenia on resenia.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p, resenia.id_producto ORDER BY SUM(cantidad) DESC LIMIT 6;');
        $sql->execute();
        $getPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'popularProducts' => $getPopularProducts));
    }
}
