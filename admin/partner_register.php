<?php
$pageName ='Register Partner';
include('config/dbcon.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
include('connect_partner.php'); 

?>

<!-- Display any info -->
<?php if(isset($_REQUEST['info'])){ ?>
<?php  if($_REQUEST['info'] == "updated"){?>
<div class="alert alert-success" role="alert">
  Post has been updated successfully
</div>
<?php }else if($_REQUEST['info'] == "deleted"){?>
<div class="alert alert-danger" role="alert">
  Post has been deleted successfully
</div>
<?php  }?>
<?php  }?>



<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary">List of Register Partner</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Business Name</th>
              <th scope="col">City</th>
              <th scope="col">Message</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                $counter = 0;
                foreach($query as $q){
                $counter++;
            ?>
            <tr>
              <td scope="row"><?php echo $counter;?></td>
              <td><?php echo $q['firstName']?></td>
              <td><?php echo $q['lastName']?></td>
              <td><?php echo $q['inputEmail']?></td>
              <td><?php echo $q['inputPhone']?></td>
              <td><?php echo $q['businessName']?></td>
              <td><?php echo $q['inputCity']?></td>
              <td><?php echo $q['message']?></td>
              <td>
                <a href="edit_partner_req.php?id=<?php echo $q['id']?>"><button type="button"
                    class="btn btn-primary btn-xs btn-addon s-b-10 s-l-5"><i class="fa fa-edit"></i></button></a>
              </td>
              <td>
                <form action="connect_partner.php" method="POST">
                  <input type="text" hidden name="id" value="<?php echo $q["id"]?>">
                  <button type="submit" class="btn btn-danger btn-xs btn-addon s-b-10 s-l-5" name="delete"><i
                      class="fa fa-trash"></i>
                    
                  </button>
                </form>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>