<?php
	session_start();

	if(!isset($_SESSION['login'])){
		header("location: /cs386/login.php");
	}
	if(!isset($_POST['reviewee'])){
		header("location: /cs386/admin.php");
	}

	$server = $_SESSION['server'];
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
	$dbname = $_SESSION['dbname'];
	$conn = new mysqli($server, $user, $pass, $dbname);

	// check if users exist
	$query = "SELECT COUNT(`User_ID`) as num_users FROM `user` WHERE `User_ID` = '".$_POST['reviewee']."' or `User_ID` = '".$_POST['reviewer']."'";
	$result = $conn->query($query);
	$row = $result->fetch_assoc();

	if($row['num_users'] == '2'){
		$query = "INSERT INTO `review`(`About_User_ID`, `From_User_ID`) VALUES ('".$_POST['reviewee']."', '".$_POST['reviewer']."')";
		$result = $conn->query($query);
		$_POST = array();
		$_SESSION['postbackMessage'] = "New Review Assigned";
	} else {
		$_SESSION['postbackMessage'] = "Invalid User ID Input for Review Assignment";
	}
	header("location: /cs386/admin.php");


?>