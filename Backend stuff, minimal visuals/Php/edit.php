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


 	$sql = "UPDATE user SET firstname='$_POST[Name]', Surname='$_POST[Surname]', Password='$_POST[Password]', Address='$_POST[Address]' WHERE Username=$username";


	$result = mysqli_query($db, "SELECT firstname,Surname,Username,Password,Email,Address,Gender,ProfilePic FROM user where username = '$username'");
	while ( $row = mysqli_fetch_row($result) ) {

    $output .='<div class="container id="resulttts"">
    <div class="row">
      <div class="col-sm">

       

      </div>
      <div class="col-sm">

      <span id="uploaded_image"> <img src="'.$row[7].'" height="150" width="225" class="img-thumbnail" /></span>
        <p>Name : '.$row[0].'</p>
        <p>Surname : '.$row[1].'</p>
        <p>Username : '.$row[2].'</p>
        <p>Address : '.$row[5].'</p>
        <p>Gender : '.$row[6].'</p>
        <p>Pic : '.$row[7].'</p>

  

 ';

	}
  echo $output;


 ?>

