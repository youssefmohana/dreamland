<!DOCTYPE html>
<html>
<head>
	<title>first</title>
</head>
<body>
<?php
  if(isset($_POST['submit']))
   
{
$uname=$_POST["username"];
$firstname=$_POST["firstName"]; 
$lastname=$_POST["lastName"]; 
$password2=$_POST["password"]; 
$conpassword=$_POST["conpassword"]; 
$email1=$_POST["email"]; 
$Gender=$_POST["gender"];
$age=$_POST["age"];
//$bday=$_POST["birthday"];
$type="1";


$servername="localhost";
$username="root";
$password="";
$db="toystoredb";
$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
	die("connaction die".mysql_error());
}
 
echo "connection sucessfull<br>";
$sql = "select username from user where username='$uname' "; 
$result = $con->query($sql);
if($result->num_rows > 0) {echo "UserName already exists"."<br>";	header( "refresh:3;url=p1.html" );}

else {
$sql2 = "insert into user(username,password,firstname,lastname,email,Gender,Age,type)  VALUES('$uname','$password2','$firstname','$email1','$lastname',
'$Gender','$age','$type') ";

if ($con->query($sql2) === TRUE) {
    echo "New user Added successfully";
      	header('location: p2.html');
} else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
}

}

mysqli_close($con);

}


  ?>
</body>
</html>