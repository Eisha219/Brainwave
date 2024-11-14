<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<body class="signup-page">
    <div class="navbrand text-center">
    <a class="navbar-brand" href="index.php">Brainwave.io</a>
    </div>
    <section class="signup-section inner-page-section">
    <div class="container ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4">
            <h2 class="main-heading">Reset Password</h2>
            <p class="paragraph-grey my-4">Enter your email to get reset link</p>
          </div>
          <div class="signup-card mx-auto">
          <form id="signinForm" novalidate>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                  <input type="email" class="form-control" id="email" placeholder="i-e john@gmail.com" required>
                  <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
              </div>
              
              <div class="mx-auto">
              <button type="submit" class="main-btn ">Send Reset Link</button>

              </div>
            </form>
          </div>
          <div class="text-center mt-4">
            <p class="paragraph-grey">Remember this password? <a href="signin.php" class="blue-color">Sign in now</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>


 















<!------------- footer section start---------- -->
<?php
 include_once 'footer.php'
?>



</body>