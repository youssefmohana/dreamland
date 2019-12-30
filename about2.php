<html>
<head>
   <title> About </title>
   <link rel="stylesheet"  href="stylesheet.css">
</head>
    
<body  >
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
} 

?>

<link rel="stylesheet"  href="stylesheet.css">

<h1 style= text-align:center;font-size:24;color:red>
About US:
</h1>
<p style= text-align:center;font-size:24>
Dream Land 40 years of experience in the sale of toys, doctors specializing in the field of child development,</br>
interested in finishing the skills and intelligence and senses of the child,</br>
offers the child the opportunity to bring out his skills and innovations.
</p>
<h2 style= text-align:center;font-size:24;color:red>
Mission:
</h2>
<p style= text-align:center;font-size:20>
We are interested in improving and developing the skills and intelligence of the child, and developing the senses of the child.
</p>
<h3 style= text-align:center;font-size:24;color:red>
Vision:
</h3>
<p style= text-align:center;font-size:20>
To become the first and largest exhibition to show and sell all toys in Egypt and the Middle East.
</p>
<center>
	<img src="happy.jpeg">	
</center>

</body>





<footer class ="topnav">
  
  <a  href="privacypolicy.html">Privacy Policy</a> 
  <a href="terms.ofuse.html">Terms of Use</a> 
 


</footer>



</html>
