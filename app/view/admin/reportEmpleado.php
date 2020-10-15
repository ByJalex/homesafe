<?php
//Se hace referencia a nuestro template reporte
//y a nuestra api a ocupar
require_once(RUTA_APP . 'templates/report.php');
require(ROOT_PATH . "/app/api/employees.php");
$pdf = new Report;


$pdf->startReport('Empleados');


$employees = new employees;
$hola = $employees::allEmployeesReport();
if (true) {
    $pdf->SetFillColor(66, 126, 166);
    $pdf->SetTextColor(240, 240, 240);
    $pdf->SetFont('Times', 'B', 12);

    $pdf->SetFont('Times', 'B', 11);
    $pdf->Cell(55, 10, utf8_decode('Nombre'), 1, 0, 'C', 1);
    $pdf->Cell(40, 10, utf8_decode('Usuario'), 1, 0, 'C', 1);
    $pdf->Cell(25, 10, utf8_decode('Teléfono'), 1, 0, 'C', 1);
    $pdf->Cell(60, 10, utf8_decode('Correo'), 1, 1, 'C', 1);
    

    foreach ($hola as $value) {
        $pdf->SetFillColor(175);
        $pdf->SetFont('Times', 'B', 12);    
        if (true) {
            if ($dataeEmployees = $employees->allEmployeesReport()) {
                $pdf->SetFillColor(225);
                $pdf->SetFont('Times', 'B', 11);
                $pdf->SetFont('Times', '', 11);
                $pdf->SetTextColor(15, 15, 15);

                $pdf->cell(55, 10, utf8_decode($value['correo']), 1, 0);
                $pdf->cell (40, 10, utf8_decode($value['usuario']), 1, 0);
                $pdf->cell (25, 10, ($value['telefono']), 1, 0);
                $pdf->MultiCell (60, 10, utf8_decode($value['nombre_completo']), 1, 1);
                
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
