<!DOCTYPE html>
<html>
<head>
  <title>first</title>
</head>
<body>
<?php

  if(isset($_POST['submit']))
   
{
$un=$_POST["name"];
$type=$_POST["type"]; 
$cat=$_POST["cat"]; 

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
$sql = "select name from games where name='$un' "; 
$result = $con->query($sql);
if($result->num_rows > 0) {echo "game already exists"."<br>"; header( "refresh:3;url=adminadd.php" );}

else {
$sql2 = "insert into games(name,type,cat)  VALUES('$un','$type','$cat') ";

if ($con->query($sql2) === TRUE) {
    echo "New user Added successfully";
         header( "refresh:3;url=adminadd.php" );
} else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
}

}

mysqli_close($con);

}


  ?>
</body>
</html>