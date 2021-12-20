<?php
  include "conni.php";
  session_start();
  $e=$_SESSION["emp"];
          $da=date("Y-m-d");
      $ti=date("H:i:s");
       $sq="Update overtime set outtime='$ti' where dates='$da' and empid='$e'";
         if(mysqli_query($conn,$sq)){
          header('location: dash.php');
         }
         else{echo "error";}
  ?>