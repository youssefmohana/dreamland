<html>
<head>
<title>DreamLand</title>
<link rel="stylesheet" href="stylesheet.css">
</head>




<body  >



<nav class ="topnav">
 <a  style="text-decoration: none" href="clienthome.php">Home</a>		 
	 <a href="clientcat.php">Categories</a>
	 <a  href="bestsellerclient.php">Best Sellers</a>
	<a href="newReleaseclient.php">New Releases</a>

 <a href="p3.php">Contact</a> <a  href="about3.php">About</a>

 <a   href="logout.php"> Logout </a> </nav>
<h1>Welcome <?php 
 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$login_session=$_SESSION['username'];
$usert=$_SESSION['users'];
echo $login_session." "."(".$usert.")" ;?>
	<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } ?>
    <br>
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