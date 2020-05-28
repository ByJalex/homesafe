<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';
class stock
{
    function __construct()
    {
    }

    public function stock()
    {
        echo 'Parace que hace falta un parametro.';
    }

    public function all()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio", ROUND(AVG(estrellas),1) as Ranking, identificador FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto inner join resenia on resenia.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p, resenia.id_producto, productos.identificador ORDER BY SUM(cantidad) DESC LIMIT 6;');
        $sql->execute();
        $getCategory = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'popularProducts' => $getCategory));
    }

    public function addStock()
    {
        $con = bd::connection();
        $cantidad = $_POST['cantidad'];
        $id_producto = $_POST['id_producto'];

        $sql = $con->prepare('INSERT INTO stock(cantidad, id_producto) VALUES (:cantidadStock, :productoStock);');
        $sql->bindParam(':cantidadStock', $cantidad);
        $sql->bindParam(':productoStock', $id_producto);
        $sql->execute();
    }

    public function updateStock()
    {
        $con = bd::connection();
        $cantidad = $_POST['cantidadStock'];
        $id_producto = $_POST['id_producto'];
        $id = $_POST['id'];

        $sql = $con->prepare('UPDATE stock SET cantidad = :cantidadStock, productoStock =:productoStock WHERE id_stock = :idStock');
        $sql->bindParam(':cantidadStock', $cantidad);
        $sql->bindParam(':productoStock', $id_producto);
        $sql->bindParam(':idStock', $id);
        $sql->execute();
    }

    public function deleteStcok()
    {
        $con = bd::connection();
        $id = $_POST['id'];

        $sql = $con->prepare('DELETE FROM stock WHERE id_stock = :idStock');
        $sql->bindParam(':idStock', $id);
        $sql->execute();
    }

}
