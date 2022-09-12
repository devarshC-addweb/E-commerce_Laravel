@extends('master')

@section('content')

<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">My Orders</h3>
          <div>
            {{-- <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                  class="fas fa-angle-down mt-1"></i></a></p> --}}
          </div>
        </div>
        
        @foreach ($myorders as $data)
          <div class="card rounded-3 mb-4">
            <div class="card-body p-">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-3">
                  <img src="{{$data->gallery}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                  <p class="lead fw-normal mb-2"><span class="text-muted">Product Name: </span>{{$data->name}}</p>
                  <p><span class="text-muted">Product Description: </span>{{$data->description}}</p>
                  <p><span class="text-muted">Status: </span>{{$data->status}}</p>
                  <p><span class="text-muted">Payment Method: </span>{{$data->payment_method}}</p>
                  <p><span class="text-muted">Payment Status: </span>{{$data->payment_status}}</p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                  <h5 class="mb-0 fs-4 s-color">₹ {{$data->price}}.00</h5>
                </div>
              </div>
            </div>
          </div>
        @endforeach          

      </div>
    </div>
  </div>
</section>

@endsection