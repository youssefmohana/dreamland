<!DOCTYPE html>
<html>
<head>
  <title>first</title>
</head>
<body>
<nav  style="background-size: 300px;  background-color:aqua;font-family:verdana; font-size:150%; font-weight: bold ">&nbsp;&nbsp;&nbsp;
<span style="background-color: pink"> <a  style="text-decoration: none" href="p4.html">Home</a>		 </span>
	 <a style="text-decoration: none" href="category.html">Categories</a>
<span style="background-color: pink">	 <a style="text-decoration: none" href="bestsellers.php">Best Sellers</a> </span>
	<a style="text-decoration: none " href="newRelease.php">New Releases</a>

 <a style="text-decoration: none" href="p3.html">Contact</a> <a style="text-decoration: none" href="about2.php">About</a>
 <a  style="text-decoration: none" href="adminadd.php"> insertproduct </a>
 <a  style="text-decoration: none" href="showuser.php"> user </a>
 <a  style="text-decoration: none" href="showproduct.php"> dproduct </a>
 <a  style="text-decoration: none" href="logout.php"> Logout </a>


    </nav>
<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
  if(isset($_POST['submit']))
   
{
$un=$_POST["name"];
$type=$_POST["type"]; 

//$bday=$_POST["birthday"];


$servername="localhost";
$username="root";
$password="";
$db="toystoredb";
$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
  die("connaction die".mysql_error());
}
 
echo "connection sucessfull<br>";
$sql = "select name from games where name='$un' "; 
$result = $con->query($sql);
if(!$result->num_rows) {echo "game already delete"."<br>"; header( "refresh:3;url=showproduct.php" );}

else {
$sql2 = "DELETE FROM games WHERE name='$un' AND type='$type' ";

if ($con->query($sql2) === TRUE) {
    echo "New delete successfully";
         header( "refresh:3;url=showproduct.php" );
} else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
}

}

mysqli_close($con);

}


  ?>
</body>
</html>