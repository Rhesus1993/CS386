<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['server'])){ $_SESSION['server'] = "mysql15.000webhost.com"; }
	if(!isset($_SESSION['user'])){ $_SESSION['user'] = "a5126849_rs854"; }
	if(!isset($_SESSION['pass'])){ $_SESSION['pass'] = "115710Willber"; }
	if(!isset($_SESSION['dbname'])){ $_SESSION['dbname'] = "a5126849_cs386"; }

	if(isset($_SESSION['login'])){
		header("location: /~rs854/index.php");
	}

	#try to set the three registration fields in case of a bad submit
	if(isset($_POST['UserID'])){
		$userId = test_input(htmlentities($_POST['UserID']));
	} else {
		$userId = "";
	}
	if(isset($_POST['password'])){
		$password = test_input(htmlentities($_POST['password']));
	} else {
		$password = "";
	}
	$_POST = array();
	$sqlErr = "";

	if($userId !== "" and $password !== ""){
		#define the server, username, password, and database for the the sql connection
		$server = $_SESSION['server'];
		$user = $_SESSION['user'];
		$pass = $_SESSION['pass'];
		$dbname = $_SESSION['dbname'];
  		#attempt to connect to the sql server defined above
  		$conn = new mysqli($server, $user, $pass, $dbname);
  		$query = "SELECT * FROM `user` WHERE `User_ID` = '".$userId."'";
  		$result = $conn->query($query);
  		if($result == TRUE){
  			if($result->num_rows == 1){
	  			$row = $result->fetch_assoc();
	  			if($password == $row['User_Password'] && $row['User_Status'] == '0'){
	  				$_SESSION['login'] = $row['User_ID'];
	  				$_SESSION['position'] = $row['Position_Code'];
	  				header("location: /~rs854/index.php");
	  			} else {
	  				$sqlErr = "invalid password";
	  			}
	  		} else {
	  			$sqlErr = "No such username found";
	  		}
  		} else {
  			$sqlErr = "Error: " . $query . "\n" . $conn->error;
  		}
	}

	#function to clean up input
	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
?>

<html lang="en">
	<head>
		<link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="resources/js/bootstrap.min.js"></script>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Logistica Login</title>
	</head>

	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<center><h3>Logistica Peer Evaluation System Login</h3></center>
				</div>
			</div>
		</div>
		<hr />
		<div class="container-fluid">

			<div class="row">
				<div id="mainContent" class="col-sm-4">
					<h4 class="text-right">Please Login to the System</h4>
					<?php
						echo "<center><p>".$sqlErr."</p></center>";
					?>
				</div>

				<div id="LoginDiv" class="col-sm-8">
					<form action="login.php" method="post">

						<div class="row">
							<div class="form-group" >
								<label for="UserID" class="col-sm-2 control-label text-right">User ID</label>
								<div class="col-sm-6 input-block">
									<input type="text" id="UserID" name="UserID" class="form-control" title="UserID" placeholder="" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group" >
								<label for="password" class="col-sm-2 control-label text-right">Password</label>
								<div class="col-sm-6 input-block">
									<input type="password" id="password" name="password" class="form-control" title="Password" placeholder="" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<label for="submit" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<input type="submit" id="submit" name="submit" class="btn btn-default" value="Submit"/>
								</div>
							</div>
						</div>

					</form>
				</div>

			</div>

		</div>

	</body>

</html>
