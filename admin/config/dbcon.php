<?php 


$host = "us-cdbr-east-06.cleardb.net";
$username = "b2dac4a3907ed1";
$password = "db080a87";
$database="heroku_5611e636a2068a8";

// Database connection
$conn = mysqli_connect("$host","$username","$password","$database");

if (!$conn) 
{
  header("Location:../errors/dberror.php");
  die();
}


?>
