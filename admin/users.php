<?php
$pageName ='users';
include('security.php');
include('config/dbcon.php');
include('includes/header.php'); 
include('includes/navbar.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="connect_user.php" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label> Username </label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                        <small class="error_email" style="color: red;"></small>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control"
                            placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <label>User Type</label>
                        <select class="form-control" name="users_type" id="users_type">
                            <option value="Admin">Admin</option>
                            <option value="Partner">Partner</option>

                        </select>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="usersbtn" class="btn btn-primary">Save</button>
                </div>
                <?php 
                ?>
            </form>

        </div>
    </div>
</div>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Users
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Add New User
                </button>
            </h5>
        </div>

        <div class="card-body">

            <?php
        if(isset($_SESSION['success'] ) && $_SESSION['success'] != '' )
        {
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['status'] ) && $_SESSION['status'] != '' )
        {
            echo $_SESSION['status'];
            unset($_SESSION['status']);
        }
        ?>
            <div class="table-responsive">
                <?php
                
                $query = "SELECT * FROM register";
                $query_run = mysqli_query($conn, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>


                        <tr>
                            <th> ID </th>
                            <th> Username </th>
                            <th>Email </th>
                            <th>Password</th>
                            <th>User Type</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        { 
                            $counter =1;
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                            
                        ?>
                        <tr>
                            <td><?php echo $counter ++;   ?></td>
                            <td><?php  echo $row['username']; ?></td>
                            <td><?php  echo $row['email']; ?></td>
                            <td><?php  echo $row['password']; ?></td>
                            <td><?php  echo $row['users_type']; ?></td>
                            <td>
                                <form action="edit_register_user.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                </form>
                            </td>
                            <td>
                                <form action="connect_user.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>




<!-- /.container-fluid -->

<?php

include('includes/scripts.php');
include('includes/footer.php');
?>