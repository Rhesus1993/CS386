<!DOCTYPE html>
<?php
	session_start();


?>

<html lang="en">
	<head>
		<link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="resources/js/bootstrap.min.js"></script>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Logistica Homepage</title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<center><h3>Logistica Peer Evaluation System Homepage</h3></center>
				</div>
			</div>
		</div>
		<hr />
		<div class="container-fluid">
			<div class="row">
				<div id="leftNavigation" class="col-lg-3" role="navigation">
					<nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix">
						<ul class="nav bs-docs-sidenav">
							<li class="active"><a href="index.php">Homepage</a></li>
							<li><a href="pending.php">Pending</a></li>
							<li><a href="completed.php">Completed</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
				</div>
				<div id="mainContent" class="col-lg-9" role="main">
					<p>Welcome to the Logistica Peer Evaluation System. Use the navigation on the left to manage your reviews</p>
				</div>
			</div>
		</div>
	</body>

</html>