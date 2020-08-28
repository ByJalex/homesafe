<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class auth
{
    function __construct()
    {
    }

    public function auth()
    {
        echo 'Parece que hace falta algun parametro';
    }

    public function authadmin()
    {
        $con = bd::connection();
        $usuario = $_POST['user'];
        $clave = $_POST['password'];

        $sql = $con->prepare('SELECT id_user from usuario where usuario = :usu and clave = md5(:cl)');
        $sql->bindParam(':usu', $usuario);
        $sql->bindParam(':cl', $clave);
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            session_start(array(true));
            $_SESSION['newsession'] = $validacion['id_user'];
            echo json_encode(array('error' => false, 'usuario' => $validacion));
        else :
            echo json_encode(array('error' => true, 'usuario' => $validacion));
        endif;
    }

    public function getclients()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM cliente');
        $sql->execute();
        $validacion = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'usuario' => $validacion), JSON_PRETTY_PRINT);
        else :
            echo json_encode(array('error' => true, 'usuario' => $validacion), JSON_PRETTY_PRINT);
        endif;
    }

    public function authclient()
    {
        $con = bd::connection();
        $usuario = $_POST['user'];
        $clave = $_POST['password'];
        $createHash = hash("haval256,3", $clave);
        $sql = $con->prepare('SELECT id_cliente from cliente where usu_c = :usu and clave_c = :cl');
        $sql->bindParam(':usu', $usuario);
        $sql->bindParam(':cl', $createHash);
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            session_start(array(true));
            $_SESSION['id_usuario'] = $validacion['id_cliente'];
            echo json_encode(array('error' => false, 'usuario' => $validacion));
        else :
            echo json_encode(array('error' => true, 'usuario' => $validacion));
        endif;
    }

    public function userloggedin()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT u.id_user, u.correo, u.nombre_completo, u.usuario, u.telefono, u.imagen_user, ti.tipo_user FROM usuario u, tipo_user ti WHERE ti.id_tipo_user = u.id_tipo_user AND id_user = '.$_SESSION['newsession']);
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'userloggedin' => $validacion));
        else :
            echo json_encode(array('error' => true, 'userloggedin' => $validacion));
        endif;
    }

    public function userloggedinReport()
    {
        #session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM cliente WHERE id_cliente = '. $_SESSION['id_usuario']);
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            return (array( 'userloggedin' => $validacion));
        else :
            return (array('userloggedin' => $validacion));
        endif;
    }

    public function loggedinclient()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM cliente WHERE id_cliente = '. $_SESSION['id_usuario']);
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'userloggedin' => $validacion));
        else :
            echo json_encode(array('error' => true, 'userloggedin' => $validacion));
        endif;
    }

    public function testHash(){
        echo hash("haval256,3", "Este es mi texto");
    }

    public function Registerclient()
    {
        $con = bd::connection();
        $usu_c = $_POST['usuario'];
        $sql = $con->prepare('SELECT * FROM cliente WHERE usu_c = :usuario');
        $sql->bindParam(':usuario', $usu_c);
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if($validacion){
            #echo 'El usuario si existe';
            echo json_encode(array('error' => true, 'userExist' => $validacion));
        }else{

            $con = bd::connection();
            $correo_c = $_POST['correo'];
            $nombre_c = $_POST['nombre'];
            $usu_c = $_POST['usuario'];
            $clave_c = $_POST['clave'];
            $direccion_c = $_POST['direccion'];
            $telefono_c = $_POST['telefono'];
            $createHash = hash("haval256,3", $clave_c);
            $sql = $con->prepare('INSERT INTO cliente(correo_c, nombre_c, usu_c, clave_c, direccion_c, telefono_c, id_estado_user) 
                                VALUES (:correo, :nombre, :usuario, :clave, :direccion, :telefono, 1);');
            $sql->bindParam(':correo', $correo_c);
            $sql->bindParam(':nombre', $nombre_c);
            $sql->bindParam(':usuario', $usu_c);
            $sql->bindParam(':clave', $createHash);
            $sql->bindParam(':direccion', $direccion_c);
            $sql->bindParam(':telefono', $telefono_c);
            $sql->execute();
        }
    }
}
