<?php
session_start();

//echo $_SESSION['userSession'];

if (isset($_SESSION['userSession'])=="") {
  header("Location: index.html");
}	
include_once 'patient_connect.php';

  $doct_id=$_SESSION['userSession'];
  
  $patient_id =strip_tags($_POST['pid']);
  $patient_to =strip_tags($_POST['patient_to']);
  $patient_from =strip_tags($_POST['patient_from']);
  $medication = strip_tags($_POST['medication']);
  $sig =strip_tags($_POST['sig']);
  $dispense =strip_tags($_POST['dispense']);
  $dispense_unit =strip_tags($_POST['dispense_unit']);
  $hospital_name =strip_tags($_POST['hospital_name']);
  $hospital_id =strip_tags($_POST['hospital_id']);
  $medication =strip_tags($_POST['medication']);
  $message =strip_tags($_POST['message']);
  $medatt =strip_tags($_POST['medatt']);
  
  //$patient_name = $DBcon->real_escape_string($patient_name);
  $patient_id =$DBcon->real_escape_string($patient_id);
  $patient_to =$DBcon->real_escape_string($patient_to);
  $patient_from =$DBcon->real_escape_string($patient_from);
  $medication = $DBcon->real_escape_string($medication);
  $sig =$DBcon->real_escape_string($sig);
  $dispense =$DBcon->real_escape_string($dispense);
  $dispense_unit =$DBcon->real_escape_string($dispense_unit);
  $hospital_name =$DBcon->real_escape_string($hospital_name);
  $hospital_id =$DBcon->real_escape_string($hospital_id);
  $message =$DBcon->real_escape_string($message); 
  $medatt =$DBcon->real_escape_string($medatt);
  
  $patientquery= $DBcon->query("SELECT firstname, lastname, email, contact, address FROM phr WHERE user_id = '$patient_id'");
  $hospitalquery= $DBcon->query("SELECT NAME, EMAIL, ADDRESS, TELEPHONE, ZIP FROM hospital_csv WHERE ID = '$hospital_id'");
  $doctorquery= $DBcon->query("SELECT firstname, lastname, email, city, pincode, practice_type FROM doctor_entries WHERE user_id ='$doct_id'");
  $patientrow=$patientquery->fetch_assoc();
  $hospitalrow=$hospitalquery->fetch_assoc();
  $doctorrow=$doctorquery->fetch_assoc();
  $patfname=$patientrow['firstname'];
  $patlname=$patientrow['lastname'];
  $patient_name = $patfname.' '.$patlname;
  
  $patemail=$patientrow['email'];
  $patcontact=$patientrow['contact'];
  $patadd=$patientrow['address'];
  
  $hosptname=$hospitalrow['NAME'];
  $hosptemail=$hospitalrow['EMAIL'];
  $hosptcontact=$hospitalrow['TELEPHONE'];
  $hosptadd=$hospitalrow['ADDRESS'];
  $hosptzip=$hospitalrow['ZIP'];
  
  $docfname=$doctorrow['firstname'];
  
  $doclname=$doctorrow['lastname'];
  $docname=$docfname.' '.$doclname;
  $docemail=$doctorrow['email'];
  $doccity=$doctorrow['city'];
  $docpincode=$doctorrow['pincode'];
  $docpractice=$doctorrow['practice_type'];
  
 // echo $docfname;
  
 //if (isset($_POST['btn-send'])) {
//	 echo isset($_POST['btn-send']);
     $query="INSERT INTO erx (`patient_name`, `patient_id`, `patient_to`, `patient_from`, `medication`, `sig`, `dispense`, `dispense_unit`, `hospital_name`, `hospital_id`,`doctor_id`,`doctor_name`,`message`,`medatt`,`email`) VALUES ('$patient_name', '$patient_id', '$patient_to', '$patient_from' ,'$medication', '$sig', '$dispense', '$dispense_unit', '$hospital_name','$hospital_id','$doct_id','$docname','$message','$medatt','$hosptemail')";


	$query3 = $DBcon->query($query);
	//header("Location: dhome.php");
    
 // }
$DBcon->close();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ReNT</title>
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
	      <p class="button-custom order-lg-last mb-0"><a href="hospdbs/view.php" class="btn btn-secondary py-2 px-3">Back</a></p>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="viewPatient.php" class="nav-link">View Personal Health Records</a></li>
	        	<li class="nav-item"><a href="hospdbs/view.php" class="nav-link">Send eRx to Hospital</a></li>
				<li class="nav-item"><a href="chatdoc/login.php" class="nav-link">Chat with a Patient</a></li>
              
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row no-gutters">
				<?php
					echo" <div class='col-md-5 p-md-5 img img-2 mt-5 mt-md-0'>	
					
					<h2>Patient Details</h2>
					
					<span> First Name: </span>$patfname <br>
					<span> Last Name: </span>$patlname   <br>
					<span> Contact Number: </span>$patcontact <br>
					<span> Email Address: </span>$patemail   <br>
					<span> Address: </span>$patadd  <br>
					 
					
					<br>
					<h2>Hospital Details</h2>
					
					<span> Name: </span>$hosptname <br>
					<span> Email Address: </span>$hosptemail  <br>
					<span> Contact Number: </span>$hosptcontact <br>
					<span> Address: </span>$hosptadd   <br>
					<span> Zip code(Pincode): </span>$hosptzip <br>
					
					
				
					</div>";
				?>
					<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	          	<div class="pl-md-5 ml-md-5">
	             <?php
				 echo"
				 
		            <h2 class='mb-4' style='font-size: 28px;'>Authorized Doctor: $docname</h2>
					
					<h4>Doctor Details</h4>
					
					<span> Name: </span>$docname<br>
					<span> Email: </span>$docemail<br>
					<span> City: </span>$doccity <br>
					<span> Pincode: </span>$docpincode <br>
					<span> Practice Type: </span>$docpractice <br>
					
	            </div>";
				?>
	          </div>
	          <div class="pl-md-5 ml-md-5 mb-5">
							
							
							
							
							
		
							<div class="row mt-5 pt-2">
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-first-aid-kit"></span></div>
										<div class="text">
										<?php 
										echo"
										
							
											<h3>Medication</h3>
											
						
											<p>Medication '$medication' <br> Dispense: $dispense <br> Dispense Unit: $dispense_unit <br> SIG :$sig</p>" ?>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-dropper"></span></div>
										<div class="text">
										<?php
										echo"
											<h3>NURSE MEDICAL ATTENTION </h3>
											
										
											<p>'$medatt'
								</p>" ?>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-experiment-results"></span></div>
										<div class="text">
										<?php
										echo"
										
										<h3>Patient Availabilty </h3>
											
											<p>$patient_to <br> $patient_from</p>
		"?>							
									</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-heart-rate"></span></div>
										<div class="text">
										<?php
										echo"
											<h3>Doctors Message</h3>
											<p>'$message'</p>"?>
										</div>
									</div>
								</div>
								<!--<p class="button-custom order-lg-last mb-0"><a href="#" name="btn-send" class="btn btn-secondary py-2 px-3">Send eRX</a></p>-->
								
								<div class="d-md-flex">
                        	    <div class="form-group ml-md-4">
                                 <input type="submit"  value="SUBMIT TO SYSTEM" onclick="myFunction()" class="btn btn-secondary py-2 px-4" name="btn-send">

                        	     </div>
								 <script>
								 function myFunction()
								 {
									 alert("eRx submitted Successfully");
								 }
								 </script>
								
                              </div>
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
