<?php
$pageName ='Update Request';
include('security.php');
include('connect_partner_package_req.php'); 
include('config/dbcon.php'); 
include('includes/header.php'); 
include('includes/navbar_partner.php'); 
?>

<!--update request-->
<div class="card-body">
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Update Request
        </h5>
      </div>
      <div class="py-3">
        <?php foreach($query as $q){ ?>
        <form action="connect_partner_package_req.php" method="POST" enctype="multipart/form-data">
          <input type="text" hidden value='<?php echo $q['id']?>' name="id">
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Posted By</h4>
              <input type="text" placeholder="Enter Package Owner" class="form-control form-control-line"
                name='posted_by' value="<?php echo $q["posted_by"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Request</h4>
              <input type="text" placeholder="Enter Your Request [ Add or Update or Delete ]" class="form-control form-control-line"
                name='request' value="<?php echo $q["request"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Title</h4>
              <input type="text" placeholder="Enter Package Title" class="form-control form-control-line" name='title'
                value="<?php echo $q["title"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">City</h4>
              <input type="text" placeholder="Enter Package City" class="form-control form-control-line" name='city'
                value="<?php echo $q["city"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Number of Days</h4>
              <input type="text" placeholder="Enter Number of Days" class="form-control form-control-line" name='days'
                value="<?php echo $q["days"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Price</h4>
              <input type="text" placeholder="Enter Package Price" class="form-control form-control-line" name='price'
                value="<?php echo $q["price"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Overview:</h4>
              <textarea id="myEditor" name='overview' cols='60' rows='10'><?php echo $q["overview"]?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">What's Included:</h4>
              <textarea id="myEditor" name='included' cols='60' rows='10'><?php echo $q["included"]?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Activities:</h4>
              <textarea id="myEditor" name='activities' cols='60' rows='10'><?php echo $q["activities"]?></textarea>
            </div>
          </div>
          <div class="form-group row px-3">
            <div class="col-3">
              <h4 class="card-title">Image 1</h4>
              <input type="file" name="image_1" accept=".jpg,.jpeg,.png" />
            </div>
            <div class="col-3 ">
              <h4 class="card-title">Image 2</h4>
              <input type="file" name="image_2" accept=".jpg,.jpeg,.png" />
            </div>
            <div class="col-3">
              <h4 class="card-title">Image 3</h4>
              <input type="file" name="image_3" accept=".jpg,.jpeg,.png" />
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-3">
                  <h5 class="card-title pt-4">Current Image 1</h5>
                  <input type="hidden" name="old_image_1" value="<?php echo $q["image_1"]?>">
                  <img src="../uploads/<?php echo $q["image_1"]?>" height="100px" width="100px"
                    alt="<?php echo $q["title"]?>">
                </div>
                <div class="col-3">
                  <h5 class="card-title pt-4">Current Image 2</h5>
                  <input type="hidden" name="old_image_2" value="<?php echo $q["image_2"]?>">
                  <img src="../uploads/<?php echo $q["image_2"]?>" height="100px" width="100px"
                    alt="<?php echo $q["title"]?>">
                </div>
                <div class="col-3">
                  <h5 class="card-title pt-4">Current Image 3</h5>
                  <input type="hidden" name="old_image_3" value="<?php echo $q["image_3"]?>">
                  <img src="../uploads/<?php echo $q["image_3"]?>" height="100px" width="100px"
                    alt="<?php echo $q["title"]?>">
                </div>
              </div>
          <div class="pl-2">
            <button type="submit" name="update" class="btn btn-primary">Update Request</button>
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