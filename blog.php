<?php
  $pageName ='Blog';
  $mainSection = 'Blog';
  include('includes/header.php');  
  include('includes/home.php');
  include('admin/connect_blog.php'); 
  ?>
<!-- blogs section starts  -->


<section class="blogs" id="blogs">
  <div class="heading">
    <span>blogs & posts</span>
  </div>
  <div class="box-container">

    <?php
      $query = mysqli_query($conn, "SELECT * FROM blog_post ORDER BY id DESC")
      ?>
      <!-- fetch blog posts -->
    <?php foreach($query as $q){?>
    <div class="box" data-aos="fade-up" data-aos-delay="150">
      <div class="image">
        <a href="blog_content.php?id=<?php echo $q["id"]?>">
          <img src="uploads/<?php echo $q["post_image"]?>" accept=".jpg, .jpeg, .png" alt="<?php echo $q["post_title"]?>"
            title="<?php echo $q["post_title"]?>" />
        </a>
      </div>
      <div class="content">
        <span><?php echo $q["post_category"]?></span>
        <a href="blog_content.php?id=<?php echo $q["id"]?>" class="link"><?php echo $q["post_title"]?></a>
        <div class="content-box">
          <div class="content-text">
            <p><?php echo $q["post_description"]?></p>
          </div>
          <div class="icon">
            <a href="#"><i class="fas fa-clock"></i> <?php echo date("F j, Y", strtotime($q["created"]))?></a>
          </div>
        </div>
      </div>
    </div>
    <?php }?>

  </div>
</section>

<!-- blogs section ends -->

<?php
    include('includes/scripts.php');
    include('includes/footer.php');  
    ?>