<?php 


$host = "us-cdbr-east-06.cleardb.net";
$username = "b42d1eba35f558";
$password = "a6a0a82d";
$database="heroku_0a2abcd4b227aca";

// Database connection
$conn = mysqli_connect("$host","$username","$password","$database");

if (!$conn) 
{
  header("Location:../errors/dberror.php");
  die();
}


?>
