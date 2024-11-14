<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
  <style>
 
  </style>

<body class="contact">
<?php
 include_once 'navbar.php'
?>
    <section class="contact-section inner-page-section">
    <div class="container ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4">
            <h2 class="main-heading">Contact us</h2>
            <p class="paragraph-grey my-4">With lots of unique blocks, you can easily build a page without coding.
                 Build your next consultancy website within few minutes.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 ">
        <div class="signup-card mx-auto">
            <form id="signupForm" novalidate>
              <div class="mb-3">
                <label for="firstName" class="form-label">First & Last Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter Name" required>
                <div class="invalid-feedback">Please enter your name.</div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                  <input type="email" class="form-control" id="email" placeholder="i-e john@gmail.com" required>
                  <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="******" required>
                <div class="invalid-feedback">Password must be at least 6 characters long.</div>
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="******" required>
                <div class="invalid-feedback">Passwords do not match.</div>
              </div>
              <div class="mb-3">
             <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="2" placeholder="Enter your message here" required></textarea>
           </div>
              <div class="mx-auto">
              <button type="submit" class="main-btn ">Send</button>

              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 ">
        <div class="contact-item ">
          <i class="fas fa-envelope"></i>
          <div>
            <h3 class="paragraph-grey">support@brainwave.io</h3>
            <h3 class="paragraph-grey">contact@brainwave.io</h3>
          </div>
        </div>
        <div class="contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <div>
            <h3 class="paragraph-grey">34 Madison Street, NY, USA 10005</h3>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="container-fluid mt-5 google-map">
    <div class="map-container">
   <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345099036!2d144.95565131550403!3d-37.81720997975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5772d1c0ef0e0d5!2sVictoria%20Street%2C%20Melbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1629486721586!5m2!1sen!2sus"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
  </div>

  </section>


 















<!------------- footer section start---------- -->
<?php
 include_once 'footer.php'
?>



</body>