<?php
  include "conni.php";
  session_start();
  $e=$_SESSION["emp"];
  $sq2=mysqli_query($conn,"select * from employee where empid=$e");
   $data= mysqli_fetch_array($sq2);
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
 <!-- MIDDLE-CONTAINER -->
    <div class="middle-container container" style="width:100%">
      <div class="profile block" style="height:700px">
        <!-- PROFILE (MIDDLE-CONTAINER) -->
        <a class="add-button" href="#28"><span class="icon entypo-plus scnd-font-color"></span></a>
        <div class="profile-picture big-profile-picture clear">
          <img width="150px" alt="Anne Hathaway picture" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/Anne_Hathaway_Face.jpg">
        </div>
        <h1 class="user-name"><?php echo $data['firstname'].' '.$data['lastname'] ?></h1>
        <br>
        <div class="profile-description" >
             <p class="scnd-font-color"><h2>EmployeeId:</h2><?php echo $data['empid'] ?></p>
             <p class="scnd-font-color"><h2>Mobile:</h2> <?php echo $data['mobile'] ?></p>
             <p class="scnd-font-color"><h2>Email:</h2> <?php echo $data['email'] ?></p>
             <p class="scnd-font-color"><h2>Gender:</h2> <?php echo $data['gender'] ?></p>
             <p class="scnd-font-color"><h2>Department:</h2> <?php echo $data['dept'] ?></p>
        </div>
      </div>
        
    </div>
  </div> <!-- end main-container -->
</body>