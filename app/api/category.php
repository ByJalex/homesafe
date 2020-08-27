<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class category{
    function __construct()
    {
    }

    public function category()
    {
        echo 'Parace que hace falta un parametro.';
    }

    public function allCategory()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM categoria_p  ORDER BY id_categoria_p DESC');
        $sql->execute();
        $getCategory = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allcategory' => $getCategory));
    }

    public function allCategoryReport()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM categoria_p  ORDER BY id_categoria_p DESC');
        $sql->execute();
        $getStock = $sql->fetchAll(PDO::FETCH_ASSOC);
        return ($getStock);
    }

    public function allCategoryProducts()
    {
        $name = $_GET['name'];
        $con = bd::connection();
        $sql = $con->prepare('SELECT productos.id_producto, productos.identificador, productos.nombre_p, productos.precio_p, categoria_p.categoria_p, marca.nombre_m, productos.imagen
FROM productos INNER JOIN categoria_p ON productos.id_categoria_p = categoria_p.id_categoria_p INNER JOIN marca ON productos.id_marca = marca.id_marca 
WHERE categoria_p.categoria_p = :name
GROUP BY productos.id_producto, productos.nombre_p, productos.precio_p, categoria_p.categoria_p, marca.nombre_m');
        $sql->bindParam(':name', $name);
        $sql->execute();
        $getCategory = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allcategory' => $getCategory));
    }

    public function allCategoryLimit()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM categoria_p  ORDER BY id_categoria_p DESC LIMIT 6');
        $sql->execute();
        $getCategory = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allcategory' => $getCategory));
    }

    public function addcategory()
    {
        $con = bd::connection();
        $categoria = $_POST['categoria'];
        $imagen = $_POST['imagen'];

        $sql = $con->prepare('INSERT INTO categoria_p(categoria_p, imagen_c) VALUES (:categoriaProducto, :imagenCategoria);');
        $sql->bindParam(':categoriaProducto', $categoria);
        $sql->bindParam(':imagenCategoria', $imagen);
        $sql->execute();
    }

    public function updatecategory()
    {
        $con = bd::connection();
        $categoria = $_POST['categoria'];
        $imagen = $_POST['imagen'];
        $id = $_POST['id'];

        $sql = $con->prepare('UPDATE categoria_p SET categoria_p = :categoriaProducto, imagen_c = :imagenCategoria WHERE id_categoria_p = :idCategoria');
        $sql->bindParam(':categoriaProducto', $categoria);
        $sql->bindParam(':imagenCategoria', $imagen);
        $sql->bindParam(':idCategoria', $id);
        $sql->execute();
    }

    public function deletecategory()
    {
        $con = bd::connection();
        $id = $_POST['id'];
        $sql = $con->prepare('DELETE FROM categoria_p WHERE id_categoria_p = :idCategoria   ');
        $sql->bindParam(':idCategoria', $id);
        $sql->execute();
    }

    public function setId($value)
    {
        $this->id = $value;
        return true;
    }
}
