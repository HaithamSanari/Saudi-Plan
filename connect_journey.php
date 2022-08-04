<?php 

// Database connection
include('config/dbcon.php');

// Get data to display on index page
$sql = "SELECT * FROM plan_journey_reg";
$query = mysqli_query($conn, $sql);

// Get Journey data based on id
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM plan_journey_reg WHERE id = $id";
  $query = mysqli_query($conn, $sql);
}

// Delete a Journey
if(isset($_REQUEST['delete'])){
  $id = $_REQUEST['id'];
  
  $sql = "DELETE FROM plan_journey_reg WHERE id = $id";
  // mysqli_query($conn, $sql);
  
  if(mysqli_query($conn, $sql)){
    header("Location: journey_register.php?info=deleted");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
  mysqli_close($conn);
  
}

// Update a Journey
if(isset($_REQUEST['update'])){
  $id = $_REQUEST['id'];

  $firstName = $_REQUEST["firstName"];  
  $lastName = $_REQUEST["lastName"];  

  $inputEmail =  $_REQUEST["inputEmail"];  
  $inputPhone =  $_REQUEST["inputPhone"]; 

  $inputArrival = $_REQUEST["inputArrival"];  
  $inputDeparture = $_REQUEST["inputDeparture"]; 

  $inputCity =  $_REQUEST["inputCity"];  
  $inputNumberOfGuests = $_REQUEST["inputNumberOfGuests"]; 
  $message =  $_REQUEST["message"];   

  $sql = "UPDATE plan_journey_reg SET firstName = '$firstName', lastName = '$lastName', inputEmail = '$inputEmail', inputPhone = '$inputPhone', inputArrival = '$inputArrival', inputDeparture = '$inputDeparture', inputCity = '$inputCity', inputNumberOfGuests = '$inputNumberOfGuests', message = '$message' WHERE id = $id";

  // mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
  header("Location: journey_register.php?info=updated");
  exit();
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
  mysqli_close($conn);
  
}
?>

<?php 

// Request a new user Journey information
if(isset($_REQUEST["submit"]))  
{  
  $firstName = $_REQUEST["firstName"];  
  $lastName = $_REQUEST["lastName"];  

  $inputEmail = $_REQUEST["inputEmail"];  
  $inputPhone = $_REQUEST["inputPhone"]; 

  $inputArrival = $_REQUEST["inputArrival"];  
  $inputDeparture = $_REQUEST["inputDeparture"]; 

  $inputCity = $_REQUEST["inputCity"];  
  $inputNumberOfGuests = $_REQUEST["inputNumberOfGuests"];  
  $message = $_REQUEST["message"];  

  if($conn->connect_error){
    die('Connection Failed:' .$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into plan_journey_reg (firstName,lastName,inputEmail,inputPhone,inputArrival,inputDeparture,inputCity,inputNumberOfGuests,message) values (?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss",$firstName,$lastName,$inputEmail,$inputPhone,$inputArrival,$inputDeparture,$inputCity,$inputNumberOfGuests,$message);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
  }
} 

?>