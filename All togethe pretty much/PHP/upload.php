<?php
	session_start();
?>

<?php
//upload.php
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(100, 999) . '.' . $ext;
 $location = 'upload/' . $name;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
}

$conn = new mysqli("localhost","root","","project");
 	$username = $_SESSION['username'];
    $output = '';
    
     

     $sql = "UPDATE user SET ProfilePic = '$location' WHERE  Username = '$username'";


     if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    $result = mysqli_query($conn, "SELECT firstname,Surname,Username,Password,Email,Address,Gender,ProfilePic FROM user where username = '$username'");
	while ( $row = mysqli_fetch_row($result) ) {

    $output .='
        <img src="'.$row[7].'" height="150" width="225" class="img-thumbnail" />;

  

 ';

	}
    
    
    

     echo $output;

?>