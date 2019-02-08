<?php
session_start();

	//initializing variables
    $username="";
    $email="";
    $errors=array();
	$ip_addr="";
	$ip_name="";


    //connect to the database
    $db=mysqli_connect("localhost", "root","", "registration");

    
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
	  // receive all input values from the form
	  $username = mysqli_real_escape_string($db, $_POST['username']);
	  $email = mysqli_real_escape_string($db, $_POST['email']);
	  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	
	  // form validation: ensure that the form is correctly filled ...
	  // by adding (array_push()) corresponding error unto $errors array
	  if (empty($username)) { array_push($errors, "Username is required"); }
	  if (empty($email)) { array_push($errors, "Email is required"); }
	  if (empty($password_1)) { array_push($errors, "Password is required"); }
	  if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	  }
	
	  // first check the database to make sure 
	  // a user does not already exist with the same username and/or email
	  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
	  $result = mysqli_query($db, $user_check_query);
	  $user = mysqli_fetch_assoc($result);
	  
	  if ($user) { // if user exists
		if ($user['username'] === $username) {
		  array_push($errors, "Username already exists");
		}
	
		if ($user['email'] === $email) {
		  array_push($errors, "email already exists");
		}
	  }
	
	  // Finally, register user if there are no errors in the form
	  if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
	
		$query = "INSERT INTO users (username, email, password) 
				  VALUES('$username', '$email', '$password')";
		mysqli_query($db, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Success!, you are now logged in.";
		header('location: account.php');
	  }
	}
	
	// LOGIN USER
		if (isset($_POST['login_user'])) {
		  $username = mysqli_real_escape_string($db, $_POST['username']);
		  $password = mysqli_real_escape_string($db, $_POST['password']);
		
		  if (empty($username)) {
			array_push($errors, "Username is required");
		  }
		  if (empty($password)) {
			array_push($errors, "Password is required");
		  }
		
		  if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
			  $_SESSION['username'] = $username;
			  $_SESSION['success'] = "Success! you are now logged in.";
			  header('location: account.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		  }
		}
		
	// SUBMIT IP ADDRESS	
	   // $ip = file_get_contents('https://api.ipify.org');
		
		//if (isset($_POST['submit_ip'])) {
			// receive all input values from the form
	  		//$first = mysqli_real_escape_string($db, $_POST['first']);
			//$second= mysqli_real_escape_string($db, $_POST['second']);
			//$third= mysqli_real_escape_string($db, $_POST['third']);
			//$fourth= mysqli_real_escape_string($db, $_POST['fourth']);
									
			//combine into one string
			//$ip_addr="{$first}{$second}{$third}{$fourth}";
			
			//check if IP already exits
			//if ($user['ip_addr'] === $ip_addr) {
		  	//		array_push($errors
			// "IP address already exists");
			//}
			
			//If no errors occured, record the ip address
			// if (count($errors) == 0) {
				//$query= "INSERT INTO users (ip_addr) VALUES('$ip_addr')";
				//$mysqli_query($db, $query);
				//$_SESSION['ip_addr']=$ip_addr;
				//$_SESSION['success'] = "Successfully Added Network.";
				//header('location: user-record.php');
			 //}
		//}else {
			//	array_push($errors, "IP address not saved. Try again. ");
			//}
?>