<?php

class conexion
{
    public static function conectar()
    {
        /* Conectar a una base de datos de MySQL invocando al controlador */
        $dsn = 'pgsql:dbname=home_safe;host=localhost';
        $usuario = 'postgres';
        //Cambiar contraseña
        $contraseña = 'password';
        
        try {
            $gbd = new PDO($dsn, $usuario, $contraseña);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }
}

conexion::conectar();
