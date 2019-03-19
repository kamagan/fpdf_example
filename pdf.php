<?php
require join(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);

$pdf = new \FPDF('L','mm',array(89,51));

$pdf->AddPage();
$pdf->Image('logo.png', 29, 1.5, 29);
$pdf->SetFont('Helvetica', '', 9);
$pdf->Text(5, 22, 'Name: _________________________');
$pdf->Text(5, 30.5, 'Telephone: _________________________');
$pdf->Text(5, 39, 'Email address: _________________________');
$pdf->Text(5, 47.5, 'Date: ' . date("Y-m-d"));
$pdf->Output();
