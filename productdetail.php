<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
  <style>

 @media (max-width:991px){

  .images{
    display: flex;
    justify-content: space-between;
    width: 60%;
    flex-direction:row!important;
    margin: auto!important;
    padding-top: 30px;    
  }
  .images{
    position: relative!important;
  }
  .big-img{
    margin: auto!important;

}
.btn-box .main-btn{
    padding: 10px!important;
    font-size: 13.5px!important;
}
 
}
@media (max-width:778px){
 .big-img{
    width: 200px!important;
 }
 .images {
margin: auto!important;
}
 .small-img{
  width: 100px;
  height: 50px;
  margin: 20px 5px;
  align-items: center;
  text-align: center;

}
.small-img img{
  width: 100%;
  cursor: pointer;
  transition: all 0.3s ease;
}

}



  </style>

<body class="contact">
<?php
 include_once 'navbar.php'
?>

 <section class="product-detail-page inner-page-section">
    <div class="container ">
      <div class="row justify-content-baseline align-items-center">   
      <div class="col-lg-6 left">
                <div class="big-img ">
                    <img src="./assets/images/product-detail/product-img.svg" alt="Product Image">
                </div>
                <div class="images d-flex flex-lg-column flex-row">
                    <div class="small-img">
                        <img src="./assets/images/product-detail/small-1.svg" onclick="showImg(this.src)" alt="Product Thumbnail 1">
                    </div>
                    <div class="small-img">
                        <img src="./assets/images/product-detail/small-2.svg" onclick="showImg(this.src)" alt="Product Thumbnail 2">
                    </div>
                    <div class="small-img">
                        <img src="./assets/images/product-detail/small-3.svg" onclick="showImg(this.src)" alt="Product Thumbnail 3">
                    </div>
                    <div class="small-img">
                        <img src="./assets/images/product-detail/small-4.svg" onclick="showImg(this.src)" alt="Product Thumbnail 4">
                    </div>
                </div>
         </div>

        
     <div class="col-md-4 mx-5">
     <div class="right">
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="title-heading">Apple AirPods with Wired Charging Case</div>
            <div class="price card-paragraph-font-size">By <span class="blue-color">Apple</span></div>

            <div class="price paragraph-grey">List Price: $40</div>
            <div class="size prize">
                <p class="card-title-font-size">Prize: <span class="sub-heading fw-bolder">$75</span> </p>
            </div>
            <div>
            <ul class="custom-list">
    <li>Active noise cancellation for immersive sound</li>
    <li>Transparency mode for hearing and connecting  </li>
    <li>Three sizes of soft, tapered silicone tips</li>
    <li> Sweat and water resistant</li>
            </ul>
            </div>
    <div class="quantity">
      <div class="quantity-wrapper ">
      <h3 class="paragraph-grep px-2">Quantity</h3>
        <button class="quantity-btn mx-3" id="minus-btn">-</button>
        <div class="quantity-display" id="quantity">1</div>
        <button class="quantity-btn mx-3" id="plus-btn">+</button>
      </div>
     </div>
            <div class="btn-box ">
                <a href="checkout.php" class="main-btn buy-now">Buy Now</a> 
               <a href="cart.php" class="main-btn bg-white text-dark border-white cart mx-3">Add to Cart</a> 
            </div>
        </div>
     </div> 
        


    
      </div>
    </div>
  </section>

  <!-- tab description  -->
   <section>
   <div class="container my-5 product-description">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="specification-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="false">Specification</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
      <p class="card-paragraph-font-size">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
      <p class="card-paragraph-font-size">Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
      <p class="card-paragraph-font-size">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
    </div>
    <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
      <p class="card-paragraph-font-size">Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
      <p class="card-paragraph-font-size">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
    </div>
    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
      <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
      <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
    </div>
  </div>
</div>
   </section>
     <!--Related Products  -->
     <section class="price-page inner-page-section">
    <div class="container ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4">
            <h2 class="sub-heading">Related Products</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 product-detail-cards">
  <div class="col">
      <div class="card">
      <img src="./assets/images/product-detail/product-1.svg" class="card-img-top" alt="Product Image">
      <div class="card-body text-center">
          <div class="price card-paragraph-font-size">
            <span>$140</span>
            <span class="card-paragraph-font-size">$130</span>
          </div>
          <h5 class="card-subtitle-font-size">Apple Airpod </h5>
          <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
      <img src="./assets/images/product-detail/product-2.svg" class="card-img-top" alt="Product Image">
      <div class="card-body text-center">
          <div class="price">
            <del>$140</del>
            <span>$130</span>
          </div>
          <h5 class="card-subtitle-font-size">Apple Airpod 2</h5>
          <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
      <img src="./assets/images/product-detail/product-3.svg" class="card-img-top" alt="Product Image">
      <div class="card-body text-center">
          <div class="price">
            <del>$140</del>
            <span>$130</span>
          </div>
          <h5 class="card-subtitle-font-size">Wooden Speaker</h5>
          <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
      <img src="./assets/images/product-detail/product-4.svg" class="card-img-top" alt="Product Image">
      <div class="card-body text-center">
          <div class="price">
            <del>$140</del>
            <span>$130</span>
          </div>
          <h5 class="card-subtitle-font-size">Apple Airpod</h5>
          <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
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
        let bigImg = document.querySelector('.big-img img');
        function showImg(pic){
            bigImg.src = pic;
        }

        document.addEventListener('DOMContentLoaded', function() {
    const minusBtn = document.getElementById('minus-btn');
    const plusBtn = document.getElementById('plus-btn');
    const quantityDisplay = document.getElementById('quantity');
    
    let quantity = 1;
    const maxQuantity = 5;

    minusBtn.addEventListener('click', function() {
      if (quantity > 1) {
        quantity--;
        quantityDisplay.textContent = quantity;
      }
    });

    plusBtn.addEventListener('click', function() {
      if (quantity < maxQuantity) {
        quantity++;
        quantityDisplay.textContent = quantity;
      }
    });
  });
    </script>
</body>
</html>




