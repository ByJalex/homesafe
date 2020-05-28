<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class coupons
{
    function __construct()
    {
    }

    public function brand()
    {
        echo 'Hola como estas en cupones';
    }

    public function generatecupon($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        echo json_encode(array('error' => false, 'code' => strtolower($randomString)));
    }

    public function allcoupons()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT cu.id_cupon, cu.cupon, cu.descuento, cu.cantidad, va.validez, cu.id_validez_c FROM cupones cu, validez_cupon va WHERE cu.id_validez_c = va.id_validez_c ORDER BY id_cupon DESC');
        $sql->execute();
        $getPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allcoupons' => $getPopularProducts));
    }

    public function getvalidity()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM validez_cupon WHERE id_validez_c != 3');
        $sql->execute();
        $getPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'validity' => $getPopularProducts));
    }

    public function addcoupons()
    {
        $con = bd::connection();
        $cupon = $_POST['cupon'];
        $descuento = $_POST['descuento'];
        $cantidad = $_POST['cantidad'];

        $sql = $con->prepare('INSERT INTO cupones(cupon, descuento, cantidad, id_validez_c) VALUES (:cuponProducto, :descuentoProducto, :cantidadProdcuto, 1);');
        $sql->bindParam(':cuponProducto', $cupon);
        $sql->bindParam(':descuentoProducto', $descuento);
        $sql->bindParam(':cantidadProdcuto', $cantidad);
        $sql->execute();
    }

    public function updatecoupons()
    {
        $con = bd::connection();
        $cupon = $_POST['cupon'];
        $descuento =  (int) $_POST['descuento'];
        $cantidad = (int) $_POST['cantidad'];
        $validez = (int) $_POST['idDropdownEstate'];
        $id = (int) $_POST['id'];

        if ($cantidad == 0) {
            $validez = 3;
        }

        $sql = $con->prepare('UPDATE cupones SET cupon = :cuponProducto, descuento = :descuentoProducto, cantidad = :cantidadProdcuto, id_validez_c = :validezProducto WHERE id_cupon = :idCuponProducto');
        $sql->bindParam(':cuponProducto', $cupon);
        $sql->bindParam(':descuentoProducto', $descuento);
        $sql->bindParam(':cantidadProdcuto', $cantidad);
        $sql->bindParam(':validezProducto', $validez);
        $sql->bindParam(':idCuponProducto', $id);
        $sql->execute();
    }

    public function deletecoupons()
    {
        $con = bd::connection();
        $id = $_POST['id'];

        $sql = $con->prepare('DELETE FROM cupones WHERE id_cupon = :idCuponProducto');
        $sql->bindParam(':idCuponProducto', $id);
        $sql->execute();
    }
}
