<?php 

// Database connection
include('config/dbcon.php');

// Get data to display on index page
$sql = "SELECT * FROM package_post";
$query = mysqli_query($conn, $sql);

// Create a new Package
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

  $image_1 = $_FILES["image_1"]["name"]; 
  $image_2 = $_FILES["image_2"]["name"]; 
  $image_3 = $_FILES["image_3"]["name"]; 

  // path of uploaded image
  $path = '../uploads';

  // $image_ext = pathinfo($images, PATHINFO_EXTENSION);
  // $filename = time(). '.' .$image_ext;
  
  $sql = "INSERT INTO package_post (posted_by,title,city,days,price,overview,included,activities,image_1,image_2,image_3) VALUES ('$posted_by','$title','$city','$days','$price','$overview','$included','$activities','$image_1','$image_2','$image_3')"; 

  // Upload the new image to folder `uploads`
  if(mysqli_query($conn, $sql)){
    move_uploaded_file($_FILES["image_1"]['tmp_name'], $path. '/' .$image_1);
    move_uploaded_file($_FILES["image_2"]['tmp_name'], $path. '/' .$image_2);
    move_uploaded_file($_FILES["image_3"]['tmp_name'], $path. '/' .$image_3);
    header("Location: packages.php?info=added");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
mysqli_close($conn);
  
}

// Get Package data based on id
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM package_post WHERE id = $id";
  $query = mysqli_query($conn, $sql);
}

// Delete a Package
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

// Update a Package
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

  $new_image_1 = $_FILES["image_1"]["name"];
  $new_image_2 = $_FILES["image_2"]["name"];
  $new_image_3 = $_FILES["image_3"]["name"];

  
  $old_image_1 = $_REQUEST["old_image_1"]; 
  $old_image_2 = $_REQUEST["old_image_2"]; 
  $old_image_3 = $_REQUEST["old_image_3"]; 

  // image validation // if image is exist replace it with new image if not insert new image
  if($new_image_1 != '' || $new_image_2 != '' || $new_image_3 != ''){
  
    if($new_image_1 != ''){
      $update_filename_1 = $new_image_1;
    }else{
      $update_filename_1 = $old_image_1;
    }
    
    if($new_image_2 != ''){
      $update_filename_2 = $new_image_2;
    }else{
      $update_filename_2 = $old_image_2;
    }

    if($new_image_3 != ''){
      $update_filename_3 = $new_image_3;
    }else{
      $update_filename_3 = $old_image_3;
    }

  }else{
    $update_filename_1 = $old_image_1;
    $update_filename_2 = $old_image_2;
    $update_filename_3 = $old_image_3;
  }

  // Update the image in folder 'uploads' 
  $path = '../uploads';
  
  $sql = "UPDATE package_post SET posted_by = '$posted_by', title = '$title', city = '$city', days = '$days', price = '$price', overview = '$overview', included = '$included', activities = '$activities', image_1 = '$update_filename_1', image_2 = '$update_filename_2', image_3 = '$update_filename_3' WHERE id = $id";

if(mysqli_query($conn, $sql)){
  
  // if not already uploaded then insert new image
  if($_FILES["image_1"]["name"] != ''){
    move_uploaded_file($_FILES["image_1"]['tmp_name'], $path. '/' .$new_image_1);
    // if image is already uploaded then update image 
    if(file_exists("../uploads" .$old_image_1)){
      unlink("../uploads" .$old_image_1);
    }
  }else if($_FILES["image_2"]["name"] != ''){
    move_uploaded_file($_FILES["image_2"]['tmp_name'], $path. '/' .$new_image_2);
    if(file_exists("../uploads" .$old_image_2)){
      unlink("../uploads" .$old_image_2);
    }
  }else if($_FILES["image_3"]["name"] != ''){
    move_uploaded_file($_FILES["image_3"]['tmp_name'], $path. '/' .$new_image_3);
    if(file_exists("../uploads" .$old_image_3)){
      unlink("../uploads".$old_image_3);
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