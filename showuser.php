<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<link rel="stylesheet"  href="stylesheet.css">

</head>


<nav  class ="topnav">  <a  href="p4.html">Home</a>		 </span>
	 <a  href="categoryadmin.php">Categories</a>
 <a style="text-decoration: none" href="bestsellersadmin.php">Best Sellers</a> </span>
	<a href="newReleaseadmin.php">New Releases</a>

 <a  href="p3admin.php">Contact</a> <a href="about2.php">About</a>
 <a   href="adminadd.php"> insertproduct </a>
 <a  href="showuser.php"> user </a>
 <a   href="showproduct.php"> dproduct </a>
 <a   href="logout.php"> Logout </a> </nav>
<body>
</br>
</br>
<h1>Users:</h1>
</br>
<div  class ="ff">
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
</tr>
<?php
$servername="localhost";
$username="root";
$password="";
$db="toystoredb";
$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
  die("connaction die".mysql_error());
}
 
$sql = "SELECT * FROM user";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["password"]. "</td></tr>";
}
echo "</table>";
} else {  }
$con->close();
?>
</table>

</br>
</br>
 <h1> delete product :</h1>
 <div class="form1" >
<form action="deleteuser.php" method="post" >

    	<div>
				<label> id: </label>
				<input type="text" name="id" placeholder="id"required>
		
		
				<label> name: </label>
				<input type="text" name="un" placeholder="username "required>
			
			
    	<input type="submit" name="submit" value="Submit">
    	<button>Reset</button>
	</form>
</div>
</body>










</body>

<footer class ="topnav">
  
  <a  href="privacypolicy.html">Privacy Policy</a> 
  <a href="terms.ofuse.html">Terms of Use</a> 
 


</footer>



</html>