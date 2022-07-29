<?php
  $pageName ='Blog Content';
  include('includes/header.php');  
  include('admin/connect_blog.php'); 
?>

<div class="blog-content" id="blog-content">

  <!-- fetch blog content -->
  <?php foreach($query as $q){?>
  <div class="blog_header">
    <div class="blog_banner">
      <img src="uploads/<?php echo $q["post_image"]?>" accept=".jpg, .jpeg, .png" alt=""
        title="<?php echo $q["post_image"]?>" class="main-image" />
    </div>
    <div class="text">
      <span><?php echo $q["post_category"]?></span>
      <h2><?php echo $q["post_title"]?></h2>
      <h6><?php echo date("F j, Y", strtotime($q["created"]))?></h6>
    </div>
  </div>
  <div class="container main-content">
    <p><?php echo $q["post_description"]?></p>
    <p><?php echo $q["post_content"]?></p>
    <?php }?>
  </div>

</div>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');  
?>