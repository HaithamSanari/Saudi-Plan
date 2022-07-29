<?php
$pageName ='Update Blog Post';
include('config/dbcon.php'); 
include('connect_blog.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card-body">
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Update Post
        </h5>
      </div>
      <div class="py-3">
        <!-- enctype="multipart/form-data" -->
        <?php foreach($query as $q){ ?>
        <form action="connect_blog.php" method="POST" enctype="multipart/form-data">
          <input type="text" hidden value='<?php echo $q['id']?>' name="id">
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Category</h4>
              <input type="text" placeholder="Enter post category" class="form-control form-control-line"
                name='post_category' value="<?php echo $q["post_category"]?>">
            </div>
            <div class="form-group pt-3">
              <div class="col-md-12">
                <h4 class="card-title">Title</h4>
                <input type="text" placeholder="Enter post title" class="form-control form-control-line"
                  name='post_title' value="<?php echo $q["post_title"]?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Description</h4>
              <input type="text" placeholder="Enter post description" class="form-control form-control-line"
                name='post_description' value="<?php echo $q["post_description"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Content</h4>
              <textarea id="myEditor" name='post_content' cols='60' rows='10'><?php echo $q["post_content"]?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Images</h4>
              <input type="file" name="post_image" accept=".jpg,.jpeg,.png" />
              <h5 class="card-title pt-4">Current Image</h5>
              <input type="hidden" name="old_image" value="<?php echo $q["post_image"]?>">
              <img src="../uploads/<?php echo $q["post_image"]?>" height="100px" width="100px"
                alt="<?php echo $q["post_title"]?>">
            </div>
          </div>
          <div class="pl-2">
            <button type="submit" name="update" class="btn btn-primary">Update Post</button>
          </div>
        </form>
        <?php } ?>
      </div>
    </div>
  </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>