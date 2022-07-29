<?php 

// Database connection
include('config/dbcon.php'); 

// Get data to display on index page
$sql = "SELECT * FROM blog_post";
$query = mysqli_query($conn, $sql);

// Create a new Blog Post
if(isset($_REQUEST["registerBtn"]))  
{  
  $post_title = $_REQUEST["post_title"];  
  $post_category = $_REQUEST["post_category"];  
  
  $post_description = $_REQUEST["post_description"];  
  $post_content = $_REQUEST["post_content"]; 

  $post_image = $_FILES["post_image"]["name"]; 
  $created = $_REQUEST["created"]; 

  //Upload the new image to folder 'uploads'
  $path = '../uploads';

  $image_ext = pathinfo($post_image, PATHINFO_EXTENSION);
  $filename = time(). '.' .$image_ext;

  $sql = "INSERT INTO blog_post (post_title,post_category,post_description,post_content,post_image,created) VALUES ('$post_title','$post_category','$post_description','$post_content','$filename',NOW())"; 
  
  if(mysqli_query($conn, $sql)){
    move_uploaded_file($_FILES["post_image"]['tmp_name'], $path. '/' .$filename);
    header("Location: blogs.php?info=added");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
mysqli_close($conn);
}

// Get Blog Post data based on id
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM blog_post WHERE id = $id";
  $query = mysqli_query($conn, $sql);
}

// Delete a Blog Post
if(isset($_REQUEST['delete'])){
  $id = $_REQUEST['id'];
  
  $sql = "DELETE FROM blog_post WHERE id = $id";
  mysqli_query($conn, $sql);
  
  header("Location: blogs.php?info=deleted");
  exit();
}

// Update a Blog Post
if(isset($_REQUEST['update'])){
  $id = $_REQUEST['id'];
  $post_title = $_REQUEST["post_title"];  
  $post_category = $_REQUEST["post_category"];  
  
  $post_description = $_REQUEST["post_description"];  
  $post_content = $_REQUEST["post_content"]; 

  $new_image = $_FILES["post_image"]["name"];
  $old_image = $_REQUEST["old_image"]; 

  $created = $_REQUEST["created"];
  
  if($new_image != ''){
    $update_filename = $new_image;
  }else{
    $update_filename = $old_image;
  }
  //Update the image in folder 'uploads' 
  $path = '../uploads';
  
  $sql = "UPDATE blog_post SET post_title = '$post_title', post_category = '$post_category', post_description = '$post_description', post_content = '$post_content', post_image = '$update_filename' WHERE id = $id";
  

if(mysqli_query($conn, $sql)){
  if($_FILES["post_image"]["name"] != ''){
    move_uploaded_file($_FILES["post_image"]['tmp_name'], $path. '/' .$new_image);
    if(file_exists("../uploads".$old_image)){
      unlink("../uploads".$old_image);
    }
  }
  header("Location: blogs.php?info=updated");
  exit();
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
  mysqli_close($conn);
  
}
  
?>