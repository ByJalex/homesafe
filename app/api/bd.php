<?php
class bd
{
    static function connection()
    {
        try {
            $conectar =  new PDO('pgsql:host=' . 'ec2-184-72-235-80.compute-1.amazonaws.com' . ';dbname=' . 'deji589jks4du6', 'bpzviwhyowydlk', '245ac6c6596e96e27e1878711478c6cb5ff95948c97a386fb16d929778357e26');
            $conectar->query("SET NAMES 'utf8'");
            return $conectar;
        } catch (Exception $e) {
            print "Error:" . $e->getMessage();
            die();
        }
    }
}
