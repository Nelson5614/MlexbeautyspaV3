
<head>
        <meta charset="utf-8">
        <title>Mlex Beauty Spa</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


      
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

      
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>

    


        <!-- Navbar start -->
        <div class="container-fluid sticky-top px-0">
            <div class="container-fluid topbar d-none d-lg-block">
                <div class="container px-0">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="d-flex flex-wrap">
                                <a href="#" class="me-4 text-light"><i class="fas fa-map-marker-alt text-primary me-2"></i>Old Europa Maseru</a>
                                <a href="#" class="me-4 text-light"><i class="fas fa-phone-alt text-primary me-2"></i>(+266) 56 230 279 / 63 209 170</a>
                                <a href="#" class="text-light"><i class="fas fa-envelope text-primary me-2"></i>info@mlexbeautyspa.co.ls</a>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn-square border rounded-circle nav-fill"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-light">
                <div class="container px-0">
                    <nav class="navbar navbar-light navbar-expand-xl">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="img/logo.png" style="width: 90px;" alt="">
                            
                        </a>
                    </div>
                        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                            <div class="navbar-nav mx-auto border-top">
                                <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                                <a href="{{url('about')}}" class="nav-item nav-link active">About</a>
                                <a href="{{url('services')}}" class="nav-item nav-link">Services</a>
                                <a href="{{url('shop')}}" class="nav-item nav-link">shop</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                     
                                        <a href="{{url('testimonials')}}" class="dropdown-item">Testimonial</a>
                                        <a href="{{url('gallery')}}" class="dropdown-item">Blog Posts</a>
                                        <a href="{{url('appointments')}}" class="dropdown-item">Appointment</a>
                                      
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Marchant</a>
                                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                     
                                        <a href="{{url('becomeamarchant')}}" class="dropdown-item">Become a Marchant</a>
                                        <a href="{{url('existingmarchant')}}" class="dropdown-item">Existing Marchants</a>
                                        
                                      
                                    </div>
                                </div>
                                <a href="{{url('contact')}}" class="nav-item nav-link">Contact Us</a>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                                
                                <a href="{{url('appointments')}}" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">Book Appointment</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->
</body>