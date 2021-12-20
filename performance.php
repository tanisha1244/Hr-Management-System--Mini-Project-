<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fronthand/style2.css">
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
        <span class="dashboard">Attendance</span>
      </div>
    
      <div class="profile-details">
        <img src="2.JPG" alt="">
        <span class="admin_name">Param Singh</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

<div class="home-content">
    <div class="overview-boxes">
    <table class='table table-bordered table-hover'>
           <tr style="background-color: #f0d3ef;">
          <th style="padding: 10px;  text-align: left; 
        font-size: 18px;" width="200px">Employee Id</th>
          <th style="padding: 10px;  text-align: left; 
        font-size: 18px;"  width="200px">Full Name</th>
        <th style="padding: 10px;  text-align: left; 
        font-size: 18px;"  width="200px">Date.</th>
          <th style="padding: 10px;  text-align: left; 
        font-size: 18px;" width="200px">In Time.</th>
          <th style="padding: 10px;  text-align: left; 
        font-size: 18px;"  width="200px">Out Time.</th>
          <th style="padding: 10px;  text-align: left; 
        font-size: 18px;" width="200px">Overtime.</th>
         <th style="padding: 10px;  text-align: left; 
        font-size: 18px;" width="200px">Bonus</th>
         </tr>

<?php

include "conni.php"; // Using database connection file here
$sql1=mysqli_query($conn,"select e.empid,e.firstname,e.lastname,o.dates,o.intime,o.outtime from employee e join overtime o where o.empid=e.empid");
while($data = mysqli_fetch_array($sql1))
{?>
   <td width="200px" data-column="Employee Id"><?php echo $data['empid']; ?></td>
    <td width="200px" data-column="Full Name"><?php echo $data['firstname'],' ',$data['lastname']; ?></td>
    <td width="200px" data-column="Date"><?php echo $data['dates']; ?></td>
    <td width="200px" data-column="In Time."><?php echo $data['intime']; ?></td>
    <td width="200px" data-column="Out Time."><?php echo $data['outtime']; ?></td>
    <td width="200px" style="color:red" data-column="Overtime"><?php 
    $a=(strtotime($data['outtime'])-strtotime($data['intime']));
    $q=floor((($a)/60)/60);
    $i=0;
    if($q>7)
       {
           echo "overtime";
           $i=1;
       }
    else if($q<6)
     {
        echo "Delay"; 
     } ?></td>
    <td width="200px" data-column="Bonus"><?php $bon=0; if($GLOBALS['i']==1)
    {
       $bon=$GLOBALS['q']*100;
      mysqli_query($conn,"update salary set bonus=$bon where empid='".$data['empid']."'");
    }
     echo $bon; ?></td>
     </tr>
<?php	
}
?>
</table>

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