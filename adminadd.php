
<!DOCTYPE html>
<html>
	<head>
		<title>register</title>
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
  <h1>add product :</h1>
  <div class="form1" >
<form  action="addproduct.php" method="post" >

    
				<label>name </label>
				<input type="text" name="name" placeholder="name "required>
		
				<label>type </label>
				<input type="number" name="type" placeholder="boy or girl "required>
		
				<label>catigor </label>
				<input type="text" name="cat" placeholder="from 0 to 5 "required>
		
    	<input type="submit" name="submit" value="Submit">
		<button>Reset</button>

	</form>
</div>
</body>
<footer style="background-color: aqua">
  <ul>
  <li><a style="text-decoration: none" href="privacypolicy.html">Privacy Policy</a> </li>
  <li><a style="text-decoration: none "href="terms.ofuse.html">Terms of Use</a> </li>
  <li>&copy; DreamLand All Rights Reserved  </li>
  </ul>
  

</footer>

</html>
