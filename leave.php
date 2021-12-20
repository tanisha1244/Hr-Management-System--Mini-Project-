<?php
include "conni.php";
$sql1="select leavere,count(*) from leavemanagement group by leavere";
$result=mysqli_query($conn,$sql1);

while ($row= mysqli_fetch_array($result)) { 
   $productname[]  = $row['leavere']  ;
  $sales[] = $row['count(*)'];
} 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fronthand/style2.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> 
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php include('admin.php') ?>
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Leave Management</span>
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
        <button
        style="width: 150px;
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
	transition: 500ms ease-in-out"><a href="leavefile.php">add</a></button>
        </div>
</div>
</div>
<div style=" display: flex;
  align-items: center;
  justify-content: center;
  margin: 10px;
  width: 50%;
  height:400px;
  background: #fff;
  padding: 15px 14px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1)">
      <div style="width:50%;height: 200px;text-align:center">
            <h2 class="page-header" >Analytics Reports </h2>
            <div>Leave Type </div>
            <canvas  id="chartjs_bar"></canvas> 
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
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>
