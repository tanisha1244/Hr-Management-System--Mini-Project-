<?php
include ("conni.php");
$depart =$_POST['deptq'];
$emp = $_REQUEST['empidy'];
$dat = $_REQUEST['datei'];
$adv = $_REQUEST['amounts'];
echo $depart."sa";
echo $emp."ta";
echo "\n";
$sql1 = "select p.total_amount,s.bonus,s.salari from payroll p join salary s  where p.empid=$emp and s.empid=$emp";
if($rows=mysqli_query($conn,$sql1)){
    $data = mysqli_fetch_array($rows);
    $ad=$data['salari']+$data['bonus']-$adv;
$sql="UPDATE payroll
SET total_amount= '$ad', advance= '$adv',dates='$dat'
WHERE empid = $emp";
if (mysqli_query($conn,$sql)) {
    header('location: payroll.php');
 } else {
    echo "Error: " ;
 }

}
?>