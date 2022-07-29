<?php 
  // Database connection
  $conn = mysqli_connect("localhost", "root", "", "saudiplan");  
  if(!$conn){
    header("Location:../errors/dberror.php");
    die();
  }

  // Get data to display on index page
  $sql = "SELECT * FROM package_post";
  $query = mysqli_query($conn, $sql);
  
  // Create a new post
  if(isset($_REQUEST["registerBtn"]))  
  {  
    $posted_by = $_REQUEST["posted_by"];  
    $title = $_REQUEST["title"];  
    
    $city = $_REQUEST["city"];  
    $days = $_REQUEST["days"]; 

    $price = $_REQUEST["price"]; 

    $overview = $_REQUEST["overview"];  
    $included = $_REQUEST["included"];  
    
    $activities = $_REQUEST["activities"];  
    $images = $_FILES["images"]["name"]; 

    $path = '../uploads';

    $image_ext = pathinfo($images, PATHINFO_EXTENSION);
    $filename = time(). '.' .$image_ext;
    
    $sql = "INSERT INTO package_post (posted_by,title,city,days,price,overview,included,activities,images) VALUES ('$posted_by','$title','$city','$days','$price','$overview','$included','$activities','$filename')"; 

    if(mysqli_query($conn, $sql)){
      move_uploaded_file($_FILES["images"]['tmp_name'], $path. '/' .$filename);
      header("Location: packages.php?info=added");
      exit();
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  } 
  mysqli_close($conn);
    
  }

  // Get post data based on id
  if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM package_post WHERE id = $id";
    $query = mysqli_query($conn, $sql);
  }
  
  // Delete a post
  if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];
    
    $sql = "DELETE FROM package_post WHERE id = $id";
    // mysqli_query($conn, $sql);
    
    if(mysqli_query($conn, $sql)){
      header("Location: packages.php?info=deleted");
      exit();
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  } 
    mysqli_close($conn);
    
  }
  
  // Update a post
  if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];

    $posted_by = $_REQUEST["posted_by"];  
    $title = $_REQUEST["title"];  
    
    $city = $_REQUEST["city"];  
    $days = $_REQUEST["days"]; 

    $price = $_REQUEST["price"]; 
    $overview = $_REQUEST["overview"];

    $included = $_REQUEST["included"];  
    $activities = $_REQUEST["activities"];

    $new_image = $_FILES["images"]["name"];
    $old_image = $_REQUEST["old_image"]; 

    
    if($new_image != ''){
      $update_filename = $new_image;
    }else{
      $update_filename = $old_image;
    }

    $path = '../uploads';
    
    $sql = "UPDATE package_post SET posted_by = '$posted_by', title = '$title', city = '$city', days = '$days', price = '$price', overview = '$overview', included = '$included', activities = '$activities', images = '$update_filename' WHERE id = $id";

    // mysqli_query($conn, $sql);

  if(mysqli_query($conn, $sql)){
    if($_FILES["images"]["name"] != ''){
      move_uploaded_file($_FILES["images"]['tmp_name'], $path. '/' .$new_image);
      if(file_exists("../uploads".$old_image)){
        unlink("../uploads".$old_image);
      }
    }
    header("Location: packages.php?info=updated");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
    mysqli_close($conn);
    
  }

?>