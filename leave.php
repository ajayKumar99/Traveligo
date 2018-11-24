<?php
session_start();
$usernames = $_SESSION['username'];
$emails = $_SESSION['emails'];
$phone = $_SESSION['phoneno'];
$traveldate = $_SESSION["date"];
$seatsel = $_SESSION["seats"];
$fuel = $_SESSION['fuel'];
$basefare = $_SESSION['basefare']; 
$gst = $_SESSION['gst'];
$passservice = $_SESSION['passservice'];
$userdevfee = $_SESSION['userdevfee'];
$totaltax = $fuel + $gst + $passservice + $userdevfee;
$totalpamount = $basefare + $totaltax;
$flightno = $_GET['role'];
$flightname = $_SESSION['flightname'];

require('fpdf/fpdf.php');



$pdf = new FPDF('P','mm','A4');

$f = 0;
$total = 0;

while($f<sizeof($usernames)){
$pdf->AddPage();

$pdf->SetFont('Arial','B',48);

$pdf->Cell(0,30,"TRAVELIGO",1,1,'C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,"Name:-      {$usernames[$f]}",1,1,'C');
$pdf->Cell(0,10,"Email:-      {$emails[$f]}",1,1,'C');
$pdf->Cell(0,10,"Phone:-      {$phone[$f]}",1,1,'C');
$pdf->Cell(0,10," ",0,1,'C');
$pdf->SetFont('Arial','B',26);
$pdf->Cell(0,15,"Travel Details",1,1,'C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,"From:-      {$_SESSION['dest']}",1,1,'C');
$pdf->Cell(0,10,"To:-      {$_SESSION['dept']}",1,1,'C');
$pdf->Cell(0,10,"Date:-      {$traveldate}",1,1,'C');
$pdf->Cell(0,10,"Flight Name:-      {$flightname}-{$flightno}",1,1,'C');
$pdf->Cell(0,10,"Seat No:-      {$seatsel[$f]}",1,1,'C');
$pdf->Cell(0,10," ",0,1,'C');
$pdf->SetFont('Arial','B',26);
$pdf->Cell(0,15,"Fare Details",1,1,'C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,"Basefare:-      {$basefare}",1,1,'C');
$pdf->Cell(0,10,"GST:-      {$gst}",1,1,'C');
$pdf->Cell(0,10,"Passenger Service Fee:-      {$passservice}",1,1,'C');
$pdf->Cell(0,10,"User Development Fee:-      {$userdevfee}",1,1,'C');
$pdf->Cell(0,10,"Total Tax:-      {$totaltax}",1,1,'C');
$pdf->Cell(0,10,"Amount/Person:-      {$totalpamount}",1,1,'C');
$pdf->Cell(0,10," ",0,1,'C');

    $total = $total + $totalpamount;
$f++;


}

$pdf->SetFont('Arial','B',36);

$pdf->Cell(0,30,"Total Amount:-       {$total}",1,1,'C');

$pdf->Output('D' , "{$flightname}-{$flightno}.pdf");

?>