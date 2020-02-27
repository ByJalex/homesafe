<?php

require_once('queryManager.php');


class productos{
    public static function prPopulares(){
        $datos = queryManager::registros('SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio" FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p ORDER BY SUM(cantidad) DESC LIMIT 6;');
        return $datos;
    }
}