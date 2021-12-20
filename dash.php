<?php
  include "conni.php";
  session_start();
 
  if(isset($_POST['login'])){ 
		$email = $_POST['username1'];
    $_SESSION["email"]=$email;
		$password = $_POST['password1'];
	$res = mysqli_query($conn,"select* from employeelogin where empemail='$email'and password='$password'");
$result=mysqli_fetch_array($res);
}
$t=$_SESSION["email"];
// echo $t;
   $sql= mysqli_query($conn,"select empid from employeelogin where empemail='$t'");
   $data = mysqli_fetch_array($sql);
   $e=$data['empid'];
   $_SESSION["emp"]=$e;
  //  echo $_SESSION["emp"];
   $sq2=mysqli_query($conn,"select * from employee where empid=$e");
   $data2 = mysqli_fetch_array($sq2);

  ?>

<link rel="stylesheet" href="dash.css">
<body>

  <div class="main-container">
    <header class="block">
      <ul class="header-menu horizontal-list">
        <li>
          <a class="header-menu-tab" href="dash.php"><span class="icon entypo-cog scnd-font-color"></span>Home</a>
        </li>
        <li>
          <a class="header-menu-tab" href="profilecard.php"><span class="icon fontawesome-user scnd-font-color"></span>Profile</a>
        </li>
        <li>
          <a class="header-menu-tab" href="noticeemp.php"><span class="icon fontawesome-envelope scnd-font-color"></span>Notice</a>
          <a class="header-menu-number" href="#4">1</a>
        </li>
      </ul>
      <div class="profile-menu">
        <p>Me <a href="#26"><span class="entypo-down-open scnd-font-color"></span></a></p>
        <div class="profile-picture small-profile-picture">
          <img width="40px" alt="Anne Hathaway picture" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/Anne_Hathaway_Face.jpg">
        </div>
      </div>
    </header>

    <!-- LEFT-CONTAINER -->
    <div class="left-container container">
      <div class="menu-box block">
        <!-- MENU BOX (LEFT-CONTAINER) -->
        <h2 class="titular">MENU BOX</h2>
        <ul class="menu-box-menu">
          <li>
            <a class="menu-box-tab" href="#6"><span class="icon fontawesome-envelope scnd-font-color"></span>Messages<div class="menu-box-number">24</div></a>
          </li>
          <li>
            <a class="menu-box-tab" href="#8"><span class="icon entypo-paper-plane scnd-font-color"></span>Notice<div class="menu-box-number">3</div></a>
          </li>
          <li>
            <a class="menu-box-tab" href="index.php"><span class="icon entypo-cog scnd-font-color"></span>Logout</a>
          </li>   
        </ul>
         </div>
        </div>
 <!-- MIDDLE-CONTAINER -->
    <div class="middle-container container">
      <div class="profile block">
        <!-- PROFILE (MIDDLE-CONTAINER) -->
        <a class="add-button" href="#28"><span class="icon entypo-plus scnd-font-color"></span></a>
        <div class="profile-picture big-profile-picture clear">
          <img width="150px" alt="Anne Hathaway picture" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/Anne_Hathaway_Face.jpg">
        </div>
        <h1 class="user-name"><?php echo $data2['firstname'].' '.$data2['lastname'] ?></h1>
        <div class="profile-description">
          <p class="scnd-font-color">I am a Web developer</p>
        </div>
      </div>
        
    </div>
   <!-- RIGHT-CONTAINER -->
    <div class="right-container container">
      <div class="calendar-day block" style="height:400px;">
        <!-- CALENDAR DAY (RIGHT-CONTAINER) -->
        <div class="arrow-btn-container">
          <a class="arrow-btn left" href="#200"><span class="icon fontawesome-angle-left"></span></a>
          <h2 class="titular"><?php echo date("l"); ?></h2>
          <a class="arrow-btn right" href="#201"><span class="icon fontawesome-angle-right"></span></a>
        </div>
        <p class="the-day"><?php echo date("d"); ?></p>

        <a href="addattdence.php"><button class="add-event button" name="button1">Attendance</button></a>
        <br>
        <a href="leaveattdence.php"><button class="add-event button" style="background:red;">Leave</button></a>
    
        
</div>
      </div>
    </div> <!-- end right-container -->
  </div> <!-- end main-container -->
</body>
