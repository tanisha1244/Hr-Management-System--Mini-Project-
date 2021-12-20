<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="fronthand/style2.css"> -->
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
<h2>ADD DATA</h2>
</div>
<form action="adddata.php" method="post">
<div class="form-group">
<label>First Name</label>
<input type="text" name="firstname" class="form-control" >
</div>
<div class="form-group">
<label>Last Name</label>
<input type="text" name="lastname" class="form-control">
</div>
<div class="form-group">
<label>Address</label>
<input type="text" name="address" class="form-control" >
</div>
<div class="form-group">
<label>City</label>
<input type="text" name="city" class="form-control" >
</div>
<div class="form-group">
<label>State</label>
<input type="text" name="state" class="form-control" >
</div>
<div class="form-group">
<label>Pin</label>
<input type="text" name="pin" class="form-control" >
</div>
<div class="form-group">
<label>Mobile No.</label>
<input type="mobile" name="mobile" class="form-control" >
</div>
<div class="form-group ">
<label>Email</label>
<input type="email" name="email" class="form-control" >
</div>
<div class="form-group">
<label>Hiring Date</label>
<input type="date" name="hdate" class="form-control" >
</div>
<div class="form-group">
<label>Department </label>
<input type="text" name="dept" class="form-control" >
</div>
<div class="form-group">
<label>Bording Date</label>
<input type="date" name="bdate" class="form-control" >
</div>
<div class="form-group">
<label>Gender</label>
<input type="text" name="gender" class="form-control" >
</div>
 <!-- <div class="form-group">
 <label>Salary</label>
<input type="number" name="salary" class="form-control" >
</div>  -->

<input type="submit" class="btn btn-primary" value="Submit">
</form>
<div>
<a href="employeedetails.php"><input type="submit" class="btn btn-primary" value="Cancel"></a></div>
</div>
</div>        
</div>
</div>
</body>
</html>