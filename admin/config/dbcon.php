<?php 


$host = "us-cdbr-east-06.cleardb.net";
$username = "bccc019caa0dc7";
$password = "0b2df797";
$database="heroku_222156371dfad1a";

// Database connection
$conn = mysqli_connect("$host","$username","$password","$database");

if (!$conn) 
{
  header("Location:../errors/dberror.php");
  die();
}


?>
