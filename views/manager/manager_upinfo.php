<?php	
	session_start();
	if(!isset($_SESSION['user'])){  
		header("location: ../../index.html");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Manager Information</title>
</head>
<body>
		<form action="regCheck.php" method="POST">
			<fieldset style="width:500px" align="center">
				<legend>MANAGER INFORMATION</legend>

				Full Name</br>
				<input type="text" name="fullName" value=""></br>
				New Password</br>
				<input type="Password" name="password1" value="" required></br>
				Confirm New Password</br>
				<input type="Password" name="password2" value="" required></br>
				
				Contact Number</br>
				<input type="text" name="contactNum" value=""></br><hr>
				<input type="submit" name="change_manInfo" value="Change"> |
				<a href="manager_home.php">Homepage</a>
			</fieldset>
		</form>
</body>
</html>