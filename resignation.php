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
<?php include('admin.php') ?>
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Notice Board</span>
      </div>
      <div class="profile-details">
        <img src="2.JPG" alt="">
        <span class="admin_name">Param Singh</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <div class="home-content">
    <div class="overview-boxes">
    <div class="box" style="width:100%";>
        <div class="right-side">
        <div class="box-topic">Notice</div>
        <div>
            <form action="addnoitce.php" method="post">
            <div style="display:block;  padding:4px 2px;">
            <label>Title</label>
            <input type="text" name="title"  required >
            </div>
            <div style="display:block;  padding:4px 2px;">
            <label>Date:</label>
            <input type="date" name="datei" required >
            </div>
            <div style="display:block;  padding:4px 2px;">
            <label>Board:</label>
            <div>
            <textarea  name="board"  required ></textarea></div>
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