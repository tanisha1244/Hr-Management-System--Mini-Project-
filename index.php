
<html>  
<head>  
    <title>Admin login system</title>  
    <link rel = "stylesheet" type = "text/css" href = "fronthand/style.css">   
</head>  
<body style="line-height: 1.5;
    color: #212529;
    text-align: left;"> 
<div class="main" style="background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url('bag.jpg');
    box-sizing: border-box;
     height:100%">
<div style="background-color: rgba(192,192,192, 0.5);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;">
   <div style="left:10%; float:left; ">
      <h1 style=" padding: 8px 0;
    margin: 100px 0 0 70px;
      text-align:center;
      font-size:3.5em;
      color:#191970;
      font-family: 'IM Fell English SC', serif;
font-family: 'Imperial Script', cursive;
font-family: 'Kaushan Script', cursive;
font-family: 'Kings', cursive;
font-family: 'Playfair Display', serif;">HR MANAGEMENT</h1>
</div>
<div > 
    <form action="loginpg.php" method="post">
        <div class="login-box" style="left:50%;
float:left;">
            <h1> Admin</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Adminname"
                         name="username" value="" required>
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="" required>
            </div>
  
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
</div>
<br/>
 <div  style=" left:80%;
float:right;">
                <form action ="dash.php" method="post" >
                <div class="login-box" style="left:75%;
float:left;">
            <h1>Employee</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Empemail"
                         name="username1" value="" required>
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password1" value="" required>
            </div>
  
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
</div>
</div>
</div>
</body>     
</html>  
