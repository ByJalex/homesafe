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
        echo 'Hola como estas en reviwe siuuu';
    }
    
    public function allReview()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM resenia  ORDER BY id_resenia DESC');
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
?>