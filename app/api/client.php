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

    public function allClient()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM clientes  ORDER BY id_cliente DESC');
        $sql->execute();
        $getClient = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allbrands' => $getClient));
    }

    public function updateClient()
    {
        $con = bd::connection();
        $estado = $_POST['estado'];
        $id = $_POST['id'];

        $sql = $con->prepare('UPDATE cliente SET id_estado_user= :estadoCliente WHERE id_cliente = :id_cliente');
        $sql->bindParam(':estadoCliente', $estado);
        $sql->bindParam(':id_cliente', $id);
        $sql->execute();
    }
}
?>