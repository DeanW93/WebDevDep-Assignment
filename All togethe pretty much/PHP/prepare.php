<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    
}

// Create database
$sql = "CREATE DATABASE myaaaaaDB";
if ($conn->query($sql) === TRUE) {
    
} else {
    
}



// Create connection
$conn = new mysqli($servername, $username, $password, "project");

// Check connection
if ($conn->connect_error) {
    
}



$sql = "CREATE TABLE product (
    ID int(10) PRIMARY KEY,
    Brand text(50),
    Product text(50),
    Size text(50),
    Image text(50)
)";

if ($conn->query($sql) === TRUE) {

} else {
   
    
}





// prepare and bind
$stmt = $conn->prepare("INSERT INTO product (ID, Brand, Product, Size, Image) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $ID, $Brand, $Product, $Size, $Image);


$ID = "1";
$Brand = "Sony";
$Product = "PS4";
$Size = "500GB";
$Image = "PS4.png";
$stmt->execute();

$ID = "2";
$Brand = "Sony";
$Product = "PS4";
$Size = "250GB";
$Image = "PS4.png";
$stmt->execute();

$ID = "3";
$Brand = "Microsoft";
$Product = "Xbox1";
$Size = "250GB";
$Image = "Xbox1.png";
$stmt->execute();

$ID = "4";
$Brand = "Microsoft";
$Product = "Xbox360";
$Size = "300GB";
$Image = "Xbox360.png";
$stmt->execute();

$ID = "5";
$Brand = "Nintendo";
$Product = "Switch";
$Size = "250GB";
$Image = "Switch.png";
$stmt->execute();

$ID = "6";
$Brand = "Nintendo";
$Product = "NDS";
$Size = "50GB";
$Image = "Nds.png";
$stmt->execute();

$ID = "7";
$Brand = "Sony";
$Product = "PS3";
$Size = "250GB";
$Image = "PS3.png";
$stmt->execute();

$ID = "8";
$Brand = "Sony";
$Product = "PS3";
$Size = "300GB";
$Image = "PS3.png";
$stmt->execute();

$ID = "9";
$Brand = "Nintendo";
$Product = "Switch";
$Size = "100GB";
$Image = "Switch.png";
$stmt->execute();

$ID = "10";
$Brand = "Sony";
$Product = "PSP";
$Size = "100GB";
$Image = "PSP.png";
$stmt->execute();

$ID = "11";
$Brand = "Sony";
$Product = "PSP-Lite";
$Size = "50GB";
$Image = "PSPL.png";
$stmt->execute();

$ID = "12";
$Brand = "Sony";
$Product = "PS2";
$Size = "8MB";
$Image = "PS2.png";
$stmt->execute();




$stmt->close();
$conn->close();




?>
