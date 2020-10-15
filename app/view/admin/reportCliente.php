<?php
//Se hace referencia a nuestro template reporte
//y a nuestra api a ocupar
require_once(RUTA_APP . 'templates/report.php');
require(ROOT_PATH . "/app/api/client.php");
$pdf = new Report;


$pdf->startReport('Clientes de nuestra tienda');


$client = new client;
$hola = $client::allClientReport();
if (true) {
    $pdf->SetFillColor(66, 126, 166);
    $pdf->SetTextColor(240, 240, 240);
    $pdf->SetFont('Times', 'B', 12);

    $pdf->SetFont('Times', 'B', 11);
    $pdf->Cell(55, 10, utf8_decode('Nombres'), 1, 0, 'C', 1);
    $pdf->Cell(35, 10, utf8_decode('Usuario'), 1, 0, 'C', 1);
    $pdf->Cell(30, 10, utf8_decode('Teléfono'), 1, 0, 'C', 1);
    $pdf->Cell(60, 10, utf8_decode('Correo'), 1, 1, 'C', 1);
    foreach ($hola as $value) {
        $pdf->SetFillColor(175);
        $pdf->SetFont('Times', 'B', 12);    
        if (true) {
            if ($dataClient = $client->allClientReport()) {
                $pdf->SetFillColor(225);
                $pdf->SetFont('Times', 'B', 11);
                $pdf->SetFont('Times', '', 11);
                $pdf->SetTextColor(15, 15, 15);

                $pdf->Cell(55, 10, utf8_decode($value['nombre_c']), 1, 0);
                $pdf->Cell(35, 10, utf8_decode($value['usu_c']), 1, 0);
                $pdf->Cell(30, 10, ($value['telefono_c']), 1, 0);
                $pdf->Cell(60, 10, utf8_decode($value['correo_c']), 1, 1);
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
