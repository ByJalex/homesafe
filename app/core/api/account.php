<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
//Aqui puedes consultar toda la informacion de los productos (Populares, listado de productos, etc)
require_once('database.php');
$pdo = conexion::conectar();
session_start();
$respuesta = array('error' => false);
$accion = 'lectura';
$id_user = $_SESSION['id_usuario'];
if (!isset($_GET['accion'])) {
    echo 'La variable no existe';
} else {
    $accion = $_GET['accion'];
    switch ($accion) {
        case 'myAccount':
            $sql = $pdo->prepare('SELECT * FROM cliente WHERE id_cliente = :id_usuario');
            $sql->bindParam(':id_usuario', $id_user);
            $sql->execute();
            $myAccountData = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode(array('error' => false, 'myAcount' => $myAccountData));
            break;
        case 'viewMyOrders':
            $sql = $pdo->prepare('select * from ventas v, estado_venta e where v.id_estado_v = e.id_estado_v and id_cliente = :id_usuario');
            $sql->bindParam(':id_usuario', $id_user);
            $sql->execute();
            $productos = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode(array('error' => false, 'productos' => $productos));
            break;
        default:
            #code
            break;
    }
}
