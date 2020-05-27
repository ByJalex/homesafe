<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class dashboard
{
    function __construct()
    {
    }

    public function dashboard()
    {
        echo 'Parece que hace falta algun parametro';
    }

    public function countcustomers()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT COUNT(*) FROM cliente');
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'customers' => $validacion,));
        else :
            echo json_encode(array('error' => true, 'customers' => $validacion));
        endif;
    }

    public function countsalesnow()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT COUNT(*) FROM ventas WHERE fecha = current_date');
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'salesnow' => $validacion,));
        else :
            echo json_encode(array('error' => true, 'salesnow' => $validacion));
        endif;
    }

    public function countreviewnow()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT COUNT(*) FROM resenia WHERE fecha_comentario = current_date');
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'reviewnow' => $validacion,));
        else :
            echo json_encode(array('error' => true, 'reviewnow' => $validacion));
        endif;
    }

    public function productsoldout()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM productos WHERE id_est_p = 2');
        $sql->execute();
        $validacion = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'productsoldout' => $validacion,));
        else :
            echo json_encode(array('error' => true, 'productsoldout' => $validacion));
        endif;
    }

    public function authclient()
    {
    }

    public function userloggedin()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT u.id_user, u.correo, u.nombre_completo, u.usuario, u.telefono, u.imagen_user, ti.tipo_user FROM usuario u, tipo_user ti WHERE ti.id_tipo_user = u.id_tipo_user AND id_user = ' . $_SESSION['newsession']);
        $sql->execute();
        $validacion = $sql->fetch(PDO::FETCH_ASSOC);
        if ($validacion) :
            echo json_encode(array('error' => false, 'userloggedin' => $validacion));
        else :
            echo json_encode(array('error' => true, 'userloggedin' => $validacion));
        endif;
    }
}
