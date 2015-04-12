<?php

$conn = mysqli_connection($servername, $username, $password, $dbname)
if (!$conn){
	die("Connection failed: " .mysqpli_connect_error());
}
$sql = "Update User Set User_Status = '1' Where User_ID = $User_ID"

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>