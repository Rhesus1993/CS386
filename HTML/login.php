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

		<title>Logistica Login</title>
	</head>

	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<center><h3>Logistica Peer Evaluation System Login</h3></center>
				</div>
			</div>
		</div>
		<hr />
		<div class="container-fluid">

			<div class="row">
				<div id="mainContent" class="col-lg-4">
					<h4 class="text-right">Please Login to the System</h4>
				</div>

				<div id="LoginDiv" class="col-lg-8">
					<form action="index.php" method="post">

						<div class="row">
							<div class="form-group" >
								<label for="username" class="col-lg-2 control-label text-right">User ID</label>
								<div class="col-lg-6 input-block">
									<input type="text" name="username" class="form-control" title="Username" placeholder="" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group" >
								<label for="password" class="col-lg-2 control-label text-right">Password</label>
								<div class="col-lg-6 input-block">
									<input type="password" name="password" class="form-control" title="Password" placeholder="" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<label for="submit" class="col-lg-2 control-label"></label>
								<div class="col-lg-6">
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