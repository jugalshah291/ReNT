<?php
$loginid=$_GET['loginid'];
session_start();
if (isset($_SESSION['userSession'])=="") {
  header("Location: index.html");
}
$useridd=$_SESSION['useridd'];
require_once 'phr_connect.php';
$formquery=$DBcon->query("SELECT * FROM phr WHERE loginid='$loginid'");
$formrow=$formquery->fetch_assoc();
								$fname=$formrow['firstname'];
								$lname=$formrow['lastname'];
								$mname=$formrow['middlename'];
								$mail=$formrow['email'];
								$contact =$formrow['contact'];
								$address =$formrow['address'];
								$city =$formrow['city'];
								$pincode=$formrow['pincode'];
								$pregender =$formrow['gender'];
								$ethnicity =$formrow['ethnicity'];
								$sin = $formrow['sin'];
								
								$med = $formrow['med'];
								$medhmo =$formrow['medhmo'];
								$hmoid =$formrow['hmoid'];
								$medcare =$formrow['medcare'];
								$provider =$formrow['provider'];
								$insid =$formrow['insid'];
								
								$relation =$formrow['relation'];
								$emergency =$formrow['emergency'];
								$econtact =$formrow['econtact'];
								$eaddress =$formrow['eaddress'];
								$epincode =$formrow['epincode'];
								$pcpname =$formrow['pcpname'];
								$pcpcontact=$formrow['pcpcontact'];
								$pcpaddress=$formrow['pcpaddress'];
								$pcppincode=$formrow['pcppincode'];
								$prediknown  =$formrow['diknown'];
								$predistype =$formrow['distype'];
								$preambulation=$formrow['ambulation'];
								$prevision =$formrow['vision'];
								
								$premethodofcom=$formrow['methodofcom'];
								$prelanofcom =$formrow['lanofcom'];
								$prehearingprob=$formrow['hearingprob'];
		    					$preBladdercontrol=$formrow['Bladdercontrol'];
								$predentures =$formrow['dentures'];

/*if (isset($_SESSION['userSession'])!="") {
	header("Location: phr_home.php");
}*/

if(isset($_POST['btn-signup'])) {
	$userid=$formrow['user_id'];
	$fname = strip_tags($_POST['firstname']);
	$lname = strip_tags($_POST['lastname']);
	$mname = strip_tags($_POST['middlename']);
     $email = strip_tags($_POST['email']);
$contact = strip_tags($_POST['contact']);
$address = strip_tags($_POST['address']);
$city = strip_tags($_POST['city']);
$pincode = strip_tags($_POST['pincode']);
$gender = isset($_POST['gender']) ? strip_tags($_POST['gender']) : $pregender;
$ethnicity = strip_tags($_POST['ethnicity']);
$sin = strip_tags($_POST['sin']);

$med = strip_tags($_POST['med']);
$medhmo = strip_tags($_POST['medhmo']);
$hmoid = strip_tags($_POST['hmoid']);
$medcare = strip_tags($_POST['medcare']);
$provider = strip_tags($_POST['provider']);
$insid = strip_tags($_POST['insid']);

$relation = strip_tags($_POST['relation']);
$emergency = strip_tags($_POST['emergency']);
$econtact = strip_tags($_POST['econtact']);
$eaddress = strip_tags($_POST['eaddress']);
$epincode = strip_tags($_POST['epincode']);
$pcpname = strip_tags($_POST['pcpname']);
$pcpcontact = strip_tags($_POST['pcpcontact']);
$pcpaddress = strip_tags($_POST['pcpaddress']);
$pcppincode = strip_tags($_POST['pcppincode']);
$diknown = isset($_POST['diknown']) ? strip_tags($_POST['diknown']) : $prediknown;
$distype = isset($_POST['distype']) ? strip_tags($_POST['distype']): $predistype;
$ambulation = isset($_POST['ambulation']) ? strip_tags($_POST['ambulation']): $preambulation;
$vision =isset($_POST['vision']) ? strip_tags($_POST['vision']): $prevision;

$methodofcom = isset($_POST['methodofcom']) ? strip_tags($_POST['methodofcom']): $premethodofcom;
$lanofcom =isset($_POST['lanofcom']) ? strip_tags($_POST['lanofcom']): $prelanofcom;
$hearingprob =isset($_POST['hearingprob']) ? strip_tags($_POST['hearingprob']): $prehearingprob;
$Bladdercontrol =isset($_POST['Bladdercontrol']) ? strip_tags($_POST['Bladdercontrol']): $preBladdercontrol;
$dentures =isset($_POST['dentures']) ? strip_tags($_POST['dentures']): $predentures;



$fname = $DBcon->real_escape_string($fname);
$lname = $DBcon->real_escape_string($lname);
$mname = $DBcon->real_escape_string($mname);
$email = $DBcon->real_escape_string($email);
$contact = $DBcon->real_escape_string($contact);
$address = $DBcon->real_escape_string($address);
$city = $DBcon->real_escape_string($city);
$pincode = $DBcon->real_escape_string($pincode);
$gender = $DBcon->real_escape_string($gender);
$ethnicity = $DBcon->real_escape_string($ethnicity);
$sin = $DBcon->real_escape_string($sin);

$med = $DBcon->real_escape_string($med);
$medhmo = $DBcon->real_escape_string($medhmo);
$hmoid = $DBcon->real_escape_string($hmoid);
$medcare = $DBcon->real_escape_string($medcare);
$provider = $DBcon->real_escape_string($provider);
$insid = $DBcon->real_escape_string($insid);

$relation = $DBcon->real_escape_string($relation);
$emergency = $DBcon->real_escape_string($emergency);
$econtact = $DBcon->real_escape_string($econtact);
$eaddress = $DBcon->real_escape_string($eaddress);
$epincode = $DBcon->real_escape_string($epincode);
$pcpname = $DBcon->real_escape_string($pcpname);
$pcpcontact = $DBcon->real_escape_string($pcpcontact);
$pcpaddress = $DBcon->real_escape_string($pcpaddress);
$pcppincode = $DBcon->real_escape_string($pcppincode);
$diknown = $DBcon->real_escape_string($diknown);
$distype = $DBcon->real_escape_string($distype);
$ambulation = $DBcon->real_escape_string($ambulation);
$vision = $DBcon->real_escape_string($vision);

$methodofcom = $DBcon->real_escape_string($methodofcom);
$lanofcom = $DBcon->real_escape_string($lanofcom);
$hearingprob = $DBcon->real_escape_string($hearingprob);
$Bladdercontrol = $DBcon->real_escape_string($Bladdercontrol);
$dentures = $DBcon->real_escape_string($dentures);
/*
$mothername = $DBcon->real_escape_string($mothername);
$momdob = $DBcon->real_escape_string($momdob);
$motherlive = $DBcon->real_escape_string($motherlive);
$momdisease = $DBcon->real_escape_string($momdisease);
$momdeceased = $DBcon->real_escape_string($momdeceased);
$fathername = $DBcon->real_escape_string($fathername);
$fatherdob = $DBcon->real_escape_string($fatherdob);
$dadlive = $DBcon->real_escape_string($dadlive);
$daddisease = $DBcon->real_escape_string($daddisease);
$daddeceased = $DBcon->real_escape_string($daddeceased);
*/	
	$check_email = $DBcon->query("SELECT email FROM phr WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==1) {
		
		//echo $gender;
		//$query = "INSERT INTO phr(firstname,lastname,middlename,email,contact,address,city,pincode,gender,ethnicity,sin,med,medhmo,hmoid,medcare,provider,insid,relation,emergency,econtact,eaddress,epincode,pcpname,pcpcontact,pcpaddress,pcppincode,diknown,distype,ambulation,vision,methodofcom,lanofcom,hearingprob,Bladdercontrol,dentures,mothername,momdb,motherlive,momdisease,momdeceased,fathername,fatherdob,dadlive,daddisease,daddeceased) VALUES('$fname','$lname','$mname','$email','$contact','$address','$city','$pincode','$gender','$ethnicity','$sin','$med','$medhmo','$hmoid','$medcare','$provider','$insid','$relation','$emergency','$econtact','$eaddress','$epincode','$pcpname','$pcpcontact','$pcpaddress','$pcppincode','$diknown','$distype','$ambulation','$vision','$methodofcom','$lanofcom','$hearingprob','$Bladdercontrol','$dentures')";
		$query = "UPDATE phr SET firstname='$fname',lastname='$lname',middlename='$mname',email='$email',contact='$contact',address='$address',city='$city',pincode='$pincode',gender='$gender',ethnicity='$ethnicity',sin='$sin',med='$med',medhmo='$medhmo',hmoid='$hmoid',medcare='$medcare',provider='$provider',insid='$insid',relation='$relation',emergency='$emergency',econtact='$econtact',eaddress='$eaddress',epincode='$epincode',pcpname='$pcpname',pcpcontact='$pcpcontact',pcpaddress='$pcpaddress',pcppincode='$pcppincode',diknown='$diknown',distype='$distype',ambulation='$ambulation',vision='$vision',methodofcom='$methodofcom',lanofcom='$lanofcom',hearingprob='$hearingprob',Bladdercontrol='$Bladdercontrol',dentures='$dentures' WHERE user_id='$userid'";
		//$query="UPDATE phr SET firstname='$fname',lastname='$lname',middlename='$mname',email='$email',contact='$contact',address='$address',city='$city',pincode='$pincode',gender='$gender',ethnicity='$ethnicity',sin='$sin',  med='$med', medhmo='$medhmo',hmoid='$hmoid',medcare='$medcare',provider='$provider',insid='$insid',relation='$relation',emergency='$emergency',econtact='$econtact',eaddress='$eaddress',epincode='$epincode',pcpname='$pcpname',pcpcontact='$pcpcontact',pcpaddress='$pcpaddress' WHERE user_id=$userid";
		//$query="UPDATE phr SET firstname='$fname', WHERE user_id=$userid";
		if ($DBcon->query($query)) {
			
			echo mysqli_error($DBcon);
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			
			echo mysqli_error($DBcon);
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
  
  $sin = strip_tags($_POST['sin']);
  
  $sin = $DBcon->real_escape_string($sin);
  
  $query = $DBcon->query("SELECT * FROM phr WHERE sin='$sin'");
  $row=$query->fetch_array();
  
  $count = $query->num_rows; // if email/password are correct returns must be 1 row
  
  if (password_verify($sin, $row['sin']) && $count==1) {
    $_SESSION['userSession'] = $row['user_id'];
    header("Location: index.html");
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
    <title>ReNT-PHR</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
		
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
			    <div class="col-md-3"></div>
    			<div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">Enter your Personal Health Record</span>
	            <h2 class="mb-4">Edit PHR</h2>
	            
	          </div>
			  
	          <form method="post" class="appointment-form ftco-animate">
<h2 class="mb-4">General Information</h2>
<br>
	    				<div class="d-md-flex">
		    				<div class="form-group">
							<?php
																$fname=$formrow['firstname'];
								$lname=$formrow['lastname'];
								$mname=$formrow['middlename'];
								$mail=$formrow['email'];
								$contact =$formrow['contact'];
								$address =$formrow['address'];
								$city =$formrow['city'];
								$pincode=$formrow['pincode'];
								$pregender =$formrow['gender'];
								$ethnicity =$formrow['ethnicity'];
								$sin = $formrow['sin'];
								
								$med = $formrow['med'];
								$medhmo =$formrow['medhmo'];
								$hmoid =$formrow['hmoid'];
								$medcare =$formrow['medcare'];
								$provider =$formrow['provider'];
								$insid =$formrow['insid'];
								
								$relation =$formrow['relation'];
								$emergency =$formrow['emergency'];
								$econtact =$formrow['econtact'];
								$eaddress =$formrow['eaddress'];
								$epincode =$formrow['epincode'];
								$pcpname =$formrow['pcpname'];
								$pcpcontact=$formrow['pcpcontact'];
								$pcpaddress=$formrow['pcpaddress'];
								$pcppincode=$formrow['pcppincode'];
								$prediknown  =$formrow['diknown'];
								$predistype =$formrow['distype'];
								$preambulation=$formrow['ambulation'];
								$prevision =$formrow['vision'];
								
								$premethodofcom=$formrow['methodofcom'];
								$prelanofcom =$formrow['lanofcom'];
								$prehearingprob=$formrow['hearingprob'];
		    					$preBladdercontrol=$formrow['Bladdercontrol'];
								$predentures =$formrow['dentures'];
								//echo $mname;
								echo "<input type='text' class='form-control' name='firstname' value='$fname'>
							    
		    				</div>
							
		    				<div class='form-group ml-md-4'>
		    					<input type='text' class='form-control' placeholder='Last Name' name='lastname' value='$lname'>
		    				</div>
</div>
                        <div class='d-md-flex'>
                            <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Middle Name' name='middlename'value='$mname'>
                             </div>
                        
                        </div>
                        <div class='d-md-flex'>
                            <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Email id' name='email' value='$mail'>
                            </div>
                            
                        </div>
                        <div class='d-md-flex'>
                            <div class='form-group'>
                                <input type='type' class='form-control' placeholder='Contact Number' name='contact' value='$contact'>
                            </div>
                            </div>
                        <div class='d-md-flex'>
                            <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Address' name='address' value='$address'>
                            </div>
                        </div>
                        <div class='d-md-flex'>
                            <div class='form-group'>
                                <input type='text' class='form-control' placeholder='City' name='city' value='$city'>
                            </div>
                            
                        </div>

                            <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Pincode' name='pincode' value='$pincode'>
                            </div>
<div class='d-md-flex'>
                            <div class='form-group'>
                                <select class='form-control' placeholder = 'Gender' name='gender'>
                                  <option value='' disabled selected>Gender Type</option>
                                  <option value='male'>Male</option>
                                  <option value='female'>Female</option>
                                  <option value='donotdisclose'>Do not Dislcose</option>
                                </select>
								<li>$pregender</li>
</div>
                            </div>
<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Ethnicity' name='ethnicity' value='$ethnicity'>
                            </div>

<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Social Security Pin #' name='sin' value='$sin'>
                            </div>

<br>


<h2 class='mb-4'>Health Insurance Information</h2>

<div class='form-group'>
                                <input type='text' class='form-control' placeholder='MEDICAID#' name='med' value='$med'>
                            </div>

<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Name of Medicaid HMO' name='medhmo' value='$medhmo'>
                            </div>
<div class='form-group'>
                                <input type='text' class='form-control' placeholder='HMO ID#' name='hmoid' value='$hmoid'>
                            </div>

<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Name of Medicaid HMO Care Manager' name='medcare' value='$medcare'>
                            </div>

	<h2 class='mb-4'>Private Health Insurance</h2>

<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Provider' name='provider' value='$provider'>
                            </div>
<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Insurance ID#' name='insid' value='$insid'>
                            </div>

<h2 class='mb-4'>Emergency Contact</h2>

<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Relationship' name='relation' value='$relation'>
                            </div>
<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Name of Emergency Contact' name='emergency' value='$emergency'>
                            </div>
<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Contact' name='econtact' value='$econtact'>
                            </div>
<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Address of Emergency Contact' name='eaddress' value='$eaddress'>
                            </div>
<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Pincode' name='epincode' value='$epincode'>
                            </div>

<h2 class='mb-4'>Primary Care Physician</h2>

<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Name' name='pcpname' value='$pcpname'>
                            </div>
<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Contact' name='pcpcontact' value='$pcpcontact'>
                            </div>

<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Address' name='pcpaddress' value='$pcpaddress'>
                            </div>
<div class='form-group'>
                                <input type='text' class='form-control' placeholder='Pincode' name='pcppincode' value='$pcppincode'>
                            </div>

<h2 class='mb-4'>General Disability Information</h2>

<div class='form-group'>
                                <select class='form-control' placeholder = 'Disease Status' name='diknown'>
                                  <option value='' disabled selected>Disease Status</option>
                                  <option value='known'>Known</option>
                                  <option value='unknown'>Unknown</option>
                                 </select>
								 <li>$prediknown</li>


                            </div>


<div class='form-group'>
                                <select class='form-control' placeholder = 'Disability Type' name='distype'>
                                  <option value='' disabled selected>Disability Type</option>
                                  <option value='indis'>Intellectual disability</option>
                                  <option value='downs'>Downs Syndrome</option>
                                  <option value='palsy'>Celebral Palsy</option>
								  
								  
<option value='spina'>Spina Bifida</option>

<option value='autism'>Autism Disorder</option>

                                </select>
								<li>$predistype</li>

                            </div>


<div class='form-group'>
                                <select class='form-control' placeholder = 'Ambulation' name='ambulation'>
                                  <option value='' disabled selected>Ambulation</option>
                                  <option value='indep'>Independent</option>
                                  <option value='cane'>Cane</option>
                                  <option value='walker'>Walker</option>
								  <option value='wchair'>Wheelchair</option>

								  <option value='braces'>Braces</option>
								  <option value='prothesis'>Prothesis</option>

                                </select>
								<li>$preambulation</li>

                            </div>

<div class='form-group'>
                                <select class='form-control' placeholder = 'Vision' name='vision'>
                                  <option value='' disabled selected>Vision</option>
                                  <option value='glasses'>Glasses</option>
                                  <option value='legally'>Legally Blind</option>                              
 </select>
 <li>$prevision</li>
                            </div>

<h2 class='mb-4'>Communication</h2>

<div class='form-group'>
                                <select class='form-control' placeholder = 'Method of Communication' name='methodofcom' >
                                  <option value='' disabled selected>Method of Communication</option>
                                  <option value='speech'>Speech</option>
                                  <option value='gesture'>Gesture</option>                  
                                  <option value='comdevice'>Communication Device</option>
                                  <option value='signs'>Signs</option>                              
            
 </select>                      
 <li>$premethodofcom</li>
</div>

<div class='form-group'>
<select class='form-control' placeholder = 'Language of Communication' name='lanofcom'>
                                  <option value='' disabled selected>Language of Communication</option>
                                  <option value='english'>English</option>
                                  <option value='spanish'>Spanish</option>                  
                                  <option value='other'>Other</option>       
 </select>                                  
 <li>$prelanofcom</li>
</div>

<div class='form-group'>
<select class='form-control' placeholder = 'Hearing Problems' name='hearingprob' >
                                  <option value='' disabled selected>Hearing Problems</option>
                                  <option value='yes'>yes</option>
                                  <option value='no'>No</option>                  
                                 
 </select>                                  
 <li>$prehearingprob</li>
 </div>

<h2 class='mb-4'>Personal Care</h2>

<div class='form-group'>
<select class='form-control' placeholder = 'Bladder Control' name='Bladdercontrol'>
                                  <option value='' disabled selected>Bladder Control</option>
                                  <option value='yes'>yes</option>
                                  <option value='no'>no</option>                  
 </select>       
 <li>$preBladdercontrol</li> 
                          </div>

<div class='form-group'>
<select class='form-control' placeholder = 'Dentures' name='dentures'>
                                  <option value='' disabled selected>Dentures</option>
                                  <option value='yes'>yes</option>
                                  <option value='no'>No</option>                         
 </select>  
 <li>$predentures</li> 
                          </div>"
							
							?>
<!--
<h2 class='mb-4'>Family History</h2>


<h4 class='mb-4'><u>MOTHER</u></h4>

                            <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Name' name='mothername'>
                            </div>
                             <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Date of Birth' name='momdob'>
                            </div>
<div class='form-group'>
<select class='form-control' placeholder = 'Mother Living?' name='motherlive'>
                                  <option value='' disabled selected>Mother Living?</option>
                                  <option value='yes'>Yes</option>
                                  <option value='no'>No</option>                  
 </select>                                  
 </div>
                              
<div class='form-group'>
<input type='text' class='form-control' placeholder='Any Previous disease encountered?(Please specify)' name='momdisease'>
                            </div>

                             <div class='form-group'>
                                <input type='text' class='form-control' placeholder='If deceased,cause of death?' name='momdeceased'>
                            </div>

<h4 class='mb-4'><u>FATHER</u></h4>
                            <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Name' name='fathername'>
                            </div>
                             <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Date of Birth' name='fatherdob'>
                            </div>
<div class='form-group'>
<select class='form-control' placeholder = 'Father Living?' name='dadlive'>
                                  <option value='' disabled selected>Father Living?</option>
                                  <option value='yes'>Yes</option>
                                  <option value='no'>No</option>                  
 </select>                                                            </div>
                             <div class='form-group'>
                                <input type='text' class='form-control' placeholder='Any Previous disease encountered?(Please specify)' name='daddisease'>
                            </div>

                             <div class='form-group'>
                                <input type='text' class='form-control' placeholder='If deceased,cause of death?' name='daddeceased'>
                            </div>
-->
                        <div class="d-md-flex">
                            <div class="form-group ml-md-4">
                               <a href="phome.php"><input onclick="myFunction()" type="submit" value="Update" class="btn btn-secondary py-3 px-4" name='btn-signup'></a>
                            </div>
														<script>
                             function myFunction() {
                              alert("PHR Updated Successfully!");
                                   }
                              </script>
                            
                        </div>	    				
	    			</form>
    			</div>
				<div class="col-md-3"></div>
				<!--
    			<div class="col-lg-6 p-5 bg-counter aside-stretch">
						<h3 class="vr">ReNT</h3>
    					<div class="heading-section ftco-animate mb-5">
	          				<span class="subheading">Already Entered your PHR Details?</span>
	            			<h2 class="mb-4">VIEW YOUR RECORD</h2>
	            		</div>
	            		<form method="post" >
	            		<div class="d-md-flex">
                            <div class="form-group">
							     <h2 class="mb-4">Enter your SSN</h2>
                                <input type="text" class="form-control" placeholder="Social Security Number" name="sin">
                            </div>
                            
                        </div>
                        <div class="d-md-flex">
                        	<div class="form-group ml-md-4">
                                <input type="submit" value="Submit" class="btn btn-secondary py-2 px-4" name="btn-login">
                        	</div>
                        </div>
                        </form>    
                </div>
				-->

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
