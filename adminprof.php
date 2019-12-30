<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body  style="background-color: lightyellow">


<nav  style="background-size: 300px;  background-color:aqua;font-family:verdana; font-size:150%; font-weight: bold ">&nbsp;&nbsp;&nbsp;
<span style="background-color: pink"> <a  style="text-decoration: none" href="p4admin.php">Home</a>		 </span>
     <a style="text-decoration: none" href="categoryadmin.php">Categories</a>
<span style="background-color: pink">	 <a style="text-decoration: none" href="bestsellersadmin.php">Best Sellers</a> </span>
	<a style="text-decoration: none " href="newReleaseadmin.php">New Releases</a>

 <a style="text-decoration: none" href="p3.html">Contact</a> <a style="text-decoration: none" href="about2.php">About</a>
 <a  style="text-decoration: none" href="adminadd.php"> insertproduct </a>
 <a  style="text-decoration: none" href="showuser.php"> user </a>
 <a  style="text-decoration: none" href="showproduct.php"> dproduct </a>
 <a  style="text-decoration: none" href="logout.php"> Logout </a>


    </nav>
<h1>Welcome <?php 
 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$login_session=$_SESSION['username'];
$usert=$_SESSION['users'];
echo $login_session." "."(".$usert.")" ;?>
	
</h1>



  
</body>





























</html>

