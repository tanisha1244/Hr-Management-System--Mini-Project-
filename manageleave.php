<?php
 include "conni.php";
 $emplid=$_POST['empid'];
 $leave=$_POST['leavere'];
 $fordate=$_POST['fordate'];
 $todate=$_POST['todate'];
 $sql1 = "select * from employee where empid=$emplid";
if(mysqli_query($conn,$sql1)){
  $sql="insert into leavemanagement (empid,leaveid,leavere,fordate,todate) values 
  ('$emplid',5,'$leave','$fordate','$todate')";
 echo $emplid;
 echo $leave;
 echo $fordate;
 echo $todate;
 if (mysqli_query($conn,$sql)) {
    header('location: leave.php');
 } else {
    echo "Error: " ;
 }
}
else{echo "error";}
 ?>