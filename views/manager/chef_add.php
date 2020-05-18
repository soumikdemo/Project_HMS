<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


1<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
		<form action="regCheck.php" method="POST">
			<fieldset style="width:500px" align="center">
				
				<legend>CHEF REGISTRATION</legend>
				Username</br>
				<input type="text" name="usernameChef" value=""></br>
				Password</br>
				<input type="Password" name="password1" value="" required></br>
				Confirm Password</br>
				<input type="Password" name="password2" value="" required></br>
				Full Name</br>
				<input type="text" name="fullName" value=""></br>
				Contact Number</br>
				<input type="text" name="contactNum" value=""></br><hr>
					
				<input type="submit" name="signup" value="Sign Up"> |
				<a href="manager_home.php">Back to Homepage</a> 
			</fieldset> 

		</form>

</body>
</html>