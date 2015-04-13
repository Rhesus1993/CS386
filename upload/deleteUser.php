<?php
	session_start();

	if(!isset($_SESSION['login'])){
		header("location: login.php");
	}
	if(!isset($_POST['UserID'])){
		header("location: admin.php");
	}

	$server = $_SESSION['server'];
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
	$dbname = $_SESSION['dbname'];
	$conn = new mysqli($server, $user, $pass, $dbname);

	// check if user ID already exists
	$query = "SELECT COUNT(`User_ID`) as num_users FROM `User` WHERE `User_ID` = '".$_POST['UserID']."' and `User_FName` = '".$_POST['fname']."' and `User_LName` = '".$_POST['lname']."' and not `User_Status` = '1'";
	$result = $conn->query($query);
	$row = $result->fetch_assoc();

	if($row['num_users'] !== '0'){
		$query = "UPDATE `User` SET `User_Status` = '1' WHERE `User_ID` = '".$_POST['UserID']."' and `User_FName` = '".$_POST['fname']."' and `User_LName` = '".$_POST['lname']."'";
		$result = $conn->query($query);
		$_SESSION['postbackMessage'] = "User With ID ".$_POST['UserID']." Has Been Deleted ";
		$_POST = array();
	} else {
		$_SESSION['postbackMessage'] = "Specified User Does Not Exist";
	}
	header("location: /cs386/admin.php");

?>