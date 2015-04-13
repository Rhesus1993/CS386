<!DOCTYPE html>
<?php
	session_start();
	session_destroy();
	header("location: /~rs854/login.php");
?>