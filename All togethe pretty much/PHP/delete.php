<?php
	session_start();
?>

 
 <?php

$id = $_POST['product_id'];


$username = $_SESSION['username'];
$sql = "Select * from product where id =$id";

 	$db = mysqli_connect("localhost","root","","Project");
 	$username = $_SESSION['username'];

 	$sql = "DELETE FROM $username WHERE ID=$id";

	 if ($db->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $db->error;
	}

 	



 ?>