<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      #nav{
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.81);
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.81);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.81);
      }
    </style>
    <title>Document</title>
</head>
<body>
<header class="p-3 text-bg-dark" id="nav">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class=" d-flex align-items-center" style="width: 8rem; height:auto;">
          <img src="{{asset('assets/DTeam_logo.png')}}" alt="" style="width:100% ;object-fit: contain;">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <!-- <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li> -->
          <li><a href="#" class="nav-link px-2 text-white">STORE</a></li>
          <li><a href="#" class="nav-link px-2 text-white">SIGN IN</a></li>
          <li><a href="#" class="nav-link px-2 text-white">REGISTER</a></li>
          <!-- <li><a href="#" class="nav-link px-2 text-white">About</a></li> -->
        </ul>

        <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div> -->
      </div>
    </div>
  </header>
  @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>