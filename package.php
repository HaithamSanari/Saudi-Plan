<?php
  $pageName ='Packages';
  include('includes/header.php');  
  $mainSection = 'Packages';
  include('includes/home.php'); 
  include('admin/connect_package.php');   
?>
<!-- destination section starts  -->

<section class="destination" id="destination">
  <div class="heading">
    <span>destination</span>
  </div>
  <div class="box-container">

    <?php
        $query = mysqli_query($conn, "SELECT * FROM package_post ORDER BY id DESC")
    ?>
    <?php foreach($query as $q){?>
    <div class="box" data-aos="fade-up" data-aos-delay="150">
      <div class="image">
        <a href="package_content.php?id=<?php echo $q["id"]?>">
          <img src="uploads/<?php echo $q["images"]?>" accept=".jpg, .jpeg, .png" alt="<?php echo $q["title"]?>"
            title="<?php echo $q["title"]?>" />
        </a>
      </div>
      <div class="content">
        <h3><?php echo $q["title"]?></h3>
        <!-- <p></p> -->
        <div class="content-info">
          <div class="city">
            <span class="material-symbols-outlined">location_on</span>
            <span><?php echo $q["city"]?></span>
          </div>
          <div class="days">
            <span class="material-symbols-outlined">sunny</span>
            <span><?php echo $q["days"]?> days</span>
          </div>
          <div class="rating"><span class="material-symbols-outlined">star_half</span> 4.5</span></div>
        </div>
        <a href="package_content.php?id=<?php echo $q["id"]?>">View Details <i class="fas fa-angle-right"></i></a>
      </div>
    </div>
    <?php }?>

  </div>

</section>

<!-- destination section ends -->

<?php 
    include('includes/scripts.php'); 
    include('includes/footer.php');  
?>