
<html>


<body>


<?php 
$severname="localhost";
$username="root";
$password="";

//create connection
$conn=mysqli_connect($severname,$username,$password);
if(!$conn){
die("connection failed ".mysqli_connect_error());

}

echo "connected successfully ";
echo "</br>";


$sqll="create database toystoredb";
if(mysqli_query($conn,$sqll))
{
	echo"database connected";
}
else {
	echo "error connecting database ".mysqli_error($conn);
}
mysqli_close($conn);
 ?>


</body>
</html>