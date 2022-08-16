<?php 
  include 'lang.php'; 
  $path = $_SERVER['REQUEST_URI'];
  $path = explode("/", $path);
  $path = end($path);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php if(isset($pageName)) {echo $pageName;} ?></title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&family=Tenor+Sans&display=swap"
    rel="stylesheet" />
  <!-- bootstrap 5 -->
  <link rel="stylesheet" href="css.php?filename=css/bootstrap.min.css">
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- custom css file link  -->
  <link rel="stylesheet" href="css.php?filename=css/style.css" />
  <!-- AOS library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <!-- Google icon -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- ajax library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>

</head>

<body>
  <!-- header section starts  -->

  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php" class="logo">Saudi | Plan</a>
    <!-- navbar links  -->
    <nav class="navbar">
      <a data-aos="zoom-in-left" data-aos-delay="300" data-i18n="home"
        href="index.php#home"><?php echo $lang['home'] ?></a>
      <a data-aos="zoom-in-left" data-aos-delay="450" data-i18n="about"
        href="index.php#about"><?php echo $lang['about'] ?></a>
      <a data-aos="zoom-in-left" data-aos-delay="600" data-i18n="SpecialOffers"
        href="package.php"><?php echo $lang['specialOffers'] ?></a>
      <a data-aos="zoom-in-left" data-aos-delay="750" data-i18n="services"
        href="index.php#services"><?php echo $lang['services'] ?></a>
      <a data-aos="zoom-in-left" data-aos-delay="900" data-i18n="gallery"
        href="index.php#gallery"><?php echo $lang['gallery'] ?></a>
      <a data-aos="zoom-in-left" data-aos-delay="1150" data-i18n="blogs"
        href="blog.php#blogs"><?php echo $lang['blog'] ?></a>
    </nav>

    <div data-aos="zoom-in-left" data-aos-delay="1450" class="support ">

      <div class="langWrap d-inline">
        <!-- langWrap toggle -->
        <ul>
          <li <?php if($path == 'index.php?lang=en') {echo "class='active'";} ?>><a href="index.php?lang=en"
              data-i18n="english" language="english"><?php echo $lang['lang_en'] ?></a>
          </li>
          <li><span>/</span></li>
          <li <?php if($path == "index.php?lang=ar") {echo "class='active'";} ?>><a href="index.php?lang=ar"
              data-i18n="arabic" language="arabic"><?php echo $lang['lang_ar'] ?></a></li>
        </ul>

      </div>

      <!-- home section -->
      <a data-aos="zoom-in-left" data-aos-delay="1300" href="admin/login.php" class="btn"><?php echo $lang['login'] ?></a>
    </div>
  </header>

  <!-- header section ends -->