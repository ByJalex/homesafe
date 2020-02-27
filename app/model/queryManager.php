<?php

require_once('conexion.php');

class queryManager
{

    //Funcion para ejecutar consultas SQL
    public static function execute($query)
    {
        $con = conexion::conectar();
        $sentencia = $con->prepare($query);
        $sentencia->execute();
        $rows = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }

    public static function registros($query)
    {
        $con = conexion::conectar();
        $sentencia = $con->prepare($query);
        $sentencia->execute();
        $rows = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}
