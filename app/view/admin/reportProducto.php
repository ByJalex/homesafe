<?php
//Se hace referencia a nuestro template reporte
//y a nuestra api a ocupar
require_once(RUTA_APP . 'templates/report.php');
require(ROOT_PATH . "/app/api/product.php");
$pdf = new Report;


$pdf->startReport('Productos por categorias');


$product = new product;
$hola = $product::allProductosReport();
if (true) {
    $pdf->SetFillColor(66, 126, 166);
    $pdf->SetTextColor(240, 240, 240);
    $pdf->SetFont('Times', 'B', 12);

    $pdf->SetFont('Times', 'B', 11);
    $pdf->Cell(65, 10, utf8_decode('Nombre'), 1, 0, 'C', 1);
    $pdf->Cell(15, 10, utf8_decode('Precio'), 1, 0, 'C', 1);
    $pdf->Cell(25, 10, utf8_decode('Modelo'), 1, 0, 'C', 1);
    $pdf->Cell(75, 10, utf8_decode('Descripción'), 1, 1, 'C', 1);
    

    foreach ($hola as $value) {
        $pdf->SetFillColor(175);
        $pdf->SetFont('Times', 'B', 12);    
        if (true) {
            if ($dataProduct = $product->allProductosReport()) {
                $pdf->SetFillColor(225);
                $pdf->SetFont('Times', 'B', 11);
                $pdf->SetFont('Times', '', 11);
                $pdf->SetTextColor(15, 15, 15);

                $pdf->cell(65, 10, utf8_decode($value['nombre_p']), 1, 0);
                $pdf->cell (15, 10, ($value['precio_p']), 1, 0);
                $pdf->cell (25, 10, utf8_decode($value['modelo']), 1, 0);
                $pdf->MultiCell (75, 10, utf8_decode($value['descripcion_p']), 1, 1);
                
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
