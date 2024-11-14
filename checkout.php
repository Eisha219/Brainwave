<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
    <section class="price-page inner-page-section">
    <div class="container ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4">
            <h2 class="main-heading">Checkout</h2>
            <p class="paragraph-grey my-4">2 Items on your cart</p>
          </div>
        </div>
      </div>
    </div>

    <section class="checkout py-5">
        <div class="container">
            <div class="row">
                <!-- Billing Details -->
                <div class="col-lg-8">
                    <div class="checkout-card">
                        <h3 class="card-title-font-size">Billing Details</h3>
                        <form class="my-5">
                        <div class="form-group">
                        <label for="firstName" class="form-label">First & Last Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter Name" required>
                        </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="form-control" id="country" required>
                                    <option value="">Choose Country</option>
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="city">City/State</label>
                                    <input type="text" class="form-control" id="city" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="zip">Zip/Postal Code</label>
                                    <input type="text" class="form-control" id="zip" required>
                                </div>
                                </div>
                              
                            <div class="form-group my-4">
                                <h3 class="card-title-font-size mb-2">Payment Method</h3>
                            </div>
                            <div class="form-row">
                            <div class="card-input-container">
                                <input type="radio" name="payment-method" id="credit-card" checked>
                                <label for="creditCard" class="creditCard">Credit Card</label>

                              <div class="card-icons ml-3">
                              <img src="./assets/images/product-detail/card-icon1.svg" alt="Card Icon 1" width="30">
                                        <img src="./assets/images/product-detail/card-icon2.svg" alt="Card Icon 1" width="30">
                                        <img src="./assets/images/product-detail/card-icon3.svg" alt="Card Icon 1" width="30">
                                        <img src="./assets/images/product-detail/card-icon4.svg" alt="Card Icon 1" width="30">
                             </div>
                             </div>
                            </div>
          
                            <div class="form-group position-relative">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber" required placeholder="11156 5665 6464 555">
                                <img src="./assets/images/product-detail/card-icon4.svg" alt="Card Icon" class="card-icon " width="30">
                            </div>
                            <div class="form-row">
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="expiryDate">Expiry Date (Month/Year)</label>
                                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="securityCode">Security Code</label>
                                    <input type="text" class="form-control" id="securityCode" required placeholder="PIN">
                                    <!-- <img src="./assets/images/product-detail/security.png" alt="Pin Icon" class="card-icon"  width="30"> -->
                                </div>
                                </div>
                            
                            </div>
                            <div class="form-row">
                            <div class="card-input-container">
                                <input type="radio" name="payment-method" id="credit-card" >
                                <label for="creditCard" class="creditCard">PayPal</label>

                              <div class="card-icons ml-3">
                              <img src="./assets/images/product-detail/paypal.svg" alt="Card Icon 1" width="30">
            
                             </div>
                             </div>
                            </div>
                            <div>
                            <p class="text-start">By clicking the button you agree to the <a href="conditions.php" class="blue-color">Terms and Conditions</a>.</p>

                            </div>
                            <div class="form-group">
                            <div class="row w-100">   
                             <div class="col-12 justify-content-center">
                                <button type="submit" class="main-btn ">Proceed to Checkout</button>
                            </div>
                            </div>
                            </div>
                          
                          
                        </form>
                    </div>
                </div>
                <!-- Order Details -->
            </div>
            <div class="col-lg-4">
            <div class="checkout-card p-3 border rounded">
                <h3>Order Details</h3>
              
                <ul class="list-unstyled ">
                    <li>
                        <div class="d-flex justify-content-between">
                        <h3 class="paragraph-grey">Total items: </h3>
                        <span >2 items</span>
                        </div>
                       
                    <div class="order-item">
                    <img src="./assets/images/product-detail/product-img.svg" alt="Product Image">
                    <div class="item-details">
                        <strong class="card-paragraph-font-size">Apple Airpod</strong>
                    </div>
                    <span class="mx-2">$40</span>
                    <i class="fas fa-times cancel-icon"></i>
                 </div>
                 <div class="order-item">
                    <img src="./assets/images/product-detail/product-3.svg" alt="Product Image">
                    <div class="item-details">
                        <strong class="card-paragraph-font-size">Wooden Speaker</strong>
                    </div>
                    <span class="mx-2">$40</span>
                    <i class="fas fa-times cancel-icon"></i>
                 </div>
                </li>
                 <li>
                    <div class="d-flex justify-content-between">
                    <h3 class="paragraph-grey"> Delivery Fee: </h3>
                    <span class="float-right">$5</span>
                    </div>
               
                </li>
                 <li>
                 <div class="d-flex justify-content-between">
                    <h3 class="paragraph-grey"> Total Price: </h3>
                    <span class="float-right">$80</span>
                  </li>
                </ul>
                <div class="row w-100">   
                 <div class="col-12 justify-content-center">
              <button type="submit" class="main-btn ">Proceed to Checkout</button>
              </div>
             </div>
            </div>
        </div>

        </div>
    </section>

  </section>
 

 
<!------------- footer section start---------- -->
<?php
 include_once 'footer.php'
?>





