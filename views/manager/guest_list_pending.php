<?php	
	session_start();

	if(!isset($_SESSION['user'])){  
		header("location: ../../index.html");
	}

	require_once('../../service/functions.php');
	$result = getPendingGuestList();

	if(isset($_REQUEST['verify']))
    {

		$id = $_POST['id'];


		$con = getConnection();
		$sql = "UPDATE guestpi SET verified='1' WHERE guest_id='{$id}'";
		$result = mysqli_query($con, $sql);

		if(mysqli_affected_rows($con)){
			$alert = "<script>
	        alert('Verified.');
	        </script>";
	        echo $alert;
		}else{
			$alert = "<script>
	        alert('Failed!');
	        </script>";
	        echo $alert;
		}

    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Pending Guest List</title>
</head>
<body>
		<form action="" method="POST">
			<fieldset style="width:100%">
				<table border="0" align="center" cellspacing="40" cellpadding=”10″>
					<tr>
						<td colspan="9" align="center">
						<h3>Pending Guest List</h3>
						</td>
					</tr>
					<tr>
						<td>Photo</td>
						<td>Guest ID </td>
						<td>Name</td>
						<td>Email</td>
						<td>Address</td>
						<td>Date of Birth</td>
						<td>Phone Number</td>
						<td>Payment Type</td>
						<td>Member Status</td>
						<td>Review</td>
					</tr>
					
					<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
					<tr>
						<td><?=$row['guest_id']?>pic</td>
						<td><?=$row['guest_id']?></td>
						<td><?=$row['name']?></td>
						<td><?=$row['email']?></td>
						<td><?=$row['address']?></td>
						<td><?=$row['dob']?></td>
						<td><?=$row['phone_no']?></td>
						<td><?=$row['payment_type']?></td>
						<td><?=$row['membership_status']?></td>

						<input type="hidden" name="id" value="<?=$row['guest_id']?>" />

						<td>
							<input type="submit" name="verify" value="Verify">
						</td>
					</tr>
				
					<?php } ?>
					
					<tr>
						<td colspan="9" align="center">
							<a href="manager_home.php">Goto Homepage</a></br>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>