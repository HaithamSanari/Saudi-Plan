<?php
$pageName ='404 Page';
include('includes/header.php'); 
?>

<!-- Begin Page Content -->
<section class="page-404">
  <div class="container-fluid">
    <!-- 404 Error Text -->
    <div class="text-center">
      <div class="error mx-auto" data-text="404">404</div>
      <div class="fs-3">
        <p class=" text-gray-800 mb-5">Page Not Found</p>
        <p class="text-gray-500 mb-0">
          It looks like you found a glitch in the matrix...
        </p>
        <a href="index.php">&larr; Back to Home Page</a>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>