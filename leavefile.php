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
<h2>LEAVE MANAGEMENT </h2>
</div>
<form action="manageleave.php" method="post">
<div class="form-group">
<label>Employee Id</label>
<input type="number" name="empid" class="form-control" required >
</div>
<div class="form-group">
<label>Leave Type</label>
<input type="text" name="leavere" class="form-control" required >
</div>
<div class="form-group">
<label>From Date</label>
<input type="date" name="fordate" class="form-control" required >
</div>
<div class="form-group">
<label>To Date</label>
<input type="date" name="todate" class="form-control"  required>
</div>
<input type="submit" class="btn btn-primary" value="Submit">
</form>
</div>
</div>        
</div>
</div>
</body>
</html>