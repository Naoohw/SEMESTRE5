<?php
require('fpdf186/fpdf.php');

$pdf= new FPDF(); //CREAMOS EL OBJETO
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hola Mundo');
$pdf->Ln(10);
$pdf->SetFont('courier','I',14);
$pdf->Cell(0,10,'Centro de Estudios Tecnologicos Industriales y de Servicios No.84');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Desarrolla Aplicaciones Web con conexion a Base de Datos');
$pdf->Ln(10);
$pdf->SetFont('courier','I',16);
$pdf->Cell(40,10,'Flores Estrada Katya Naomi');
$pdf->Output();
?>