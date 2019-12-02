<?php
	session_start();
?>

 


 
<?php




$username = $_SESSION['username'];


 	$db = mysqli_connect("localhost","root","","Project");
 	$username = $_SESSION['username'];

 	$sql = "DELETE FROM user WHERE Username='$username'";

	 if ($db->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $db->error;
	}

    $sql = " DROP TABLE $username";
    $_SESSION['username']= '';

		 if ($db->query($sql) === TRUE) {
            $_SESSION['username']= '';
	} else {
		echo "Error deleting record: " . $db->error;
	}



 ?>
