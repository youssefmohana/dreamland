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
	
</h1>

    <center>
    	 <img src="back4.jpg" height="650 "width="1500">
    </center>


   <table>

   	<center>
   <div>

   		<img width="300" height="200" src="welove.jpg "></td>
   		<img width="300"height="200"src="40.jpg"></td>
   		<img width="300" height="200" src="heaven.jpg"></td>
   		</div>

   		</center>

   	</tr>
   </table>














	<table style="margin-left:auto;margin-right:auto;">

	<tr >

	<td><img src="new1.jpg" width="300" height="300"></td>
	<td><img src="new2.jpg" width="300" height="300"></td>
	<td><img src="new3.jpg" width="300" height="300"></td>

	<tr>

	<td align="middle"><label>Price : 500</label></td>
	<td align="middle"><label>Price : 500</label></td>
	<td align="middle"><label>Price : 500</label></td>


	</tr>

	<tr>

	<td><img src="new4.jpg" width="300" height="300"></td>
	<td><img src="new5.jpg" width="300" height="300"></td>
	<td><img src="new11.jpg" width="300" height="300"></td>
	</tr>

<tr>

<td align="middle"><label>Price : 500</label></td>
<td align="middle"><label>Price : 500</label></td>
<td align="middle"><label>Price : 500</label></td>
<br>
<br>
</tr>

</table>


<table>
	<tr>
		<td>
		<img height="400"width="750" src="co.jpg ">
		</td>

		<td>
		<img height="400"width="750"src="ev.jpg">
		</td>
	</tr>
</table>



<table style="margin-left:auto;margin-right:auto;">

	<tr>

	<td><img src="new12.jpg" width="300" height="300"></td>
	<td><img src="new13.jpg" width="300" height="300"></td>
	<td><img src="new1.jpg" width="300" height="300"></td>
	</tr>

<tr>

	<td align="middle"><label>Price : 500</label></td>
	<td align="middle"><label>Price : 500</label></td>
	<td align="middle"><label>Price : 500</label></td>
</tr>





<tr >

	<td><img src="new1.jpg" width="300" height="300"></td>
	<td><img src="new2.jpg" width="300" height="300"></td>
	<td><img src="new3.jpg" width="300" height="300"></td>

	<tr>

	<td align="middle"><label>Price : 500</label></td>
	<td align="middle"><label>Price : 500</label></td>
	<td align="middle"><label>Price : 500</label></td>


	</tr>


   </table>


</body>


<footer style="background-color: aqua">
	<ul>

	<li><a style="text-decoration: none" href="privacypolicy.html">Privacy Policy</a> </li>
	<li><a style="text-decoration: none "href="terms.ofuse.html">Terms of Use</a> </li>
	<li>&copy; DreamLand All Rights Reserved	</li>
	</ul>


</footer>

</html>
