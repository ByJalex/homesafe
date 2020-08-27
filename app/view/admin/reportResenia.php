<?php
require_once(RUTA_APP . 'templates/report.php');
require(ROOT_PATH . "/app/api/review.php");
$pdf = new Report;


$pdf->startReport('Reseñas de nuestros productos');


$review = new review;
$hola = $review::allReviewReport();
if (true) {
    $pdf->SetFillColor(66, 126, 166);
    $pdf->SetTextColor(240, 240, 240);
    $pdf->SetFont('Times', 'B', 12);

    $pdf->SetFont('Times', 'B', 11);
    $pdf->Cell(55, 10, utf8_decode('Nombre'), 1, 0, 'C', 1);
    $pdf->Cell(85, 10, utf8_decode('Producto'), 1, 0, 'C', 1);
    $pdf->Cell(20, 10, utf8_decode('Estrellas'), 1, 0, 'C', 1);
    $pdf->Cell(20, 10, utf8_decode('Fecha'), 1, 1, 'C', 1);
    

    foreach ($hola as $value) {
        $pdf->SetFillColor(175);
        $pdf->SetFont('Times', 'B', 12);    
        if (true) {
            if ($dataReview = $review->allReviewReport()) {
                $pdf->SetFillColor(225);
                $pdf->SetFont('Times', 'B', 11);
                $pdf->SetFont('Times', '', 11);
                $pdf->SetTextColor(15, 15, 15);

                $pdf->cell(55, 10, utf8_decode($value['nombre_c']), 1, 0);
                $pdf->cell (85, 10, utf8_decode($value['nombre_p']), 1, 0);
                $pdf->cell (20, 10, utf8_decode($value['estrellas']), 1, 0);
                $pdf->cell (20, 10, utf8_decode($value['fecha_comentario']), 1, 1);
                
            } else {
                $pdf->Cell(0, 10, utf8_decode('No hay productos para esta categoría'), 1, 1);
            }
        } else {
            $pdf->Cell(0, 10, utf8_decode('Ocurrió un error en una categoría'), 1, 1);
        }
    }
} else {
    $pdf->Cell(0, 10, utf8_decode("Sucedio un error"), 1, 1);
    #print_r($param);
}

$pdf->Output();
?>
