<?php

require_once('queryManager.php');


class productos{
    public static function prPopulares(){
        $datos = queryManager::registros('SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad FROM detalle_venta GROUP BY detalle_venta.id_producto ORDER BY SUM(cantidad) DESC LIMIT 6;');
        return $datos;
    }
}