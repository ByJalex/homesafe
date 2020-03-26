<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
//Aqui puedes consultar toda la informacion de los productos (Populares, listado de productos, etc)
require_once('database.php');
$pdo = conexion::conectar();
session_start();
$respuesta = array('error' => false);
$accion = 'lectura';

if (!isset($_GET['accion'])) {
    echo 'La variable no existe';
} else {
    $accion = $_GET['accion'];
    switch ($accion) {
        case 'login':
            $usuario = $_POST['correo'];
            $clave = $_POST['clave'];
            $sql = $pdo->prepare('SELECT * FROM cliente WHERE correo_c = :user AND clave_c = md5(:pass)');
            $sql->bindParam(':user', $usuario);
            $sql->bindParam(':pass', $clave);
            $sql->execute();
            $returnClient = $sql->fetch(PDO::FETCH_ASSOC);
            echo json_encode(array('error' => false, 'clientData' => $returnClient));
            if (empty($returnClient)) {
                #echo 'datos nulos';
            } else {
                $_SESSION['id_usuario'] = $returnClient['id_cliente'];
            }
            break;
        case 'register':
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            //Validar si existe un registro con ese mismo usuario
            $validate = $pdo->prepare('SELECT id_cliente from cliente WHERE usu_c = :us');
            $validate->bindParam(':us', $usuario);
            $validate->execute();
            $returnUser = $validate->fetch(PDO::FETCH_ASSOC);
            if (empty($returnUser)) {
                $sql = $pdo->prepare('INSERT INTO cliente(correo_c, nombre_c, usu_c, clave_c, direccion_c, telefono_c, imagen_c, id_estado_user)VALUES (:correo, :nombre, :usu, md5(:clave), null, null, null, 1);');
                $sql->bindParam(':correo', $correo);
                $sql->bindParam(':nombre', $nombre);
                $sql->bindParam(':usu', $usuario);
                $sql->bindParam(':clave', $clave);
                $sql->execute();
                echo json_encode(array('dataDuplicated' => false));
            } else {
                echo json_encode(array('dataDuplicated' => true));
            }
            break;
        case 'GetNavInformation':
            $sql = $pdo->prepare('SELECT usu_C, imagen_c FROM cliente where id_cliente = ' . $_SESSION['id_usuario'] . '');
            $sql->execute();
            $navInformation = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode(array('error' => false, 'navInf' => $navInformation));
            break;
        default:
            #code
            break;
    }
}
