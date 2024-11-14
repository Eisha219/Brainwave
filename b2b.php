<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<style>
    .b2b-page{
        overflow-x: hidden;
    }
    .b2b-banner{
        position: relative;
    }
    .watch-ono-min-vedio{
 background-color: #161C2D;
     position: absolute;
     bottom: 0;
  left: 0;
  width: 100%;
  padding: 20px;
    }

    .bg-light-grey{   
        position: relative;
    }
    .b2b-img{
        position: relative;
        z-index: 100;
    }
    .b2b-img::before{
        content: "";
        position: absolute;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background-color: #68D585;
        top: 50px;
        left: 50px;
        z-index: -100;
    }
 .b2b-feature{
    position: relative;
 }
.b2b-vedio{
    /* position: absolute; */
    width: 100%;
      height: 50%;
      top:75%;
      z-index: 112;
      /* overflow-x: hidden; */
}
.b2b-feature .video-container{
    position: relative;
    align-items: center;
}
.vedio-overlay{
    position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    .b2b-card-btn .view-link{
      color: #473BF0!important;

    }
 

 
</style>
<body class="b2b-page">

<!-------------- Navbar section start------------- -->
 <?php
 include_once 'navbar.php'
?>
  <section class=" d-flex align-items-center agency section-distance b2b-banner">
    <div class="container">

      <div class="row ">
      <div class="col-lg-6 order-2  ">
        <img src="./assets/images/b2b/banner-img.svg" alt="Image 1" class="b2b-banner-img">
        </div>
        <div class="col-md-6 order-1">
          <div class="banner-content">
            <h1 class="main-heading ">Make your business powerful with Shade.</h1>
            <p class="paragraph-grey my-4 ">With lots of unique, you can easily build a page without coding, Build your consultancy website within minutes</p>
            <a href="#" class="main-btn">get a free quote</a>
            <div class="mt-4">
        <span class="watch-now red-heading"><a href="" class=" dark-blue ">WATCH NOW WE CAN HELP</a></span>
        </div>         
     </div>
        </div>
       
      </div>
    </div>
    <div class=" watch-ono-min-vedio">
        <div class="row  ">
            <div class="col-md-6 mx-auto d-flex justify-content-center">
                <i class="fas fa-play-circle text-white mt-2"></i>
                <p class="text-white  ms-4 card-paragraph-font-size mt-1">Interested how our software works for you?   <a href="" class="text-white">Watch our 1 minute video</a> .</p>
            </div>
        </div>
    </div>
  </section>
<!-- 2nd section  -->
  <section class=" d-flex align-items-center agency section-distance ">
    <div class="container">

      <div class="row ">
        <div class="col-md-4 align-items-center mt-5">
          <div class="banner-content">
            <h1 class="sub-title ">Experienced experts are giving advices.</h1>
            <p class="paragraph-grey my-4 ">With lots of unique, you can easily build a page without coding, Build your consultancy website within minutes</p>
            <a href="#" class="main-btn">Learn how we work</a>  
     </div>
        </div>
        <div class="col-lg-4 ">
        <img src="./assets/images/b2b/image-1.svg" alt="Image 1" class="b2b-banner-img">
        </div>
       <div class="col-lg-4">
       <div class="project-content d-flex justify-content-center">
            <div>
              <h3 class="card-title-font-size">1M+</h3>
              <p class="card-paragraph-font-size">Customers visit Albino every month to get their service done.</p>
            </div>
           
          </div>
          <div class="project-content d-flex justify-content-center">
            <div>
              <h3 class="card-title-font-size">92%</h3>
              <p class="card-paragraph-font-size">Satisfaction rate comes from our awesome customers.</p>
            </div>
          </div>
          <div class="project-content d-flex justify-content-center">
            <div>
              <h3 class="card-title-font-size">4.9/5.0</h3>
              <p class="card-paragraph-font-size">Average customer ratings we have got all over internet.</p>
            </div>
          </div>
          
       </div>
      </div>
    </div>
   
  </section>
<!-- 3rd section  -->
<section>
<div class="container my-5 pt-2">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 text-center ">
                <h3 class="sub-heading">Services we offer for you</h3>
                <p class="paragraph-grey">With lots of unique blocks, you can easily build a page easily without any coding. </p>

            </div>
        </div>
     </div>
     <div class="container py-5  coworking-cards ">
    <div class="row">
    <div class="col-md-4 mb-4">
        <div class="card consultation-card  ">
        <p class="card-text icon-heading-font-size mx-3">Digital Marketing</p>
        <img src="./assets/images/b2b/ser-1.svg" class="card-img-top img-one" alt="Image 1">
        <div class="card-body text-start d-flex flex-column align-items-start justify-content-between">
        <p class="card-paragraph-font-size">With lots of unique blocks, you can easily build a page easily without any coding. </p>
       <div>
       <strong class="card-title b2b-card-btn">
            <a href="" class="view-link">Learn More <i class="ms-2 fas fa-arrow-right"></i></a>
        </strong> 
       </div>
      
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card consultation-card  ">
        <p class="card-text icon-heading-font-size mx-3">Business Growth</p>
        <img src="./assets/images/b2b/ser-2.svg" class="card-img-top img-one" alt="Image 1">
        <div class="card-body text-start d-flex flex-column align-items-start justify-content-between">
        <p class="card-paragraph-font-size">With lots of unique blocks, you can easily build a page easily without any coding. </p>
       <div>
       <strong class="card-title b2b-card-btn">
            <a href="" class="view-link">Learn More <i class="ms-2 fas fa-arrow-right"></i></a>
        </strong> 
       </div>
      
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card consultation-card  ">
        <p class="card-text icon-heading-font-size mx-3">Content Marketing</p>
        <img src="./assets/images/b2b/ser-3.svg" class="card-img-top img-one" alt="Image 1">
        <div class="card-body text-start d-flex flex-column align-items-start justify-content-between">
        <p class="card-paragraph-font-size">With lots of unique blocks, you can easily build a page easily without any coding. </p>
       <div>
       <strong class="card-title b2b-card-btn">
            <a href="" class="view-link">Learn More <i class="ms-2 fas fa-arrow-right"></i></a>
        </strong> 
       </div>
      
          </div>
        </div>
      </div>
   
      </div>
  </div>
</section>
<!-- 4rd section  -->
<section class="my-5 b2b-feature">
    <div class="container">
      <div class="row full-height">
        <div class="col-md-6 b2b-img ">
          <img src="./assets/images/b2b/image-2.svg" alt="Image" class="img-fluid  ">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center p-5">
          <h1 class="mb-4 subtitle">Reasons you should choose us to grow today.</h1>
          <p class="mb-4">We share common trends and strategies for improving your rental income and making sure you stay in high demand.</p>
          <div class="row">
            <div class="col-md-6 d-flex align-items-center mb-2">
              <i class="icon fas fa-check"></i>
              <h5 class="mb-0 ms-1"><strong>Fully Responsive</strong></h5>
            </div>
            <div class="col-md-6 d-flex align-items-center mb-2">
              <i class="icon fas fa-check"></i>
              <h5 class="mb-0 ms-1"><strong>Beautiful Layouts</strong></h5>
            </div>
            <div class="col-md-6 d-flex align-items-center mb-2">
              <i class="icon fas fa-check"></i>
              <h5 class="mb-0 ms-1"><strong>Easy to Edit</strong></h5>
            </div>
            <div class="col-md-6 d-flex align-items-center mb-2">
              <i class="icon fas fa-check"></i>
              <h5 class="mb-0 ms-1"><strong>Google Font Included</strong></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class=" b2b-vedio">
     <div class="video-container">
    <video id="video"  controls>
    <source src="./assets/images/job/vedio.mp4" type="video/mp4">
    Your browser does not support the video tag.
    </video>
    <div class="d-flex vedio-overlay flex-column">
    <button class="play-pause-btn" id="playPauseBtn">
      <div class="icon play"></div>
    </button>
    <h5 class="subtitle text-white">How do we help you to grow?</h5>
    <p class="card-paragraph-font-size text-white text-center">With lots of unique blocks, you can easily build a page without coding.
         Build your next landing page..</p>
    </div>
  
  </div>
 
   </section>
  </section> 
<!-- section 5th  -->
  <section class="page-inner-section">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center ">
        <h1 class="sub-heading mb-3">What people say about us.</h1>
        <p class="paragraph-grey mb-4">With lots of unique blocks, you can easily build a page without coding
        . Build your next consultancy website within few minutes.</p>
        <div>
        </div>     
      </div>  
    </div>
  </div>
  <section class="saas-feature-section b2b-client-reviews">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="feature-box d-flex justify-content-around flex-column">
            <div class="me-3">         
               <img src="./assets/images/b2b/user-1.svg" class="feature-icon" alt="Image 1">
            </div>
            <div>
            <p class="feature-description">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.
             </p>
             <h3 class="feature-name">Isabella Chavez <span class="ms-2 card-paragraph-font-size">Software engineer</span></h3>
            </div>
         
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box d-flex justify-content-around flex-column">
            <div class="me-3">         
               <img src="./assets/images/b2b/user-2.svg" class="feature-icon" alt="Image 1">
            </div>
            <div>
            <p class="feature-description">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.
             </p>
             <h3 class="feature-name">Curtis Rhodes <span class="ms-2 card-paragraph-font-size">Digital Marketer</span></h3>

            </div>
         
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box d-flex justify-content-around flex-column">
            <div class="me-3">         
               <img src="./assets/images/b2b/user-3.svg" class="feature-icon" alt="Image 1">
            </div>
            <div>
            <p class="feature-description">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.
             </p>
             <h3 class="feature-name">Lucas Mann<span class="ms-2 card-paragraph-font-size">Co Founder</span></h3>

            </div>
         
          </div>
        </div>
      </div>
    </div>
  </section>
  </section>

  <section class="b2b-bg-blue">
    <div class="row">
        <div class=" text-center mx-auto">
            <h2 class="text-white icon-heading-font-size ">Ready to get started <a href="" class=" ms-2 main-btn mt-4">Get a Free quote</a>
            </h2>
        </div>
    </div>
  </section>




  


<!------------- footer section start---------- -->
<?php
 include_once 'footer.php'
?>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const playPauseBtn = document.getElementById('playPauseBtn');
  const video = document.getElementById('video');

  playPauseBtn.addEventListener('click', () => {
    if (video.paused) {
      video.play();
      playPauseBtn.innerHTML = '<div class="icon pause"></div>';
    } else {
      video.pause();
      playPauseBtn.innerHTML = '<div class="icon play"></div>';
    }
  });

  video.addEventListener('play', () => {
    playPauseBtn.innerHTML = '<div class="icon pause"></div>';
  });

  video.addEventListener('pause', () => {
    playPauseBtn.innerHTML = '<div class="icon play"></div>';
  });
});


</script>


</body>