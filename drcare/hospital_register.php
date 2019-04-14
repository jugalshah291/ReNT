<?php

session_start();
/*
if (isset($_SESSION['userSession'])!="") {
	header("Location: hospital_register.php");
}*/
//INSERT INTO `hospital_csv`(`NAME`, `EMAIL`, `ADDRESS`, `CITY`, `ZIP`, `TELEPHONE`, `COUNTRY`, `STATE_ID`, `OWNER`) VALUES ('$hname','$emailid','$address','$city','$pincode','$telephone','$country','$state','$hosptype')

require_once 'hospital_connect.php';

if(isset($_POST['btn-signup'])) {
	
	$username = strip_tags($_POST['uname']);
	$emailid = strip_tags($_POST['emailid']);
	$pwd = strip_tags($_POST['pwd']);
    $city = strip_tags($_POST['city']);
    $pincode = strip_tags($_POST['pincode']);
	$hosptype = strip_tags($_POST['hosptype']);
	$erxfac = strip_tags($_POST['erxfac']);
	//$free = strip_tags($_POST['free']);

  $hname = strip_tags($_POST['hname']);
  $address = strip_tags($_POST['address']);
  $state = strip_tags($_POST['state']);
  $country = strip_tags($_POST['country']);
  $telephone = strip_tags($_POST['telephone']);
  

	
	$username = $DBcon->real_escape_string($username);
	$emailid = $DBcon->real_escape_string($emailid);
	$pwd = $DBcon->real_escape_string($pwd);
	$city = $DBcon->real_escape_string($city);
	$pincode = $DBcon->real_escape_string($pincode);
    $hosptype = $DBcon->real_escape_string($hosptype);
    $erxfac = $DBcon->real_escape_string($erxfac);	
	//$free = $DBcon->real_escape_string($free);

    $hname = $DBcon->real_escape_string($hname);
    $address = $DBcon->real_escape_string($address);
    $state = $DBcon->real_escape_string($state);
    $country = $DBcon->real_escape_string($country);
    $telephone = $DBcon->real_escape_string($telephone);

$DBcon->query("INSERT INTO `hospital_csv`(`NAME`, `EMAIL`, `ADDRESS`, `CITY`, `ZIP`, `TELEPHONE`, `COUNTRY`, `STATE_ID`, `OWNER`) VALUES ('$hname','$emailid','$address','$city','$pincode','$telephone','$country','$state','$hosptype')");
	
	$hashed_password = password_hash($pwd, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT emailid FROM hospital_entries WHERE emailid='$emailid'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO hospital_entries(username,emailid,pwd,city,pincode,hosptype,erxfac) VALUES('$username','$emailid','$hashed_password','$city','$pincode','$hosptype','$erxfac')";

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
if (isset($_POST['btn-login'])) {
  
  $emailid = strip_tags($_POST['emailid']);
  $pwd = strip_tags($_POST['pwd']);
  
  $emailid = $DBcon->real_escape_string($emailid);
  $pwd = $DBcon->real_escape_string($pwd);
  
  $query = $DBcon->query("SELECT user_id, emailid, pwd FROM hospital_entries WHERE emailid='$emailid'");
  $row=$query->fetch_array();
  
  $count = $query->num_rows; // if email/password are correct returns must be 1 row
  
  if (password_verify($pwd, $row['pwd']) && $count==1) {
    $_SESSION['userSession'] = $row['user_id'];
    header("Location: hhome.php");
  } else {
    $msg = "<div class='alert alert-danger'>
          <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
        </div>";
  }
  $DBcon->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HospitalRegister</title>
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
	      <p class="button-custom order-lg-last mb-0"><a href="index.html" class="btn btn-secondary py-2 px-3">Back</a></p>
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
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Patient <i class="ion-ios-arrow-forward"></i></span></p>
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
	            <h2 class="mb-4">Hospital Registration</h2>
	            
	          </div>
	          <form method="post" class="appointment-form ftco-animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    				<!--<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
                            
	    				</div>-->
                        <div class="d-md-flex">
                            <div class="form-group">
				             
                                <input type="text" class="form-control" placeholder="Username" name="uname">
                             </div>
                        
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
                     
                                <input type="text" class="form-control" placeholder="Hospital Name" name="hname">
                             </div>
                        
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
							
                                <input type="text" class="form-control" placeholder="Email id" name="emailid">
								
                            </div>
                            
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="pwd">
                            </div>
                            
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
                     
                                <input type="text" class="form-control" placeholder="Telephone" name="telephone">
                             </div>
                        
                        </div>
                         <!--<div class="d-md-flex">
                            <div class="form-group">
                                <select class="form-control" placeholder = "Category" name="category">
                                  <option value="" disabled selected>	Category</option>
                                  <option value="doctor">Doctor</option>
                                  <option value="patient">Patient</option>
                                </select>
                            </div>
                            
                        </div>  -->                    

                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address" name="address">
                            </div>
                            
                        </div>

					   <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" name="city">
                            </div>
                            
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="State" name="state">
                            </div>
                            
                        </div>
						
						   <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Pincode" name="pincode">
                            </div>
                            
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Country" name="country">
                            </div>
                            
                        </div>


						
						<div class="d-md-flex">
                            <div class="form-group">
                                <select class="form-control" placeholder = "Hospital Type" name="hosptype">
                                  <option value="" disabled selected>Hospital Type</option>
                                  <option value="NON-PROFIT">NON-PROFIT</option>
                                  <option value="PROPRIETARY">PROPRIETARY</option>
                                   <option value="GOVERNMENT-STATE">GOVERNMENT-STATE</option>                            
								</select>
                            </div>
                            
                        </div>   
						
                       					
						
						
                        <div class="d-md-flex">
                           <div class="form-group">
                                <select class="form-control" placeholder = "eRx Facility" name="erxfac">
                                  <option value="" disabled selected>eRx Facility</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>                            
                </select>
                            </div>

							
                            <div class="form-group ml-md-4">
                                <input type="submit" onclick="myFunction() "value="Register" class="btn btn-secondary py-3 px-4" name='btn-signup'>
                            </div>
							<script>
							function myFunction()
						
							{
							alert("Hospital Registered Successfully");	
								
							}
							</script>
                            
                        </div>
                        
	    				
	    			</form>
    			</div>
    			<div class="col-lg-6 p-5 bg-counter aside-stretch">
						<h3 class="vr">ReNT</h3>
    					<div class="heading-section ftco-animate mb-5">
	          				<span class="subheading">Already Registered? Login Here.</span>
	            			<h2 class="mb-4">Hospital Login</h2>
	            		</div>
	            		<form method="post" >
	            		<div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="emailid">
                            </div>
                            
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="pwd">
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
                <li><a href="patient_register.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Patient</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Doctor</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Hospital</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
            </div>
          </div>
          <!--<div class="col-md">
            <div class="text-right-middle">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="patient_register.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Patient</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Doctor</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Hospital</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
            </div>

            <!--Any kind of services we need to add-->
            <!--<div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Neurolgy</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Dentist</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Ophthalmology</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Cardiology</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Surgery</a></li>
              </ul>
            </div>-->
          <!--</div> -->
          <!--<div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
          	<div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Opening Hours</h2>
            	<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>-->
        <!--<div class="row"> For Copyright Reserved 
         <!-- <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> | ReNT</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>
          
        </div>-->

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
