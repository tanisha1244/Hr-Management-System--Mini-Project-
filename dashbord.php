<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fronthand/style2.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> 
    <title>Document</title>
</head>
<body>
<?php
session_start();
include('C:\xampp\htdocs\1php\conni.php');
$result = mysqli_query($conn,"SELECT * FROM employee");
$rows = mysqli_num_rows($result);
$s1= mysqli_query($conn,"SELECT * FROM leavemanagement");
$data=0;
while($s2=mysqli_fetch_array($s1))
{
  $fdate=strtotime($s2['todate']);
  $to_date = time();
  if(floor(($fdate-$to_date)/ (60 * 60 * 24))>=0)
  {
    $data=$data+1;
  }
}
$so=mysqli_query($conn,"SELECT * FROM notice");
$k= mysqli_num_rows($so);
?>
<?php include('admin.php') ?>
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>

      <div class="profile-details">
        <img src="2.JPG" alt="">
        <span class="admin_name">Param Singh</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Employee</div>
            <div class="number"><?php echo $rows?></div>
            <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Updated</span>
            </div>
          </div>
          <i class='bx bxs-user-plus cart ' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Working Days</div>
            <div class="number"><?php $fdate=strtotime("2011-10-11");
            $to_date = time();; 
            echo floor(($to_date-$fdate)/ (60 * 60 * 24));?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Updated</span>
            </div>
          </div>
          <i class='bx bxs-calendar cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Employee On Leave</div>
            <div class="number"><?php echo $data?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Updated</span>
            </div>
          </div>
          <i class='bx bx-line-chart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Notice</div>
            <div class="number"><?php echo $k; ?></div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Updated</span>
            </div>
          </div>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Notices</div>
          <hr>
          <div class="sales-details">
             <?php while($po=mysqli_fetch_array($so))
                  { echo $po['date'];
                    echo "<br>";
                    echo $po['noname'];
                    echo "<br>";
                    echo nl2br($po['desa']);
                    echo "<br>";
                    echo "<br>";
                    echo "<hr/>";
                  }
             ?>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">About</div>
          <hr>
          <ul class="top-sales-details">
            <p>
            In an Car organization, the accounts department performs various activities
             such as payroll processing, maintaining salary details of every employee, keeping
              track of deduction, and installment details, etc. Whereas, the establishment 
              section maintains a record of employee's all basic information like personal details (name, address, birth date, etc),
               service date details (joining date, increment date, etc.), bank details, pay scale, basic, and grade pay, etc.
               <br>
               <br>
               <hr>
              Accounts and establishment departments work together to 
              calculate leave and leave without pay (LWP) of all employees, and then process the salary. It takes effort, time, and 
              resources to carry out the entire procedure on a monthly basis. HR Payroll Management Software is a highly beneficial solution for organizations 
              or educational institutions struggling with such problems.
                </p>
          </ul>
        </div>
      </div>
    </div>
  </section> 
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
</body>
</html>