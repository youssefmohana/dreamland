<!DOCTYPE html>
<html>
<head>
  <title>first</title>
</head>
<body>
<?php

  if(isset($_POST['submit']))
   
{
$id=$_POST["id"];
$un=$_POST["un"]; 

//$bday=$_POST["birthday"];


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
$sql = "select * from user where  id='$id' AND username='$un' "; 
$result = $con->query($sql);
if(!$result->num_rows) {echo "user already delete"."<br>"; header( "refresh:3;url=showuser.php" );}

else {
$sql2 = "DELETE FROM user WHERE id='$id' AND username='$un' ";

if ($con->query($sql2) === TRUE) {
    echo "New delete successfully";
         header( "refresh:3;url=showuser.php" );
} else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
}

}

mysqli_close($con);

}


  ?>
</body>
</html>