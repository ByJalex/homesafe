<?php

class conexion
{
    public static function conectar()
    {
        try {
            $conectar =  new PDO('pgsql:host=' . 'localhost' . ';dbname=' . 'home_safe', 'postgres', 'password');
            $conectar->query("SET NAMES 'utf8'");
            return $conectar;
        } catch (Exception $e) {
            print "Error:" . $e->getMessage();
            die();
        }
    }
}
