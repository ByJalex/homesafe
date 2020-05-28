<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';
class brand
{
    function __construct()
    {
    }

    public function brand()
    {
        echo 'Hola como estas';
    }

    public function allbrands()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM marca  ORDER BY id_marca DESC');
        $sql->execute();
        $getPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allbrands' => $getPopularProducts));
    }

    public function addbrand()
    {
        $con = bd::connection();
        $marca = $_POST['marca'];
        $imagen = $_POST['imagen'];
        $desc = $_POST['desc'];

        $sql = $con->prepare('INSERT INTO marca(nombre_m, imagen_m, descripcion_m) VALUES (:nombreMarca, :imagenMarca, :descMarca);');
        $sql->bindParam(':nombreMarca', $marca);
        $sql->bindParam(':imagenMarca', $imagen);
        $sql->bindParam(':descMarca', $desc);
        $sql->execute();
    }

    public function updatebrand()
    {
        $con = bd::connection();
        $marca = $_POST['marca'];
        $imagen = $_POST['imagen'];
        $desc = $_POST['desc'];
        $id = $_POST['id'];

        $sql = $con->prepare('UPDATE marca SET nombre_m= :nombreMarca, imagen_m= :imagenMarca, descripcion_m= :descMarca WHERE id_marca = :id_marca');
        $sql->bindParam(':nombreMarca', $marca);
        $sql->bindParam(':imagenMarca', $imagen);
        $sql->bindParam(':descMarca', $desc);
        $sql->bindParam(':id_marca', $id);
        $sql->execute();
    }

    public function deletebrand()
    {
        $con = bd::connection();
        $id = $_POST['id'];

        $sql = $con->prepare('DELETE FROM marca WHERE id_marca = :id_marca');
        $sql->bindParam(':id_marca', $id);
        $sql->execute();
    }
}