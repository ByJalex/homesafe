<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class client{
    function __construct()
    {
    }

    public function client()
    {
        echo 'Hola como estas en client SIU';
    }

    public function allclient()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT cl.id_estado_user, cl.id_cliente, cl.correo_c, cl.nombre_c, cl.usu_c, cl.clave_c, cl.direccion_C, cl.telefono_c, cl.imagen_c, es.estado_user FROM cliente cl, estado_user es WHERE cl.id_estado_user = es.id_estado_user ORDER BY cl.id_cliente ASC');
        $sql->execute();
        $getClient = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allclients' => $getClient));
    }

    public function updateclient()
    {
        $con = bd::connection();
        $estado = $_POST['estado'];
        $id = $_POST['id'];

        $sql = $con->prepare('UPDATE cliente SET id_estado_user= :estadoCliente WHERE id_cliente = :id_cliente');
        $sql->bindParam(':estadoCliente', $estado);
        $sql->bindParam(':id_cliente', $id);
        $sql->execute();
    }

    public function pedidosPorCliente()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT ventas.id_venta, cliente.nombre_c, ventas.fecha, ventas.fecha_entrega, ventas.total, estado_venta.estado_venta
        FROM ventas INNER JOIN cliente ON ventas.id_cliente = cliente.id_cliente INNER JOIN estado_venta ON ventas.id_estado_v = estado_venta.id_estado_v
        WHERE ventas.id_cliente = :idc');
        $sql->bindParam(':idc', $_SESSION['id_usuario']);
        $sql->execute();
        $getClient = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'pedidosPorCliente' => $getClient));
    }

    public function detallePedidosPorCliente()
    {
        session_start();
        $con = bd::connection();
        $v = $_GET['id'];
        $sql = $con->prepare('SELECT productos.nombre_p, detalle_venta.cantidad, detalle_venta.precio_unitario
        FROM detalle_venta INNER JOIN productos ON detalle_venta.id_producto = productos.id_producto
        WHERE detalle_venta.id_venta = :v');
        #$sql->bindParam(':idc', $_SESSION['id_usuario']);
        $sql->bindParam(':v', $v);
        $sql->execute();
        $getDetail = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'DetallePedidosPorCliente' => $getDetail));
    }
}
