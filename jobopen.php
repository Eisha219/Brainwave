<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
  <style>
  .benefits-icon{
    margin-right: 1rem;
    font-size: 2rem;
  }
.para{
    margin-left: 2.5rem!important;
 

}
.para p{
    align-items: center;
    justify-content: center;
    width: 75%;
}
.accordion-button::after{
    position: absolute;
    top: 50px!important;
    margin-left: 600px!important;
    color: #000!important;
  }
  #accordian {
    margin: 100px auto;
    /* width: 600px; */
}
#accordian li {
    list-style: none;
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 4px;
    background: #fff;
}
#accordian li label {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    color: #000;
}
#accordian li label span {
    transform: rotate(90deg);
    font-size: 22px;
    color: #333;
}
#accordian input[type="radio"] {
    display: none;
}
#accordian .content {
    padding: 0 10px;
    line-height: 26px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease;
}
#accordian .content p{
  font-size: 14px;
}
#accordian input[type="radio"]:checked ~ .content {
    max-height: 200px; 
}

  </style>

<body class="contact">
<?php
 include_once 'navbar.php'
?>
    <section class=" inner-page-section">
    <div class="container ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4">
            <h2 class="main-heading">Join at Grayic</h2>
            <p class="paragraph-grey my-4">By accessing and placing an order with UXTheme, you confirm that you are in agreement with and bound by the terms and conditions</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<section>
<video id="myVideo" class="w-100" poster="path/to/poster.jpg" controls >
        <source src="./assets/images/job/vedio.mp4" type="video/mp4">
        Your browser does not support the video tag.
 </video>
</section>
<!-- join us section  -->
<section class=" inner-page-section">
    <div class="container ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4">
            <h2 class="sub-heading">Why you should join us?</h2>
            <p class="paragraph-grey my-4">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
  <div class="row">
    <div class="col-md-4 d-flex flex-column align-items-start mb-4">
      <div class="d-flex align-items-center mb-2">
      <img src="./assets/images/job/icon-1.svg" alt="Right Side Image" class="img-fluid benefits-icon">
      <h4 class="card-title-font-size my-3">Personal growth</h4>
      </div>
      <div class="para ">
      <p class="card-paragraph-font-size my-2 ">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>

      </div>
    </div>
    <div class="col-md-4 d-flex flex-column align-items-start mb-4">
      <div class="d-flex align-items-center mb-2">
      <img src="./assets/images/job/icon-2.svg" alt="Right Side Image" class="img-fluid benefits-icon">
      <h4 class="card-title-font-size my-3">Competitive salary</h4>
      </div>
      <div class="para ">
      <p class="card-paragraph-font-size my-2 ">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>

      </div>
    </div>
    <div class="col-md-4 d-flex flex-column align-items-start mb-4">
      <div class="d-flex align-items-center mb-2">
      <img src="./assets/images/job/icon-3.svg" alt="Right Side Image" class="img-fluid benefits-icon">
      <h4 class="card-title-font-size my-3">Casual dress code</h4>
      </div>
      <div class="para ">
      <p class="card-paragraph-font-size my-2 ">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>

      </div>
    </div>
    <div class="col-md-4 d-flex flex-column align-items-start mb-4">
      <div class="d-flex align-items-center mb-2">
      <img src="./assets/images/job/icon-4.svg" alt="Right Side Image" class="img-fluid benefits-icon">
      <h4 class="card-title-font-size my-3">Unlimited time off</h4>
      </div>
      <div class="para ">
      <p class="card-paragraph-font-size my-2 ">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>

      </div>
    </div>
    <div class="col-md-4 d-flex flex-column align-items-start mb-4">
      <div class="d-flex align-items-center mb-2">
      <img src="./assets/images/job/icon-5.svg" alt="Right Side Image" class="img-fluid benefits-icon">
      <h4 class="card-title-font-size my-3">Yearly bonuses</h4>
      </div>
      <div class="para ">
      <p class="card-paragraph-font-size my-2 ">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>

      </div>
    </div>
    <div class="col-md-4 d-flex flex-column align-items-start mb-4">
      <div class="d-flex align-items-center mb-2">
      <img src="./assets/images/job/icon-6.svg" alt="Right Side Image" class="img-fluid benefits-icon">
      <h4 class="card-title-font-size my-3">Global community</h4>
      </div>
      <div class="para ">
      <p class="card-paragraph-font-size my-2 ">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>

      </div>
    </div>
  </div>
   </div>
 </section>
 <section  class="price-page ">
   <div class="container my-5 ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4 my-5">
            <h2 class="sub-heading">Current job openings</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <ul id="accordian">
            <li>
                <input type="radio" name="accordion" id="first">
                <label for="first">
                <div class="d-flex align-items-start flex-column">
                <h3 class="card-title-font-size">Account Manager  </h3> 
                <p class="card-paragraph-font-size">Full Time, New York</p> 
                </div>     
                <i class="fas fa-arrow-right"></i>
            </label>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat nemo ipsa suscipit? Consequatur, quasi. Blanditiis pariatur quod ipsam beatae corrupti mollitia, nobis doloribus vitae earum magni tempora possimus saepe odio?</p>
                    <a href="detail.php" class="main-btn ">Get Started for free <i class="ms-3 fas fa-arrow-right"></i></a>
                    </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="second">
                <label for="second">
                <div class="d-flex align-items-start flex-column">
                <h3 class="card-title-font-size">Full Stack Developer  </h3> 
                <p class="card-paragraph-font-size">Full Time, Remote</p> 
                </div>     
                <i class="fas fa-arrow-right"></i>
            </label>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat nemo ipsa suscipit? Consequatur, quasi. Blanditiis pariatur quod ipsam beatae corrupti mollitia, nobis doloribus vitae earum magni tempora possimus saepe odio?</p>
                    <a href="detail.php" class="main-btn ">Get Started for free <i class="ms-3 fas fa-arrow-right"></i></a>

                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="third">
                <label for="third">
                <div class="d-flex align-items-start flex-column">
                <h3 class="card-title-font-size">Senior Project Manager  </h3> 
                <p class="card-paragraph-font-size">Full Time, New York</p> 
                </div>     
                <i class="fas fa-arrow-right"></i>
            </label>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat nemo ipsa suscipit? Consequatur, quasi. Blanditiis pariatur quod ipsam beatae corrupti mollitia, nobis doloribus vitae earum magni tempora possimus saepe odio?</p>
                    <a href="detail.php" class="main-btn ">Get Started for free <i class="ms-3 fas fa-arrow-right"></i></a>

                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="fourth">
                <label for="fourth">
                <div class="d-flex align-items-start flex-column">
                <h3 class="card-title-font-size">UX Designer </h3> 
                <p class="card-paragraph-font-size">Full Time, Remote</p> 
                </div>     
                <i class="fas fa-arrow-right"></i>
            </label>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat nemo ipsa suscipit? Consequatur, quasi. Blanditiis pariatur quod ipsam beatae corrupti mollitia, nobis doloribus vitae earum magni tempora possimus saepe odio?</p>
                    <a href="detail.php" class="main-btn ">Get Started for free <i class="ms-3 fas fa-arrow-right"></i></a>

                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="fifth">
                <label for="fifth">
                <div class="d-flex align-items-start flex-column">
                <h3 class="card-title-font-size">Software Engineer</h3> 
                <p class="card-paragraph-font-size">Full Time, Remote</p> 
                </div>     
                <i class="fas fa-arrow-right"></i>
            </label>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat nemo ipsa suscipit? Consequatur, quasi. Blanditiis pariatur quod ipsam beatae corrupti mollitia, nobis doloribus vitae earum magni tempora possimus saepe odio?</p>
                    <a href="detail.php" class="main-btn ">Get Started for free <i class="ms-3 fas fa-arrow-right"></i></a>

                </div>
            </li>
        </ul>
            </div>
        </div>

    
  
</div>
   </section>


 
<!------------- footer section start---------- -->
<?php
 include_once 'footer.php'
?>

