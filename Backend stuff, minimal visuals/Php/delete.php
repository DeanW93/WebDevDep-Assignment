<?php
	session_start();
?>

 
 <?php

 	$db = mysqli_connect("localhost","root","","Project");
 	$username = $_SESSION['username'];

 	$sql = "DELETE FROM user WHERE Username='$username'";

	 if ($db->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $db->error;
	}

 	



 ?>