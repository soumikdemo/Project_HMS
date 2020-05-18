<?php
	
	require('db.php');
	
	function validateLogin($email, $password){

		$con = getConnection();
		$sql = "select * from user where email='{$email}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function getFundValue($hotel_id){
		$con = getConnection();
		$sql = "select fund from hotel where hotel_id='{$hotel_id}'";
		$result = mysqli_query($con, $sql); 
		$fund = mysqli_fetch_assoc($result);

		return $fund;
	}

	function getRoomsNotAvailable($hotel_id){
		$con = getConnection();
		$sql = "select * from room where available = 'false' and hotel_id='{$hotel_id}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function getVacantRooms($hotel_id){
		$con = getConnection();
		$sql = "select * from room where available = '1' and hotel_id='{$hotel_id}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function getUserDataById($userId){
		$con = getConnection();
		$sql = "select * from user where user_id='{$userId}'";
		$result = mysqli_query($con, $sql);
		$userRow = mysqli_fetch_assoc($result);

		return $userRow;
	}

	function getGuestDataByGuestId($guestId){
		$con = getConnection();
		$sql = "select * from guestpi where guest_id='{$guestId}'";
		$result = mysqli_query($con, $sql);
		$guestRow = mysqli_fetch_assoc($result);

		return $guestRow;
	}

	function getGuestDataByUserId($userId){
		$con = getConnection();
		$sql = "select * from guestpi where user_id='{$userId}'";
		$result = mysqli_query($con, $sql);
		$guestRow = mysqli_fetch_assoc($result);

		return $guestRow;
	}

	function getChefDataByUserId($userId){
		$con = getConnection();
		$sql = "select * from chefpi where user_id='{$userId}'";
		$result = mysqli_query($con, $sql);
		$chefRow = mysqli_fetch_assoc($result);

		return $chefRow;
	}

	function getServiceList(){
		$con = getConnection();
		$sql = "select * from service where checked = 'false'";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function getComplainList(){
		$con = getConnection();
		$sql = "select * from complain where checked = 'false'";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function getManagerInfo($user_id){
		$con = getConnection();
		$sql = "select * from managerpi where user_id='{$user_id}'";
		$result = mysqli_query($con, $sql);
		$manager = mysqli_fetch_assoc($result);

		return $manager;
	}

	function getHotelInfo($manager_id){
		$con = getConnection();
		$sql = "select * from hotel where manager_id='{$manager_id}'";
		$result = mysqli_query($con, $sql);
		$hotel = mysqli_fetch_assoc($result);

		return $hotel;
	}

	function getVerifiedGuestList(){
		$con = getConnection();
		$sql = "select * from guestpi where verified= 'true'";
		$result = mysqli_query($con, $sql);
		//$list = mysqli_fetch_assoc($result);

		return $result;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function deleteUser($id){
		$con = getConnection();
		$sql = "DELETE FROM users WHERE id = $id";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function updateUserData($sql){
		$con = getConnection(); 
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function updateUserData1($username, $password, $email, $type){
		$con = getConnection(); 
		$sql ="UPDATE users SET username='{$username}', password='{$password}', email='{$email}', type='{$type}'' WHERE id='{$GLOBALS['id']}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}
?>