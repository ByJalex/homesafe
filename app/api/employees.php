<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class employees{
    
    function __construct()
    {
    }

    public function employees()
    {
        echo 'Hola como estas en admin :D';
    }

    public function allEmployees()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM usuario  ORDER BY id_user DESC');
        $sql->execute();
        $geteEployees = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allbrands' => $geteEployees));
    }

    public function allEmployeesReport()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM usuario  ORDER BY id_user DESC');
        $sql->execute();
        $getStock = $sql->fetchAll(PDO::FETCH_ASSOC);
        return ($getStock);
    }

    //no hice el crear empleado por de la contra encrytada tons no se muy bien ahi :/

    public function deleteEmployees()
    {
        $con = bd::connection();
        $id = $_POST['id'];

        $sql = $con->prepare('DELETE FROM usuario WHERE id_user = :id_usuario');
        $sql->bindParam(':id_usuario', $id);
        $sql->execute();
    }

    
    public function setId($value)
    {
        $this->id = $value;
        return true;
    }

}
?>