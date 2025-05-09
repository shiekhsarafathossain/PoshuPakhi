<?php
include("../Includes/connect.php");
include("../functions/common_function.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    
    <!-- Bootstrap CSS Link Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap CSS Link End -->

    <!-- Font Awesome Link Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome Link End -->

    <!-- Style.css Link Start -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Style.css Link End -->
</head>
<body>

<div class="col-md-9 m-auto my-4">
  <div class="row">
    
    <!-- Left: Payment Method -->
    <div class="col-md-7">
      <h4>Payment Method <small class="text-muted">(Please select a payment method)</small></h4>
      
      <!-- Cash on Delivery -->
      <div class="form-check my-3">
        <input class="form-check-input" type="radio" name="paymentMethod" id="cod">
        <label class="form-check-label" for="cod">
          <img src="../assets/images/cod.png" alt="Cash on Delivery" style="height: 24px;"> <b>Cash on Delivery</b>
        </label>
      </div>

      <!-- Mobile Wallet -->
      <h6 class="mt-4">Mobile Wallet</h6>
      <div class="d-flex flex-wrap gap-3">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paymentMethod" id="bkash">
          <label class="form-check-label" for="bkash">
            <img src="../assets/images/bkash.png" alt="bKash" style="height: 30px;">
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paymentMethod" id="nagad">
          <label class="form-check-label" for="nagad">
            <img src="../assets/images/nagad.png" alt="Nagad" style="height: 30px;">
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paymentMethod" id="rocket">
          <label class="form-check-label" for="rocket">
            <img src="../assets/images/rocket.png" alt="Rocket" style="height: 30px;">
          </label>
        </div>
      </div>

      <!-- Card Payment -->
      <h6 class="mt-4">Debit / Credit Card</h6>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMethod" id="card">
        <label class="form-check-label" for="card">
          <img src="../assets/images/atm_card.png" alt="Visa Mastercard Amex" style="height: 30px;">

        </label>
      </div>

      <!-- Terms & Confirm -->
      <div class="form-check mt-4">
        <input class="form-check-input" type="checkbox" id="agree">
        <label class="form-check-label" for="agree">
          I agree to the <a href="#">terms & conditions</a>.
        </label>
      </div>
    </div>

    <!-- Right: Checkout Summary -->
    <div class="col-md-5">
      <div class="border p-3 rounded shadow-sm">
        <h5>Checkout Summary</h5>
        <hr>
        <div class="d-flex justify-content-between">
          <span>Subtotal</span>
          <span>TK. 320</span>
        </div>
        <div class="d-flex justify-content-between">
          <span>Online Fee</span>
          <span>TK. 48</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between fw-bold">
          <span>Total</span>
          <span>TK. 368</span>
        </div>

        <!-- Voucher -->
        <div class="mt-3">
          <label for="voucher" class="form-label">Apply Voucher or Promo Code</label>
          <div class="input-group">
            <input type="text" class="form-control" id="voucher" placeholder="Enter your code here">
            <button class="btn btn-primary">Apply</button>
          </div>
          <div class="text-success mt-1">You are saving 80 TK</div>
        </div>

        <!-- Confirm Button -->
        <button class="btn btn-primary w-100 mt-4">Confirm Order TK. 368</button>
      </div>
    </div>
    
  </div>
</div>


<!-- Center Part End -->
</div>


    
<!-- Bootstrap JS Link Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap JS Link End -->
</body>
</html>