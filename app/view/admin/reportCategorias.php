<?php
//Se hace referencia a nuestro template reporte
//y a nuestra api a ocupar
require_once(RUTA_APP . 'templates/report.php');
require(ROOT_PATH . "/app/api/category.php");
$pdf = new Report;


$pdf->startReport('Categoría de productos');


$category = new category;
$hola = $category::allCategoryReport();
if (true) {
    //Aqui se le da color a las filas de el reporte
    $pdf->SetFillColor(66, 126, 166);
    //Aqui se la color al texto del reporte para que sea blanco
    $pdf->SetTextColor(240, 240, 240);
    $pdf->SetFont('Times', 'B', 12);

    $pdf->SetFont('Times', 'B', 11);
    $pdf->Cell(185, 10, utf8_decode('Nombres de la categoría'), 1, 1, 'C', 1);

    foreach ($hola as $value) {
        $pdf->SetFillColor(175);
        $pdf->SetFont('Times', 'B', 12);    
        if (true) {
            if ($dataCategory = $category->allCategoryReport()) {
                $pdf->SetFillColor(225);
                $pdf->SetFont('Times', 'B', 11);
                $pdf->SetFont('Times', '', 11);
                $pdf->SetTextColor(15, 15, 15);

                $pdf->Cell(185, 10, utf8_decode($value['categoria_p']), 1, 1);
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
