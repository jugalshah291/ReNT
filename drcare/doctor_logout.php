<?php
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: doctor_register.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: doctor_home.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession']);
	header("Location: doctor_register.php");
}
?>