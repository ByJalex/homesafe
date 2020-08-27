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

    public function loadChartSale(){
        $con = bd::connection();
        $sql = $con->prepare("SELECT COUNT(ventas.id_cliente) as value, cliente.nombre_c as label
        FROM ventas INNER JOIN cliente ON ventas.id_cliente = cliente.id_cliente
        GROUP BY cliente.nombre_c,  ventas.total ORDER BY ventas.total DESC LIMIT 3");
        $sql->execute();
        $getCategory = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('popularProducts' => $getCategory));
    }

    public function clientsGraphic(){
        $con = bd::connection();
        $sql = $con->prepare('SELECT cliente.nombre_c as label, ventas.total as value FROM ventas INNER JOIN cliente ON ventas.id_cliente = cliente.id_cliente WHERE ventas.total >= 900.00');
        $sql->execute();
        $getCategory = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('popularProducts' => $getCategory));
    }

    public function categoryGraphic(){
        $con = bd::connection();
        $sql = $con->prepare('SELECT productos.id_categoria_p AS value, categoria_p.categoria_p AS label FROM productos INNER JOIN categoria_p ON productos.id_categoria_p = categoria_p.id_categoria_p GROUP BY productos.id_categoria_p, categoria_p.categoria_p');
        $sql->execute();
        $getCategory = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('popularProducts' => $getCategory));
    }

    public function prodGraphic(){
        $con = bd::connection();
        $sql = $con->prepare('SELECT cantidad as value, productos.nombre_p as label FROM stock INNER JOIN productos ON stock.id_producto = productos.id_producto');
        $sql->execute();
        $getCategory = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('popularProducts' => $getCategory));
    }

    public function all()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio", ROUND(AVG(estrellas),1) as Ranking, identificador FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto inner join resenia on resenia.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p, resenia.id_producto, productos.identificador ORDER BY SUM(cantidad) DESC LIMIT 6;');
        $sql->execute();
        $getCategory = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'popularProducts' => $getCategory));
    }

    public function allStockReport()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT stock.id_stock, stock.cantidad, productos.nombre_p
        FROM stock INNER JOIN productos ON stock.id_producto = productos.id_producto
        GROUP BY stock.id_stock, stock.cantidad, productos.nombre_p');
        $sql->execute();
        $getStock = $sql->fetchAll(PDO::FETCH_ASSOC);
        return ($getStock);
    }

    public function allStock()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT stock.cantidad, productos.nombre_p
        FROM stock INNER JOIN productos ON stock.id_producto = productos.id_producto
        GROUP BY stock.cantidad, productos.nombre_p');
        $sql->execute();
        $getStock = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'stock' => $getStock));
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

    public function setId($value)
    {
        $this->id = $value;
        return true;
    }
}
