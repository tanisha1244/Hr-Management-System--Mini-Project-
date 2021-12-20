<?php
  include "conni.php";
  $so=mysqli_query($conn,"SELECT * FROM notice");
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
        <div class="profile-description" style="color:white; width:100%">
        <?php while($po=mysqli_fetch_array($so))
                  { echo $po['date'];
                    echo "<br>";
                    echo $po['noname'];
                    echo "<br>";
                    echo "<hr/>";
                    echo nl2br($po['desa']);
                    echo "<br>";
                    echo "<br>";
                    echo "<hr/>";
                    echo "<hr/>";
                  }
             ?>
        </div>
      </div>
        
    </div>
  </div> <!-- end main-container -->
</body>