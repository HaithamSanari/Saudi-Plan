<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Saudi Plan</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&family=Tenor+Sans&display=swap"
    rel="stylesheet" />
  <!-- bootstrap 5 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- aos library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <!-- custom js file link  -->
  <script src="js/script.js" defer></script>
</head>

<?php
    include('includes/header.php');  
    ?>
<!-- home section starts  -->

<section class="home" id="home">
  <div class="content">
    <!-- <span data-aos="fade-up" data-aos-delay="150">follow us</span> -->
    <h3 data-aos="fade-up" data-aos-delay="300">Saudi Plan</h3>
    <p data-aos="fade-up" data-aos-delay="450"></p>
    <!-- <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">book now</a> -->
  </div>
</section>

<!-- home section ends -->

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
    <span>why choose us?</span>
    <h3>Saudi Plan</h3>
    <p>
      will help you find the best travel and holiday deals in Saudi Arabia,
      by providing multiple and different options in the best locations to
      choose from. Save your savings by booking the best and cheapest travel
      deals.
    </p>
  </div>
</section>

<!-- about section ends -->
<!-- destination section starts  -->

<section class="destination" id="destination">
  <div class="heading">
    <span>destinations</span>
  </div>

  <div class="box-container">
    <div class="box" data-aos="fade-up" data-aos-delay="150">
      <div class="image">
        <img src="images/des-1.jpg" alt="" />
      </div>
      <div class="content">
        <h3>Riyadh</h3>
        <p>text</p>
        <a href="#">read more <i class="fas fa-angle-right"></i></a>
      </div>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="300">
      <div class="image">
        <img src="images/des-2.jpg" alt="" />
      </div>
      <div class="content">
        <h3>tours & travel</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
        <a href="#">read more <i class="fas fa-angle-right"></i></a>
      </div>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="450">
      <div class="image">
        <img src="images/des-3.jpg" alt="" />
      </div>
      <div class="content">
        <h3>tours & travel</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
        <a href="#">read more <i class="fas fa-angle-right"></i></a>
      </div>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="550">
      <div class="image">
        <img src="images/des-4.jpg" alt="" />
      </div>
      <div class="content">
        <h3>tours & travel</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
        <a href="#">read more <i class="fas fa-angle-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- destination section ends -->
<!-- services section starts  -->

<section class="services" id="services">
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
      <p>Satisfied travelers!</p>
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

<section class="gallery" id="gallery">
  <div class="heading">
    <span>gallery</span>
    <h1>we record memories</h1>
  </div>

  <div class="box-container">
    <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
      <span>travel spot</span>
      <h3>Riyadh</h3>
      <img src="images/gallery-img-1.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
      <img src="images/gallery-img-2.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
      <img src="images/gallery-img-3.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
      <span>travel spot</span>
      <h3>Mecca</h3>
      <img src="images/gallery-img-4.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
      <img src="images/gallery-img-5.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
      <img src="images/gallery-img-6.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
      <span>travel spot</span>
      <h3>jeddah</h3>
      <img src="images/gallery-img-7.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
      <img src="images/gallery-img-8.jpg" alt="" />
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
      <img src="images/gallery-img-9.jpg" alt="" />
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
      <p>text3</p>
      <div class="user">
        <img src="images/pic-1.jpg" alt="" />
        <div class="info">
          <h3>Ahmed</h3>
          <span>Engineer</span>
        </div>
      </div>
    </div>
    <div class="box">
      <p>text1</p>
      <div class="user">
        <img src="images/pic-2.jpg" alt="" />
        <div class="info">
          <h3>Sarah</h3>
          <span>nurse</span>
        </div>
      </div>
    </div>
    <div class="box">
      <p>text2</p>
      <div class="user">
        <img src="images/pic-3.jpg" alt="" />
        <div class="info">
          <h3>Mohammed</h3>
          <span>Teacher</span>
        </div>
      </div>
    </div>
    <div class="box">
      <p>text4</p>
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
    <h1>we untold stories</h1>
  </div>

  <div class="box-container">
    <div class="box" data-aos="fade-up" data-aos-delay="150">
      <div class="image">
        <img src="images/blog-1.jpg" alt="" />
      </div>
      <div class="content">
        <a href="#" class="link">Life is a journey, not a destination</a>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur,
          natus!
        </p>
        <div class="icon">
          <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
          <a href="#"><i class="fas fa-user"></i> by admin</a>
        </div>
      </div>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="300">
      <div class="image">
        <img src="images/blog-2.jpg" alt="" />
      </div>
      <div class="content">
        <a href="#" class="link">Life is a journey, not a destination</a>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur,
          natus!
        </p>
        <div class="icon">
          <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
          <a href="#"><i class="fas fa-user"></i> by admin</a>
        </div>
      </div>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="450">
      <div class="image">
        <img src="images/blog-3.jpg" alt="" />
      </div>
      <div class="content">
        <a href="#" class="link">Life is a journey, not a destination</a>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur,
          natus!
        </p>
        <div class="icon">
          <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
          <a href="#"><i class="fas fa-user"></i> by admin</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- blogs section ends -->

<!-- banner section starts  -->

<div class="banner">
  <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
    <span>start your adventures</span>
    <h3>Let's Explore This World</h3>
    <a href="index2.html" class="btn">book now</a>
  </div>
</div>

<!-- banner section ends -->
<?php
    include('includes/footer.php');  
?>