<?php
require_once('../../global/config.php');
class conexion
{
    //Variable para rotornar la conexion
    private static $con;

    public static function conectar()
    {
        try {
            $conectar =  new PDO('pgsql:host=' . servidor . ';dbname=' . bd . '', usuario, password);
            #Caracteres especiales <3
            $conectar->query("SET NAMES 'utf8'");
            #retornando la conexion <3
            return $conectar;
        } catch (Exception $e) {
            print "Error:" . $e->getMessage();
            die();
        }
    }
}