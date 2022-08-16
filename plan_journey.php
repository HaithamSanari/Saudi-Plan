<?php
  $pageName ='Plan Your Journey';
  $mainSection = 'Plan Your Journey';
  include('includes/header.php');  
  include('includes/home.php');  
  include('admin/connect_journey.php');  
?>

<!-- user request journey form -->
<div class="partner-content container " data-aos="fade-right" data-aos-delay="350">
  <h2>Create your own Journey !</h2>
  <p>Create a fully customized daily tourist destination and discover the hidden gems of Saudi Arabia , Choose your trip
    date and local attractions Which you want to visit to plan your trip very easy !</p>
</div>
<div data-aos="fade-left" data-aos-delay="450"
  class="d-flex justify-content-center align-items-center   aos-init aos-animate">
  <form class="row g-3 container partner" action="admin/connect_journey.php" method="POST">
    <div>
      <h1>Plan your Trip</h1>
    </div>
    <div class="col-md-6">
      <label for="firstName" class="form-label">First Name</label>
      <input type="text" class="form-control" id="firstName" placeholder="Enter your first" name="firstName" />
    </div>
    <div class="col-md-6">
      <label for="lastName" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" name="lastName" />
    </div>
    <div class="col-md-6">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="email" class="form-control" placeholder="Enter your email address" id="inputEmail"
        name="inputEmail" />
    </div>
    <div class="col-md-6">
      <label for="inputPhone" class="form-label">Phone Number</label>
      <input type="text" class="form-control" placeholder="Enter your phone number" id="inputPhone" name="inputPhone" />
    </div>
    <div class="col-6">
      <label for="inputArrival" class="form-label">Arrival</label>
      <input type="date" id="inputArrival" class="form-control" value="Today" name="inputArrival" />
    </div>
    <div class="col-6">
      <label for="inputDeparture" class="form-label">Departure </label>
      <input type="date" id="inputDeparture" class="form-control" value="After one week" name="inputDeparture" />
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" placeholder="Enter city" id="inputCity" name="inputCity" />
    </div>
    <div class="col-md-6">
      <label for="inputNumberOfGuests" class="form-label">Number of Attendees</label>
      <input type="number" class="form-control" placeholder="Enter number of people" id="inputNumberOfGuests"
        name="inputNumberOfGuests">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">description</label>
      <textarea class="form-control" placeholder="Enter your message here" id="message" rows="6"
        name="message"></textarea>
    </div>
    <div class="col-12 mb-3">
      <button id="submit" type="submit" name="submit" class="btn">Submit</button>
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
      let inputArrival = $('#inputArrival').val();
      let inputDeparture = $('#inputDeparture').val();
      let inputCity = $('#inputCity').val();
      let inputNumberOfGuests = $('#inputNumberOfGuests').val();
      let message = $('#message').val();
      let validName = /[a-z]/;
      let validEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      $("#firstName, #lastName, #inputEmail, #inputPhone, #inputArrival, #inputDeparture, #inputCity,#inputNumberOfGuests,#message")
        .removeClass(
          "input-error");
      if (firstName == '' || lastName == '' || inputEmail == '' || inputPhone == '' || inputArrival == '' ||
        inputDeparture == '' || inputCity == '' || inputNumberOfGuests == '' || message == '') {
        $("#firstName, #lastName, #inputEmail, #inputPhone, #inputArrival, #inputDeparture, #inputCity,#inputNumberOfGuests,#message")
          .addClass(
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
          url: "admin/connect_journey.php",
          method: "POST",
          data: {
            firstName: firstName,
            lastName: lastName,
            inputEmail: inputEmail,
            inputPhone: inputPhone,
            inputArrival: inputArrival,
            inputDeparture: inputDeparture,
            inputCity: inputCity,
            inputNumberOfGuests: inputNumberOfGuests,
            message: message,
            submit: submit
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