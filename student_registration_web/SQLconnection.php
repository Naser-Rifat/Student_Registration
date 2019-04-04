<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "web_assignment";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	?>
		<div class="alert alert-dismissible alert-danger">
  		<button type="button" class="close" data-dismiss="alert">&times;</button>
  		<strong> snap!</strong><?php die("Connection failed: " . $conn->connect_error); ?>
		</div><?php
	}
?>
