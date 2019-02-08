<?php include('server.php'); ?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="main_style.css" /> 
<title>FM03-Register</title>
</head>

<body>
<div id="header">
         <center><h1>FM03: Internet of Things Project </h1></center>
</div>

<div id="nav">
	<div>
    	<ul>
        <li><a href="website.php" target="_parent">Home</a></li>  
        <li><a href="">Contact</a></li> 
        <li><a href="login.php" target="_parent">Login</a></li>   
        </ul>
	</div>
</div>

<div class="content">
  <div class="form">
    <form class="main-form" method="post" action="register.php">
    <h3 style="padding-left:0.5px">Create Account</h3>
    	<!--display validation errrors here-->
        <?php include('errors.php');?>
    	  <div class="input-group">
          	<label id="text">Username</label>
          	<input type="text" name="username" value="<?php echo $username; ?>"/>
           </div>
           
    	  <div class="input-group">
          	<label id="text">Email</label>
          	<input type="text" name="email" value="<?php echo $email; ?>"/>
           </div>
           
    	  <div class="input-group">
          	<label id="text">Password</label>
          	<input type="password" name="password_1"/>
           </div>
           
    	  <div class="input-group">
          	<label id="text">Confirm password</label>
          	<input type="password" name="password_2"/>
           </div>           
     	  <div class="input-group">
          <button type="submit" class="btn" name="reg_user">Register</button>
           </div>            
          <p class="message" style="font-size:12px">Already registered? <a href="login.php">Log In</a></p>
    </form>

  </div>
</div>

<div id="footer">
	<center><h6 style="color:white">Copyrights 2019</h6></center>
</div>
</body>
</html>
