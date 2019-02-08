<?php include('server.php') ?>
<?php 
		if(!isset($_SESSION['ip_addr'])){
			$_SESSION['msg'] = "IP address not added";
			header('location: account.php');
		}
	
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
        <title>FM03-User Record</title>
</head>

<body>
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
    
    <div class="add">
        <h3>Assign a Name to Network</h3>
        <p style="font-size:10px"></p>
      <form class="form-inline" action="/action_page.php">
          <input type="text" id="ip_name" placeholder="e.g. home, etc." name="ip_name" required>
          <button type="submit" name="submit1" id="btn">Submit</button>  
          </form>       
      </div>
</div>


<div id="footer">
	<center><h6 style="color:white">Copyrights 2019</h6></center>
</div>


</body>
</html>