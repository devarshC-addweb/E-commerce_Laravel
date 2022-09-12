<?php 
  use App\Http\Controllers\ProductController;
  if(Session::has('user'))
  {
    $total = ProductController::cartItem();
  }
  else
  {
    $total=0;
  }
?>

<nav class="navbar navbar-expand-lg bg-ligh" style="background:rgba(44,100,49,0.9); height:80p;">
  <div class="container-fluid">
    <a class="navbar-brand mx-2" href="/"><img src="https://content.woodlandworldwide.com/static/images/default/logo.png" alt="" style="width:100px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-5" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link fs-5" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="/myorders">My Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="/aboutus">About us</a>
        </li>
      </ul>

      <ul class="navbar-nav flex-row">
        <form class="d-flex nav-link" role="search">
          <input class="form-control me-2 w-100" style="height:40px; margin-top:10px;"  type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-dark" type="submit" style="height:40px; margin-top:10px;">Search</button>
        </form>
        <li class="nav-item ">
          <a href="/cartlist" class="nav-link ">
            <img src="https://cdn.icon-icons.com/icons2/1369/PNG/512/-shopping-cart_90604.png" style="width:40px; margin-top:10px;" alt="" class="rounded-circle border border-dark ">
            <div style="margin-left:-10px;  margin-right:-8px;" class="badge-notification bg-danger badge rounded-pill">{{$total}}</div>
          </a>
        </li>
        <li class="nav-item " >
          <a href="/" class="nav-link" >
            @if(Session::has('user'))
            <li class="nav-item dropdown" >
              <a class="nav-lin fs-5" role="button" data-bs-toggle="dropdown">
                <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" style="width:40px; margin-left:-14px; margin-top:3px; background:white;" alt="..." class="rounded-circle border border-dark">
              </a>
              <ul class="dropdown-menu" style="margin-left:-90px;">
                <li>
                  <span class="nav-link  fs-5" style="color:black;">
                  {{Session::get('user')['name']}}
                  </span>
                </li>
                <li><a class="dropdown-item font-family logouthvr" href="/logout">Log out</a></li>
              </ul>
            </li>
            @else
              <a href="/login" class="nav-lin fs-5">
                <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" style="width:40px; margin-top:3px;" alt="..." class="rounded-circle border border-dark">
              </a>
            @endif
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>