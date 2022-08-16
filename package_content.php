<?php
  $pageName ='Package info';
  include('includes/header.php');
  include('admin/connect_req_package.php');
  include('admin/connect_package.php');
?>

<section class="package-content">
  <!-- fetch package information -->
  <?php foreach($query as $q){?>
  <div class="box-container">
    <div class="package-header">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="uploads/<?php echo $q["image_1"]?>" accept=".jpg, .jpeg, .png"
              alt="<?php echo $q["title"]?>" title="<?php echo $q["title"]?>">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="uploads/<?php echo $q["image_2"]?>" accept=".jpg, .jpeg, .png"
              alt="<?php echo $q["title"]?>" title="<?php echo $q["title"]?>">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="uploads/<?php echo $q["image_3"]?>" accept=".jpg, .jpeg, .png"
              alt="<?php echo $q["title"]?>" title="<?php echo $q["title"]?>">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <div class="package-main">
    <h3><?php echo $q["title"]?></h3>
    <div class="package-text">
      <span>By <a href="#"><?php echo $q["posted_by"]?></a></span>
      <div class="package-views">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
          <path fill="#857c77"
            d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z">
          </path>
        </svg>
        <span>18,520 Views</span>
      </div>
      <div class="package-rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
      </div>
    </div>
    <hr>
  </div>
  <div class="main-content">
    <div class="accordion col-lg-12 py-4" id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
            aria-controls="panelsStayOpen-collapseOne">
            <p>Overview</p>
            <!-- <div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#6563ff" d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"></path></svg>
              </div> -->
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
          aria-labelledby="panelsStayOpen-headingOne">
          <div class="accordion-body">
            <?php echo $q["overview"]?>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
            aria-controls="panelsStayOpen-collapseTwo">
            What's Included
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
          aria-labelledby="panelsStayOpen-headingTwo">
          <div class="accordion-body">
            <?php echo $q["included"]?>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
            aria-controls="panelsStayOpen-collapseThree">
            Activities
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
          aria-labelledby="panelsStayOpen-headingThree">
          <div class="accordion-body">
            <?php echo $q["activities"]?>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
            aria-controls="panelsStayOpen-collapseFour">
            How many Days
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
          aria-labelledby="panelsStayOpen-headingFour">
          <div class="accordion-body">
            <?php echo $q["days"]?> Days
          </div>
        </div>
      </div>
    </div>
    <!-- Form Controls -->
    <!-- user request package form -->
    <form class="row g-4 partner" action="admin/connect_req_package.php" method="POST">
      <div>
        <h1>Select Data / Time & Number of Guest</h1>
      </div>
      <div>
        <input type="text" hidden class="form-control" id="title" name="title" value="<?php echo $q["title"]?>" />
      </div>
      <div class="col-md-6">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" placeholder="Enter your first Name" name="firstName" />
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
        <input type="text" class="form-control" placeholder="Enter your phone number" id="inputPhone"
          name="inputPhone" />
      </div>
      <div class="col-md-6">
        <label for="inputNumberOfGuests" class="form-label">Number of Guests</label>
        <input type="number" class="form-control" placeholder="Enter Number of Guests" id="inputNumberOfGuests"
          name="inputNumberOfGuests" />
      </div>
      <div class="col-md-6">
        <label for="inputArrival" class="form-label">When are you traveling?</label>
        <input type="date" id="inputArrival" class="form-control" value="Today" placeholder="Select Data"
          name="inputArrival" />
      </div>
      <div class="col-12 mb-3">
        <button id="submit" type="submit" name="submit" class="btn">Submit</button>
        <span id="error_message" class="text-danger"></span>
        <span id="success_message" class="text-success"></span>
      </div>
    </form>
  </div>
  <?php }?>
  </div>
</section>

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
      let inputNumberOfGuests = $('#inputNumberOfGuests').val();
      let inputArrival = $('#inputArrival').val();
      let title = $('#title').val();
      let validName = /[a-z]/;
      let validEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      $("#firstName, #lastName, #inputEmail, #inputPhone, #inputNumberOfGuests, #title, #inputArrival")
        .removeClass(
          "input-error");
      if (firstName == '' || lastName == '' || inputEmail == '' || inputPhone == '' || inputNumberOfGuests ==
        '' || inputArrival == '') {
        $("#firstName, #lastName, #inputEmail, #inputPhone, #inputNumberOfGuests, #title, #inputArrival")
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
          url: "admin/connect_req_package.php",
          method: "POST",
          data: {
            firstName: firstName,
            lastName: lastName,
            inputEmail: inputEmail,
            inputPhone: inputPhone,
            inputNumberOfGuests: inputNumberOfGuests,
            title: title,
            inputArrival: inputArrival,
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