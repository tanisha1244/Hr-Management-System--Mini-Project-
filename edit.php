<?php
// Include database connection file
include "conni.php";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE employee set  firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "' ,address='" . $_POST['address'] . "',city='" . $_POST['city'] . "', state='" . $_POST['state'] . "' ,pin='" . $_POST['pin'] . "',mobile='" . $_POST['mobile'] . "', email='" . $_POST['email'] . "' ,hdate='" . $_POST['hdate'] . "',dept='" . $_POST['dept'] . "', bdate='" . $_POST['bdate'] . "' ,gender='" . $_POST['gender'] . "' WHERE empid='" . $_POST['empid'] . "'");
$sq2= mysqli_query($conn,"INSERT INTO salary (empid,salari) VALUES ('" . $_GET['empid'] . "','".$_POST['salary']."')");
$message = "Record Modified Successfully";
header("location:employeedetails.php");
}
$result = mysqli_query($conn,"SELECT * FROM employee WHERE empid='" . $_GET['empid'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
.wrapper{
width: 500px;
margin: 0 auto;
}
</style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header">
<h2>Update Record</h2>
</div>
<p>Please edit the input values and submit to update the record.</p>
<form action="" method="post">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div class="form-group">
<label>First Name</label>
<input type="text" name="firstname" class="form-control" value="<?php echo $row["firstname"]; ?>">
</div>
<div class="form-group">
<label>Last Name</label>
<input type="text" name="lastname" class="form-control" value="<?php echo $row["lastname"]; ?>">
</div>
<div class="form-group">
<label>Address</label>
<input type="text" name="address" class="form-control" value="<?php echo $row["address"]; ?>">
</div>
<div class="form-group">
<label>City</label>
<input type="text" name="city" class="form-control" value="<?php echo $row["city"]; ?>">
</div>
<div class="form-group">
<label>State</label>
<input type="text" name="state" class="form-control" value="<?php echo $row["state"]; ?>">
</div>
<div class="form-group">
<label>Pin</label>
<input type="text" name="pin" class="form-control" value="<?php echo $row["pin"]; ?>">
</div>
<div class="form-group">
<label>Mobile No.</label>
<input type="mobile" name="mobile" class="form-control" value="<?php echo $row["mobile"]; ?>">
</div>
<div class="form-group ">
<label>Email</label>
<input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
</div>
<div class="form-group">
<label>Hiring Date</label>
<input type="date" name="hdate" class="form-control" value="<?php echo $row["hdate"]; ?>">
</div>
<div class="form-group">
<label>Department </label>
<input type="text" name="dept" class="form-control" value="<?php echo $row["dept"]; ?>">
</div>
<div class="form-group">
<label>Bording Date</label>
<input type="date" name="bdate" class="form-control" value="<?php echo $row["bdate"]; ?>">
</div>
<div class="form-group">
<label>Gender</label>
<input type="text" name="gender" class="form-control" value="<?php echo $row["gender"]; ?>">
</div>
<div class="form-group">
<label>Salary</label>
<input type="text" name="salary" class="form-control">
</div>
<input type="hidden" name="empid" value="<?php echo $row["empid"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">
<a href="employeedetails.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div>        
</div>
</div>
</body>
</html>