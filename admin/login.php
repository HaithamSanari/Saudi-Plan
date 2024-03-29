<?php
session_start();
$pageName ='Login';
include('includes/header.php'); 
?>

<div class="container ">

  <!-- Outer Row -->
  <div class="row justify-content-center ">

    <div class="col-xl-6 col-lg-6 col-md-6 login-card">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
                  <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] != '') 
                    {
                        echo $_SESSION['status'];
                        unset($_SESSION['status']);
                    }
                ?>
                </div>

                <form class="user" action="connect_login.php" method="POST">

                  <div class="form-group">
                    <input id="email" type="email" name="email" class="form-control form-control-user"
                      placeholder="Enter Email Address...">
                  </div>
                  <div class="form-group">
                    <input id="pass" type="password" name="password" class="form-control form-control-user"
                      placeholder="Password">
                  </div>

                  <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                  <button id="demo_login" type="submit" onClick="adminLogin()" name="test_btn"
                    class="btn btn-primary btn-user btn-block"> Admin Login demo </button>
                  <button id="demo_login" type="submit" onClick="partnerLogin()" name="test_btn"
                    class="btn btn-primary btn-user btn-block"> Partner Login demo </button>
                  <!-- <a href="index.php" class="btn btn-primary btn-user btn-block">Login demo </a> -->
                  <hr>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

<script>
  let demo = document.getElementById('#demo_login');
  let email = document.getElementById('email');
  let pass = document.getElementById('pass');

  function adminLogin() {
    email.setAttribute("value", "AdminDemo@demo.com");
    pass.setAttribute("value", "222");
    // console.log(1);
  }

  function partnerLogin() {
    email.setAttribute("value", "PartnerDemo@demo.com");
    pass.setAttribute("value", "44444");
    // console.log(1);
  }
</script>

<?php
include('includes/scripts.php'); 
?>