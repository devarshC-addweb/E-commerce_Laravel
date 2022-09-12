@extends('master')

@section('content')
<div class="container">
  <div class="row mt-">
    <div class="col-lg-6 col-sm-12 col-xl-12 mt-2">
      <div class="text-center">
          <img src={{$product->gallery}} class="w-100" alt="...">
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-xl-6 mt-1 mb-3 text-center" style="background:re;">
      <label class="p-1 mt-2 s-color font-weight-bold"><h2><b>{{$product->name}}</b></h2></label><br>
      <label class="p-1 mt-2 font-weight-bold"><h5>Category: {{$product->category}}</h5></label><br>
      <label class="p-1 mt-2"><h5>Price: ₹ {{$product->price}}.00</h5></label><br>  
      <label class="p-1 mt-2"><h5>Description: {{$product->description}}</h5></label><br>    
    </div>
    <div class="col-lg-6 col-sm-12 col-xl-6 mt-1 mb-3 text-center" style="background:re;">
      <form action="/add_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}" >
        <button class="btn w-50 mt-5 font-family fs-5">Add To Cart</button>
      </form>
      <button class="btn w-50 mt-4 font-family fs-5" style="background:rgba(44,100,49,0.9);">Buy Now</button>
    </div>
  </div>
</div>
@endsection