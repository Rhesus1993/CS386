<!DOCTYPE html>
<?php
	session_start();

	if(!isset($_SESSION['login'])){
		header("location: login.php");
	}

	#define the server, username, password, and database for the the sql connection
	$server = $_SESSION['server'];
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
	$dbname = $_SESSION['dbname'];

	#attempt to connect to the sql server defined above
	$conn = new mysqli($server, $user, $pass, $dbname);
	$query = "SELECT * FROM `Review` INNER JOIN `User` on `User`.User_ID = `Review`.About_User_ID WHERE `Review_ID` = '".$_GET['id']."'";
	$result = $conn->query($query);
	$row = $result->fetch_assoc();
?>

<html lang="en">
	<head>
		<link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="resources/js/bootstrap.min.js"></script>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Logistica Review of <?php echo $row['User_FName']." ".$row['User_LName']; ?></title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<center><h3>Logistica Peer Evaluation System</h3></center>
					<center><h4><?php if($row['Review_Flag'] == '2') echo "Completed "; ?>Review of <?php echo $row['User_FName']." ".$row['User_LName']; ?></h4></center>
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
					<?php
						if($row['Review_Flag'] == '2'){
							echo "<div class='row'><label class='col-sm-2 text-right'>First Name: </label>";
							echo "<p>".$row['User_FName']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Last Name: </label>";
							echo "<p>".$row['User_LName']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Leadership Ability: </label>";
							echo "<p>".$row['Leadership_Ability']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Follows Directions: </label>";
							echo "<p>".$row['Follow_Directions']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Technical Ability: </label>";
							echo "<p>".$row['Technical_ability']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Creativity: </label>";
							echo "<p>".$row['Creativity']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Punctionality: </label>";
							echo "<p>".$row['Punctionality']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Availability: </label>";
							echo "<p>".$row['Availability']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Attentiveness: </label>";
							echo "<p>".$row['Attentiveness']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Works Well in Groups: </label>";
							echo "<p>".$row['Work_in_Groups']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>General Contributions: </label>";
							echo "<p>".$row['Gen_Contributions']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Comments: </label>";
							echo "<p>".$row['Comments']."</p></div>";
						} else if($row['Review_Flag'] == '1') {
							echo "<div class='row'><label class='col-sm-2 text-right'>First Name: </label>";
							echo "<p>".$row['User_FName']."</p></div>";
							echo "<div class='row'><label class='col-sm-2 text-right'>Last Name: </label>";
							echo "<p>".$row['User_LName']."</p></div>";

							echo "<form action='updateReview.php' method='post'>";
							echo "<input type='hidden' id='Review_ID' name='Review_ID' value='".$_GET['id']."' />";
							echo "<div class='row'><div class='form-group'><label for='Leadership_Ability' class='col-sm-2 control-label text-right'>Leadership Ability: </label>";
							echo "<div class='col-sm-1 input-block'>";
							echo "<select name='Leadership_Ability' class='form-control' title='Leadership Ability' id='Leadership_Ability'>";
							echo "<option value='1'>1</option>";
							echo "<option value='2'>2</option>";
							echo "<option value='3' selected>3</option>";
							echo "<option value='4'>4</option>";
							echo "<option value='5'>5</option>";
							echo "</select></div></div></div>";

							echo "<div class='row'><div class='form-group'><label for='Follow_Directions' class='col-sm-2 control-label text-right'>Follows Directions: </label>";
							echo "<div class='col-sm-1 input-block'>";
							echo "<select name='Follow_Directions' class='form-control' title='Leadership Ability' id='Follow_Directions'>";
							echo "<option value='1'>1</option>";
							echo "<option value='2'>2</option>";
							echo "<option value='3' selected>3</option>";
							echo "<option value='4'>4</option>";
							echo "<option value='5'>5</option>";
							echo "</select></div></div></div>";

							echo "<div class='row'><div class='form-group'><label for='Technical_ability' class='col-sm-2 control-label text-right'>Technical Ability: </label>";
							echo "<div class='col-sm-1 input-block'>";
							echo "<select name='Technical_ability' class='form-control' title='Leadership Ability' id='Technical_ability'>";
							echo "<option value='1'>1</option>";
							echo "<option value='2'>2</option>";
							echo "<option value='3' selected>3</option>";
							echo "<option value='4'>4</option>";
							echo "<option value='5'>5</option>";
							echo "</select></div></div></div>";

							echo "<div class='row'><div class='form-group'><label for='Creativity' class='col-sm-2 control-label text-right'>Creativity: </label>";
							echo "<div class='col-sm-1 input-block'>";
							echo "<select name='Creativity' class='form-control' title='Leadership Ability' id='Creativity'>";
							echo "<option value='1'>1</option>";
							echo "<option value='2'>2</option>";
							echo "<option value='3' selected>3</option>";
							echo "<option value='4'>4</option>";
							echo "<option value='5'>5</option>";
							echo "</select></div></div></div>";

							echo "<div class='row'><div class='form-group'><label for='Punctionality' class='col-sm-2 control-label text-right'>Punctionality: </label>";
							echo "<div class='col-sm-1 input-block'>";
							echo "<select name='Punctionality' class='form-control' title='Leadership Ability' id='Punctionality'>";
							echo "<option value='1'>1</option>";
							echo "<option value='2'>2</option>";
							echo "<option value='3' selected>3</option>";
							echo "<option value='4'>4</option>";
							echo "<option value='5'>5</option>";
							echo "</select></div></div></div>";

							echo "<div class='row'><div class='form-group'><label for='Availability' class='col-sm-2 control-label text-right'>Availability: </label>";
							echo "<div class='col-sm-1 input-block'>";
							echo "<select name='Availability' class='form-control' title='Leadership Ability' id='Availability'>";
							echo "<option value='1'>1</option>";
							echo "<option value='2'>2</option>";
							echo "<option value='3' selected>3</option>";
							echo "<option value='4'>4</option>";
							echo "<option value='5'>5</option>";
							echo "</select></div></div></div>";

							echo "<div class='row'><div class='form-group'><label for='Attentiveness' class='col-sm-2 control-label text-right'>Attentiveness: </label>";
							echo "<div class='col-sm-1 input-block'>";
							echo "<select name='Attentiveness' class='form-control' title='Leadership Ability' id='Attentiveness'>";
							echo "<option value='1'>1</option>";
							echo "<option value='2'>2</option>";
							echo "<option value='3' selected>3</option>";
							echo "<option value='4'>4</option>";
							echo "<option value='5'>5</option>";
							echo "</select></div></div></div>";

							echo "<div class='row'><div class='form-group'><label for='Work_in_Groups' class='col-sm-2 control-label text-right'>Works Well in Groups: </label>";
							echo "<div class='col-sm-1 input-block'>";
							echo "<select name='Work_in_Groups' class='form-control' title='Leadership Ability' id='Work_in_Groups'>";
							echo "<option value='1'>1</option>";
							echo "<option value='2'>2</option>";
							echo "<option value='3' selected>3</option>";
							echo "<option value='4'>4</option>";
							echo "<option value='5'>5</option>";
							echo "</select></div></div></div>";

							echo "<div class='row'><div class='form-group'><label for='Gen_Contributions' class='col-sm-2 control-label text-right'>General Contributions: </label>";
							echo "<div class='col-sm-6 input-block'>";
							echo "<textarea name='Gen_Contributions' class='form-control' title='Leadership Ability' id='Gen_Contributions' rows='10'></textarea>";
							echo "</div></div></div>";

							echo "<div class='row'><div class='form-group'><label for='Comments' class='col-sm-2 control-label text-right'>Comments: </label>";
							echo "<div class='col-sm-6 input-block'>";
							echo "<textarea name='Comments' class='form-control' title='Leadership Ability' id='Comments' rows='10'></textarea>";
							echo "</div></div></div>";

							echo "<br />";

							echo "<div class='row'><div class='form-group'><label for='submit' class='col-sm-2 control-label text-right'></label>";
							echo "<div class='col-sm-6'>";
							echo "<input type='submit' name='submit' class='btn btn-default' id='submit' value='Submit' />";
							echo "</div></div></div>";

							echo "</form>";
						} else {
							echo "<h3>No Review with ID ".$_GET['id']." Exists</h3>";
						}
					?>
				</div>
			</div>
		</div>
	</body>

</html>