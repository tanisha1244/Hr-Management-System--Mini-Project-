<?php
include ("conni.php");
require('fpdf.php');
$depart = $_POST['dept'];
$emp = $_POST['empid'];
$t=date("d/m/Y");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 12);
$ret ="SELECT e.empid,e.firstname,e.lastname,e.mobile,e.email FROM employee e WHERE e.empid=$emp AND e.dept='$depart'";
$result = mysqli_query($conn,$ret);

if($rows= (mysqli_fetch_array($result,MYSQLI_ASSOC)))
{
    // $pdf->Image('1.jpg',10,10);
    $pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'Pooja Cars Co',0,0);
$pdf->Cell(59	,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'[village patna]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'[Delhi,India]',0,0);
$pdf->Cell(25	,5,'Date',0,0);
$pdf->Cell(34	,5,$t,0,1);//end of line

$pdf->Cell(130	,5,'Phone [+12345678]',0,0);
$pdf->Cell(25	,5,'Invoice #',0,0);
$pdf->Cell(34	,5,'1010101',0,1);//end of line

$pdf->Cell(130	,5,'Fax [+12345678]',0,0);
$pdf->Cell(25	,5,'Employee ID',0,0);
$pdf->Cell(34	,5,$rows['empid'],0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
$pdf->Cell(100	,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$rows['firstname'].' '.$rows['lastname'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$depart,0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,'+91'.$rows['mobile'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$rows['email'],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'Description',1,0);
$pdf->Cell(34	,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);
$query=mysqli_query($conn,"select s.salari,s.bonus,p.advance,p.total_amount from salary s ,payroll p where s.empid = '$emp' and p.empid='$emp'");
$tax=0;
$amount=0;
if($item=mysqli_fetch_array($query)){
	$pdf->Cell(130	,5,'SALARY',1,0);
	$pdf->Cell(34	,5,number_format($item['salari']),1,1,'R');//end of line

    $pdf->Cell(130	,5,'BONUS',1,0);
	$pdf->Cell(34	,5,number_format($item['bonus']),1,1,'R');

    $pdf->Cell(130	,5,'ADVANCE',1,0);
	$pdf->Cell(34	,5,number_format($item['advance']),1,1,'R');
}
$pdf->Cell(100	,5,'',0,0);
$pdf->Cell(30	,5,'Total Amount',0,0);
$pdf->Cell(34	,5,number_format($item['total_amount']),1,1,'R');
	
}
else{
    echo "erroe";

}
$pdf->Output();
?>
