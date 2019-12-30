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

// sql to create table
$sql = "CREATE TABLE about (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
aboutus varchar(2500) NOT NULL,
mission varchar(2500) NOT NULL,
vission varchar(2500)

)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>