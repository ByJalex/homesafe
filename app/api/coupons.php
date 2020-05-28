<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class coupons{
    function __construct()
    {
    }

    public function brand()
    {
        echo 'Hola como estas en cupones';
    }

    public function allCoupons()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM cupones  ORDER BY id_cupon DESC');
        $sql->execute();
        $getPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allcoupons' => $getPopularProducts));
    }

    public function addCoupons()
    {
        $con = bd::connection();
        $cupon = $_POST['cupon'];
        $descuento = $_POST['descuento'];
        $cantidad = $_POST['cantidad'];
        $validez = $_POST['validez'];

        $sql = $con->prepare('INSERT INTO cupones(cupon, descuento, cantidad, id_validez_c) VALUES (:cuponProducto, :descuentoProducto, :cantidadProdcuto, :validezProducto);');
        $sql->bindParam(':cuponProducto', $cupon);
        $sql->bindParam(':descuentoProducto', $descuento);
        $sql->bindParam(':cantidadProdcuto', $cantidad);
        $sql->bindParam(':validezProducto', $validez);
        $sql->execute();
    }

    public function updateCoupons()
    {
        $con = bd::connection();
        $cupon = $_POST['cupon'];
        $descuento = $_POST['descuento'];
        $cantidad = $_POST['cantidad'];
        $validez = $_POST['validez'];
        $id = $_POST['id'];

        $sql = $con->prepare('UPDATE cupones SET cupon = :cuponProducto, descuento = :descuentoProducto, cantidad = :cantidadProdcuto, id_validez_c = :validezProducto WHERE id_cupon = :idCuponProducto');
        $sql->bindParam(':cuponProducto', $cupon);
        $sql->bindParam(':descuentoProducto', $descuento);
        $sql->bindParam(':cantidadProdcuto', $cantidad);
        $sql->bindParam(':validezProducto', $validez);
        $sql->bindParam(':idCuponProducto', $id);
        $sql->execute();
    }

    public function deleteCoupons()
    {
        $con = bd::connection();
        $id = $_POST['id'];

        $sql = $con->prepare('DELETE FROM cupones WHERE id_cupon = :idCuponProducto');
        $sql->bindParam(':idCuponProducto', $id);
        $sql->execute();
    }
}
?>