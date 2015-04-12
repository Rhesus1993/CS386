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

		<title>Logistica Admin Page</title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<center><h3>Logistica Peer Evaluation System Admin Page</h3></center>
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
							<li><a href="completed.php">Completed</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
				</div>
				<div id="mainContent" class="col-lg-9" role="main">

					<div class="row">
						<div class="col-lg-9">
							<center><h4>Assign Review</h4></center>
						</div>
					</div>

					<form action="assignReview.php" method="post">

						<div class="row">
							<div class="form-group" >
								<label for="reviewer" class="col-lg-2 control-label text-right">Reviewer User ID</label>
								<div class="col-lg-6 input-block">
									<input type="text" name="reviewer" class="form-control" title="Reviewer" placeholder="" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group" >
								<label for="reviewee" class="col-lg-2 control-label text-right">Reviewee User ID</label>
								<div class="col-lg-6 input-block">
									<input type="text" name="reviewee" class="form-control" title="Reviewee" placeholder="" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<br />

						<div class="row">
							<div class="form-group">
								<label for="submit" class="col-lg-2 control-label"></label>
								<div class="col-lg-6">
									<input type="submit" id="submit" name="submit" class="btn btn-default" value="Assign Review"/>
								</div>
							</div>
						</div>

					</form>

					<br />
					<hr />
					<br />

					<div class="row">
						<div class="col-lg-9">
							<center><h4>Create User</h4></center>
						</div>
					</div>

					<form action="createUser.php" method="post">

						<div class="row">
							<div class="form-group" >
								<label for="UserID" class="col-lg-2 control-label text-right">User ID</label>
								<div class="col-lg-6 input-block">
									<input type="text" name="UserID" class="form-control" title="UserID" placeholder="" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group" >
								<label for="password" class="col-lg-2 control-label text-right">Password</label>
								<div class="col-lg-6 input-block">
									<input type="text" name="password" class="form-control" title="Password" placeholder="" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group" >
								<label for="fname" class="col-lg-2 control-label text-right">First Name</label>
								<div class="col-lg-6 input-block">
									<input type="text" name="fname" class="form-control" title="First Name" placeholder="John" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group" >
								<label for="lname" class="col-lg-2 control-label text-right">Last Name</label>
								<div class="col-lg-6 input-block">
									<input type="text" name="lname" class="form-control" title="Last Name" placeholder="Doe" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group" >
								<label for="position" class="col-lg-2 control-label text-right">Position</label>
								<div class="col-lg-3 input-block">
									<select name="position" class="form-control" title="Position" id="PositionSelect">
										<option value="1">Administrator</option>
										<option value="2">Employee</option>
										<option value="3">Temporary</option>
										<option value="4">Consultant</option>
									</select>
								</div>
							</div>
						</div>

						<br />

						<div class="row">
							<div class="form-group">
								<label for="submit" class="col-lg-2 control-label"></label>
								<div class="col-lg-6">
									<input type="submit" id="submit" name="submit" class="btn btn-default" value="Create User"/>
								</div>
							</div>
						</div>

					</form>

					<br />
					<hr />
					<br />

					<div class="row">
						<div class="col-lg-9">
							<center><h4>Delete User</h4></center>
						</div>
					</div>

					<form action="createUser.php" method="post">

						<div class="row">
							<div class="form-group" >
								<label for="UserID" class="col-lg-2 control-label text-right">User ID</label>
								<div class="col-lg-6 input-block">
									<input type="text" name="UserID" class="form-control" title="UserID" placeholder="" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group" >
								<label for="fname" class="col-lg-2 control-label text-right">First Name</label>
								<div class="col-lg-6 input-block">
									<input type="text" name="fname" class="form-control" title="First Name" placeholder="John" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group" >
								<label for="lname" class="col-lg-2 control-label text-right">Last Name</label>
								<div class="col-lg-6 input-block">
									<input type="text" name="lname" class="form-control" title="Last Name" placeholder="Doe" required="required" data-validation-required-message="This field is Required" />
								</div>
							</div>
						</div>

						<br />

						<div class="row">
							<div class="form-group">
								<label for="submit" class="col-lg-2 control-label"></label>
								<div class="col-lg-6">
									<input type="submit" id="submit" name="submit" class="btn btn-default" value="Delete User"/>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</body>

</html>