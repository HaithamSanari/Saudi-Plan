<?php
    $pageName ='Saudi Plan';
    $mainSection = 'Saudi Plan';
    include('includes/header.php');  
    include('includes/home.php'); 
    include('admin/connect_package.php');  
    include('admin/connect_blog.php'); 
?>
<!-- about section starts  -->

<section class="about" id="about">
  <div class="video-container" data-aos="fade-right" data-aos-delay="300">
    <video src="images/about-vid-1.mp4" muted autoplay loop class="video"></video>
    <div class="controls">
      <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
      <span class="control-btn" data-src="images/about-vid-2.mp4"></span>
      <span class="control-btn" data-src="images/about-vid-3.mp4"></span>
    </div>
  </div>

  <div class="content" data-aos="fade-left" data-aos-delay="600">
    <span class="title"><?php echo $lang['homeTitles'] ?></span>
    <h3>Saudi Plan</h3>
    <p class="description">
      <?php echo $lang['homeDescription'] ?>
    </p>
  </div>
</section>

<!-- about section ends -->
<!-- destination section starts  -->

<section class="destination" id="destination">

  <div class="heading">
    <span>destination</span>
  </div>
  <div class="box-container">
    <?php
      $query = mysqli_query($conn, "SELECT * FROM package_post ORDER BY id DESC limit 4")
    ?>

    <?php foreach($query as $q){?>
    <div class="box" data-aos="fade-up" data-aos-delay="150">
      <div class="image">
        <a href="package_content.php?id=<?php echo $q["id"]?>">
          <img src="uploads/<?php echo $q["images"]?>" accept=".jpg, .jpeg, .png" alt=""
            title="<?php echo $q["images"]?>" />
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
<!-- services section starts  -->

<section class="services" dir="ltr" id="services">
  <div class="heading">
    <span>services</span>
    <h1>countless expericences</h1>
  </div>

  <div class="box-container">
    <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
      <i class="fas fa-globe"></i>
      <h3>Saudi Arabia</h3>
      <p>
        We offer tourism within the borders of the Kingdom of Saudi Arabia
      </p>
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
      <i class="fas fa-hiking"></i>
      <h3>adventures</h3>
      <p>The travelers have always had a satisfied note of the services provided by us.</p>
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
      <i class="fas fa-headset"></i>
      <h3>24/7 support</h3>
      <p>support wherever you are</p>
    </div>
  </div>
</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" dir="ltr" id="gallery">
  <div class="heading">
    <span>gallery</span>
    <h1>we record memories</h1>
  </div>

  <div class="box-container">
    <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
      <span>travel spot</span>
      <h3>Riyadh - kingdom Tower</h3>
      <img src="images/gallery-img-1.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
      <span>travel spot</span>
      <h3>AlUla - Hegra</h3>
      <img src="images/blog-content-3.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
      <span>travel spot</span>
      <h3>AlUla - Hegra</h3>
      <img src="images/blog-content-1.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
      <span>travel spot</span>
      <h3>Mecca - Al Haram</h3>
      <img src="images/gallery-img-4.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
      <span>travel spot</span>
      <h3>Riyadh - edge of the world</h3>
      <img src="images/blog-content-18.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
      <span>travel spot</span>
      <h3>Umluj - The Saudi Maldives</h3>
      <img src="images/blog-content-6.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
      <span>travel spot</span>
      <h3>jeddah - Jeddah Season Festival</h3>
      <img src="images/gallery-img-7.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
      <span>travel spot</span>
      <h3>jeddah - Alrahmah Mosque</h3>
      <img src="images/blog-content-2.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
      <span>travel spot</span>
      <h3>jeddah - Al-Balad</h3>
      <img src="images/blog-content-16.jpg" alt="" />
    </div>
  </div>
</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review">
  <div class="content" data-aos="fade-right" data-aos-delay="300">
    <span>testimonials</span>
    <h3>good news from our clients</h3>
  </div>

  <div class="box-container" data-aos="fade-left" data-aos-delay="600">
    <div class="box">
      <p>It was really just an unforgettable adventure. I have never been as happy as I was
        then. Every day was simply filled with emotions. Thank you </p>
      <div class="user">
        <img src="images/pic-1.jpg" alt="" />
        <div class="info">
          <h3>Ahmed</h3>
          <span>Engineer</span>
        </div>
      </div>
    </div>
    <div class="box">
      <p>The company was just excellent, excellent guides, completely unfamiliar people who became faithful companions,
        and in the end - good friends.
      </p>
      <div class="user">
        <img src="images/pic-2.jpg" alt="" />
        <div class="info">
          <h3>Sarah</h3>
          <span>nurse</span>
        </div>
      </div>
    </div>
    <div class="box">
      <p>We very much enjoyed the entire trip. It was full of memorable experiences
        that ranged from unique sightseeing adventures to unbelievable local
        cuisine</p>
      <div class="user">
        <img src="images/pic-3.jpg" alt="" />
        <div class="info">
          <h3>Mohammed</h3>
          <span>Teacher</span>
        </div>
      </div>
    </div>
    <div class="box">
      <p>If I could return the time when I was there, I would do it for sure. There are simply no
        words ,you just need to see. Iam very grateful to this tour.</p>
      <div class="user">
        <img src="images/pic-4.jpg" alt="" />
        <div class="info">
          <h3>Mariam</h3>
          <span>Designer</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">
  <div class="heading">
    <span>blogs & posts</span>
  </div>
  <div class="box-container">

    <?php
      $query = mysqli_query($conn, "SELECT * FROM blog_post ORDER BY id DESC limit 3")
      ?>
    <?php foreach($query as $q){?>
    <div class="box" data-aos="fade-up" data-aos-delay="150">
      <div class="image">
        <a href="blog_content.php?id=<?php echo $q["id"]?>">
          <img src="uploads/<?php echo $q["post_image"]?>" accept=".jpg, .jpeg, .png" alt=""
            title="<?php echo $q["post_image"]?>" />
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

<!-- banner section starts  -->

<div class="banner">
  <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
    <span>start your adventures</span>
    <h3>Let's Explore This World</h3>
    <a href="package.php" class="btn">book now</a>
  </div>
</div>

<!-- banner section ends -->
<?php
    include('includes/scripts.php');
    include('includes/footer.php');  
?>