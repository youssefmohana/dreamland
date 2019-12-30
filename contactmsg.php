
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toystoredb";


$message = $_POST['message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$sql = "INSERT INTO message (msg )
VALUES ('$message');";
query(sql);
?>
</body>
</html>