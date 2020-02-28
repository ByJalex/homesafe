<?php
require_once('queryManager.php');
class product{

    public static function viewProduct($id){
        $datos = queryManager::execute('SELECT ROUND(AVG(estrellas),1) as Ranking, productos.nombre_p, productos.descripcion_p, productos.precio_p FROM resenia inner join productos on productos.id_producto = resenia.id_producto WHERE productos.id_producto = '.$id.' GROUP BY productos.nombre_p, productos.descripcion_p, productos.precio_p');
        return $datos;
    }

}

