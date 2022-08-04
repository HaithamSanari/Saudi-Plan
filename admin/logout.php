<?php
session_start();

include('config/dbcon.php');

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['authentication_users'] );
    unset($_SESSION['authentication']);
    unset($_SESSION['auth_register']);
    header('Location: login.php');
    exit(0);
}

?>