<?php
$pageName ='Blogs';
include('security.php');
include('connect_blog.php');
include('config/dbcon.php'); 
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/check_info.php');
?>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary">Blog Posts</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Category</th>
              <th>Title</th>
              <th>Description</th>
              <th>Content</th>
              <th>Image</th>
              <th>Date</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

            <!-- fetch blog posts -->
            <?php 
                $counter = 0;
                foreach($query as $q){
                $counter++;
            ?>

            <tr>
              <td><?php echo $counter?></td>
              <td><?php echo $q["post_category"]?></td>
              <td><?php echo $q["post_title"]?></td>
              <td><?php echo $q["post_description"]?></td>
              <td style="width:30% !important;">
                <?php echo $q["post_content"]?></td>
              <td style="width: 10%;">
                <img src="../uploads/<?php echo $q["post_image"]?>" height="100px" width="155px"
                  alt="<?php echo $q["post_title"]?>">
              </td>
              <td style="width:8% !important;"><?php echo date("F j, Y", strtotime($q["created"]))?></td>
              <td>
                <a href="edit_blog.php?id=<?php echo $q['id']?>"><button type="button"
                    class="btn btn-primary btn-xs btn-addon s-b-10 s-l-5"><i class="fa fa-edit"></i></button></a>
              </td>
              <td>
                <form action="connect_blog.php" method="POST">
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