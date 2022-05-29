<?php
include "db.php";

if ($mysqli->connect_error) { 
	die('Connect Error (' .	$mysqli->connect_errno . ') '.$mysqli->connect_error); 
} 
$sum="";

if(!empty($_POST['submit_c'])){


$cb_id=$_POST['cb_id'];
$cb_name;
$pb_id=$_POST['pb_id'];
$b_date=$_POST['b_date'];
$no2=$_POST['no2'];
$bid="";
$now = date("d-m-Y");

$m="INSERT into bill_new(c_id)values ('".$cb_id."')";
$resultm1 = $mysqli->query($m ); 

require('./fpdf.php');

 $newDate = date("d-m-Y", strtotime($b_date));  

$query="SELECT cost from painting where p_id='".$pb_id."'";
$result7 = $mysqli->query($query); 
while($row = $result7->fetch_assoc()) {
        $no1= $row["cost"];
    }

$r="SELECT name from customer where c_id='".$cb_id."'";
$result8 = $mysqli->query($r); 

	while($row2 = $result8->fetch_assoc()) {
        $cb_name= $row2["name"];
        
    }

    $b="SELECT b_id from bill";
    $result18 = $mysqli->query($b); 
    while($row6 = $result18->fetch_assoc()) {
        $bid= $row6["b_id"];
}
$sum=$no1+$no2;

$total=$sum;

$o="INSERT into bill(c_id,c_name,e_date,price,d_charge,total)values('".$cb_id."','".$cb_name."','".$newDate."','".$no1."','".$no2."','".$total."')";
$res=$mysqli->query($o);

$o2="INSERT into bill_details(b_id,p_id) values('".$bid."','".$cb_id."')";
$res2=$mysqli->query($o2);



$pdf=new FPDF();

$pdf->AddPage();

$pdf->SetFont('Times','BU',16);
$pdf->SetFillColor(102,255,178);
//$pdf->Image('a.jpg',0,0,250,250);
//$pdf->SetTextColor(194,8,8);
$pdf->Cell(0,10,"BILL DETAILS",1,1,'C',True);

$pdf->SetFillColor(204,255,204);
$pdf->SetFont('Arial','',10);
$pdf->SetTextColor(0,0,0);


//$pdf->Image('a.png', 0, 0, $pdf->w, $pdf->h);

$pdf->Cell(15,10,"",0,1);

//$pdf->Cell(50,10,"",0,0);

$pdf->Cell(10,10,"Date:",0,0);
$pdf->Cell(10,10,$now,0,1);


$pdf->Cell(50,10,"",0,0);
$pdf->Cell(50,10,"  Bill ID",1,0);
$pdf->Cell(50,10,++$bid,1,1);

$pdf->Cell(50,10,"",0,0);
$pdf->Cell(50,10,"  Customer ID",1,0);
$pdf->Cell(50,10,$cb_id,1,1);

$pdf->Cell(50,10,"",0,0);
$pdf->Cell(50,10,"  Customer Name",1,0);
$pdf->Cell(50,10,$cb_name,1,1);

$pdf->Cell(50,10,"",0,0);
$pdf->Cell(50,10,"  Painting ID",1,0);
$pdf->Cell(50,10,$pb_id,1,1);

$pdf->Cell(50,10,"",0,0);
$pdf->Cell(50,10,"  Date",1,0);
$pdf->Cell(50,10,$newDate,1,1);

$pdf->Cell(50,10,"",0,0);
$pdf->Cell(50,10,"  Price",1,0);
$pdf->Cell(10,10,"  Rs.",'B',0);
$pdf->Cell(40,10,$no1,'R',1);

$pdf->Cell(50,10,"",0,0);
$pdf->Cell(50,10,"  Delivery Charge",1,0);
$pdf->Cell(10,10,"  Rs.",0,0);
$pdf->Cell(40,10,$no2,'R&&T',1);


$pdf->Cell(50,10,"",0,0);
$pdf->SetFont('Arial','B',12);
//$pdf->SetFillColor(255,204,204);
$pdf->Cell(50,10,"  TOTAL  ",1,0,'L',True);
$pdf->Cell(10,10,"  Rs.",'B&&T&L',0,'L',True);

$pdf->Cell(40,10,$total,'T&&B&&R',1,'L',True);
$pdf->Output();
}
?>