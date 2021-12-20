<?php
  include "conni.php";
  session_start();
  $e=$_SESSION["emp"];
  date_default_timezone_set('Asia/Kolkata');
          $da=date("Y-m-d");
      $ti=date("H:i:s");
       $sq="insert into overtime (empid,intime,dates)  values ('$e','$ti','$da')";
         if(mysqli_query($conn,$sq)){
           $_SESSION['T']= 1;
          header('location: dash.php');

         }
         else{echo "error";}
  ?>
