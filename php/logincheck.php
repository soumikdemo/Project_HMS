<?php
	
	session_start();

	include('../service/functions.php');
	//include_once('db.php');
	//require('db.php');
	//require_once('db.php');

	if(isset($_POST['login'])){

		$email = $_POST['email'];
		$password = $_POST['password'];
			
		$user = validateLogin($email, $password);                                      //associative array

		if(count($user) > 0 ){
			$_SESSION['user'] = $user;                                                 //user SESSION created
			//$type = getUserType($_SESSION['user']['user_id']);

			if($_SESSION['user']['type'] == "guest"){
				header("location: ../views/guest_home.php");
			}else if($_SESSION['user']['type'] == "manager"){
				header("location: ../views/manager/manager_home.php");
			}elseif ($_SESSION['user']['type'] == "chef") {
				header("location: ../views/chef_home.php");
			}

		}else{
			echo "Invalid Email/Password!";

		}
	}	

?>