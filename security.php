<?php
session_start();

include('config/dbcon.php');

if (!$conn) 
{
  header("Location:../errors/dberror.php");
  die();
}

if(!$_SESSION['username']){
  header('location: login.php');
}


?>