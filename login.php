<?php include('server.php') ?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="main_style.css" /> 
<title>FM03-Login</title>
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
  <form class="main-form" method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label id="text">Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label id="text">Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
  	</div>
     <p style="font-size:12px"> Not yet a member? <a href="register.php">Sign up</a></p>
  </form>


  </div>
</div>

<div id="footer">
	<center><h6 style="color:white">Copyrights 2019</h6></center>
</div>
</body>
</html>
