<?php
session_start();

if (isset($_SESSION['userSession'])=="") {
  header("Location: index.html");
}


$abc=$_SESSION['hospital_emailid'];
$h_email=implode( ", ", $abc );


//$h_email=$_SESSION['h_email'];

require_once 'hospital_connect.php';

if(isset($_POST['btn-signup'])) {
  
  $name = strip_tags($_POST['name']);
  $email = strip_tags($_POST['email']);
  $age = strip_tags($_POST['age']);
  $sex = strip_tags($_POST['sex']);
      $cont = strip_tags($_POST['contact']);
      //$hospname = strip_tags($_POST['hospname']);
      $mondayfrom = strip_tags($_POST['mondayfrom']);
	  $mondayto = strip_tags($_POST['mondayto']);
      $tuesdayfrom = strip_tags($_POST['tuesdayfrom']);
	  $tuesdayto = strip_tags($_POST['tuesdayto']);
	  $wednesdayfrom = strip_tags($_POST['wednesdayfrom']);
	  $wednesdayto = strip_tags($_POST['wednesdayto']);
	  $thursdayfrom = strip_tags($_POST['thursdayfrom']);
	  $thursdayto = strip_tags($_POST['thursdayto']);
	  $fridayfrom = strip_tags($_POST['fridayfrom']);
	  $fridayto = strip_tags($_POST['fridayto']);
	  $saturdayfrom = strip_tags($_POST['saturdayfrom']);
	  $saturdayto = strip_tags($_POST['saturdayto']);
	  $sundayfrom = strip_tags($_POST['sundayfrom']);
	  $sundayto = strip_tags($_POST['sundayto']);
     
  
  $name = $DBcon->real_escape_string($name);
   $email = $DBcon->real_escape_string($email);
  $age = $DBcon->real_escape_string($age);
  $sex = $DBcon->real_escape_string($sex);
  $cont = $DBcon->real_escape_string($cont);
  //$hospname = $DBcon->real_escape_string($hospname);
  $mondayfrom = $DBcon->real_escape_string($mondayfrom);
  $mondayto = $DBcon->real_escape_string($mondayto);
  $tuesdayfrom = $DBcon->real_escape_string($tuesdayfrom);
  $tuesdayto = $DBcon->real_escape_string($tuesdayto);
  $wednesdayfrom = $DBcon->real_escape_string($wednesdayfrom);
  $wednesdayto = $DBcon->real_escape_string($wednesdayto);
  $thursdayfrom = $DBcon->real_escape_string($thursdayfrom);
  $thursdayto = $DBcon->real_escape_string($thursdayto);
  $fridayfrom = $DBcon->real_escape_string($fridayfrom);
  $fridayto = $DBcon->real_escape_string($fridayto);
 $saturdayfrom = $DBcon->real_escape_string($saturdayfrom);
 $saturdayto = $DBcon->real_escape_string($saturdayto);
 $sundayfrom = $DBcon->real_escape_string($sundayfrom);
 $sundayto = $DBcon->real_escape_string($sundayto);

  
 
  $check_email = $DBcon->query("SELECT email FROM weeksched2 WHERE email='$email'");
  //$count=$check_email->num_rows;
  $count=0;
  if ($count==0) {
    
$query7 = "INSERT INTO nursedb (`Name`, `Age`, `Sex`, `Contact`, `H_EMAIL`, `N_EMAIL`) VALUES('$name','$age','$sex','$cont', '$h_email', '$email')";
$DBcon->query($query7);

$nursequery="SELECT NurseID FROM nursedb WHERE NurseID=(SELECT MAX(NurseID) FROM nursedb)";
$nurseresult=$DBcon->query($nursequery);
$nursedata=$nurseresult->fetch_assoc();
$nurseid=$nursedata['NurseID'];


    $query = "INSERT INTO weeksched2 (`NurseID`, `Day`, `Name`, `Timefrom`, `timeto`, `H_EMAIL`) VALUES('$nurseid', 'Monday','$name','$mondayfrom','$mondayto', '$h_email')";
    $query1 = "INSERT INTO weeksched2 (`NurseID`, `Day`, `Name`, `Timefrom`, `timeto`, `H_EMAIL`) VALUES('$nurseid', 'Tuesday','$name','$tuesdayfrom','$tuesdayto', '$h_email')";
	$query2 = "INSERT INTO weeksched2 (`NurseID`, `Day`, `Name`, `Timefrom`, `timeto`, `H_EMAIL`) VALUES('$nurseid', 'Wednesday','$name','$wednesdayfrom','$wednesdayto', '$h_email')";
	$query3 = "INSERT INTO weeksched2 (`NurseID`, `Day`, `Name`, `Timefrom`, `timeto`, `H_EMAIL`) VALUES('$nurseid', 'Thursday','$name','$thursdayfrom','$thursdayto', '$h_email')";
	$query4 = "INSERT INTO weeksched2 (`NurseID`, `Day`, `Name`, `Timefrom`, `timeto`, `H_EMAIL`) VALUES('$nurseid', 'Friday','$name','$fridayfrom','$fridayto', '$h_email')";
	$query5 = "INSERT INTO weeksched2 (`NurseID`, `Day`, `Name`, `Timefrom`, `timeto`, `H_EMAIL`) VALUES('$nurseid', 'Saturday','$name','$saturdayfrom','$saturdayto', '$h_email')";
	$query6 = "INSERT INTO weeksched2 (`NurseID`, `Day`, `Name`, `Timefrom`, `timeto`, `H_EMAIL`) VALUES('$nurseid', 'Sunday','$name','$sundayfrom','$sundayto', '$h_email')";
	
	
	
	$DBcon->query($query);
	$DBcon->query($query1);
	$DBcon->query($query2);
	$DBcon->query($query3);
	$DBcon->query($query4);
	$DBcon->query($query5);
	$DBcon->query($query6);
	
	
	/*
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
      
  }*/
}
  $DBcon->close();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>nurseform</title>
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
	      <p class="button-custom order-lg-last mb-0"><a href="hhome.php" class="btn btn-secondary py-2 px-3">Back</a></p>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
			
				<li class="nav-item"><a href="erxtable/view.php" class="nav-link">eRx Notification</a></li>
	        	<li class="nav-item"><a href="nurse_register.php" class="nav-link">Register a Nurse</a></li>
	        	<li class="nav-item"><a href="viewNurse.php" class="nav-link">Confirm Appointments</a></li>
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
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Hospital <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
			 <div class="col-md-3"></div>
    			<div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">Want to work apart from your work time? Register Here.</span>
	            <h2 class="mb-4">Nurse Availability Form</h2>
	            
	          </div>
	          <form method="post" class="appointment-form ftco-animate">
	    			
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name" name="name">
                             </div>
                        
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email id" name="email">
                            </div>
                            
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Age" name="age">
                            </div>
                            
                        </div>
						
					<div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Sex" name="sex">
                            </div>
                            
                      
                            
                        </div>
						
						 <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Contact" name="contact">
                            </div>
                            
                        </div>
						
                        <div class="d-md-flex">
                            <div class="form-group">
                                Monday From:<input type="time" class="form-control" name="mondayfrom">
								Monday to:<input type="time" class="form-control" name="mondayto">
                            </div>
                        </div>
						
						<div class="d-md-flex">
                            <div class="form-group">
                                Tuesday From:<input type="time" class="form-control" name="tuesdayfrom">
								Tuesday to:<input type="time" class="form-control" name="tuesdayto">
                            </div>
                        </div>
						<div class="d-md-flex">
                            <div class="form-group">
                                Wednesday From:<input type="time" class="form-control" name="wednesdayfrom">
								Wednesday to:<input type="time" class="form-control" name="wednesdayto">
                            </div>
                        </div>
						<div class="d-md-flex">
                            <div class="form-group">
                                Thursday From:<input type="time" class="form-control" name="thursdayfrom">
								Thursday to:<input type="time" class="form-control" name="thursdayto">
                            </div>
                        </div>
						<div class="d-md-flex">
                            <div class="form-group">
                                Friday From:<input type="time" class="form-control" name="fridayfrom">
								Friday to:<input type="time" class="form-control" name="fridayto">
                            </div>
                        </div>
						<div class="d-md-flex">
                            <div class="form-group">
                                Saturday From:<input type="time" class="form-control" name="saturdayfrom">
								Saturday to:<input type="time" class="form-control" name="saturdayto">
                            </div>
                        </div>
						<div class="d-md-flex">
                            <div class="form-group">
                                Sunday From:<input type="time" class="form-control" name="sundayfrom">
							Sunday to:<input type="time" class="form-control" name="sundayto">
                            </div>
                        </div>
						
		
                        <div class="d-md-flex">
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Register" onclick="myFunction()" class="btn btn-secondary py-3 px-4" name='btn-signup'>
                            </div><script>
							function myFunction()
						
							{
							alert("Nurse Availability Registered Successfully");	
								
							}
							</script>
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