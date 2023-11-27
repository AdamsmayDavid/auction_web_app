<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Styles -->

        <!-- carousel -->
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
        <script src="assets/js/main.js"></script>
        
        <style>
         
           
        </style>
    </head>
    <body class="antialiased "> 
                      
                <!-- nav -->
                <nav id="NavBar" class="navbar fixed-top navbar-expand-lg navbar-dark bg-black p-3 shadow-lg">
      <div class="container">
        <a class="navbar-brand" href="#">Auction Inc</a>
        <button id="TogglerIcon" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Company
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Blog</a></li>
                <li><a class="dropdown-item" href="#">About Us</a></li>
                <li><a class="dropdown-item" href="#">Contact us</a></li>
              </ul>
            </li>
          </ul>
                    
                        <div style="margin-top:15px;"  id="btn-G" class="btn-reg">
                            @if (Route::has('login'))
                                <div class="auth_log">
                                    @auth
                                        <a  href="{{ url('/dashboard') }}" class="">Dashboard</a>
                                    @else
                                        <p><a  style="" href="{{ route('login') }}" type="button" class="btn  btn-md ">Login</a>
                                            
                                    @if (Route::has('register'))
                                                
                                        <a  style="" href="{{ route('register') }}" type="button" class="btn  btn-md">Sign-up</a></p>
                                    @endif
                                    @endauth
                                        </div> 
                                    @endif
                            </div>        
                </div>
            </div>
        </nav>
                   
         <!-- nav-end -->
      

            <!-- Carousel -->
            <div style="margin-top:5rem;" id="carouselExampleCaptions" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/images/cover1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/images/cover2.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/images/pic.1.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
                    
            <!-- Carousel end -->


            <!-- columns -->
                <div style="margin-top:100px; color:white;" class="vision container text-center ">
                  <div class="row align-items-start">
                      <div class="col ">
                    <h4>WE LOVE OUR CUSTOMERS</h4>
                      <p>We are known to provide best possible service ever</p>
                      </div>
                      <div class="col">
                      <h4>WE LOVE OUR CUSTOMERS</h4>
                      <p>We are known to provide best possible service ever</p>
                      </div>
                      <div class="col">
                      <h4>WE LOVE OUR CUSTOMERS</h4>
                      <p>We are known to provide best possible service ever</p>
                      </div>
                  </div>
                </div>
            
            <!-- columns end-->
                <!-- about -->
             <div style="color:white; text-align:center; margin-top:40px; height:100px;" class="card CONTAINER bg-black  ">
                  <div class="card-body">
                    <h1 style="margin-top: 30px;">HOW TO USE AUCTION</h1>
                  </div>
                </div>

                <div class="about container text-center text-white">
                  <div class="row align-items-center">
                  
                    <div class="col text-white">
                      <h4 class="text-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </h4>
                    </div>
                   
                  </div>
                </div>  

            <!-- about-end -->

            <!-- Latest Product -->
                <div style="color:white; text-align:center; margin-top:50px; height:100px;" class="card bg-black">
                  <div class="card-body">
                    <h1 style="margin-top:10px;">AVAILABLE VEHICLE AUCTION</h1>
                  </div>
                </div>
            <!-- Latest Product end-->

    
            <!-- card carousel -->

            <div id="rowCol" style="margin:auto !important; margin-top:3rem !important;" class="container row">
              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
              <p>MOTORCYCLE</p><a id="overlay" href="..."> <img
                  src="assets/images/motor.png" 
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt="Boat on Calm Water"
               /></a> 

               <p>VINTAGE CAR</p><a id="overlay" href="..."> <img
                  src="assets/images/vintage.jpg"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt="Wintry Mountain Landscape"
                /> </a>
              </div>
            
              <div class="col-lg-4 mb-4 mb-lg-0">
              <p>VINTAGE CAR</p><a id="overlay" href="...">  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt="Mountains in the Clouds"
                /></a>

                <p>VINTAGE CAR</p><a id="overlay" href="..."> <img
                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt="Boat on Calm Water"
                /></a>
              </div>

              <div class="col-lg-4 mb-4 mb-lg-0">
              <p>VINTAGE CAR</p> <a id="overlay" href="..."> <img
                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt="Waves at Sea"
                /></a>

                <p>VINTAGE CAR</p>  <a id="overlay" href="...">  <img
                  src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt="Yosemite National Park"
                /></a>
              </div>
            </div>
            <!-- card carousel end -->

            <!-- about -->
             <div style="color:white; text-align:center; margin-top:40px; height:100px;" class="card CONTAINER bg-black  ">
                  <div class="card-body">
                    <h1 style="margin-top:30px;">ABOUT</h1>
                  </div>
                </div>

                <div class="about container text-center text-white">
                  <div class="row align-items-center">
                  
                    <div class="col text-white">
                      <h4 class="text-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </h4>
                    </div>
                   
                  </div>
                </div>  

            <!-- about-end -->
            
            <!-- Footer -->
            <section class="">
            <!-- Footer -->
            <footer class="text-center text-white" style="background-color: #0a4275; margin-top:120px;">
              <!-- Grid container -->
              <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                  <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3">Register for free</span>
                   <a href="{{ route('register') }}"> <button type="button" class="btn btn-outline-light btn-rounded">
                      Sign up!
                    </button></a>
                  </p>
                </section>
                <!-- Section: CTA -->
              </div>
              <!-- Grid container -->

              <!-- Copyright -->
              <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              
                <p class="text-white" href="">   © 2024 Copyright</p>
              </div>
              <!-- Copyright -->
            </footer>
            <!-- Footer -->
          </section>

          
            <!-- script file -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>
        
     
    </body>
</html>
