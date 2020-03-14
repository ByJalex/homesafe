<?php

require_once('database.php');
$pdo = conexion::conectar();

$accion = 'lectura';

if (!isset($_GET['accion'])) {
    echo 'Lava variable no existe';
} else {
    $accion = $_GET['accion'];
    switch ($accion) {
        case 'getReview':
            $sql = $pdo->prepare('SELECT c.usu_c, r.estrellas, r.comentarios, r.fecha_comentario FROM resenia r, cliente c WHERE id_producto = ' . $_GET['id_producto'] . ' AND r.id_cliente = c.id_cliente AND r.id_estado_r = 1');
            $sql->execute();
            $reviews = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode(array('error' => false, 'reviews' => $reviews));
            break;
        case '':

            break;
        default:
            #code
            break;
    }
}
