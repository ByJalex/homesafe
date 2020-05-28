<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class news{
    function __construct()
    {
    }

    public function news()
    {
        echo 'Hola como estas';
    }

    public function allNews()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM noticias  ORDER BY id_noticia DESC');
        $sql->execute();
        $getNews = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array('error' => false, 'allnews' => $getNews));
    }

    public function addNews()
    {
        $con = bd::connection();
        $titulo = $_POST['titulo'];
        $noticia = $_POST['noticia'];
        $imagen = $_POST['imagen'];
        $estado = $_POST['estado'];

        $sql = $con->prepare('INSERT INTO noticias(titulo_noticia, noticia, imagen_n, id_est_noticia) VALUES (:tituloNoticia, :noticiaDescripcion, :imagenNoticia, estadoNoticia);');
        $sql->bindParam(':tituloNoticia', $titulo);
        $sql->bindParam(':noticiaDescripcion', $noticia);
        $sql->bindParam(':imagenNoticia', $imagen);
        $sql->bindParam(':estadoNoticia', $estado);
        $sql->execute();
    }

    public function updateNews()
    {
        $con = bd::connection();
        $titulo = $_POST['titulo'];
        $noticia = $_POST['noticia'];
        $imagen = $_POST['imagen'];
        $estado = $_POST['estado'];
        $id = $_POST['id'];

        $sql = $con->prepare('UPDATE noticias SET titutlo_noticia = :tituloNoticia, noticia = :noticiaDescripcion, imagen_n = :imagenNoticia, id_est_noticia = :estadoNoticia WHERE id_noticia = :idNoticia');
        $sql->bindParam(':tituloNoticia', $titulo);
        $sql->bindParam(':noticiaDescripcion', $noticia);
        $sql->bindParam(':imagenNoticia', $imagen);
        $sql->bindParam(':estadoNoticia', $estado);
        $sql->bindParam(':idNoticia', $id);
        $sql->execute();
    }

    public function deleteNews()
    {
        $con = bd::connection();
        $id = $_POST['id'];

        $sql = $con->prepare('DELETE FROM noticias WHERE id_noticia = :idnoticia');
        $sql->bindParam(':idnoticia', $id);
        $sql->execute();
    }
}
?>