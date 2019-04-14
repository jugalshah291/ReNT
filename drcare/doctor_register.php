<?php
session_start();
require_once 'doctor_connect.php';
/*
if (isset($_SESSION['userSession'])!="") {
  header("Location: doctor_home.php");
  exit;
}*/

if (isset($_POST['btn-login'])) {
  
  $email = strip_tags($_POST['email']);
  $password = strip_tags($_POST['password']);
  
  $email = $DBcon->real_escape_string($email);
  $password = $DBcon->real_escape_string($password);
  
  $query = $DBcon->query("SELECT user_id, email, password FROM doctor_entries WHERE email='$email'");
  $row=$query->fetch_array();
  
  $count = $query->num_rows; // if email/password are correct returns must be 1 row
  
  if (password_verify($password, $row['password']) && $count==1) {
    $_SESSION['userSession'] = $row['user_id'];
    header("Location: dhome.php");
	//session_write_close();
	//exit;
  } else {
    $msg = "<div class='alert alert-danger'>
          <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
        </div>";
  }
  $DBcon->close();
}

if(isset($_POST['btn-signup'])) {
  
  $uname = strip_tags($_POST['username']);
  $email = strip_tags($_POST['email']);
  $upass = strip_tags($_POST['password']);
      $city = strip_tags($_POST['city']);
      $pincode = strip_tags($_POST['pincode']);
      $prac = strip_tags($_POST['practice']);
      $erx = strip_tags($_POST['erxfac']);
      $tele = strip_tags($_POST['telecon']);
	  $firstname = strip_tags($_POST['firstname']);
	  $lastname = strip_tags($_POST['lastname']);
  $uname = $DBcon->real_escape_string($uname);
  $email = $DBcon->real_escape_string($email);
  $upass = $DBcon->real_escape_string($upass);
  $city = $DBcon->real_escape_string($city);
      $pincode = $DBcon->real_escape_string($pincode);
      $prac = $DBcon->real_escape_string($prac);
      $erx = $DBcon->real_escape_string($erx);
      $tele = $DBcon->real_escape_string($tele);
	  $firstname = $DBcon->real_escape_string($firstname);
	  $lastname = $DBcon->real_escape_string($lastname);
  $hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
  
  $check_email = $DBcon->query("SELECT email FROM doctor_entries WHERE email='$email'");
  $count=$check_email->num_rows;
  
  if ($count==0) {
    
    $query = "INSERT INTO doctor_entries(username,firstname,lastname,email,password,city,pincode,practice_type,erx_facility,teleconsultation) VALUES('$uname','$firstname','$lastname','$email','$hashed_password','$city','$pincode','$prac','$erx','$tele')";

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
<?php

include('database_connection.php');

$message = '';

if(isset($_SESSION['user_id']))
{
 header('location:index.php');
}

if(isset($_POST["btn-signup"]))
{
 $username = trim($_POST["username"]);
 $password = trim($_POST["password"]);
 $category = trim($_POST["category"]);
 $check_query = "
 SELECT * FROM login 
 WHERE username = :username
 ";
 $statement = $connect->prepare($check_query);
 $check_data = array(
  ':username'  => $username
 );
 if($statement->execute($check_data)) 
 {
  if($statement->rowCount() > 0)
  {
   $message .= '<p><label>Username already taken</label></p>';
  }
  else
  {
   if(empty($username))
   {
    $message .= '<p><label>Username is required</label></p>';
   }
   if(empty($password))
   {
    $message .= '<p><label>Password is required</label></p>';
   }
   
   if($message == '')
   {
    $data = array(
     ':username'  => $username,
     ':password'  => password_hash($password, PASSWORD_DEFAULT),
	 ':category'  => $category
    );

    $query = "
    INSERT INTO login 
    (username, password, category) 
    VALUES (:username, :password, :category)
    ";
    $statement = $connect->prepare($query);
    if($statement->execute($data))
    {
     $message = "<label>Registration Completed</label>";
    }
   }
  }
 }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ReNT-Doctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="index.html">Re<span>NT</span></a>
	    		</div>
	    		<div class="col-lg-10 d-none d-md-block">
		    		<div class="row d-flex">
			    		<div class="col-md-4 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">Address: Thunder Bay ON P7B3L7</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">Email: webhealthinformatics@gmail.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">Phone: + 1235 2355 98</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </nav>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <p class="button-custom order-lg-last mb-0"><a href="patient_register.php" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="index.html" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="patient_register.php" class="nav-link">Patient</a></li>
                <li class="nav-item"><a href="doctor_register.php" class="nav-link">Doctor</a></li>
                <li class="nav-item"><a href="hospital_register.php" class="nav-link">Hospital</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Welcome to Remote Nursing Teleconsultation Portal</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Doctor <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">New User? Register Here.</span>
	            <h2 class="mb-4">Doctor Registration</h2>
	            
	          </div>
	          <form method="post" class="appointment-form ftco-animate">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name" name="firstname">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name" name="lastname">
		    				</div>
                            
	    				</div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                             </div>
                        
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email id" name="email">
                            </div>
                            
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <select class="form-control" placeholder = "Category" name="category">
                                  <option value="" disabled selected>	Category</option>
                                  <option value="doctor">Doctor</option>
                                  <option value="patient">Patient</option>
                                </select>
                            </div>
                            
                        </div>
				
						<div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your City" name="city">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Pincode" name="pincode">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <select class="form-control" placeholder = "Practice Type" name="practice">
                                  <option value="" disabled selected>Practice Type</option>
                                  <option value="Private">Private</option>
                                  <option value="Personal">Personal</option>
                                  <option value="Government">Government</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                               <!-- <input type="text" class="form-control" placeholder="eRx Provision" name="erxprovision">-->
                                <select class="form-control" placeholder = "eRx Facility Available" name="erxfac">
                                  <option value="" disabled selected>eRx Facility Available</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <!--<input type="text" class="form-control" placeholder="Teleconsultation Available" name="teleconsultation">-->
                                 <select class="form-control" placeholder = "Teleconsultation Available" name="telecon">
                                  <option value="" disabled selected>Teleconsultation Available</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Register" onclick="myFunction()" class="btn btn-secondary py-3 px-4" name='btn-signup'>
                            </div>
							<script>
							function myFunction()
						
							{
							alert("Doctor Registered Successfully");	
								
							}
							</script>
                            
                        </div>
                        
	    				
	    			</form>
    			</div>
    			<div class="col-lg-6 p-5 bg-counter aside-stretch">
						<h3 class="vr">ReNT</h3>
    					<div class="heading-section ftco-animate mb-5">
	          				<span class="subheading">Already Registered? Login Here.</span>
	            			<h2 class="mb-4">Doctor Login</h2>
	            		</div>
	            		<form method="post" >
	            		<div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                            
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="d-md-flex">
                        	<div class="form-group ml-md-4">
                                <input type="submit" value="Login" class="btn btn-secondary py-2 px-4" name="btn-login">
                        	</div>
                        </div>
                        </form>    
                </div>

          </div>
        </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo">Re<span>NT</span></h2>
              <p>Where the Patients meet Care</p>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Question?</h2>
            	<div class="block-23 mb-3">
                
	              <ul>
	                <li><a href="#"><span class="icon icon-map-marker"></span>Thunder Bay, ON</a></li>
	                <li><a href="#"><span class="icon icon-phone"></span>+2 392 3929 210</a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span>webhealthinformatics@gmail.com</a></li>
	              </ul>

	            </div>
            </div>
<!--For social media icons  -->
	            <!--<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>-->
            
          </div>
          <div class="col-md">
          <div class="text-center">
              <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class ="ftco-heading-2"> Links </h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Patient</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Doctor</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Hospital</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
            </div>
          </div>
         

      </div> 
         <div class="text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> | ReNT</p>
        </div>
    </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
