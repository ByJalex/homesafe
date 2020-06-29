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

    public function countorders()
    {
        $con = bd::connection();
        $id = $_POST['secondaryId'];
        $sql = $con->prepare('SELECT COUNT(*) FROM detalle_venta WHERE id_producto = :idO');
        $sql->bindParam(':idO', $id);
        $sql->execute();
        $getDetail = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'ordersDetail' => $getDetail));
    }

    public function myorders()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT count(*) FROM ventas WHERE id_cliente = '. $_SESSION['id_usuario'] . "and id_estado_v = 1");
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'orders' => $validacion));
        else :
            echo json_encode(array('error' => true, 'orders' => $validacion));
        endif;
    }

    public function pendingorders()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT count(*) FROM ventas WHERE id_cliente = '. $_SESSION['id_usuario'] . "and id_estado_v = 2");
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'pending_orders' => $validacion));
        else :
            echo json_encode(array('error' => true, 'pending_orders' => $validacion));
        endif;
    }

    public function myorderss()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM estado_venta');
        $sql->execute();
        $validacion = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'userloggedin' => $validacion));
        else :
            echo json_encode(array('error' => true, 'userloggedin' => $validacion));
        endif;
    }

    public function articles()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT cliente.nombre_c, productos.nombre_p, detalle_venta.cantidad, detalle_venta.precio_unitario, ventas.fecha, ventas.total FROM detalle_venta INNER JOIN productos on detalle_venta.id_producto = productos.id_producto INNER JOIN ventas ON detalle_venta.id_venta = ventas.id_venta INNER JOIN cliente ON ventas.id_cliente = cliente.id_cliente  WHERE cliente.id_cliente = :idUser GROUP BY cliente.nombre_c, productos.nombre_p, detalle_venta.cantidad, detalle_venta.precio_unitario, ventas.fecha, ventas.total');
        $sql->bindParam(':idUser', $_SESSION['id_usuario']);
        $sql->execute();
        $validacion = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'purchased_articles' => $validacion));
        else :
            echo json_encode(array('error' => true, 'purchased_articles' => $validacion));
        endif;
    }
}
