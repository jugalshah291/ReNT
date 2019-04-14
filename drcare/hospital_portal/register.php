<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
	
	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
      $city = strip_tags($_POST['city']);
      $pincode = strip_tags($_POST['pincode']);
      $type = strip_tags($_POST['type']);
      $erxread = strip_tags($_POST['erxread']);
      $nurse = strip_tags($_POST['nurse']);
	
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	$city = $DBcon->real_escape_string($city);
      $pincode = $DBcon->real_escape_string($pincode);
      $type = $DBcon->real_escape_string($type);
      $erxread = $DBcon->real_escape_string($erxread);
      $nurse = $DBcon->real_escape_string($nurse);

	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT email FROM hospital_entries WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO hospital_entries(username,email,password,city,pincode,hospital_type,erxread,remote_nurses) VALUES('$uname','$email','$hashed_password','$city','$pincode','$type','$erxread','$nurse')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doctor Registration</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Hospital Registration</h2><hr />
        
        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
          
        <div class="form-group">
         <h4><label for="username"> Username </label></h4>
        <input type="text" class="form-control" placeholder="Username" name="username" required  />
        </div>
        
        <div class="form-group">
<h4><label for="email"> Email ID </label></h4>        
<input type="email" class="form-control" placeholder="Email address" name="email" required  />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
<h4><label for="password"> Password </label></h4>
        <input type="password" class="form-control" placeholder="Enter your Password" name="password" required  />
        </div>

        <div class="form-group">
<h4><label for="city"> City </label></h4>
        <input type="city" class="form-control" placeholder="Your City" name="city" required  />
        </div>
 
        <div class="form-group">
<h4><label for="pincode"> Pincode </label></h4>
        <input type="pincode" class="form-control" placeholder="Your pincode" name="pincode" required  />
        </div>

<div class="form-group">
<h4><label for="type"> Hospital Type </label></h4>
        <input type="practice" class="form-control" placeholder="Type of Hospital ?" name="type" required  />
        </div>

<div class="form-group">
<h4><label for="erxread"> eRx Facility </label></h4>
        <input type="erxread" class="form-control" placeholder="eRx reading available?" name="erxread" required  />
        </div>

<div class="form-group">
<h4><label for="nurse"> Freelance Nurses </label></h4>
        <input type="nurse" class="form-control" placeholder="Nurses Available for remote service ?" name="nurse" required  />
        </div>

       
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> 
            <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>
        </div> 
      
      </form>

    </div>
    
</div>

</body>
</html>
