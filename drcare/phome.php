<?php
  $loginid=$_GET['loginid'];
  include 'patient_connect.php';
  session_start();
  if (isset($_SESSION['userSession'])=="") {
  header("Location: index.html");
  }

  $userid=$DBcon->query("SELECT `user_id` FROM `phr` WHERE `loginid`='$loginid'");
  if($userid->num_rows>0)
  {  $user_id=$userid->fetch_assoc();
 // $useridd=implode(",",$user_id);
	$useridd=$user_id['user_id'];
  
	$_SESSION['useridd']=$useridd;
  }
  else{
	  
	  
	  	$useridd='';
		$_SESSION['useridd']=$useridd;
  }
 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Patient Home</title>
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
	      <p class="button-custom order-lg-last mb-0"><a href="patient_logout.php?logout" class="btn btn-secondary py-2 px-3">Logout</a></p>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	
				
	        	<li class="nav-item">
				<?php
				echo "<a href=phr_register.php?loginid=",$loginid," class='nav-link'>PHR Registration</a></li>";
				?>
				
			    <li class="nav-item">
				<?php
				echo "<a href=phr_view.php?loginid=",$loginid," class='nav-link'>Edit Your PHR</a></li>";
				?>
				
	        
				
	        	<li class="nav-item">
				<?php
				echo "<a href=docdbs/viewDoctor.php?loginid=",$loginid," class='nav-link'>Find Your Doctor</a></li>";
				?>
				
				<li class="nav-item">
				<?php
				echo "<a href=nursedispatched.php?loginid=",$useridd," class='nav-link'>Nurse Appointment</a></li>";
				?>
				
				<li class="nav-item">
				<?php
				echo "<a href=chatapp/chat/login.php?loginid=",$loginid," class='nav-link'>Chat With A Doctor</a></li>";
				?>
				
				<li class="nav-item">
				<?php
				echo "<a href=chatapp/chat/login.php?loginid=",$loginid," class='nav-link'>Chat With A Doctor</a></li>";
				?>
				
				<li class="nav-item">
				<?php
				echo "<a href=Video.php?loginid=",$loginid," class='nav-link'>Video Call</a></li>";
				?>

				
				
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
            <h1 class="mb-4">Helping You <span>Stay Happy One</span></h1>
            <h3 class="subheading">Everyday We Bring Hope and Smile to the Patient We Serve</h3>
            
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
		 
            <h1 class="mb-4"> Welcome <?php
		  
		  echo $loginid;
		  
		  ?>, We Care <span>About Your Health</span></h1>
            <h3 class="subheading">Your Health is Our Top Priority with Comprehensive, Affordable medical.</h3>
			<h4 class="subheading"> Choose from the following options </h4>
            
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-services ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
				 
          <div class="col-md-2 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-doctor"></span>
              </div>
             <div class="media-body p-2 mt-3">
			 <?php
                echo "<a href=phr_register.php?loginid=",$loginid," ><h3 class='heading'>PHR Registration</h3></a>";
				
				?>
                <p>Create your Personal Health Record, a wide array of credible health information, data, and knowledge.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-2 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-ambulance"></span>
              </div>
              <div class="media-body p-2 mt-3">
			  
                 <?php
                echo "<a href=phr_view.php?loginid=",$loginid," ><h3 class='heading'> Edit Your PHR</h3></a>";
				
				?>
                <p>Always keep you PHR updated</p>
              </div>
            </div>    
          </div>
          <div class="col-md-2 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stethoscope"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <?php
                echo "<a href=docdbs/viewDoctor.php?loginid=",$loginid," ><h3 class='heading'> Find your Doctors</h3></a>";
				
				?>
                <p>We make sure that any doctor you choose will provide you with the necessary care delivered to your doorstep via our qualified and experienced nurses.</p>
              </div>
            </div>      
          </div>
		  
		  <div class="col-md-2 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stethoscope"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <?php
                echo "<a href=nursedispatched.php?loginid=",$useridd," ><h3 class='heading'> Nurse Appointment</h3></a>";
				
				?>
                <p>Check Appointments with our qualified and experienced nurses.</p>
              </div>
            </div>      
          </div>
		  <div class="col-md-2 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stethoscope"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <?php
                echo "<a href=chatapp/chat/login.php?loginid=",$loginid," ><h3 class='heading'> Chat With A Doctor</h3></a>";
				
				?>
                <p>Check Appointments with our qualified and experienced nurses.</p>
              </div>
            </div>      
          </div>
		  
		  <div class="col-md-2 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stethoscope"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <?php
                echo "<a href=Video.php?loginid=",$loginid," ><h3 class='heading'> Video Call</h3></a>";
				
				?>
                <p>Video Call</p>
              </div>
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
