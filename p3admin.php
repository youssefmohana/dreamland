<html>

<head>
        <title>Contact </title>
        
        
        <link rel="stylesheet"  href="stylesheet.css">
	</head>

<body  style="background-color: lightyellow">



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

    <h1 style="color: red" >Contact </h1>

    <div>
    	<ul>
<li>Louran-724 Al Horya Street </li>
 <li>Phone number : 5853186</li>
            <br>
<li>Smouha-Street 26-Infront of Ali Ibn Abi talb Mosque</li>
 <li>Phone number : 4274446 - 9608564 </li>
              <br>
<li>Smouha Mostafa Kamel beside Orange</li>
 <li>Phone number : 4202938 </li>

		</ul>
    </div>
     <br>
    <form>
        <div>
            <label>supportmail: aastcs@gmail.com</label>
            <br>
            <br>
				<label>Message:</label>
            <br>  <form action="contactmsg.php" method="post">
				<textarea name="message"required></textarea>
              <br>
          	<input type="submit" name="submit" value="Submit">
             <button>cancel</button>    </form>

			</div>


</form>

</body>

<br><br><br><br><br><br><br><br><br><br><br><br>




 <footer style="background-color: aqua">
  <ul>
  <li><a style="text-decoration: none" href="privacypolicy.html">Privacy Policy</a> </li>
  <li><a style="text-decoration: none "href="terms.ofuse.html">Terms of Use</a> </li>
  <li>&copy; DreamLand All Rights Reserved  </li>
  </ul>


</footer>







</html>
