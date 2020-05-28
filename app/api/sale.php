<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class sale
{
    function __construct()
    {
    }

    public function sale()
    {
        echo 'Hola como estas en cupones';
    }

    public function detail()
    {
        $con = bd::connection();
        $id = $_GET['i'];

        $sql = $con->prepare('SELECT  cliente.nombre_c, productos.nombre_p, detalle_venta.cantidad, detalle_venta.precio_unitario, ventas.fecha, ventas.total FROM detalle_venta INNER JOIN productos on detalle_venta.id_producto = productos.id_producto INNER JOIN ventas ON detalle_venta.id_venta = ventas.id_venta INNER JOIN cliente ON ventas.id_cliente = cliente.id_cliente  WHERE cliente.id_cliente = :idUser GROUP BY cliente.nombre_c, productos.nombre_p, detalle_venta.cantidad, detalle_venta.precio_unitario, ventas.fecha, ventas.total');
        $sql->bindParam(':idUser', $id);
        $sql->execute();
        $getDetail = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'detailSale' => $getDetail));
    }
}
