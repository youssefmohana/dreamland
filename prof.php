<!DOCTYPE html>
<html>
<head>
    <title> prof of client</title>
    <link rel="stylesheet"  href="stylesheet.css">
</head>

<body >


<nav class ="topnav">
 <a  style="text-decoration: none" href="clienthome.php">Home</a>		 
	 <a href="clientcat.php">Categories</a>
	 <a  href="bestsellerclient.php">Best Sellers</a>
	<a href="newReleaseclient.php">New Releases</a>

 <a href="p3.php">Contact</a> <a  href="about3.php">About</a>

 <a   href="logout.php"> Logout </a> </nav>
<h1>
<?php

 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$login_session=$_SESSION['username'];
$usert=$_SESSION['users'];
echo $login_session." "."(".$usert.")" ;?>
	
</h1>



  
</body>






















<footer class ="topnav">
  
  <a  href="privacypolicy.html">Privacy Policy</a> 
  <a href="terms.ofuse.html">Terms of Use</a> 
 


</footer>










</html>

