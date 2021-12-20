<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="fronthand/employeedetails.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> 
  <title>Display all records from Database</title>
</head>
<body>
<?php include('admin.php') ?>
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Employee</span>
      </div>
      <div class="profile-details">
        <img src="2.JPG" alt="">
        <span class="admin_name">Param Singh</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

<div class="home-content">
    <div class="overview-boxes">
        <div style="overflow-x:auto">
        <div>
            <button style="width: 150px;
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
	             transition: 500ms ease-in-out"><a href="employee.php" >add</a></button>
         </div>

         <table class='table table-bordered table-hover'>
          <tr style="background-color: #f0d3ef;">
          <th width="200px">Employee Id</th>
          <th width="200px">Full Name</th>
          <th width="200px">Address</th>
          <th width="200px">Mobile No.</th>
          <th width="200px">Email</th>
         <th width="200px">Department</th>
         <th width="200px">Member Since</th>
         <th width="200px">Gender </th>
         <!-- <th width="200px">Days </th> -->
         <th width="200px">Options </th>

         </tr>

<?php

include "conni.php"; // Using database connection file here
$sql1=mysqli_query($conn,"select l.empid,(l.todate-l.fordate) as w  from leavemanagement l order by l.empid asc");
$array = array();
while($data1 = mysqli_fetch_array($sql1))
{
  $array[]=$data1;
}
$i=0;
$records = mysqli_query($conn,"select * from employee"); // fetch data from database
while($data = mysqli_fetch_array($records))
{?>
  <tr>
    <td width="200px" data-column="Employee Id"><?php echo $data['empid']; ?></td>
    <td width="200px" data-column="Full Name"><?php echo $data['firstname'].' '.$data['lastname']; ?></td>
    <td width="200px" data-column="Address"><?php echo $data['address'],",",$data['city'],",",$data['state'],",",$data['pin']; ?></td>
    <td width="200px" data-column="Mobile No."><?php echo $data['mobile']; ?></td>
    <td width="200px" data-column="Email"><?php echo $data['email']; ?></td>
    <td width="200px" data-column="Department"><?php echo $data['dept']; ?></td>
    <td width="200px" data-column="Member Since"><?php echo $data['bdate']; ?></td>
    <td width="200px" data-column="Gender"><?php echo $data['gender']; ?></td>
    <!-- <td width="200px" data-column="Days"><?php 
    $to_date = time(); // Input your date here e.g. strtotime("2014-01-02")
$from_date = strtotime($data['bdate']);
// $day_diff = floor(($to_date - $from_date)/ (60 * 60 * 24));
if($array[$GLOBALS['i']]['empid']==$data['empid']){
  // echo $array[$GLOBALS['i']]['w'] ."\n";
  $v=strtotime($array[$GLOBALS['i']]['w']);
  $day_diff= floor(($to_date - $from_date-$v)/ (60 * 60 * 24));
 $GLOBALS['i']=$GLOBALS['i']+1;
 }
 else{ $day_diff=$day_diff= floor(($to_date - $from_date)/ (60 * 60 * 24));}
echo $day_diff; ?></td> -->
    <td width="200px" data-column="Options">
         <a href="edit.php ? empid= <?php echo $data['empid']; ?>" > 
        <i class='bx bxs-pencil' ></i></a>
        <a href="delete.php ? delt= <?php echo $data['empid']; ?>" ><i class='bx bx-trash' ></i></a>
    </td>


</tr>
<?php	
}
?>
</table>

<?php mysqli_close($conn); // Close connection ?>
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