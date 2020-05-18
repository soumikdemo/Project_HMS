<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
		<form action="regCheck.php" method="POST">
			<fieldset style="width:500px" align="center">	
				<legend>DELETE CHEF ACCOUNT</legend>
				Username</br>
				<input type="text" name="usernameMan" value=""></br>
				Confirm username</br>
				<input type="text" name="password1" value="" required></br></br>
				<input type="submit" name="remove chef" value="Remove chef"> |
				<a href="manager_home.php">Back to Homepage</a> 
			</fieldset> 

		</form>

</body>
</html>