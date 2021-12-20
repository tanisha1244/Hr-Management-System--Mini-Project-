<?php

//params to connect database
   $dphost="localhost";//$dbhost will be the host where your server is running it is usually localhost.
   $dpuser="root";//$dbuser will be the username i.e. root and $dbpass will be the password which is the same that you used to access your PHPMyAdmin.
   $dppass="";
   $dpname="users";//$dbname will be the name of your database which we have created in this tutorial.
   //connection to database
   $conn = new mysqli($dphost, $dpuser, $dppass,$dpname) or die("Connect failed: %s\n". $conn -> error);
   return $conn;
 
 ?>