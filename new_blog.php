<?php
$pageName ='New Blog Post';
include('security.php');
include('config/dbcon.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="card-body">
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Add New Post
        </h5>
      </div>
      <div class="py-3">
        <!-- create a new blog post-->
        <form action="connect_blog.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Category</h4>
              <input type="text" placeholder="Enter post category" class="form-control form-control-line"
                name='post_category'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Title</h4>
              <input type="text" placeholder="Enter post title" class="form-control form-control-line"
                name='post_title'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Description</h4>
              <input type="text" placeholder="Enter post description" class="form-control form-control-line" name='post_description'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Content</h4>
              <textarea id="myEditor" name='post_content' cols='60' rows='10'></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Images</h4>
              <input type="file" name="post_image" accept=".jpg,.jpeg,.png" />
            </div>
          </div>
          <div class="pl-2">
            <button type="submit" name="registerBtn" class="btn btn-primary">Add Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>