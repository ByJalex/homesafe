<?php
require_once('queryManager.php');
class product{

    public static function viewProduct($id){
        $datos = queryManager::execute('select * from productos where id_producto = '.$id);
        return $datos;
    }

}

