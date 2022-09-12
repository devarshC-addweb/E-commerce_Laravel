@extends('master')

@section('content')

<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart Items</h3>
            <div>
              {{-- <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                    class="fas fa-angle-down mt-1"></i></a></p> --}}
            </div>
          </div>
          
          @foreach ($products as $data)
              <div class="card rounded-3 mb-4">
                <div class="card-body p-">
                  <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-3">
                      <img src="{{$data->gallery}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <p class="lead fw-normal mb-2"><span class="text-muted">Product Name: </span>{{$data->name}}</p>
                      <p><span class="text-muted">Product Description: </span>{{$data->description}}</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h5 class="mb-0 s-color">₹ {{$data->price}}.00</h5>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="/remove_cart/{{$data->cart_id}}" class="text-danger"><i class="bi bi-trash-fill" style="font-size: 1.5rem; color: red;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
          @endforeach          
    
          <div class="card mb-4">
            <div class="card-body p-4 d-flex flex-row">
              <div class="form-outline flex-fill">
                <input type="text" id="form1" class="form-control"  />
                <label class="form-label font-family fs-5" for="form1">Discound code</label>
              </div>
              <button type="button" class="btn btn-dark font-family mx-1" style="height:39px;">Apply</button>
            </div>
          </div>
  
          <div class="card">
            <div class="card-body">
              <a href="/order" class="btn font-family fs-5" style="background:rgba(44,100,49,0.9);">Order Now</a>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>

@endsection