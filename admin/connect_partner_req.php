<?php 

  // Database connection
  include('config/dbcon.php'); 

  // Get data to display on index page
  $sql = "SELECT * FROM partner_req";
  $query = mysqli_query($conn, $sql);
  
  // Create a new post
  if(isset($_REQUEST["registerBtn"]))  
  {  
    $posted_by = $_REQUEST["posted_by"];  
    $request = $_REQUEST["request"];
    $title = $_REQUEST["title"];  
    $city = $_REQUEST["city"];  
    $days = $_REQUEST["days"]; 

    $price = $_REQUEST["price"]; 

    $overview = $_REQUEST["overview"];  
    $included = $_REQUEST["included"];  
    
    $activities = $_REQUEST["activities"];  
    $image_1 = $_FILES["image_1"]["name"]; 
    $image_2 = $_FILES["image_2"]["name"]; 
    $image_3 = $_FILES["image_3"]["name"]; 
    
    $sql = "INSERT INTO partner_req (posted_by,request,title,city,days,price,overview,included,activities,images) VALUES ('$posted_by','$request','$title','$city','$days','$price','$overview','$included','$activities','$filename')"; 

    if(mysqli_query($conn, $sql)){
      move_uploaded_file($_FILES["images"]['tmp_name'], $path. '/' .$filename);
      header("Location: partner_req.php?info=added");
      exit();
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  } 
  mysqli_close($conn);
    
  }

  // Get post data based on id
  if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM partner_req WHERE id = $id";
    $query = mysqli_query($conn, $sql);
  }
  
  // Delete a post
  if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];
    
    $sql = "DELETE FROM partner_req WHERE id = $id";
    // mysqli_query($conn, $sql);
    
    if(mysqli_query($conn, $sql)){
      header("Location: partner_req.php?info=deleted");
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

    $request = $_REQUEST["request"];
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
    
    $sql = "UPDATE partner_req SET posted_by = '$posted_by',request = '$request', title = '$title', city = '$city', days = '$days', price = '$price', overview = '$overview', included = '$included', activities = '$activities', images = '$update_filename' WHERE id = $id";

    // mysqli_query($conn, $sql);

  if(mysqli_query($conn, $sql)){
    if($_FILES["images"]["name"] != ''){
      move_uploaded_file($_FILES["images"]['tmp_name'], $path. '/' .$new_image);
      if(file_exists("../uploads".$old_image)){
        unlink("../uploads".$old_image);
      }
    }
    header("Location: partner_req.php?info=updated");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
    mysqli_close($conn);
    
  }

?>
