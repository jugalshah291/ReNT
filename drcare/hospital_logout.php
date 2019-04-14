<?php
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: hospital_register.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: hospital_home.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession']);
	header("Location: hospital_register.php");
}
