<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class review{
    function __construct()
    {
    }

    public function review()
    {
        echo 'Parece que hace falta un parametro.';
    }
    
    public function allreview()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT cliente.nombre_c, productos.nombre_p, resenia.estrellas, resenia.comentarios, resenia.fecha_comentario, estado_resenia.estado FROM resenia INNER JOIN productos ON resenia.id_producto = productos.id_producto INNER JOIN cliente ON resenia.id_cliente = cliente.id_cliente INNER JOIN estado_resenia ON resenia.id_estado_r = estado_resenia.id_estado_r GROUP BY cliente.nombre_c, productos.nombre_p, resenia.estrellas, resenia.comentarios, resenia.fecha_comentario, estado_resenia.estado');
        $sql->execute();
        $getReview = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allreview' => $getReview));
    }

    public function updateReview()
    {
        $con = bd::connection();
        $id_estado_r = $_POST['fechaComentario'];
        $id = $_POST['id'];

        $sql = $con->prepare('UPDATE resenia SET id_estado_r= :estadoNoticia WHERE id_resenia = :id_noticia');
        $sql->bindParam(':estadoNoticia', $id_estado_r);
        $sql->bindParam(':id_noticia', $id);
        $sql->execute();
    }


    public function send()
    {
        session_start();
        $con = bd::connection();
        $param = $_GET['p'];
        $sql = $con->prepare('SELECT ventas.id_cliente FROM ventas INNER JOIN detalle_venta ON ventas.id_venta = detalle_venta.id_venta WHERE detalle_venta.id_producto = :idProd AND ventas.id_cliente = '.$_SESSION['id_usuario']);
        $sql->bindParam(':idProd', $param); 
        $sql->execute();
        $getPopularProducts = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'test' => $getPopularProducts, 'myId' => $_SESSION['id_usuario']), JSON_PRETTY_PRINT);
        
    }
     public function testxdd()
    {
        session_start();
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM resenia');
        $sql->execute();
        $getPopularProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'test' => $getPopularProducts), JSON_PRETTY_PRINT);
    }
    public function sendreview()
    {
        session_start();
        $con = bd::connection();
        $idp = $_POST['idp'];
        $estre = $_POST['estre'];
        $com = $_POST['com'];
        $sql = $con->prepare('INSERT INTO resenia(id_producto, id_cliente, estrellas, comentarios, fecha_comentario, id_estado_r) VALUES (:idp, :idc, :estre, :com, current_date, 1)');
        $sql->bindParam(':idp', $idp); 
        $sql->bindParam(':idc', $_SESSION['id_usuario']);
        $sql->bindParam(':estre', $estre);
        $sql->bindParam(':com', $com);
        $sql->execute();
        $getPopularProducts = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false), JSON_PRETTY_PRINT);
    }

    public function deleteReview()
    {
        $con = bd::connection();
        $id = $_POST['id'];

        $sql = $con->prepare('DELETE FROM resenia WHERE id_resenia = :id_noticia');
        $sql->bindParam(':id_noticia', $id);
        $sql->execute();
    }
}
