<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact Admin</title>
</head>
<body>
		<form>
			<fieldset style="width:500px" align="center">
				<legend>Contact Admin</legend>
				<b>Phone Number: </b>01521001020
				</br>
				<b>Email: </b>admin@sunhotals.com
				</br><hr>
				<a href="manager_home.php">Homepage</a></br>
			</fieldset>
		</form>
</body>
</html>