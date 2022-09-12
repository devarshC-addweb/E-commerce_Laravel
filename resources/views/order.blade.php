@extends('master')

@section('content')
<div class="container" style="width:40%;">
  <div class="row">
    <div class="col-lg-12">
      <div class="card bg-primar text-white rounded-3 mt-3" style="background:rgba(44,100,49,0.9);">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-">
            <h5 class="mb-0">Address</h5>
            <img src="https://content.woodlandworldwide.com/static/images/default/logo.png"
            class="img-fluid rounded-3" style="width: 15%;" alt="Avatar">
          </div>
          
          <form action="/orderplace" method="POST">
              @csrf
              <div class="form-outline form-white mb-4 mt-4">
                  <textarea name="address" class="form-control font-family" cols="30" rows="3" placeholder="Address"></textarea>
              </div>

              <hr class="my">

              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h5 class="mb-0">Card details</h5>
              </div>

              <div class="row mb-4">
              <div class="col-lg-1">
                  <div class="form-outline form-white">
                      <i class="bi bi-credit-card-2-back-fill mx-2" style="font-size:2rem; color:black;" ></i>
                  </div>
              </div>
              <div class="col-lg-11">
                  <div class="form-outline form-white">
                      <input type="radio"  name="payment_method" value="debit card" class="form-check-input mt-3 mx-3"/>
                      <label class="form-label font-family mt-2 fs-5 mx-" for="typeText">Debit Crad</label>
                  </div>
              </div>

              <div class="col-lg-1">
                  <div class="form-outline form-white">
                      <i class="bi bi-credit-card-2-back mx-2" style="font-size:2rem; color:black;" ></i>
                  </div>
              </div>
              <div class="col-lg-11">
                  <div class="form-outline form-white">
                      <input type="radio"  name="payment_method" value="credit card" class="form-check-input mt-3 mx-3"/>
                      <label class="form-label font-family mt-2 fs-5 mx-" for="typeText">Credit Crad</label>
                  </div>
              </div>

              <div class="col-lg-1">
                  <div class="form-outline form-white">
                      <i class="bi bi-cash-stack mx-2" style="font-size:2rem; color:black;" ></i>
                  </div>
              </div>
              <div class="col-lg-11">
                  <div class="form-outline form-white">
                      <input type="radio"  name="payment_method" value="cash" class="form-check-input mt-3 mx-3"/>
                      <label class="form-label font-family mt-2 fs-5 mx-" for="typeText">Cash </label>
                  </div>
              </div>
              </div>  
              <hr class="my">
              <div style="background:blac;">
                  <div class="d-flex justify-content-between">
                      <p class="mb-2  fs-5">Amount:</p>
                      <p class="mb-2  fs-5">₹ {{$total}}</p>
                  </div>
                  <div class="d-flex justify-content-between">
                      <p class="mb-2  fs-5">Tax:</p>
                      <p class="mb-2  fs-5">₹ 0</p>
                  </div>
                  <div class="d-flex justify-content-between">
                      <p class="mb-2  fs-5">Delivery Charges:</p>
                      <p class="mb-2  fs-5">₹ {{$charges = 20}}</p>
                  </div>                   
                  <div class="d-flex justify-content-between mb-4">
                      <p class="mb-3 fs-5">Total Amount:</p>
                      <p class="mb-2  fs-5">₹ {{$total + $charges}}</p>
                  </div>    
                  <div class="d-flex justify-content-between">
                      <p class=""></p>
                      <button class="btn font-family fs-5">Checkout</button>
                  </div>
              </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
<br>
@endsection