<?php
require('fpdf186/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 20);
$pdf->SetTextColor(121, 51, 101);
$pdf->SetFillColor(188, 153, 138);
$pdf->SetDrawColor(182, 228, 205);
$pdf->Cell(0, 15, 'Productos', 1, 1, 'C', true); 

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetFillColor(200, 220, 255);
$pdf->Cell(70, 10, 'Nombre', 1, 0, 'C', true);
$pdf->Cell(60, 10, 'Cantidad', 1, 0, 'C', true);
$pdf->Cell(60, 10, 'Precio', 1, 1, 'C', true);

$pdf->SetFont('Arial', 'B', 12);
$productos = [
    ['Lapiz', '5', '30'],
    ['Regla', '8', '50'],
    ['Borradores', '20', '50'],
    ['Hojas blancas', '100', '60'],
    ['Colores', '2', '100'],

];


foreach ($productos as $producto) {
    $pdf->Cell(70, 10, $producto[0], 1, 0, 'C');
    $pdf->Cell(60, 10, $producto[1], 1, 0, 'C');
    $pdf->Cell(60, 10, $producto[2], 1, 1, 'C');
}

$pdf->Output();
?>
