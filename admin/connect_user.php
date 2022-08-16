<?php

// Check if the session start
include('security.php');

// Database connection
include('config/dbcon.php');

// users button
if(isset($_POST['usersbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $user_type = $_POST['users_type'];
    
    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($conn, $email_query);

    if(mysqli_num_rows($email_query_run) > 0 ){
        $_SESSION['status'] = "<div class='alert alert-warning' role='alert'>Email Already Taken. Please Try Another one.</div>";
        $_SESSION['status_code'] = "error";
        header('Location: users.php');  
    
    } else if($username == ""){
        // Check if the User Name is Empty
        $_SESSION['status'] = "<div class='alert alert-warning' role='alert'>Username is Required.</div>";
        $_SESSION['status_code'] = "error";
        header('Location: users.php'); 

    } else if($email == ''){
        // Check if the Email is Empty
        $_SESSION['status'] = "<div class='alert alert-warning' role='alert'>Email cannot be left blank.</div>";
        $_SESSION['status_code'] = "error";
        header('Location: users.php');  

    } else if($password == "" || $cpassword == ""){
        // Check if the Password and conform Password is Empty
        if ($password == ""){
            $_SESSION['status'] = "<div class='alert alert-warning' role='alert'>Password is Required.</div>";
            $_SESSION['status_code'] = "error";
            header('Location: users.php');
        }

        if ($cpassword == ""){
            $_SESSION['status'] = "<div class='alert alert-warning' role='alert'>Confirm Password is Required.</div>";
            $_SESSION['status_code'] = "error";
            header('Location: users.php');
        } 

    } else{

        if($password === $cpassword){
            // Check if the Password and conform Password is Equals
            $query = "INSERT INTO register (username,email,password,users_type) VALUES ('$username','$email','$password','$user_type')";
            $query_run = mysqli_query($conn, $query);
            
            if($query_run){
                // echo "Saved";
                $_SESSION['status'] = "<div class='alert alert-success' role='alert'>User has been Added Successfully</div>";
                $_SESSION['status_code'] = "success";
                header('Location: users.php');
            } else{
                $_SESSION['status'] = "<div class='alert alert-danger' role='alert'>User Not Added</div>";
                $_SESSION['status_code'] = "error";
                header('Location: users.php');  
            }
        } else{
            $_SESSION['status'] = "<div class='alert alert-warning' role='alert'>Password and Confirm Password Does Not Match</div>";
            $_SESSION['status_code'] = "warning";
            header('Location: users.php');  
        }
    }

}

// update user button 
if(isset($_POST['updatebtn']))
{
    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $email=$_POST['edit_email'];
    $password=$_POST['edit_password'];
    $user_type = $_POST['users_type'];


    $query ="UPDATE register SET username = '$username', email = '$email', password = '$password',users_type = '$user_type' WHERE id ='$id' ";
    $query_run = mysqli_query($conn, $query) ;

    if($query_run)
    {
        $_SESSION['success']= "<div class='alert alert-success' role='alert'>User has been Updated Successfully</div>";
        header('location: users.php');
    }

    else{
        $_SESSION['status']= "<div class='alert alert-warning' role='alert'>User is not Updated</div>";
        header('location: users.php');
    }
}

// delete users button
if(isset($_POST['delete_btn']))
{
    $id=$_POST['delete_id'];  
    $query ="DELETE  FROM  register WHERE id ='$id' ";
    $query_run = mysqli_query($conn, $query) ;

if($query_run)
{
    $_SESSION['success']= "<div class='alert alert-danger' role='alert'>User has been Deleted Successfully</div>";
    header('location: users.php');
}else{
    $_SESSION['status']= "<div class='alert alert-warning' role='alert'>User is not Deleted</div>";
    header('location: users.php');
}
}

?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>