<!DOCTYPE html>
<html>
<head>
	<title>New Releases</title>
	<link rel="stylesheet"  href="stylesheet.css">


</head>




<body >
 
  
<nav  class ="topnav">  <a  href="p4.html">Home</a>		 </span>
	 <a  href="categoryadmin.php">Categories</a>
 <a style="text-decoration: none" href="bestsellersadmin.php">Best Sellers</a> </span>
	<a href="newReleaseadmin.php">New Releases</a>

 <a  href="p3admin.php">Contact</a> <a href="about2.php">About</a>
 <a   href="adminadd.php"> insertproduct </a>
 <a  href="showuser.php"> user </a>
 <a   href="showproduct.php"> dproduct </a>
 <a   href="logout.php"> Logout </a> </nav>
	<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } ?>
    <br>
    <br>
    


<center>
	<img src="newr.jpg" width="900"height="400" >
</center>

	<table style="margin-left:auto;margin-right:auto;">

	<th></th>
<div class="class" >	

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
//else echo "connected successfully";

$sql = "SELECT image, price FROM newreleases";
$result = $conn->query($sql);
$counter=0;
 $w="300";
 $h="300";
 $m="middle"; $i=0;
if ($result->num_rows > 0) {
 

echo "<tr>";
 while($row = $result->fetch_assoc()) {
   //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  
  $s=$row["image"];
  $p[$i]=$row["price"];

   echo "<td>"."<img src='$s' width='$w'  height='$h' >"."</td>" ;
 	$counter++;
   if($counter%3==0) { 	
   			echo"</tr>";
   		
   	//	echo "Price :  '$p[0]' "."Price :  '$p[1]' "."Price :  '$p[2]' ";
		echo "<td>"."Price : 	 $p[0] "."</td>".  "<td>"."Price : 	 $p[1] "."</td>".  "<td>"."Price :  		$p[0] "."</td>" ."</tr>" ;
 
				}   //counter loop

	$i++;
    }


} else {
    echo "0 results";
 } 
	


 ?> 

 </div>
	</table>
</body>



<footer class ="topnav">
  
  <a  href="privacypolicy.html">Privacy Policy</a> 
  <a href="terms.ofuse.html">Terms of Use</a> 
 


</footer>



</html>