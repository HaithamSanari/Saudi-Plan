<?php
$pageName ='Packages';
include('config/dbcon.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
include('connect_package.php'); 
include('includes/check_info.php');
?>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary">Packages</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">By</th>
              <th scope="col">Title</th>
              <th scope="col">City</th>
              <th scope="col">Days</th>
              <th scope="col">Price</th>
              <th scope="col">Overview</th>
              <th scope="col">Included</th>
              <th scope="col">Activities</th>
              <th scope="col">Image</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <!-- fetch package -->
            <?php 
                $counter = 0;
                foreach($query as $q){
                $counter++;
            ?>

            <tr>
              <td><?php echo $counter?></td>
              <td><?php echo $q["posted_by"]?></td>
              <td><?php echo $q["title"]?></td>
              <td><?php echo $q["city"]?></td>
              <td><?php echo $q["days"]?></td>
              <td><?php echo $q["price"]?></td>
              <td><?php echo $q["overview"]?></td>
              <td><?php echo $q["included"]?></td>
              <td><?php echo $q["activities"]?></td>
              <td>
                <img src="../uploads/<?php echo $q["image_1"]?>" alt="<?php echo $q["title"]?>">
              </td>
              <td>
                <a href="edit_package.php?id=<?php echo $q['id']?>"><button type="button"
                    class="btn btn-primary btn-xs btn-addon s-b-10 s-l-5"><i class="fa fa-edit"></i></button></a>
              </td>
              <td>
                <form action="connect_package.php" method="POST">
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