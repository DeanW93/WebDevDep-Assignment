<?php
	session_start();
?> 
 <?php

 	$db = mysqli_connect("localhost","root","","Project");
	 $username = $_SESSION['username'];
	 $output='';

	if(isset($_POST['Name'])){
		$name = $_POST['Name'];
   }
   echo $name;


   $sql = "UPDATE user SET firstname='$_POST[Name]', Surname='$_POST[Surname]', Password='$_POST[Password]', Address='$_POST[Address]' WHERE Username='$username'";
   

   if ($db->query($sql) === TRUE) {
    header("Location: schedule.php");
} else {
    echo "Error updating record: " . $db->error;
}



  echo $output;
  


 ?>

