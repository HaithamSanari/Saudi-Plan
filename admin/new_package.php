<?php
$pageName ='New Package';
include('security.php');
include('config/dbcon.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="card-body">
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Add New Package
        </h5>
      </div>
      <div class="py-3">
        <!-- create a new package -->
        <form action="connect_package.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Posted By</h4>
              <input type="text" placeholder="Enter package owner" class="form-control form-control-line"
                name='posted_by'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Title</h4>
              <input type="text" placeholder="Enter package title" class="form-control form-control-line"
                name='title'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">City</h4>
              <input type="text" placeholder="Enter package city" class="form-control form-control-line"
                name='city'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Number of Days</h4>
              <input type="text" placeholder="Enter package days" class="form-control form-control-line"
                name='days'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Price</h4>
              <input type="text" placeholder="Enter package price" class="form-control form-control-line"
                name='price'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Overview:</h4>
              <textarea id="myEditor" name='overview' cols='60' rows='10'></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">What's Included:</h4>
              <textarea id="myEditor" name='included' cols='60' rows='10'></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Activities:</h4>
              <textarea id="myEditor" name='activities' cols='60' rows='10'></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-3 pl-4">
              <h4 class="card-title">Image1</h4>
              <input type="file" name="image_1" accept=".jpg,.jpeg,.png" />
            </div>
            <div class="col-32">
              <h4 class="card-title">Image2</h4>
              <input type="file" name="image_2" accept=".jpg,.jpeg,.png" />
            </div>
            <div class="col-3">
              <h4 class="card-title">Image3</h4>
              <input type="file" name="image_3" accept=".jpg,.jpeg,.png" />
            </div>
          </div>
          <div class="pl-2">
            <button type="submit" name="registerBtn" class="btn btn-primary">Add Package</button>
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