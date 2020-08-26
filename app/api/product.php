<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';
class product
{
    function __construct()
    {
    }

    public function product()
    {
        echo 'Hola como estas';
    }

    public function popular()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio", ROUND(AVG(estrellas),1) as Ranking, identificador FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto inner join resenia on resenia.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p, resenia.id_producto, productos.identificador ORDER BY SUM(cantidad) ASC LIMIT 8');
        $sql->execute();
        $getPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        // echo json_encode(array('error' => false, 'popularProducts' => $getPopularProducts));
    }

    public function search()
    {
        $con = bd::connection();
        $param = $_GET['p'];
        $sql = $con->prepare("SELECT productos.id_producto ,productos.nombre_p, productos.descripcion_p, productos.precio_p, productos.imagen, productos.identificador FROM productos WHERE productos.nombre_p ILIKE '%".$param."%' AND id_est_p = 1");
        #$sql->bindParam(':p', $param);
        $sql->execute();
        $getPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'search' => $getPopularProducts));
    }

    public function all()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM productos');
        $sql->execute();
        $getProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'popularProducts' => $getProducts));
    }

    public function unique()
    {
        $con = bd::connection();
        $id = $_POST['id'];
        $sql = $con->prepare('SELECT pr.id_producto, pr.nombre_p, pr.descripcion_p, pr.precio_P, pr.modelo, ca.categoria_p, ma.nombre_m, pr.identificador FROM productos pr, categoria_p ca, marca ma WHERE pr.id_categoria_P = ca.id_categoria_P AND pr.id_marca = ma.id_marca AND pr.identificador = :idP');
        $sql->bindParam(':idP', $id);
        $sql->execute();
        $getProducts = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'uniqueProduct' => $getProducts));
    }
    public function commentTest()
    {
        $con = bd::connection();
        $id = $_GET['p'];
        $sql = $con->prepare('SELECT cli.usu_c, cli.imagen_c, res.estrellas, res.comentarios, res.fecha_comentario FROM cliente cli, productos pr ,resenia res  WHERE pr.id_producto = res.id_producto AND cli.id_cliente = res.id_cliente AND res.id_estado_r = 1 AND pr.id_producto = :parameter ORDER BY res.fecha_comentario DESC');
        $sql->bindParam(':parameter', $id);
        #print_r($sql);
        $sql->execute();
        $getProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'comments' => $getProducts),JSON_PRETTY_PRINT);
    }
    public function clientesTest()
    {   
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM resenia WHERE id_producto = 1');
        $sql->execute();
        $getProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'uniqueProduct' => $getProducts),JSON_PRETTY_PRINT);
    }

    public function addProduct()
    {
        $con = bd::connection();
        $nombre = $_POST['nombre_p'];
        $descripcion = $_POST['descripcion_p'];
        $precio = $_POST['precio_p'];
        $modelo = $_POST['modelo'];
        $id_categoria = $_POST['id_categoria_p'];
        $id_estado = $_POST['id_est_p'];
        $id_marca = $_POST['id_marca'];
        // $identificador = $_POST['identificador'];
        // $serial = $_POST['serial_url'];

        $sql = $con->prepare('INSERT INTO productos(nombre_p, descripcion_p, precio_p, modelo, id_categoria_p, id_est_p, id_marca) VALUES (:nombreProduct, :descripcionProduct, :precioProduct, :modeloProduct, :id_categoriaProduct, :id_estProduct, :id_marcaProduct);');
        $sql->bindParam(':nombreProduct', $nombre);
        $sql->bindParam(':descripcionProduct', $descripcion);
        $sql->bindParam(':precioProduct', $precio);
        $sql->bindParam(':modeloProduct', $modelo);
        $sql->bindParam(':id_categoriaProduct', $id_categoria);
        $sql->bindParam(':id_estProduct', $id_estado);
        $sql->bindParam(':id_marcaProduct', $id_marca);
        // $sql->bindParam(':identificadorProduct', $identificador);
        // $sql->bindParam(':serialProduct', $serial);
        $sql->execute();
    }

    public function updateProduct()
    {
        $con = bd::connection();
        $nombre = $_POST['nombre_p'];
        $descripcion = $_POST['descripcion_p'];
        $precio = $_POST['precio_p'];
        $modelo = $_POST['modelo'];
        $id_categoria = $_POST['id_categoria_p'];
        $id_estado = $_POST['id_est_p'];
        $id_marca = $_POST['id_marca'];
        $id = $_POST['id'];
        // $identificador = $_POST['identificador'];
        // $serial = $_POST['serial_url'];

        $sql = $con->prepare('UPDATE productos SET nombre_p = :nombreProduct, descripcion_p = :descripcionProduct, precio_p = :precioProduct, modelo = :modeloProduct, id_categoria_p = :id_categoriaProduct, id_est_p = :id_estProduct, id_marca = :id_marcaProduct WHERE id_producto = :idProducto');
        $sql->bindParam(':nombreProduct', $nombre);
        $sql->bindParam(':descripcionProduct', $descripcion);
        $sql->bindParam(':precioProduct', $precio);
        $sql->bindParam(':modeloProduct', $modelo);
        $sql->bindParam(':id_categoriaProduct', $id_categoria);
        $sql->bindParam(':id_estProduct', $id_estado);
        $sql->bindParam(':id_marcaProduct', $id_marca);
        $sql->bindParam(':idProducto', $id);
        // $sql->bindParam(':identificadorProduct', $identificador);
        // $sql->bindParam(':serialProduct', $serial);
        $sql->execute();
    }

    public function deletebrand()
    {
        $con = bd::connection();
        $id = $_POST['id'];

        $sql = $con->prepare('DELETE FROM productos WHERE id_producto = :idProducto');
        $sql->bindParam(':idProducto', $id);
        $sql->execute();
    }
}
