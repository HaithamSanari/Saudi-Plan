<?php
$pageName ='Update Package';
include('security.php');
include('config/dbcon.php'); 
include('connect_partner.php');  
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="card-body">
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Update Partner
        </h5>
      </div>
      <div class="py-3">
        <!-- fetch and update partner register content -->
        <?php foreach($query as $q){ ?>
        <form method="post">
          <input type="text" hidden value='<?php echo $q['id']?>' name="id">
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">First Name</h4>
              <input type="text" placeholder="Enter First Name" class="form-control form-control-line" name='firstName'
                value="<?php echo $q["firstName"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Last Name</h4>
              <input type="text" placeholder="Enter Last Name" class="form-control form-control-line" name='lastName'
                value="<?php echo $q["lastName"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Email</h4>
              <input type="text" placeholder="Enter Email Address" class="form-control form-control-line"
                name='inputEmail' value="<?php echo $q["inputEmail"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Phone</h4>
              <input type="text" placeholder="Enter Phone Number" class="form-control form-control-line"
                name='inputPhone' value="<?php echo $q["inputPhone"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Business Name</h4>
              <input type="text" placeholder="Enter Business Name" class="form-control form-control-line"
                name='businessName' value="<?php echo $q["businessName"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">City</h4>
              <input type="text" placeholder="Enter City" class="form-control form-control-line" name='inputCity'
                value="<?php echo $q["inputCity"]?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <h4 class="card-title">Message</h4>
              <input type="text" placeholder="Enter Message" class="form-control form-control-line" name='message'
                value="<?php echo $q["message"]?>">
            </div>
          </div>
          <div class="pl-2">
            <button type="submit" name="update" class="btn btn-primary">Update Partner</button>
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