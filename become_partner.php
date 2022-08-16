<?php
  $pageName ='Become Partner';
  $mainSection = 'Our Partners';
  include('includes/header.php');
  include('includes/home.php'); 
  include('admin/connect_partner.php');
?>

<div class="partner-content container " data-aos="fade-right" data-aos-delay="350">
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

<!-- partner register form -->
<div data-aos="fade-left" data-aos-delay="450" class="d-flex justify-content-center align-items-center ">
  <form class="row g-3 container partner" action="admin/connect_partner.php" method="POST">
    <div>
      <h1>Company Information</h1>
    </div>
    <div class="col-md-6">
      <label for="firstName" class="form-label">First Name</label>
      <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" name="firstName" />
    </div>
    <div class="col-md-6">
      <label for="lastName" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" name="lastName" />
    </div>
    <div class="col-md-6">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="text" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"
        class="form-control" placeholder="Enter your email address" id="inputEmail" name="inputEmail">
    </div>
    <div class="col-md-6">
      <label for="inputPhone" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" placeholder="Enter your phone number" id="inputPhone" name="inputPhone" />
    </div>
    <div class="col-md-6">
      <label for="businessName" class="form-label">Business Name</label>
      <input type="text" class="form-control" placeholder="Enter your Business Name" id="businessName"
        name="businessName" />
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="tel" class="form-control" placeholder="Enter your city" id="inputCity" name="inputCity" />
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" placeholder="Enter your message here" id="message" rows="6"
        name="message"></textarea>
    </div>
    <div class="col-12 mb-3">
      <button id="submit" type="submit" name="partnerRegister" class="btn">Submit</button>
      <span class="form-message"></span>
      <span id="error_message" class="text-danger"></span>
      <span id="success_message" class="text-success"></span>
    </div>
  </form>
</div>

<script>
  $(document).ready(function () {
    // form validation 
    $('#submit').click(function (e) {
      e.preventDefault();
      let submit = $('#submit').val();
      let firstName = $('#firstName').val();
      let lastName = $('#lastName').val();
      let inputEmail = $('#inputEmail').val();
      let inputPhone = $('#inputPhone').val();
      let businessName = $('#businessName').val();
      let inputCity = $('#inputCity').val();
      let message = $('#message').val();
      let validName = /[a-z]/;
      let validEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      $("#firstName, #lastName, #inputEmail, #inputPhone, #businessName, #inputCity, #message").removeClass(
        "input-error");
      if (firstName == '' || lastName == '' || inputEmail == '' || inputPhone == '' ||
        inputCity == '' || message == '') {
        $("#firstName, #lastName, #inputEmail, #inputPhone, #businessName, #inputCity, #message").addClass(
          "input-error");
        $('#error_message').html("All Fields are required!");
      } else if (!validName.test(firstName) || !validName.test(lastName)) {
        if (!validName.test(firstName)) {
          $("#firstName").addClass("input-error");
          $('#error_message').html("Write a valid Name!");
        }

        if (!validName.test(lastName)) {
          $("#lastName").addClass("input-error");
          $('#error_message').html("Write a valid Name!");
        }
      } else if (!validEmail.test(inputEmail)) {
        $("#inputEmail").addClass("input-error");
        $('#error_message').html("Write a valid e-mail address!");
      } else if (inputPhone.length != 10 || isNaN(inputPhone) == true) {
        $("#inputPhone").addClass("input-error");
        $('#error_message').html("Write a valid Phone Number!");
      } else {
        $('#error_message').html('');
        $.ajax({

          url: "admin/connect_partner.php",
          method: "POST",
          data: {
            firstName: firstName,
            lastName: lastName,
            inputEmail: inputEmail,
            inputPhone: inputPhone,
            businessName: businessName,
            inputCity: inputCity,
            message: message,
            submit: submit
          },
          rules: {
            inputEmail: {
              required: true,
            }
          },
          success: function (data) {
            $("form").trigger("reset");
            $('#success_message').fadeIn().html(data);
            setTimeout(function () {
              $('#success_message').fadeOut("Slow");
            }, 4000);
          }
        });
      }
    });
  });
</script>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');  
?>