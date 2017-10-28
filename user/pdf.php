<?php
session_start();
require("demo/fpdf.php");
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$p=$_SESSION['pnr'];
$sql="select * from booking where pnr=$p";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($r);
$pdf=new FPDF;
$pdf->AddPage();
$pdf->SetFont("Arial","B",25);
$pdf->Cell(0,15,"...HAPPY JOURNEY...",1,1,"C");
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,15,"RESRVATION TICKET",1,1,"C");
$pdf->SetFont("Arial","i",16);
$pdf->Cell(50,15,"NAME :",1,0,"C");
$pdf->Cell(140,15,$row['name'],1,1);
$pdf->Cell(50,15,"E-mail:",1,0,"C");
$pdf->Cell(140,15,$_SESSION['name'],1,1);
$pdf->Cell(50,15,"Age:",1,0,"C");
$pdf->Cell(140,15,$row['age'],1,1);
$pdf->Cell(50,15,"Date:",1,0,"C");
$pdf->Cell(140,15,$row['date'],1,1);
$pdf->Cell(50,15,"PNR:",1,0,"C");
$pdf->Cell(140,15,$row['pnr'],1,1);
$pdf->Cell(50,15,"Train No:",1,0,"C");
$pdf->Cell(140,15,$row['tn'],1,1);
$pdf->Cell(50,15,"Seat No:",1,0,"C");
$pdf->Cell(140,15,$row['seatNo'],1,1);
$pdf->Cell(50,15,"Fare :",1,0,"C");
$pdf->Cell(140,15,$row['Fare'],1,1);
$pdf->Cell(50,15,"Source :",1,0,"C");
$pdf->Cell(140,15,$row['ss'],1,1);
$pdf->Cell(50,15,"Destination :",1,0,"C");
$pdf->Cell(140,15,$row['ds'],1,1);

$pdf->output();
?>
