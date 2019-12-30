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

$sql = "INSERT INTO about (aboutus, mission,vision)
VALUES ('Dream Land 40 years of experience in the sale of toys, doctors specializing in the field of child development,
interested in finishing the skills and intelligence and senses of the child,
offers the child the opportunity to bring out his skills and innovations.', 'We are interested in improving and developing the skills and intelligence of the child, and developing the senses of the child.', 'To become the first and largest exhibition to show and sell all toys in Egypt and the Middle East.');";



if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>