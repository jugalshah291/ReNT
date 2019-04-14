<?php
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: registertest.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: patient_home.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession']);
	header("Location: patient_register.php");
}
