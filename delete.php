<?php

include "conni.php";  // Using database connection file here

$empids = $_REQUEST['delt'];
 // get id through query string
 echo $empids;

$del = mysqli_query($conn,"delete from employee where empid = $empids"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:employeedetails.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>