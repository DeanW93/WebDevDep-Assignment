
<?php
$db = mysqli_connect("localhost","root","","Project");
//if(isset($_POST['submit'])){
   // $name       = $_FILES['file']['name'];  
    //$temp_name  = $_FILES['file']['tmp_name']; 
//}



$sql = "CREATE TABLE user (
    firstname text(50),
    Surname text(50),
    Username text(50),
    Password text(50),
    Email text(50),
    Address text(50),
    Gender text(50),
    ProfilePic text(100)
)";

 	if ($db->query($sql) === TRUE) {
    $sql = "INSERT INTO user (firstname,Surname,Username,Password,Email,Address,Gender,ProfilePic)
VALUES ('$_POST[Name]', '$_POST[Surname]', '$_POST[Username]', '$_POST[Password]', '$_POST[Email]','$_POST[Address]','$_POST[Gender]','default.png')";
echo "bbobobo";

} else {
    $sql = "INSERT INTO user (firstname,Surname,Username,Password,Email,Address,Gender,ProfilePic)
VALUES ('$_POST[Name]', '$_POST[Surname]', '$_POST[Username]', '$_POST[Password]', '$_POST[Email]','$_POST[Address]','$_POST[Gender]','default.png')";
}








if ($db->query($sql) == TRUE )
{       


}

header("Location:index.php");
/*
$sql = "INSERT INTO usertable (Username, Password, First Name,Surname,Age)
VALUES ('$_POST["username"]','$_POST["password"]','$_POST["firstname"]','$_POST["surname"],'$_POST["age"]')";
*/	


?>