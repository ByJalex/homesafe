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
        echo 'Hola como estas brouu';
    }

    public function allCategory()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM categoria_p  ORDER BY id_cateogira_p DESC');
        $sql->execute();
        $getCategory = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allcategory' => $getCategory));
    }

    public function addCateogry()
    {
        $con = bd::connection();
        $categoria = $_POST['categoria'];
        $imagen = $_POST['imagen'];

        $sql = $con->prepare('INSERT INTO categoria_p(categoria_p, imagen_c) VALUES (:categoriaProducto, :imagenCategoria);');
        $sql->bindParam(':categoriaProducto', $categoria);
        $sql->bindParam(':imagenCategoria', $imagen);
        $sql->execute();
    }

    public function updateCateogry()
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

    public function deleteCategory()
    {
        $con = bd::connection();
        $id = $_POST['id'];

        $sql = $con->prepare('DELETE FROM categoria_p WHERE id_categoria_p = :idCategoria   ');
        $sql->bindParam(':idCategoria', $id);
        $sql->execute();
    }
}

?>