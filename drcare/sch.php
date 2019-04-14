<?php

session_start();
echo $_SESSION['userSession'];

if (isset($_SESSION['userSession'])=="") {
  header("Location: index.html");
}	
require_once 'phr_connect.php';

//$nurse_id=$_GET['id'];
echo $_SESSION['nurse_id'];
$nurse_id=$_SESSION['nurse_id'];
$erxid=$_POST['exrid'];

 $erxquery=$DBcon->query("SELECT * from erx WHERE erx_id='$erxid'");
  $erxrow=$erxquery->fetch_assoc();
  $patient_id=$erxrow['patient_id'];
  $hospital_id=$erxrow['hospital_id'];
  $medication = $erxrow['medication'];
  $sig =$erxrow['sig'];
  $dispense =$erxrow['dispense'];
  $dispense_unit =$erxrow['dispense_unit'];
  
  $patientquery= $DBcon->query("SELECT firstname, lastname, email, contact, address FROM phr WHERE user_id = '$patient_id'");
  $hospitalquery= $DBcon->query("SELECT NAME, EMAIL, ADDRESS, TELEPHONE, ZIP FROM hospital_csv WHERE ID = '$hospital_id'");
  $patientrow=$patientquery->fetch_assoc();
  $hospitalrow=$hospitalquery->fetch_assoc();
  $patfname=$patientrow['firstname'];
  $patlname=$patientrow['lastname'];
  $pname=$patfname.''.$patlname;
  $patemail=$patientrow['email'];
  $patcontact=$patientrow['contact'];
  $patadd=$patientrow['address'];
  
  $hosptname=$hospitalrow['NAME'];
  $hosptemail=$hospitalrow['EMAIL'];
  $hosptcontact=$hospitalrow['TELEPHONE'];
  $hosptadd=$hospitalrow['ADDRESS'];
  $hosptzip=$hospitalrow['ZIP'];
  
  include('patient_connect.php');
  
  $nursequery=$DBcon->query("SELECT Name, HospitalName, Contact FROM nursedb WHERE NurseID = '$nurse_id'");
  $nurserow=$nursequery->fetch_assoc();
  $nurse_name=$nurserow['Name'];
  $nurse_contact=$nurserow['Contact'];
  
  $finalquery="INSERT INTO `schedule`(`patient_id`, `patient_name`, `nurse_id`, `nurse_name`, `patient_contact`, `nurse_contact`) VALUES ('$patient_id','$pname','$nurse_id','$nurse_name','$patcontact','$nurse_contact')";
  
  $query3 = $DBcon->query($finalquery);
  
  $DBcon->close();
  
  

  

?>