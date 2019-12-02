<?php
	session_start();
?> 
 <?php

 	$db = mysqli_connect("localhost","root","","Project");-
 	$username =  $_POST['Name'];
 	$password =  $_POST['Password'];
	 $bool = 'false';
	 

 	echo $username;
 	echo $password;

if (mysqli_connect_errno())
{
}
else
{
}
	$result = mysqli_query($db, "SELECT firstname,Surname,Username,Password,Email FROM user");
	while ( $row = mysqli_fetch_row($result) ) {

		if ((htmlentities($row[2])) == $username && (htmlentities($row[3])) == $password)
		{
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			echo $username;
			$bool = 'true';
		}
	}
	if ($bool == 'true')
	{
		header("Location: index.php");	
		$_SESSION['check'] = "LOGGED IN";
	}
	else
	{
		header("Location: index.php");	
		$_SESSION['check'] = "LOG IN FAILED";
	}

 ?>