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

		<title>Logistica Completed Reviews</title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<center><h3>Logistica Peer Evaluation System</h3></center>
					<center><h4>Completed Reviews</h4></center>
				</div>
			</div>
		</div>
		<hr />
		<div class="container-fluid">
			<div class="row">
				<div id="leftNavigation" class="col-lg-3" role="navigation">
					<nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix">
						<ul class="nav bs-docs-sidenav">
							<li><a href="index.php">Homepage</a></li>
							<li><a href="pending.php">Pending</a></li>
							<li class="active"><a href="completed.php">Completed</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
				</div>
				<div id="mainContent" class="col-lg-9" role="main">
					<ul style="list-style-type:none">
						<li><a href="review.php?id=12345">Link to Review</a></li>
					</ul>
				</div>
			</div>
		</div>
	</body>

</html>