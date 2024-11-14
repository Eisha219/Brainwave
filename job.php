<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<style>
 .job-category-section .feature-box .feature-description:hover{color:#fff}
.job-steps-image{
  position: relative;
}
.container-interview{
  position: absolute;
  top: 60%;
  left: 0;
  background-color:#161C2D;
  width: 70%;
  padding: 15px;

}

.bell-icon {
  background-color: #68D585!important;
  color: #000!important;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  margin-right: 20px;
}

.container-interview .interview{
  color: #fff;
}
</style>
<body>

<!-------------- Navbar section start------------- -->
 <?php
 include_once 'navbar.php'
?>
<section class="jobsite-banner">
        <div class="row ">
    <div class="col-md-10">
    <div class="container mt-5">
    <div class="row ">
        <div class="col-lg-6 col-md-8 margin-topp banner-content mx-md-5">
          <div class="text-center mb-4">
            <h2 class="main-heading">Find a dream job that changes life.</h2>
            <p class="paragraph-grey">With lots of unique blocks, you can easily build a page without coding. Build your next job website.</p>
          </div>
        </div>
      </div>
 </div>
    <div class="container">
    <div class="row ">
    <div class="col-lg-9 col-md-12 mx-md-5 ">
        <div class="text-center">
        <div class="container my-5">
        <div class="search-place-box py-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text text-dark"><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <select id="location" class="form-control">
                    <option value="">Select location</option>
                    <option value="Location1">Lahore</option>
                    <option value="Location2">Islamabad</option>
                    <option value="Location3">Karachi</option>
                    <option value="Location1">Lahore</option>
                    <option value="Location2">Islamabad</option>
                    <option value="Location3">Karachi</option>
                </select>
                <div class="input-group-append">
                    <span class="input-group-text text-dark"><i class="fas fa-chevron-down"></i></span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text text-dark"><i class="fas fa-calendar-alt"></i></span>
                </div>
                <input type="date" id="date" class="form-control">
                <!-- <div class="input-group-append">
                    <span class="input-group-text text-dark"><i class="fas fa-chevron-down"></i></span>
                </div> -->
            </div>
            <div class="text-cente place-search">
                <a href="#" class=" main-btn">Search Places</a>
            </div>
        </div>
    </div>
        </div>
    </div>
 </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center text-white">
            <span>Try Product Designer, Software Engineer etc.</span>

            </div>
        </div>
    </div>
            </div>
        </div>

</section>
      <!-------------- Get latest------------- -->
      <section class="my-5">
      <div class="container ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4">
            <h2 class="sub-heading">Big companies are here</h2>
            <p class="paragraph-grey my-4">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes. You have a business to run. Stop worring about cross-browser bugs, designing new pages.</p>
          </div>
      </div>

    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
        <div class="col-md-8 ">
        <div class="row justify-content-center text-center">
            <div class="col-md-3 col-6 mb-3">
                <img src="./assets/images/jobsite/Logo 1.svg" class="company-logo " alt="Image 1">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img src="./assets/images/jobsite/Logo 2.svg" class="company-logo " alt="Image 2">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img src="./assets/images/jobsite/Logo 3.svg" class="company-logo " alt="Image 3">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img src="./assets/images/jobsite/Logo 4.svg" class="company-logo " alt="Image 4">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img src="./assets/images/jobsite/Logo 5.svg" class="company-logo " alt="Image 5">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img src="./assets/images/jobsite/Logo 6.svg" class="company-logo " alt="Image 6">
            </div>
        </div>
        </div>
        </div>
 
      
    </div>
    </div>
    
      </section>
      <!-------------- Job by category------------- -->
      <section class="job-categories">
      <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="sub-heading text-white">Get Latest Updates</h2>
                <p class="paragraph-grey my-4 text-white">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within a few minutes.</p>
            </div>
            <div class="col-md-4 text-md-end text-center">
            <a href="jobopen.php" class="view-link ">explore all categories <i class="ms-3 fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <section class="job-category-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="feature-box">
            <div>
            <h3 class="feature-name">Design</h3>
            <p class="feature-description">
                47 Jobs
             </p>
            </div>
          <div>
          <div class="project-number"> <i class=" fas fa-arrow-right"></i></div>
          </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <div>
            <h3 class="feature-name">Marketing</h3>
            <p class="feature-description">
                51 Jobs
             </p>
            </div>
          <div>
          <div class="project-number"> <i class=" fas fa-arrow-right"></i></div>
          </div>

          </div>
        </div>
           <div class="col-md-4">
          <div class="feature-box">
            <div>
            <h3 class="feature-name">Engineering</h3>
            <p class="feature-description">
                128 Jobs
             </p>
            </div>
          <div>
          <div class="project-number"> <i class=" fas fa-arrow-right"></i></div>
          </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <div>
            <h3 class="feature-name">Mangement</h3>
            <p class="feature-description">
                51 Jobs
             </p>
            </div>
          <div>
          <div class="project-number"> <i class=" fas fa-arrow-right"></i></div>
          </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <div>
            <h3 class="feature-name">Fianance</h3>
            <p class="feature-description">
                23 Jobs
             </p>
            </div>
          <div>
          <div class="project-number"> <i class=" fas fa-arrow-right"></i></div>
          </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <div>
            <h3 class="feature-name">Customer Support</h3>
            <p class="feature-description">
                34 Jobs
             </p>
            </div>
          <div>
          <div class="project-number"> <i class=" fas fa-arrow-right"></i></div>
          </div>

          </div>
        </div>
      </div>
    </div>
  </section>
      </section>

  <!-------------- Find job category------------- -->
  <section class="saas-project-section ">
    <div class="container">
      <div class="row align-items-center d-flex flex-column">
        <div class="col-lg-6 mb-4 mb-lg-5 banner-heading">
          <h1 class="sub-heading text-center">Find jobs with 3 easy steps</h1>
          <p class="paragraph-grey text-center">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
        </div>
      </div>
    </div>
    
    <div class="container project-container steps">
      <div class="row ">
        <div class="col-lg-6 col-md-my-5 get-started-img job-steps-image">
        <img src="./assets/images/jobsite/user.svg" class="" alt="Image 1">
        <div class="container-interview d-flex justify-content-center ">
            <div class="me-3 ">    
            <div class="bell-icon">  
            <i class="fas fa-bell"></i>
            </div>

            </div>
            <div class="interview">
            <h3 class="card-paragraph-font-size text-white ">New Invitation!</h3>
            <p class="paragraph-grey text-white">Interview invitation at Greener
             </p>
         
          </div>
        </div>
        </div>
        <div class="col-lg-6 ">
          <div class="project-content d-flex justify-content-center">
            <div class="project-number">1</div>
            <div>
              <h3 class="card-title-font-size">Search for a job</h3>
              <p class="card-paragraph-font-size">
              With lots of unique blocks, you can easily build a page without coding. 
            </p>
            </div>
          </div>
          <div class="project-content d-flex justify-content-center">
            <div class="project-number">2</div>
            <div>
              <h3 class="card-title-font-size">Apply within our website</h3>
              <p class="card-paragraph-font-size">With lots of unique blocks, you can easily build a page without coding. </p>
            </div>
          </div>
          <div class="project-content d-flex justify-content-center">
            <div class="project-number">3</div>
            <div>
              <h3 class="card-title-font-size">Get interview call</h3>
              <p class="card-paragraph-font-size">With lots of unique blocks, you can easily build a page without coding.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
 <!-------------- Find job category------------- -->
 <section class="my-5 featured-jobs">
 <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="sub-heading ">Featured jobs</h2>
                <p class="paragraph-grey my-4 ">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within a few minutes.</p>
            </div>
            <div class="col-md-4 text-md-end text-center ">
</div>
    </div>
</div>
<div class="container">
<div id="carouselExampleControls" class="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="feature-box">
            <strong class="green-color">FULL TIME</strong>
            <h3 class="card-title-font-size">Senior Software Engineer</h3>
            <p class="feature-description ">New York, USA
             </p>
             <div class="mt-5 d-flex align-items-center ">
                <div> <img src="./assets/images/jobsite/Logo-D.svg" alt=""></div>
                <p class="mx-2 paragraph-grey  fw-bolder">Dorfus</p>
             </div>
          </div>
    </div>
    <div class="carousel-item">
    <div class="feature-box">
            <strong class="blue-color">REMOTE</strong>
            <h3 class="card-title-font-size">Product Designer</h3>
            <p class="feature-description ">Lake Colby, UK
             </p>
             <div class="mt-5 d-flex align-items-center ">
                <div> <img src="./assets/images/jobsite/Logo-C.svg" alt=""></div>
                <p class="mx-2 paragraph-grey  fw-bolder">Coworks</p>
             </div>
      </div>
    </div>
    <div class="carousel-item">
    <div class="feature-box">
            <strong class="green-color">FULL TIME</strong>
            <h3 class="card-title-font-size">UX Designer</h3>
            <p class="feature-description ">California, USA
             </p>
             <div class="mt-5 d-flex align-items-center ">
                <div> <img src="./assets/images/jobsite/Logo-A.svg" alt=""></div>
                <p class="mx-2 paragraph-grey  fw-bolder">Askimat</p>
             </div>
          </div>
    </div>
    <div class="carousel-item">
    <div class="feature-box">
            <strong class="green-color">PART-TIME</strong>
            <h3 class="card-title-font-size">Full-stack Web Developer</h3>
            <p class="feature-description ">Katlynburgh, Sweden
             </p>
             <div class="mt-5 d-flex align-items-center ">
                <div> <img src="./assets/images/jobsite/Logo-G.svg" alt=""></div>
                <p class="mx-2 paragraph-grey  fw-bolder">Greener</p>
             </div>
          </div>
    </div>
    <div class="carousel-item">
    <div class="feature-box">
            <strong class="green-color">FULL TIME</strong>
            <h3 class="card-title-font-size">Senior Software Engineer</h3>
            <p class="feature-description ">New York, USA
             </p>
             <div class="mt-5 d-flex align-items-center ">
                <div> <img src="./assets/images/jobsite/Logo-D.svg" alt=""></div>
                <p class="mx-2 paragraph-grey  fw-bolder">Dorfus</p>
             </div>
          </div>
    </div>
    <div class="carousel-item">
    <div class="feature-box">
            <strong class="blue-color">REMOTE</strong>
            <h3 class="card-title-font-size">Product Designer</h3>
            <p class="feature-description ">Lake Colby, UK
             </p>
             <div class="mt-5 d-flex align-items-center ">
                <div> <img src="./assets/images/jobsite/Logo-C.svg" alt=""></div>
                <p class="mx-2 paragraph-grey  fw-bolder">Coworks</p>
             </div>
      </div>
    </div>
    <div class="carousel-item">
    <div class="feature-box">
            <strong class="green-color">FULL TIME</strong>
            <h3 class="card-title-font-size">UX Designer</h3>
            <p class="feature-description ">California, USA
             </p>
             <div class="mt-5 d-flex align-items-center ">
                <div> <img src="./assets/images/jobsite/Logo-A.svg" alt=""></div>
                <p class="mx-2 paragraph-grey  fw-bolder">Askimat</p>
             </div>
          </div>
    </div>
    <div class="carousel-item">
    <div class="feature-box">
            <strong class="green-color">PART-TIME</strong>
            <h3 class="card-title-font-size">Full-stack Web Developer</h3>
            <p class="feature-description ">Katlynburgh, Sweden
             </p>
             <div class="mt-5 d-flex align-items-center ">
                <div> <img src="./assets/images/jobsite/Logo-G.svg" alt=""></div>
                <p class="mx-2 paragraph-grey  fw-bolder">Greener</p>
             </div>
          </div>
    </div>
   
  </div>
  <div class="car-btn">
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>

</div>
</div>

 

    </section>
     <!-- section distance  -->

    <section class="agency-service my-lg-5 my-md-2 need-help-job">
     <div class="container my-5 pt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 text-center ">
                <h3 class="sub-heading">News that helps</h3>
                <p class="paragraph-grey">With lots of unique blocks, you can easily build a page easily without any coding. </p>

            </div>
        </div>
     </div>

     <div class="container py-5  coworking-cards ">
    <div class="row">
    <div class="col-md-4 mb-4">
        <div class="card service-card-design ">
        <img src="./assets/images/jobsite/service-1.svg" class="card-img-top img-one" alt="Image 1">
        <div class="card-body text-start">
        <p class="card-text card-paragraph-font-size">Carreer</p>
            <strong class="card-title">How to win any job you want. Get started with 5 steps.</strong> 
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card service-card-design ">
        <img src="./assets/images/jobsite/service-3.svg" class="card-img-top" alt="Image 1">
        <div class="card-body text-start">
        <p class="card-text card-paragraph-font-size">Lifestyle</p>
     <strong class="card-title">10 ways to reduce your office work depression.</strong>
      
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card service-card-design ">
        <img src="./assets/images/jobsite/service-2.svg" class="card-img-top" alt="Image 1">
        <div class="card-body text-start">
        <p class="card-text card-paragraph-font-size">Career</p>
            <strong class="card-title">Why should you work as a team even on small projects.</strong>
      
          </div>
        </div>
      </div>
     
   
      </div>
  </div>

 </section>

    <!-------------- Get latest------------- -->
    <section class="my-5 get-latest-job">
      <div class="container ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4">
            <h2 class="sub-heading">Get latest updates</h2>
            <p class="paragraph-grey my-4">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
          </div>
     

      </div>
      <div class="row justify-content-center">
      <div class="col-md-4 col-lg-4">
      <div class="subscription-form d-flex align-items-center">
      <div class="input-group mb-2">
        <input type="email" class="form-control" placeholder="Enter your email" aria-label="Email">
        <div class="input-group-append">
          <button class="main-btn mt-2 mx-auto" type="button">Subscribe</button>
        </div>
      </div>
    </div>
      </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-3">
      <div class="mx-auto my-lg-5 text-center">
    <span class="card-paragraph-font-size">We’ll never share your details with third parties.
    View our Privacy Policy for more info.</span>
    </div>
      </div>
    </div>
    </div>
      </section>


<!------------- footer section start---------- -->
<?php
 include_once 'footer.php'
?>

<script>
 const multipleItemCarousel = document.querySelector("#carouselExampleControls");

if (window.matchMedia("(min-width:576px)").matches) {
  const carousel = new bootstrap.Carousel(multipleItemCarousel, {
    interval: false
  });

  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();

  var scrollPosition = 0;

  $(".carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition = scrollPosition + cardWidth;
      $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
    }
  });
  $(".carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition = scrollPosition - cardWidth;
      $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
    }
  });
} else {
  $(multipleItemCarousel).addClass("slide");
}
  </script>

</body>