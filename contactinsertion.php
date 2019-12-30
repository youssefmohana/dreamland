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

$sql = "INSERT INTO contact (street, phonenumber)
VALUES ('Louran-724 Al Horya Street', '5853186');";
$sql .= "INSERT INTO contact (street, phonenumber)
VALUES ('Smouha-Street 26-Infront of Ali Ibn Abi talb Mosque', '4274446-9608564');";
$sql .= "INSERT INTO contact (street, phonenumber)
VALUES ('Smouha Mostafa Kamel beside Orange', '4202938');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>