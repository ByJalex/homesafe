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

    public function detallePedidosPorCliente2()
    {
        //session_start();
        $con = bd::connection();
        $v = $_GET['param'];
        $sql = $con->prepare('SELECT productos.nombre_p, detalle_venta.cantidad, detalle_venta.precio_unitario
        FROM detalle_venta INNER JOIN productos ON detalle_venta.id_producto = productos.id_producto
        WHERE detalle_venta.id_venta = :v');
        #$sql->bindParam(':idc', $_SESSION['id_usuario']);
        $sql->bindParam(':v', $v);
        $sql->execute();
        $getDetail = $sql->fetchAll(PDO::FETCH_ASSOC);
        return ($getDetail);
    }

    public function allClientReport()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT cl.id_estado_user, cl.id_cliente, cl.correo_c, cl.nombre_c, cl.usu_c, cl.clave_c, cl.direccion_C, cl.telefono_c, cl.imagen_c, es.estado_user FROM cliente cl, estado_user es WHERE cl.id_estado_user = es.id_estado_user ORDER BY cl.id_cliente ASC');
        $sql->execute();
        $getStock = $sql->fetchAll(PDO::FETCH_ASSOC);
        return ($getStock);
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
    //Esta funcion siver para cargar los pedidos por cliente
    public function pedidosPorCliente()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT ventas.id_venta, cliente.nombre_c, ventas.fecha, ventas.fecha_entrega, ventas.total, estado_venta.estado_venta
        FROM ventas INNER JOIN cliente ON ventas.id_cliente = cliente.id_cliente INNER JOIN estado_venta ON ventas.id_estado_v = estado_venta.id_estado_v
        WHERE ventas.id_cliente = :idc ORDER BY ventas.id_venta DESC');
        $sql->bindParam(':idc', $_SESSION['id_usuario']);
        $sql->execute();
        $getClient = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'pedidosPorCliente' => $getClient));
    }
    //Esta funcion sirve para cargar los detalle de cada pedido del cliente
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

    public function setId($value)
    {
        $this->id = $value;
        return true;
    }
}
