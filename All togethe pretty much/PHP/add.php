<?php
	session_start();
?>

<?php
require 'connect.php';
?>
<?php

$id = $_POST['product_id'];


$username = $_SESSION['username'];
$sql = "Select * from product where id =$id";
$ID = '';  
$Brand = '';  
$Product = '';  
$Size = '';  
$Image = '';        

$result = $conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $ID .=$row['ID'] ;
        $Brand .=$row['Brand'] ;
        $Product .=$row['Product'] ;
        $Size .=$row['Size'] ;
        $Image .=$row['Image'] ;
    }

}



$sql = "CREATE TABLE $username (
    ID int(10) PRIMARY KEY,
    Brand text(50),
    Product text(50),
    Size text(50),
    Image text(50)
)";

 	if ($conn->query($sql) === TRUE) {
    $sql = "INSERT INTO $username (ID,Brand,Product,Size,Image)
VALUES ('$ID', '$Brand', '$Product', '$Size', '$Image')";
} else {
   
    $sql = "INSERT INTO $username (ID,Brand,Product,Size,Image)
VALUES ('$ID', '$Brand', '$Product', '$Size', '$Image')";
}








if ($conn->query($sql) == TRUE )
{
}



if ($username == '')
{

    echo "No";
}
else{

    echo "Added To shopping cart";
}


?>