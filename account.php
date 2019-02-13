<?php include('server.php') ?>
<?php 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="main_style.css" /> 
<title>FM03-User Account</title>
</head>

<body>
<div id="header">
         <center><h1>FM03: Internet of Things Project </h1></center>
</div>

<div id="nav">
	<div>
    	<ul>
        <li><a href="website.php" target="_parent">Home</a></li>
        <li><a href="">Settings</a></li> 
        <li> <a href="login.php?logout='1'">Logout</a>
         </li>   
        </ul>
	</div>
</div>

 <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
          <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>&times;</span>
      	</h3>
      </div>
  	<?php endif ?>
    
   <!-- logged in user information -->
	<?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>!</p>
     <?php endif ?>
     
    <div class="add">
        <h3>Add a Network</h3>
        <p style="font-size:14px">Your IP Address detected by the server is: 
		<strong><?php $ip = file_get_contents('https://api.ipify.org'); echo $ip; ?> </strong>.</p>
		<form class="form-inline" action="account.php">
          	<?php include('errors.php'); ?>
			 <label style="padding-left:15px"> Add this network and rename: </label>
			  <input type="text" name="ipname" value="<?php if(isset($ipname)){echo $ipname;} ?>" required>
			  <button type="submit" class="btn" name="submit_ip" >Submit</button>  
          </form>       
      </div>
</div>



<div id="footer">
	<center><h6 style="color:white">Copyrights 2019</h6></center>
</div>



</body>
</html>
