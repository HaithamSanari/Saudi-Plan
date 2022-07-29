<?php 

  // Database connection
  $conn = mysqli_connect("localhost", "root", "", "saudiplan");  
  if(!$conn){
    header("Location:../errors/dberror.php");
    die();
  }

  // Get data to display on index page
  $sql = "SELECT * FROM package_reg";
  $query = mysqli_query($conn, $sql);

  // Get post data based on id
  if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM package_reg WHERE id = $id";
    $query = mysqli_query($conn, $sql);
  }
  
  // Delete a post
  if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];
    
    $sql = "DELETE FROM package_reg WHERE id = $id";
    mysqli_query($conn, $sql);
    header("Location: req_package.php?info=deleted");
      exit();
    
  }

  // Update a post
  if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];

    $firstName = $_REQUEST["firstName"];  
    $lastName = $_REQUEST["lastName"];  
    
    $inputEmail = $_REQUEST["inputEmail"];  
    $inputPhone = $_REQUEST["inputPhone"]; 

    $inputNumberOfGuests = $_REQUEST["inputNumberOfGuests"]; 
    $inputArrival = $_REQUEST["inputArrival"]; 

    // $title = $_REQUEST["title"];
    
    $sql = "UPDATE package_reg SET firstName = '$firstName', lastName = '$lastName', inputEmail = '$inputEmail', inputPhone = '$inputPhone', inputNumberOfGuests = '$inputNumberOfGuests', inputArrival = '$inputArrival' WHERE id = $id";

    // mysqli_query($conn, $sql);

  if(mysqli_query($conn, $sql)){
    header("Location: req_package.php?info=updated");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
    mysqli_close($conn);
  }
  
?>

<?php 

  // Requested packages
  if(isset($_REQUEST["firstName"]))  
  {  
    $firstName = $_REQUEST["firstName"];  
    $lastName = $_REQUEST["lastName"];  

    $inputEmail = $_REQUEST["inputEmail"];  
    $inputPhone = $_REQUEST["inputPhone"]; 

    $inputNumberOfGuests = $_REQUEST["inputNumberOfGuests"]; 
    $inputArrival = $_REQUEST["inputArrival"];

    $title = $_REQUEST["title"];

    if($conn->connect_error){
      die('Connection Failed:' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into package_reg (firstName,lastName,inputEmail,inputPhone,inputNumberOfGuests,inputArrival,title) values (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$firstName,$lastName,$inputEmail,$inputPhone,$inputNumberOfGuests,$inputArrival,$title);
        $stmt->execute();
        echo "registration successfully";
        // header("Location: ../package_content.php");
        $stmt->close();
        $conn->close();
      }
  }

?>