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
  <link rel="stylesheet" href="css/bootstrap.min.css" />
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
    <h3 data-aos="fade-up" data-aos-delay="300">Blog</h3>
    <p data-aos="fade-up" data-aos-delay="450"></p>
    <!-- <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">book now</a> -->
  </div>
</section>

<!-- home section ends -->
<!-- blogs section starts  -->

<section class="blogs" id="blogs">
  <div class="heading">
    <span>blogs & posts</span>
  </div>

  <div class="box-container">
    <div class="box" data-aos="fade-up" data-aos-delay="150">
      <div class="image">
        <img src="images/blog-content-14.jpg" alt="" />
      </div>
      <div class="content">
        <span>Adventure</span>
        <a href="#" class="link">Places to visit in Riyadh: Wonderful attractions and activities to do in the
          capital!</a>
        <p>
          Riyadh is the capital city and seat of government of the Riyadh Province and the Kingdom of Saudi Arabia. It's
          the largest city ...
        </p>
        <div class="icon">
          <a href="#"><i class="fas fa-clock"></i> October 05, 2022</a>
          <a href="#"><i class="fas fa-user"></i> by admin</a>
        </div>
      </div>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="300">
      <div class="image">
        <img src="images/blog-content-10.jpg" alt="" />
      </div>
      <div class="content">
        <span>Nature</span>
        <a href="#" class="link">Caves in Saudi Arabia: Explore the Stunning Caves within the Kingdom</a>
        <p>
          Caves across the world draw in lots of visitors and millions in revenue once a year, and no one knows about
          activities in the Kingdom of ...
        </p>
        <div class="icon">
          <a href="#"><i class="fas fa-clock"></i>November 02, 2022</a>
          <a href="#"><i class="fas fa-user"></i> by admin</a>
        </div>
      </div>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="450">
      <div class="image">
        <img src="images/blog-content-1.jpg" alt="" />
      </div>
      <div class="content">
        <span>Culture</span>
        <a href="#" class="link">where to go in Saudi: More
          than 15 places to go out in
          Saudi to enjoy your time</a>
        <p>
          After a day full of work pressure and stress,
          you need something to relieve this tension to
          enjoy your life. Thus, we offer you some of ...
        </p>
        <div class="icon">
          <a href="#"><i class="fas fa-clock"></i> January 18, 2022</a>
          <a href="#"><i class="fas fa-user"></i> by admin</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- blogs section ends -->

<?php
    include('includes/footer.php');  
?>