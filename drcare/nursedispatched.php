<?php
  
  //$loginid=$_GET['loginid'];
  include 'patient_connect.php';
  session_start();
  $useridd=$_SESSION['useridd'];
  $loginquery=$DBcon->query("SELECT loginid from phr WHERE user_id='$useridd'");
  $loginrow=$loginquery->fetch_assoc();
  $loginid=$loginrow['loginid'];
  
  
  if (isset($_SESSION['userSession'])=="") {
  header("Location: index.html");
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
	     	      <p class="button-custom order-lg-last mb-0">
		 
		  <?php
		  echo "<a href=phome.php?loginid=",$loginid," class='btn btn-secondary py-2 px-3'>Back</a>"
		  ?>
		  </p>
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

				
				
	        </ul>
	      </div>
	    </div>
	  </nav>
	
	<br>
	<center>
	<h1> The following Nurse is dispatched: </h1>
	<?php

	include 'patient_connect.php';
	//session_start();
	$useridd=$_SESSION['useridd'];
	if($useridd==''){
		
		echo "No results to display";	
	}
	else{
	if($result = $DBcon->query("SELECT * FROM `schedule` WHERE `patient_id`='$useridd'"))
	{
		if($result->num_rows>0)
		{
			echo "<table id='myTable' border='2' cellpadding='10'>";
			
			echo "<tr><th>sch_id</th><th>patient_id</th><th>patient_name</th><th>nurse_id</th><th>nurse_name</th><th>patient_contact</th><th>nurse_contact</th></tr>";
			
			while($row = $result->fetch_object())
			{
				echo "<tr>";
				echo "<td>" . $row->sch_id . "</td>";
				echo "<td>" . $row->patient_id . "</td>";
				echo "<td>" . $row->patient_name . "</td>";
				echo "<td>" . $row->nurse_id . "</td>";
				echo "<td>" . $row->nurse_name . "</td>";
				echo "<td>" . $row->patient_contact . "</td>";
				echo "<td>" . $row->nurse_contact . "</td>";
				echo "</tr>";
				
			}
			echo"</table>";
		}
		
		else
		{
			echo "No results to display";
		}
	}
	else
	{
		echo "Error: " . $DBcon->error;
	}
	}
	
	$DBcon->close();
  
?>
	
	<br>
	<p class="button-custom order-lg-last mb-0">
	<button onclick="printFunction()" class="btn btn-secondary py-2 px-3">Print</button></p><br>
	</center>
	<script>
		function printFunction(){
		window.print();
		
		}
		</script>
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

