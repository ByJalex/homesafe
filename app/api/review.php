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

    public function deleteReview()
    {
        $con = bd::connection();
        $id = $_POST['id'];

        $sql = $con->prepare('DELETE FROM resenia WHERE id_resenia = :id_noticia');
        $sql->bindParam(':id_noticia', $id);
        $sql->execute();
    }
}
