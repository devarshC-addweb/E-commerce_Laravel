@extends('master')
@section('content')

<div class="container" style="width:40%;">
  <div class="row">
    <div class="col-sm-12 justify-content-md-center p-5">
      <form action="/userRegistration" method="POST">
        @csrf
        <div class="mb-3 mt-5">
          <label for="exampleInputEmail1" class="form-label font-family fs-5">Name</label>
          <input type="text" name="name" class="form-control font-family fs-5" id="exampleInputEmail1">
        </div>
        <div class="mb-3 mt-3">
          <label for="exampleInputEmail1" class="form-label font-family fs-5">Email address</label>
          <input type="email" name="email" class="form-control font-family fs-5" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text font-family fs-5">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label font-family fs-5">Password</label>
          <input type="password" name="password" class="form-control font-family fs-5" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label class="form-label font-family fs-5">Have an account already? <a href="/login" class="s-color text-decoration-none">Login</a></label>
        </div>
        <button type="submit" class="btn font-family fs-5">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection