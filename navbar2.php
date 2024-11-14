
<?php
// include_once "loader.php"
 ?>



<header class="header_wrapper">
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand text-white" href="index.php">Brainwave.io</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav menu-navbar-nav">
      <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Demos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="price.php">Pricing & Plans</a></li>
            <li><a class="dropdown-item" href="conditions.php">Terms and Conditions</a></li>
            <li><a class="dropdown-item" href="jobopen.php">Job Opening</a></li>
            <li><a class="dropdown-item" href="web.php">Job Details</a></li>
            <li><a class="dropdown-item" href="productdetail.php">Product Details</a></li>
            <li><a class="dropdown-item" href="cart.php">Cart</a></li>
            <li><a class="dropdown-item" href="checkout.php">Checkout</a></li>
                  
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="saas-subscription.php">Saas Subscription</a></li>
            <li><a class="dropdown-item" href="coworking.php">Coworking</a></li>
            <li><a class="dropdown-item" href="job.php">Job Site</a></li>
            <li><a class="dropdown-item" href="web.php">Web application</a></li>
            <li><a class="dropdown-item" href="ecommerce.php">Ecommerce</a></li>
            <li><a class="dropdown-item" href="mobile.php">Mobile App</a></li>
            <li><a class="dropdown-item" href="consultation.php">Consultation</a></li>
            <li><a class="dropdown-item" href="product.php">Product</a></li>
            <li><a class="dropdown-item" href="b2b.php">B2B</a></li>          
          </ul>
        </li>
        <li class="nav-item text-white">
          <a class="nav-link text-white" href="support.php">About us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="contact.php">Contact</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="signin.php"><span class="divider px-lg-3">|</span>Sign In</a>
        </li>
      </ul>
      <li class="nav-item mt-3 mt-lg-0 text-white">
          <a class="main-btn" href="signup.php">Sign Up</a>
        </li>
    </div>
  </div>
</nav>
</header>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", function() {
      if (window.scrollY > 70) { 
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  });
</script>
