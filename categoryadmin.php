<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
</head>
<body  style="background-color: lightyellow">
 
  
<nav  style="background-size: 300px;  background-color:aqua;font-family:verdana; font-size:150%; font-weight: bold ">&nbsp;&nbsp;&nbsp;
<span style="background-color: pink"> <a  style="text-decoration: none" href="p4admin.php">Home</a>		 </span>
	 <a style="text-decoration: none" href="categoryadmin.php">Categories</a>
<span style="background-color: pink">	 <a style="text-decoration: none" href="bestsellersadmin.php">Best Sellers</a> </span>
	<a style="text-decoration: none " href="newReleaseadmin.php">New Releases</a>

 <a style="text-decoration: none" href="p3admin.php">Contact</a> <a style="text-decoration: none" href="about2.php">About</a>
 <a  style="text-decoration: none" href="adminadd.php"> insertproduct </a>
 <a  style="text-decoration: none" href="showuser.php"> user </a>
 <a  style="text-decoration: none" href="showproduct.php"> dproduct </a>
 <a  style="text-decoration: none" href="logout.php"> Logout </a> </nav>
	<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } ?>
    <br>
    <br>

<table  style="margin-left:auto;margin-right:auto;">
	<tr>
		
 	

		<td>
			 <a href="clienthome.php"><img width="400" height="400"src="girl1.jpg" </a>    </td>
		<td> 
			 <a href="client.php"><img width="400" height="400" src="boy2.jpg"></a>  
		</td>

		<tr>
			<td> 
				<ul>
				

				<li> <a href="girls1.html">Age 0-2</a></li>
				<li><a href="girls2.html">Age 2-4</a></li>
				<li><a href="girls3.html">Age 4-8</a></li>
				<li><a href="girls4.html">Age 8-12</a></li>
			</ul>

		</td>

			<td>
				<ul>

<li> <a href="boys1.html">Age 0-2</a></li>
				<li><a href="boys2.html">Age 2-4</a></li>
				<li><a href="boy3.html">Age 4-8</a></li>
				<li><a href="boys4.html">Age 8-12</a></li>




				
			</ul>

			</td>
		</tr>
	</tr>
</table>
</body>

<br>	
<br>	
<br>	
<br>	
<br>	

<footer style="background-color: aqua">
	<ul>
	
	<li><a style="text-decoration: none" href="privacypolicy.html">Privacy Policy</a> </li>
	<li><a style="text-decoration: none "href="terms.ofuse.html">Terms of Use</a> </li>
	<li>&copy; DreamLand All Rights Reserved	</li>
	</ul>
	

</footer>
</html>