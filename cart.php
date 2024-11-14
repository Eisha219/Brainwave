<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php include_once 'head.php'; ?>
<style>

 .table th {
    border: none;
    padding: 15px;
    vertical-align: middle;
}
.table td {
    border: none;
    padding: 25px;
    vertical-align:middle;
}
.table th {
    background: none;
    color: #161C2D;
    font-weight: 700;
}
.table .table_row {
    background: #fff;
    border-radius: 20px;
    border-bottom: 1px solid #fff;
    padding: 60px 10px;
    box-shadow: 0 10px 10px -5px rgba(0, 0, 0, 0.1);
    border-bottom: 1px solid #e2e7e3;
    margin-top: 20px!important;

}
.table_row .quantity .quantity-display {
    width: 50px !important;
    text-align: center;
    border: 1px solid #e2e7e3;
    height: 30px;
    line-height: 25px;
    align-items: center;
    font-size: 12px;
}
.table_row .quantity .quantity-wrapper {
    margin-left: -20px;
    margin-top: 0px;
}
.cancel-btn {
    font-size: 21px;
    color: #81838C;
    border: none;
    background: transparent;
}
.table-row-wrapper {
    margin-bottom: 20px; 
}
.countinue-shopping .main-btn{
    color: #161C2D;
    background-color: #fff;
    border: none;
    transition: 0.5s ease-out;

}
.countinue-shopping .main-btn:hover{
    color: #fff;
    background-color:#161C2D;

}
</style>
</head>
<body class="contact">
<?php include_once 'navbar.php'; ?>
<section class="price-page inner-page-section">
    <div class="container ">
      <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-8 margin-topp">
          <div class="text-center mb-4">
            <h2 class="main-heading">Your cart</h2>
            <p class="paragraph-grey my-4">2 Items on your cart</p>
          </div>
        </div>
      </div>
    </div>

    <section class="checkout py-5">
        <div class="container">
            <div class="row">
            <div class="container mt-5">
        <table class="table product_table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="mb-4">
                <div class="table-row-wrapper">
                    <tr class="table_row paragraph-grey my-4">
                        <td>
                            <img src="./assets/images/product-detail/product-img.svg" alt="Product Image" style="width: 50px; height: 50px;">
                            <span class="paragraph-grey fw-bolder ms-2">Apple Airpod</span>
                        </td>
                        <td>$60</td>
                        <td>
                            <div class="quantity">
                                <div class="quantity-wrapper">
                                    <button class="quantity-btn mx-3" id="minus-btn">-</button>
                                    <div class="quantity-display" id="quantity">1</div>
                                    <button class="quantity-btn mx-3" id="plus-btn">+</button>
                                </div>
                            </div>
                        </td>
                        <td>$60</td>
                        <td>
                            <button class="cancel-btn"> <i class="fas fa-times cancel-icon"></i></button>
                        </td>
                    </tr>
                </div>
                <div class="table-row-wrapper">
                    <tr class="table_row paragraph-grey my-4 ">
                        <td>
                            <img src="./assets/images/product-detail/product-3.svg" alt="Product Image" style="width: 50px; height: 50px;">
                            <span class="paragraph-grey fw-bolder ms-2">Wooden Speaker</span>
                        </td>
                        <td>$80</td>
                        <td>
                            <div class="quantity">
                                <div class="quantity-wrapper">
                                    <button class="quantity-btn mx-3" id="minus-btn">-</button>
                                    <div class="quantity-display" id="quantity">1</div>
                                    <button class="quantity-btn mx-3" id="plus-btn">+</button>
                                </div>
                            </div>
                        </td>
                        <td>$80</td>
                        <td>
                            <button class="cancel-btn"> <i class="fas fa-times cancel-icon"></i></button>
                        </td>
                    </tr>
                </div>
            </tbody>
        </table>
      </div>

            </div>
          
<div class="row justify-content-between">
    <div class="col-lg-4">
        <div class="countinue-shopping">
<a href="index.php" class="main-btn">Continue Shopping</a>
        </div>
    </div>
    <div class="col-lg-4 ">
        <div class="checkout-card p-3 border rounded">
            <h3>Order Details</h3>
            <ul class="list-unstyled">
                <li>
                    <div class="d-flex justify-content-between">
                        <span id="total_items">2 items</span>
                        <span class="mx-2">$140</span>
                    </div>
                </li>
                <li class="my-2">
                    <div class="d-flex justify-content-between">
                        <span>Delivery Fee:</span>
                        <span class="float-right green-color">FREE</span>
                    </div>
                </li>
                <li class="my-2">
                    <div class="d-flex justify-content-between">
                        <h3 class="paragraph-grey">Total Price:</h3>
                        <span class="float-right mt-2">$140</span>
                    </div>
                </li>
            </ul>
            <div class="row w-100 proceed-cart">
                <div class="col-12 justify-content-center">
                    <button type="submit" class="main-btn">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
    </section>
</section>

<?php include_once 'footer.php'; ?>

<script>
    
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
