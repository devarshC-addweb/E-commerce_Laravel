<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Project </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
<style>
  .h1,h2,h3,h4,h5,h6,p,.nav-link,.font-family{
      font-family: 'Dosis', sans-serif;
  }
  .btn{
      background-color:black;
      color:#F8F4E1;
  }
  .btn:hover{
      background:rgba(44,100,49,0.9);
      color:#ffffff ;
  }
  a.nav-link{
      color:#ffffff;
      transition:0.5;
  }
  a.nav-link:hover{
      color:#28a745;
  }
  .s-color{
      color: #28a745 !important;
  }
  .position-static{
      position: static;
      top: 0;
  }
  .icon-hvr:hover{
      color: rgba(44,100,49,0.9) !important;
  }
  .form-control:focus {
      border-color: rgba(44,100,49,0.9);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(44,100,49,0.9);
  }
  a.logouthvr:hover{
      background: #ffcccc;
  }
  @media screen (max-width: 991px) {
      .media-pro {
          margin-left:10px;
          /* margin-top:10px: */
      }
  }
</style>
</head>     
  <body style="background:#ffffff;">
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
  </body>
</html>