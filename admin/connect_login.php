<?php 

// Check if the session start
include('security.php');

// Database connection
include('config/dbcon.php');

// login button
if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email']; 
    $password_login = $_POST['password'];
    $userName = $_REQUEST['username'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($conn, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['users_type'] == "Admin")
    {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    }
    else if($usertypes['users_type'] == "Partner")
    {
        $_SESSION['username'] = $email_login;
        header('Location: partner_dashboard.php');
    }
    else
    {
        $_SESSION['status'] = "<div class='alert alert-danger' role='alert'>Email / Password is Invalid</div>";
        header('Location: login.php');
    }
}

// Admin Demo login button
if(isset($_POST['test_btn']))
{
    $test_btn = $_POST['test_btn'];
    $email_login = $_POST['email']; 
    $password_login = $_POST['password'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($conn, $query);

    if($email_login == "AdminDemo@demo.com"){
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    }else if($email_login == "PartnerDemo@demo.com"){
        $_SESSION['username'] = $email_login;
        header('Location: partner_dashboard.php');
    }
    else{
        $_SESSION['status'] = "<div class='alert alert-danger' role='alert'>Email / Password is Invalid</div>";
        header('Location: login.php');
    }
}

?>