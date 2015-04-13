<?php
	session_start();

	if(!isset($_SESSION['login'])){
		header("location: /~rs854/login.php");
	}
	if(!isset($_POST['UserID'])){
		header("location: /~rs854/admin.php");
	}

	$server = $_SESSION['server'];
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
	$dbname = $_SESSION['dbname'];
	$conn = new mysqli($server, $user, $pass, $dbname);

	// check if user ID already exists
	$query = "SELECT COUNT(`User_ID`) as num_users FROM `user` WHERE `User_ID` = '".$_POST['UserID']."'";
	$result = $conn->query($query);
	$row = $result->fetch_assoc();

	if($row['num_users'] == '0'){
		//define the insert query
		$query = "INSERT INTO `user`(`User_ID`, `User_FName`, `User_LName`, `User_Status`, `Position_Code`, `User_login`, `User_Password`)";
		$query .= "VALUES ('".$_POST['UserID']."', '".$_POST['fname']."', '".$_POST['lname']."', '0', '".$_POST['position']."', '0', '".$_POST['password']."')";

		$result = $conn->query($query);
		$_SESSION['postbackMessage'] = "New User Created With ID ".$_POST['UserID'];
		$_POST = array();
	} else {
		$_SESSION['postbackMessage'] = "User ID Already In Use";
	}
	header("location: /~rs854/admin.php");

?>