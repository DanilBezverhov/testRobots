<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Balita &mdash; Minimal Blog Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    
    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
  <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-9 social">
              <a href="#"><span class="fa fa-twitter"></span></a>
              <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-instagram"></span></a>
              <a href="#"><span class="fa fa-youtube-play"></span></a>
              <a href="#"><span class="fa fa-vimeo"></span></a>
              <a href="#"><span class="fa fa-snapchat"></span></a>
            </div>
            <div class="col-3 search-top">
              <!-- <a href="#"><span class="fa fa-search"></span></a> -->
              <form action="#" class="search-top-form">
                <span class="icon fa fa-search"></span>
                <input type="text" id="s" placeholder="Type keyword to search...">
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo"><a href="{{ url('/') }}">Balita</a></h1>
          </div>
        </div>
      </div>
      
      <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">
          
         
          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('/') }}">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                        @foreach($categories as $category)
                            <a class="dropdown-item" href="{{ url('/posts/' . $category->slug) }}">{{ $category->name }}</a>
                        @endforeach
                </div>
                

              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->


    <div class="container">
            
            <h2>Название</h2>
            <p>{{ $articles->title }}</p>
            <h2>Описание</h2>
            <img src="{{ $articles->image_path }}">
            <p>{{ $articles->description }}</p>

    </div>
        

                <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
                <script src="{{ asset('js/jquery-migrate-3.0.0.js')}}"></script>
                <script src="{{ asset('js/popper.min.js')}}"></script>
                <script src="{{ asset('js/bootstrap.min.js')}}"></script>
                <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
                <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
                <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>

                
                <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
