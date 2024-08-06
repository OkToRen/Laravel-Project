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
      a{
        font-weight: bold;
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
          <li><a href="{{route('amp')}}" class="nav-link px-2 text-white">MANAGE PUBLISHER</a></li>
          <li><a href="{{route('amwc')}}" class="nav-link px-2 text-white">MANAGE WALLET CODE</a></li>
          <li><a href="{{route('amg')}}" class="nav-link px-2 text-white">MANAGE GENRE</a></li>
          <li><a href="/logout" class="nav-link px-2 text-white">LOGOUT</a></li>
        </ul>
      </div>
    </div>
  </header>
  @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
