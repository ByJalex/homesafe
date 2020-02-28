<?php

require_once('queryManager.php');
#consulta_1: SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio" FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p ORDER BY SUM(cantidad) DESC LIMIT 6;
#SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio", ROUND(AVG(estrellas),1) as Ranking FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto inner join resenia on resenia.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p, resenia.id_producto ORDER BY SUM(cantidad) DESC LIMIT 6;

class productos{
    public static function prPopulares(){
        $datos = queryManager::registros('SELECT detalle_venta.id_producto AS "id_producto", SUM(cantidad) AS cantidad,  productos.nombre_p as "Producto", productos.precio_p as "Precio", ROUND(AVG(estrellas),1) as Ranking FROM detalle_venta inner join productos on detalle_venta.id_producto = productos.id_producto inner join resenia on resenia.id_producto = productos.id_producto GROUP BY detalle_venta.id_producto, productos.nombre_p, productos.precio_p, resenia.id_producto ORDER BY SUM(cantidad) DESC LIMIT 6;');
        return $datos;
    }

    public static function categ(){
        $datos = queryManager::registros('SELECT * FROM categoria_p');
        return $datos;
    }

    
}