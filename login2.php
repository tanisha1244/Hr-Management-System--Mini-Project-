<?php
session_start();
    //The isset() function is an inbuilt function in PHP which checks whether a variable is set and is not NULL.
    // This function also checks if a declared variable, array or array key has null value, 
    //if it does, isset() returns false, it returns true in all other possible cases.
    //$_POST is a PHP super global variable which is used to collect form data after submitting an HTML form 
    //select all data using sql statment
    //used to execute the query in the database
    //the number of rows in a result set.
    
    
    // Try to execute this statement
  
    include('C:\xampp\htdocs\1php\conni.php');
	if(isset($_POST['login'])){ 
		$username = $_POST['username'];
		$password = $_POST['password'];
		echo $username;
		echo $password;
	if($username=='')  
    {   
    echo"<script>alert('Please enter the name')</script>";  
    exit();
    } 
	if($password=='')  
    {  
    echo"<script>alert('Please enter the password')</script>";  
    exit();   
    }
	$res = mysqli_query($conn,"select* from login where username='$username'and password='$password'");
$result=mysqli_fetch_array($res,MYSQLI_BOTH);
if($result)
{
echo "You are login Successfully ";
header("location:dashbord.php");   // create my-account.php page for redirection 
	
}
else
{
	echo "failed ";
}  
	
	}
	else{
		echo "sorry";
	}
		
		 

       

?>