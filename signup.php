<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<body class="signup-page ">
    <div class="navbrand text-center">
    <a class="navbar-brand" href="index.php">Brainwave.io</a>
    </div>
    <section class="signup-section inner-page-section">
    <div class="container ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4">
            <h2 class="main-heading">Sign Up</h2>
            <p class="paragraph-grey my-4">To get started, you need to sign up here.</p>
          </div>
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
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="termsCheck" required>
                <label class="form-check-label" for="termsCheck">
                  I agree to the terms and conditions
                </label>
                <div class="invalid-feedback">You must agree to the terms and conditions.</div>
              </div>
              <div class="mx-auto">
              <button type="submit" class="main-btn ">Create an Account</button>

              </div>
            </form>
          </div>
          <div class="text-center mt-4">
            <p class="paragraph-grey">Already have an account? <a href="signin.php" class="blue-color">Sign in now</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script>
    (function() {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })();

    document.getElementById('signupForm').addEventListener('submit', function(event) {
      var password = document.getElementById('password');
      var confirmPassword = document.getElementById('confirmPassword');
      if (password.value !== confirmPassword.value) {
        confirmPassword.setCustomValidity("Passwords do not match.");
      } else {
        confirmPassword.setCustomValidity("");
      }
    });
  </script>
















<!------------- footer section start---------- -->
<?php
 include_once 'footer.php'
?>



</body>