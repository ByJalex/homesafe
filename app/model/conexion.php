<?php
require_once('../global/config.php');
class conexion{

    private static $con;

    public static function conectar(){
        if(isset(self::$con)){
            try {
                $con =  new PDO('pgsql:host='.servidor.';dbname='.bd.'', usuario, password);
                $con->query("SET NAMES 'utf8'");
                $con;
            } catch (Exception $e) {
                print "Error:" . $e->getMessage();
                die();
            }
        }
    }

    public static function closeConection(){
        if(isset(self::$con)){
            self::$con=null;
        }
    }

    public static function obtenerConexion(){
        return self::$con;
        echo 'hoda';
    }
}

conexion::conectar();
