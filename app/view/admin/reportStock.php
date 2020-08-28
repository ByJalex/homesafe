<?php
//Se hace referencia a nuestro template reporte
//y a nuestra api a ocupar
require_once(RUTA_APP . 'templates/report.php');
require(ROOT_PATH . "/app/api/stock.php");
$pdf = new Report;


$pdf->startReport('Stock de productos');


$stock = new stock;
$hola = $stock::allStockReport();
if (true) {
    $pdf->SetFillColor(66, 126, 166);
    $pdf->SetTextColor(240, 240, 240);
    $pdf->SetFont('Times', 'B', 12);

    $pdf->SetFont('Times', 'B', 11);
    $pdf->Cell(50, 10, utf8_decode('Cantidad'), 1, 0, 'C', 1);
    $pdf->Cell(130, 10, utf8_decode('Productos'), 1, 1, 'C', 1);
    foreach ($hola as $value) {
        $pdf->SetFillColor(175);
        $pdf->SetFont('Times', 'B', 12);    
        if (true) {
            if ($dataStock = $stock->allStockReport()) {
                $pdf->SetFillColor(225);
                $pdf->SetFont('Times', 'B', 11);
                $pdf->SetFont('Times', '', 11);
                $pdf->SetTextColor(15, 15, 15);

                $pdf->Cell(50, 10, ($value['cantidad']), 1, 0);
                $pdf->Cell(130, 10, utf8_decode($value['nombre_p']), 1, 1);
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
