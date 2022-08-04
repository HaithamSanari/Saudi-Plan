<?php
$pageName ='View Request';
include('security.php');
include('config/dbcon.php'); 
include('includes/header.php'); 
include('includes/navbar_partner.php'); 
include('connect_partner_package_req.php'); 
include('includes/check_info.php');
?>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary">View Request</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">By</th>
              <th scope="col">Request</th>
              <th scope="col">Title</th>
              <th scope="col">City</th>
              <th scope="col">Days</th>
              <th scope="col">Price</th>
              <th scope="col">Overview</th>
              <th scope="col">Included</th>
              <th scope="col">Activities</th>
              <th scope="col">image</th>
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
              <td><?php echo $counter?></td>
              <td><?php echo $q["posted_by"]?></td>
              <td><?php echo $q["request"]?></td>
              <td><?php echo $q["title"]?></td>
              <td><?php echo $q["city"]?></td>
              <td><?php echo $q["days"]?></td>
              <td><?php echo $q["price"]?></td>
              <td><?php echo $q["overview"]?></td>
              <td><?php echo $q["included"]?></td>
              <td><?php echo $q["activities"]?></td>
              <td style="width: 10%;">
                <img src="../uploads/<?php echo $q["image_1"]?>" alt="<?php echo $q["title"]?>" height="100px"
                  width="155px">
                  <br><br>
                  <img src="../uploads/<?php echo $q["image_2"]?>" alt="<?php echo $q["title"]?>" height="100px"
                  width="155px">
                  <br><br>
                  <img src="../uploads/<?php echo $q["image_3"]?>" alt="<?php echo $q["title"]?>" height="100px"
                  width="155px">
              </td>
              <td>
                <a href="edit_partner_request.php?id=<?php echo $q['id']?>"><button type="button"
                    class="btn btn-primary btn-xs btn-addon s-b-10 s-l-5"><i class="fa fa-edit"></i></button></a>
              </td>
              <td>
                <form action="connect_partner_package_req.php" method="POST">
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