<?php 

// Database connection
$conn = mysqli_connect("localhost", "root", "", "saudiplan");  
if(!$conn){
  header("Location:../errors/dberror.php");
  die();
}

// Get data to display on index page
$sql = "SELECT * FROM partner_reg";
$query = mysqli_query($conn, $sql);

// Get post data based on id
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM partner_reg WHERE id = $id";
  $query = mysqli_query($conn, $sql);
}

// Delete a post
if(isset($_REQUEST['delete'])){
  $id = $_REQUEST['id'];
  
  $sql = "DELETE FROM partner_reg WHERE id = $id";
  // mysqli_query($conn, $sql);
  
  if(mysqli_query($conn, $sql)){
    header("Location: partner_register.php?info=deleted");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
  mysqli_close($conn);
  
}

// Update a post
if(isset($_REQUEST['update'])){
  $id = $_REQUEST['id'];

  $firstName = $_REQUEST["firstName"];  
  $lastName = $_REQUEST["lastName"];  

  $inputEmail =  $_REQUEST["inputEmail"];  
  $inputPhone =  $_REQUEST["inputPhone"]; 

  $businessName =  $_REQUEST["businessName"];  

  $inputCity =  $_REQUEST["inputCity"];  
  $message =  $_REQUEST["message"];   

  $sql = "UPDATE partner_reg SET firstName = '$firstName', lastName = '$lastName', inputEmail = '$inputEmail', inputPhone = '$inputPhone', businessName = '$businessName', inputCity = '$inputCity', message = '$message' WHERE id = $id";

  // mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
  header("Location: partner_register.php?info=updated");
  exit();
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
  mysqli_close($conn);
  
}

?>

<?php 

// $conn = mysqli_connect("localhost", "root", "", "saudiplan");  
if(isset($_REQUEST["firstName"]))  
{  
    $firstName = mysqli_real_escape_string($conn, $_REQUEST["firstName"]);  
    $lastName = mysqli_real_escape_string($conn, $_REQUEST["lastName"]);  

    $inputEmail = mysqli_real_escape_string($conn, $_REQUEST["inputEmail"]);  
    $inputPhone = mysqli_real_escape_string($conn, $_REQUEST["inputPhone"]); 

    $businessName =mysqli_real_escape_string($conn,  $_REQUEST["businessName"]);  
  
    $inputCity = mysqli_real_escape_string($conn, $_REQUEST["inputCity"]);  
    $message = mysqli_real_escape_string($conn, $_REQUEST["message"]);  

    // $errorEmpty = false;
    // $errorEmail = false;

    // if(empty($firstName) || empty($lastName) || empty($inputEmail) || empty($inputPhone) || empty($businessName) || empty($inputCity) || empty($message)){
    //   echo "<span class='text-danger'>All Fields are required!</span>";
    //   $errorEmpty = true;
    // }
    // if(!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)){
    //   echo "<span class='text-danger'>Write a valid e-mail address!</span>";
    // $errorEmail = true;
    // }else{
    //   echo "<span class='text-success'>registration successfully!</span>";
    // }

    if($conn->connect_error){
      die('Connection Failed:' .$conn->connect_error);
    }
    else{
      $stmt = $conn->prepare("insert into partner_reg (firstName,lastName,inputEmail,inputPhone,businessName,inputCity,message) values (?,?,?,?,?,?,?)");
      $stmt->bind_param("sssssss",$firstName,$lastName,$inputEmail,$inputPhone,$businessName,$inputCity,$message);
      $stmt->execute();
      echo "registration successfully";
      $stmt->close();
      $conn->close();
    }
    
} 

?>
