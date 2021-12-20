<?php
include "conni.php";
    
     $fname = $_POST['firstname'];
     $lname = $_POST['lastname'];
     $addre = $_POST['address'];
     $citye = $_POST['city'];
     $states = $_POST['state'];
     $pins = $_POST['pin'];
     $mobiles = $_POST['mobile'];
     $emails=$_POST['email'];
     $hdates = $_POST['hdate'];
     $depts = $_POST['dept'];
     $bdates = $_POST['bdate'];
     $genders = $_POST['gender'];
    //  echo $fname;
    //  echo $lname;
    //  echo $addre;
    //  echo $citye;
    //  echo $states;
    //  echo $pins;
    //  echo $mobiles;
    //  echo $hdates;
    //  echo $depts;
    //  echo $bdates;
    //  echo $genders;
     $sql = "INSERT INTO employee (firstname,lastname,address,city,state,pin,mobile,email,hdate,dept,bdate,gender)
     VALUES ('$fname','$lname','$addre','$citye','$states','$pins','$mobiles','$emails','$hdates','$depts','$bdates','$genders')";
     if (mysqli_query($conn, $sql)) {
        header('location: employeedetails.php');
     } else {
        echo "Error: " ;
     }
?>