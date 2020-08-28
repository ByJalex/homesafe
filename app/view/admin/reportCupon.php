<?php
require_once(RUTA_APP . 'templates/report.php');
require(ROOT_PATH . "/app/api/coupons.php");
$pdf = new Report;


$pdf->startReport('Cupónes');


$coupons = new coupons;
$hola = $coupons::allCouponsReport();
if (true) {
    $pdf->SetFillColor(66, 126, 166);
    $pdf->SetTextColor(240, 240, 240);
    $pdf->SetFont('Times', 'B', 12);

    $pdf->SetFont('Times', 'B', 11);
    $pdf->Cell(50, 10, utf8_decode('Cupón'), 1, 0, 'C', 1);
    $pdf->Cell(40, 10, utf8_decode('Descuento'), 1, 0, 'C', 1);
    $pdf->Cell(50, 10, utf8_decode('Cantidad'), 1, 0, 'C', 1);
    $pdf->Cell(40, 10, utf8_decode('Validez'), 1, 1, 'C', 1);

    foreach ($hola as $value) {
        $pdf->SetFillColor(175);
        $pdf->SetFont('Times', 'B', 12);    
        if (true) {
            if ($dataCoupons = $coupons->allCouponsReport()) {
                $pdf->SetFillColor(225);
                $pdf->SetFont('Times', 'B', 11);
                $pdf->SetFont('Times', '', 11);
                $pdf->SetTextColor(15, 15, 15);

                $pdf->Cell(50, 10, utf8_decode($value['cupon']), 1, 0);
                $pdf->Cell(40, 10, utf8_decode($value['descuento']), 1, 0);
                $pdf->Cell(50, 10, utf8_decode($value['cantidad']), 1, 0);
                $pdf->Cell(40, 10, utf8_decode($value['validez']), 1, 1);
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
