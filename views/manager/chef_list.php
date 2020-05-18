<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Chef List</title>
</head>
<body>
		<form>
			<fieldset style="width:500px">
				<table border="1" align="center">
					<tr>
						<td colspan="3" align="center">
						Chef List
						</td>
					</tr>
					<tr>
						<td>Username</td>
						<td>Full Name</td>
						<td>Contact No</td>
					</tr>
					<tr>
						<td>Arik</td>
						<td>
							Fayaz Arik
						</td>
						<td>01702114444</td>
					</tr>
					<tr>
						<td>Ramsey </td>
						<td>
							Gordon Ramsey
						</td>
						<td>01611002222</td>
					</tr>
					
					<tr>
						<td colspan="3" align="center">
							<a href="manager_home.php">Goto Homepage</a></br>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>