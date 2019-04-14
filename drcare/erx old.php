<?php
session_start();
include_once 'patient_connect.php';


$query1 = $DBcon->query("SELECT ID,NAME FROM hospital_csv");
$query2 = $DBcon->query("SELECT user_id, firstname, lastname FROM phr");

$hosptid = $_POST['hospitalid'];
$hosptquery = $DBcon->query("SELECT NAME FROM hospital_csv WHERE ID='$hosptid'");
$hosptrow=$hosptquery->fetch_assoc();
$hosptname=$hosptrow['NAME'];

/*
if(isset($_POST['btn-submit']))
{
  $patient_name = strip_tags($_POST['patient']);
  $patient_id =strip_tags($_POST['pid']);
  $patient_to =strip_tags($_POST['patient_to']);
  $patient_from =strip_tags($_POST['patient_from']);
  $medication = strip_tags($_POST['medication']);
  $sig =strip_tags($_POST['sig']);
  $dispense =strip_tags($_POST['dispense']);
  $dispense_unit =strip_tags($_POST['dispense_unit']);
  $hospital_name =$hosptname;
  $hospital_id =$hosptid;
  
  $patient_name = $DBcon->real_escape_string($patient_name);
  $patient_id =$DBcon->real_escape_string($patient_id);
  $patient_to =$DBcon->real_escape_string($patient_to);
  $patient_from =$DBcon->real_escape_string($patient_from);
  $medication = $DBcon->real_escape_string($medication);
  $sig =$DBcon->real_escape_string($sig);
  $dispense =$DBcon->real_escape_string($dispense);
  $dispense_unit =$DBcon->real_escape_string($dispense_unit);
  $hospital_name =$DBcon->real_escape_string($hospital_name);
  $hospital_id =$DBcon->real_escape_string($hospital_id);


$query="INSERT INTO erx (`patient_name`, `patient_id`, `patient_to`, `patient_from`, `medication`, `sig`, `dispense`, `dispense_unit`, `hospital_name`, `hospital_id`) VALUES ('$patient_name', '$patient_id', '$patient_to', '$patient_from' ,'$medication', '$sig', '$dispense', '$dispense_unit', '$hospital_name','$hospital_id')";
echo "hello";
//$query="INSERT INTO erx VALUES ('a',1,'a','a','20','Unit','a',2)";
$query3 = $DBcon->query($query);
echo mysqli_error($DBcon);


}*/
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
		  <p class="button-custom order-lg-last mb-0"><a href="dhome.html" class="btn btn-secondary py-2 px-3">Back</a></p>
	      <!--<p class="button-custom order-lg-last mb-0"><a href="patient_register.php" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p>-->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="patient_register.php" class="nav-link">Patient</a></li>
	        	<li class="nav-item"><a href="doctor_register.php" class="nav-link">Doctor</a></li>
	        	<li class="nav-item"><a href="hospital_portal/index.php" class="nav-link">Hospital</a></li>
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
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>PHR <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
</section>

<section>
<center>
<h2>Doctor's eRx Generator</h2>

<form action="cart.php" method="POST">

  Patient:<br>
<select name ="patient" id="patientid" onchange="myFunc1()">
  <?php

    while($rows=$query2->fetch_assoc())
    {
      $patient_lname=$rows['lastname'];
      $patient_name=$rows['firstname'];
      $patient_id=$rows['user_id'];
      echo "<option value='$patient_id'>$patient_name $patient_lname</option>";
    }

  ?>
</select>
<br><br>
<p>Patient ID: <br> <input type="text" id="patientidid" size="20" name="pid"></p>
  Mediaction:<br>
  <input type="text" name="medication">
  <br>
  SIG:<br>
  <input type="text" name="sig"><br>
  Dispense:<br>
  <input type="number" name="dispense"><br>

  Dispense Unit:<br>
  <select name="dispense_unit">
  <option value="volvo">Tablets</option>
  <option value="saab">Units</option>
  </select><br>

  <!--Hospital:<br>
  
  <select name="hospital" id="hosptid" onchange="myFunc()">
  <?php
  /*
  echo "jiewjroe";
  while($rows=$query1->fetch_assoc())
 {
  //echo $rows;
         $hospt_name=$rows['NAME'];
         $hospt_id=$rows['ID'];
  echo "<option value='$hospt_id'>$hospt_name</option>";

  }
  */
  ?>
  </select>
-->

  <br>
  <br>
<?php
echo "<p> Hospital Name <input type='text' size='75' name='hospital_name' value='$hosptname'></p>
	<p> Hospital ID <input type='text' id='hospitalid' size='20' name='hospital_id' value=$hosptid></p>"

?>

<p> Patient Availability <br> To:<input type="datetime-local" name="patient_to">  From:<input type="datetime-local" name="patient_from"></p>




 <script>
  function myFunc(){
//        alert("hello");
         var mylist=document.getElementById("hosptid");
         document.getElementById("dataid").value=mylist.value;

 }
</script>

<script>
  function myFunc1(){
//        alert("hello");
         var mylist=document.getElementById("patientid");
         document.getElementById("patientidid").value=mylist.value;

 }
</script>

  <br><br>
  <input type="submit" value="Submit" name="btn-submit">
</form>
</center>
</section>

<br>

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
