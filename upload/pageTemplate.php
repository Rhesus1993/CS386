<!DOCTYPE html>
<?php
	session_start();

	if(!isset($_SESSION['login'])){
		header("location: /~rs854/login.php");
	}


?>

<html lang="en">
	<head>
		<link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="resources/js/bootstrap.min.js"></script>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Logistica</title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<center><h3>Logistica Peer Evaluation System</h3></center>
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
							<li><a href="pending.php">Pending</a></li>
							<li><a href="completed.php">Completed</a></li>
							<li><a href="logout.php">Logout</a></li>
							<?php if($_SESSION['position'] === "1") { echo "<li><a href='admin.php'>Administration</a></li>"; } ?>
						</ul>
					</nav>
				</div>
				<div id="mainContent" class="col-sm-9" role="main">
					
				</div>
			</div>
		</div>
	</body>

</html>