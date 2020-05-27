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

    public function authclient()
    {
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
}
