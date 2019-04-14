<?php

session_start();

session_destroy();
//$loginid=$_GET['loginid'];

header("location:../../patient_register.php");
?>
