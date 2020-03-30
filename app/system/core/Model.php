<?php

class Model
{
    protected $db;
    public function __construct()
    {
        try {
            $db =  new PDO('mysql:host=' . 'localhost' . ';dbname=' . 'doclinic', 'root', '');
            $db->query("SET NAMES 'utf8'");
            return $db;
        } catch (Exception $e) {
            print "Error:" . $e->getMessage();
            die();
        }
    }
}