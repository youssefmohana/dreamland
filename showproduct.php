<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<link rel="stylesheet"  href="stylesheet.css">

</head>

<body>

<nav  class ="topnav">  <a  href="p4.html">Home</a>		 </span>
	 <a  href="categoryadmin.php">Categories</a>
 <a style="text-decoration: none" href="bestsellersadmin.php">Best Sellers</a> </span>
	<a href="newReleaseadmin.php">New Releases</a>

 <a  href="p3admin.php">Contact</a> <a href="about2.php">About</a>
 <a   href="adminadd.php"> insertproduct </a>
 <a  href="showuser.php"> user </a>
 <a   href="showproduct.php"> dproduct </a>
 <a   href="logout.php"> Logout </a> </nav>

	</nav>
</br>
</br>
<h1>Products:</h1>
</br>
<div class ="ff">
<table>
<tr>
<th>Id</th>
<th>name</th>
<th>type</th>
<th>catagory</th>
</tr>
<?php
  if(!isset($_SESSION)) 
  { 
	  session_start(); 
  }  

$servername="localhost";
$username="root";
$password="";
$db="toystoredb";
$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
  die("connaction die".mysql_error());
}
 
$sql = "SELECT * FROM games";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["type"] ."</td><td>" . $row["cat"] . "</td><td>";
}
echo "</table>";
} else {  }
$con->close();
?>
</table>

</br>
</br>
 <h1>delete product :</h1>
<form  action="deleteproduct.php" method="post" >

    	<div>
				<label>name </label>
				<input type="text" name="name" placeholder="name "required>
			</div>
			<br>
			<div>
				<label>type </label>
				<input type="type" name="type" placeholder="boy or girl "required>
			</div>
			<br>
			
    	<input type="submit" name="submit" value="Submit">
    	<button>Reset</button>
	</form>
</div>
</body>

<footer class ="topnav">
  
  <a  href="privacypolicy.html">Privacy Policy</a> 
  <a href="terms.ofuse.html">Terms of Use</a> 
 


</footer>



</html>