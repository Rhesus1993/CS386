<?php
	session_start();

	if(!isset($_SESSION['login'])){
		header("location: login.php");
	}
	if(!isset($_POST['Leadership_Ability'])){
		header("location: index.php");
	}

	$server = $_SESSION['server'];
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
	$dbname = $_SESSION['dbname'];
	$conn = new mysqli($server, $user, $pass, $dbname);
	$query = "UPDATE `Review` SET `Review_Flag`='2', `Leadership_Ability`='".$_POST['Leadership_Ability']."',`Follow_Directions`='".$_POST['Follow_Directions']."',";
	$query .= "`Gen_Contributions`='".$_POST['Gen_Contributions']."',`Technical_ability`='".$_POST['Technical_ability']."',`Creativity`='".$_POST['Creativity']."',";
	$query .= "`Punctionality`='".$_POST['Punctionality']."',`Availability`='".$_POST['Availability']."',`Attentiveness`='".$_POST['Attentiveness']."',";
	$query .= "`Comments`='".$_POST['Comments']."',`Work_in_Groups`='".$_POST['Work_in_Groups']."' WHERE `Review_ID`='".$_POST['Review_ID']."'";
	$result = $conn->query($query);
	$_POST = array();
	header("location: index.php");
?>