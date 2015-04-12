<!DOCTYPE html>
<?php
	session_start();

	if(!isset($_SESSION['login'])){
		header("location: /cs386/login.php");
	}

	#define the server, username, password, and database for the the sql connection
	$server = $_SESSION['server'];
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
	$dbname = $_SESSION['dbname'];
	#attempt to connect to the sql server defined above
	$conn = new mysqli($server, $user, $pass, $dbname);
	$query = "SELECT `User_FName`, `User_LName`, `Review_ID` FROM `review` INNER JOIN `user` on `user`.User_Id = `review`.About_User_ID WHERE `From_User_ID` = '".$_SESSION['login']."' AND `Review_Flag` = '1'";
	$result = $conn->query($query);
?>

<html lang="en">
	<head>
		<link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="resources/js/bootstrap.min.js"></script>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Logistica Pending Reviews</title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<center><h3>Logistica Peer Evaluation System</h3></center>
					<center><h4>Pending Reviews</h4></center>
				</div>
			</div>
		</div>
		<hr />
		<div class="container-fluid">
			<div class="row">
				<div id="leftNavigation" class="col-sm-3" role="navigation">
					<nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix">
						<ul class="nav bs-docs-sidenav">
							<li><a href="index.php">Homepage</a></li>
							<li class="active"><a href="pending.php">Pending</a></li>
							<li><a href="completed.php">Completed</a></li>
							<li><a href="logout.php">Logout</a></li>
							<?php if($_SESSION['position'] === "1") { echo "<li><a href='admin.php'>Administration</a></li>"; } ?>
						</ul>
					</nav>
				</div>
				<div id="mainContent" class="col-sm-9" role="main">
					<ul style="list-style-type:none">
						<?php
							if($result == TRUE){
								while($row = $result->fetch_assoc()){
									echo "<li><a href='review.php?id=".$row['Review_ID']."'>Review of ".$row['User_FName']." ".$row['User_LName']."</a></li>";
								}
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</body>

</html>