<?
/*simple example of creating a pdf*/
require("/var/www/Chapter10/fpdf17/fpdf.php"); // path to fpdf.php

$pdf = new FPDF("L","in","Legal");
$pdf->addPage();
$pdf->setFont("Arial", 'UIB', 16);
$pdf->cell(0, 0, "Hello World!");
$pdf->output();
?>