<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Grocery Order List</title>
</head>
<body>
		<form>
			<fieldset style="width:500px">
				<table border="1" align="center">
					<tr>
						<td colspan="3" align="center">
					    Chef's Grocery Orders
						</td>
					</tr>
					<tr>
						<td>Chef's name </td>
						<td>Groceries</td>
					</tr>
					<tr>
						<td>arik </td>
						<td>
							rice,eggs,sugar.....
						</td>
						
					</tr>
					<tr>
						<td>datta</td>
						<td>
							bread,butter.........
						</td>
						
					</tr>
					<tr>
						<td>Justin </td>
						<td>
							bread,butter,rice
						</td>
					
					</tr>
					<tr>
						<td>Mike </td>
						<td>
							rice,flour,eggs.....
						</td>
						
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