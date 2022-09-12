@extends('master')

@section('content')
<div class="">
  <div id="carouselExampleIndicators" class="carousel slide w-100" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      @foreach ($products as $data)
        <div class="carousel-item {{$data->id==2?'active':''}}">
          <img src="{{$data->gallery}}" class="w-100 h-50 mt-1" alt="...">
          <div class="carousel-caption" style="background:rgba(63, 120, 65, 0.9);opacity:0.8;">
              <h3 class="w-100" >{{$data->name}}</h3><br>
              <h4 >{{$data->description}}</h4>
            </div>
        </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div class="container-fluid w-100">
  <div class="row" style="background: re;">
    @foreach ($products as $data)
      <div class="col-lg-6 col-sm-12 col-xl-12 w-100">
        <div class="text-center">
            <a href="/details/{{$data->id}}"><img src="{{$data->gallery}}" class="w-100 mt-1" alt="..."></a>                    
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-xl-6 p-">
        <div class="text-center">
            <a href="/details/{{$data->id}}"><img src="{{$data->gallery}}" class="w-100 mt-1" alt="..."></a>                    
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-xl-6">
        <div class="text-center">
          <a href="/details/{{$data->id}}"><img src="{{$data->gallery}}" class="w-100 mt-1" alt="..."></a>                    
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection