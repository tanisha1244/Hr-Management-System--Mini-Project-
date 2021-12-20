<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fronthand/style2.css">
    <link rel="stylesheet" href="fronthand/payroll.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
<?php include('admin.php') ?>
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Salary Management</span>
      </div>
      <div class="profile-details">
        <img src="2.JPG" alt="">
        <span class="admin_name">Param Singh</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <div class="home-content">
    <div class="overview-boxes">
    <div class="box" style="width:calc(100% / 2 - 5px);
                            height: 230px;" ;>
     <div class="right-side " >
     <div class="box-topic">Salary Reports</div>
            <div>
            <!-- <div>
            <label>Year:</label>
            <input type="text" name="" class="form-control" required > 
            </div> -->
            <form action="generatepdf.php" method="post">
            <div style="display:block;  padding:4px 2px;">
            <label>Depeartment:</label>
            <input type="text" name="dept" class="form-control" required >
            </div>
            <div style="display:block;  padding:4px 2px;">
            <label>Employee Id:</label>
            <input type="text" name="empid" class="form-control" required >
            </div>
            <div style="display:block;  padding:4px 2px;">
            <button class="name noselect" style="width: 150px;
	height: 25px;
	cursor: pointer;
	font-size: 14px;
	font-weight: bold;
	color: black;
	background: white;
	border: 1px solid black;
	box-shadow: 1px 1px 0 black,
		-1px -1px 0 black,
		-1px 1px 0 black,
		1px -1px 0 black;
	transition: 500ms ease-in-out">Generate</button>
     </div>
            
    </div> 
</form>
</div>
</div>
<div class="box" style="width:calc(100% / 2 - 15px)";>
        <div class="right-side">
        <div class="box-topic">ADD ADVANCE</div>
        <div>
            <form action="advance.php" method="post">
            <div style="display:block;  padding:4px 2px;">
            <label>Depeartment:</label>
            <input type="text" name="deptq"  required >
            </div>
            <div style="display:block;  padding:4px 2px;">
            <label>Employee Id:</label>
            <input type="text" name="empidy"  required >
            </div>
            <div style="display:block;  padding:4px 2px;">
            <label>Date:</label>
            <input type="date" name="datei" required >
            </div>
            <div style="display:block;  padding:4px 2px;">
            <label>Amount:</label>
            <input type="text" name="amounts"  required >
            </div>
            <div style="display:block;  padding:4px 2px;">
             <button class="name noselect" style="width: 150px;
	               height: 25px;
	             cursor: pointer;
	             font-size: 14px;
	             font-weight: bold;
	              color: black;
	             background: white;
	             border: 1px solid black;
	             box-shadow: 1px 1px 0 black,
		         -1px -1px 0 black,
		         -1px 1px 0 black,
		         1px -1px 0 black;
	             transition: 500ms ease-in-out">ADD</button></div>
             </form>   
        </div> 
    </div>
    </div>
    <div style="
  align-items: center;
  justify-content: center;
  margin-right: 50px;
  margin-top:20px;
  width:calc(100% / 2- 1px);
  display:flex;
  background: #fff;
  padding: 1px 1px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1)">
  <table class='table table-bordered table-hover'>
          <tr style="background-color: #f0d3ef;">
          <th style="padding: 10px;  text-align: left; 
        font-size: 18px;" width="200px">Date</th>
          <th style="padding: 10px;  text-align: left; 
        font-size: 18px;" width="200px">Employee Id</th>
          <th style="padding: 10px;  text-align: left; 
        font-size: 18px;" width="200px">Name</th>
          <th style="padding: 10px;  text-align: left; 
        font-size: 18px;" width="200px">Advance</th>
          <th style="padding: 10px;  text-align: left; 
        font-size: 18px;" width="200px">Amount</th>
          </tr>
          <?php

include "conni.php"; // Using database connection file here
$sql1=mysqli_query($conn,"select p.dates,p.empid,e.firstname,e.lastname,p.advance,p.total_amount from employee e join payroll p where e.empid=p.empid  and advance !=0 ");
while($data = mysqli_fetch_array($sql1))
{?>
 <tr >
 <td width="200px"  data-column="Date"><?php echo $data['dates']; ?></td>
 <td width="200px" data-column="Employee Id"><?php echo $data['empid']; ?></td>
    <td width="200px" data-column="Name"><?php echo $data['firstname'],$data['lastname']; ?></td>
    <td width="200px" data-column="Advance"><?php echo $data['advance'] ?></td>
    <td width="200px" data-column="Amount"><?php echo $data['total_amount'] ?></td>
</tr>
<?php 
}
?>
  </div>
</div>
</div>
</section>
</body>
</html>
<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>