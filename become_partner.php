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
    <h3 data-aos="fade-up" data-aos-delay="300">Our Partners</h3>
    <p data-aos="fade-up" data-aos-delay="450"></p>
    <!-- <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">book now</a> -->
  </div>
</section>

<!-- home section ends -->
<div class="partner-content container ">
  <h2>Be our partner!</h2>
  <p>Now that we are expanding our business all over Saudi Arabia, it’s your chance to join our fast-growing business
    community!</p>
  <p>We believe in building a network, we believe that together with our partners and agents we can all grow faster and
    build a lasting business relationship that is beneficial to everyone involved. With us, you will get more exposure,
    more traffic, more clients, and more monetary gains.</p>
  <p>In Saudi Plan, We are committed to enabling our partners to succeed as We rise with our partners.</p>
  <h2>Why list your activities with Saudi Plan?</h2>
  <p>Because we have similar objectives. You provide certain experiences and activities. We develop and bring these
    experiences onboard our platform and market them to end-users. At the end of the day, our shared goal is for people
    to discover and experience what you have to offer.</p>
  <p>Moreover, with hundreds of activities listed all around Saudi Arabia, you get a chance to be seen by travelers and
    travel enthusiasts, your activity will be seen, earmarked, and booked.</p>
  <h2>How to list your activity with Saudi Plan?</h2>
  <p>We have numerous plans, plus, you can change your plan anytime in the future so that we can all reach our ultimate
    goal, for your experience to be booked and enjoyed by as many people as possible.</p>
</div>

<div data-aos="fade-left" data-aos-delay="450"
  class="d-flex justify-content-center align-items-center m-5 pt-5  aos-init aos-animate">
  <form class="row g-3 container partner">
    <div>
      <h1>Company Information</h1>
    </div>
    <div class="col-md-6">
      <label for="firstName" class="form-label">First Name</label>
      <input type="text" class="form-control" placeholder="Enter your first name" required="" />
    </div>
    <div class="col-md-6">
      <label for="lastName" class="form-label">Last Name</label>
      <input type="text" class="form-control" placeholder="Enter your last name" required="" />
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" placeholder="Enter your email address" id="inputEmail4" required="" />
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" placeholder="Enter your phone number" id="inputPassword4" required="" />
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Business Name</label>
      <input type="email" class="form-control" placeholder="Enter your email address" id="inputEmail4" required="" />
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">City</label>
      <input type="tel" class="form-control" placeholder="Enter your city" id="inputPassword4" required="" />
    </div>
    <!-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div> -->
    <div class="mb-3">
      <label for="Message" class="form-label">Message</label>
      <textarea class="form-control" placeholder="Enter your message here" id="Message" rows="6" required=""></textarea>
    </div>
    <div class="col-12 mb-3">
      <button type="submit" class="btn">Send</button>
    </div>
  </form>
</div>


<?php
    include('includes/footer.php');  
?>