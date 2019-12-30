<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toystoredb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO newreleases (image, price)
VALUES ('new1.jpg', '500');";
$sql .= "INSERT INTO newreleases (image, price)
VALUES ('new2.jpg', '300');";
$sql .= "INSERT INTO newreleases (image, price)
VALUES ('new3.jpg', '500');";


$sql = "INSERT INTO newreleases (image, price)
VALUES ('new4.jpg', '250');";
$sql .= "INSERT INTO newreleases (image, price)
VALUES ('new5.jpg', '300');";
$sql .= "INSERT INTO newreleases (image, price)
VALUES ('new11.jpg', '500');";




$sql = "INSERT INTO newreleases (image, price)
VALUES ('new12.jpg', '250');";
$sql .= "INSERT INTO newreleases (image, price)
VALUES ('new13.jpg', '300');";
$sql .= "INSERT INTO newreleases (image, price)
VALUES ('new1.jpg', '500');";





if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>