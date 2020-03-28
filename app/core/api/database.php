<?php

class conexion
{
    public static function conectar()
    {
        //Data in Heroku
        $user = 'bpzviwhyowydlk';
        $password = '245ac6c6596e96e27e1878711478c6cb5ff95948c97a386fb16d929778357e26';
        $host = 'ec2-184-72-235-80.compute-1.amazonaws.com';
        $database = 'deji589jks4du6';

        //Data in LocalHost
        #$user = 'postgres';
        #$password = 'password';
        #$host = 'localhost';
        #$database = 'home_safe';

        try {
            $conectar =  new PDO('pgsql:host=' . $host . ';dbname=' . $database, $user, $password);
            $conectar->query("SET NAMES 'utf8'");
            return $conectar;
        } catch (Exception $e) {
            print "Error:" . $e->getMessage();
            die();
        }
    }
}

