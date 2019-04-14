<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FORM</title>
</head>

<body>
<form method="post">
<table>

	<tr>
		<td>Firstname</td>
		<td><input type="text" name="firstname" /></td>
	</tr>
	<tr>
		<td>Lastname</td>
		<td><input type="text" name="lastname" /></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" /></td>
	</tr>
	<tr>
		<td>Mobile Number</td>
		<td><input type="text" name="mobileno" /></td>
	</tr>
<tr>
		<td>Gender</td>
		<td><input type="text" name="gender" /></td>
	</tr>

<tr>
		<td>Address</td>
		<td><input type="text" name="address" /></td>
	</tr>

<tr>
		<td>Bloodgroup</td>
		<td><input type="text" name="bgroup" /></td>
	</tr>

<tr>
		<td>Height(cms)</td>
		<td><input type="text" name="height" /></td>
	</tr>
<tr>
		<td>Weight(kgs)</td>
		<td><input type="text" name="weight" /></td>
	</tr>


<script>
function myFunction() {
    alert("Hello! User has been added!");
}
</script>

	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" onclick="myFunction();" value="submit"/></td>
	</tr>
	<tr>
		<td><button type="button"><a href="home.php">Back</a></button></td>
	
	</tr>

</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$firstname=$_POST['firstname'] ;
					$lastname= $_POST['lastname'] ;					
					$email=$_POST['email'] ;
					$mobileno=$_POST['mobileno'] ;
	$gender=$_POST['gender'] ;

	$address=$_POST['address'] ;

	$bloodgroup=$_POST['bgroup'] ;

	$height=$_POST['height'] ;
	$weight=$_POST['weight'] ;


												
		 mysqli_query($DBcon,"INSERT INTO `books`(firstname, lastname, email, mobileno, gender, address, bloodgroup, height, weight) 
		 VALUES ('$firstname','$lastname','$email','$mobileno','$gender','$address','$bloodgroup','$height','$weight')");				
	        }
?>
</form>
</body>
</html>
