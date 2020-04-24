<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'database.php';

class apiProduct
{
    public $id_producto;
    public $nombre_p;
    public $descripcion_p;
    public $precio_p;
    public $modelo;
    public $id_categoria_p;
    public $id_est_p;
    public $id_marca;

    private $bd;

    public function __construct()
    {
        //$this->db = new conexion;
    }

    public function getProducts()
    {
        $pdo = conexion::conectar();
        $sql = $pdo->prepare('SELECT * from productos');
        $sql->execute();
        $productos = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'productos' => $productos));
    }
}

