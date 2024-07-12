<!DOCTYPE html>
<html lang="en">

@include('Layouts.header')

    <body>
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">Marchants</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Marchants</a></li>
                    <li class="breadcrumb-item active text-white">Existing Marchants</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        
        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-primary">Spa Marchants</p>
                    <h1 class="display-4 mb-4">Mlex Beauty Spa Marchants</h1>
                </div>
                <div class="row g-4">
                    @foreach($marchants as $marchant)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="team-item">
                            <div class="team-img rounded-top">
                                <img src="img/team-1.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                            </div>
                            <div class="team-text rounded-bottom text-center p-4">
                                <h3 class="text-white">{{$marchant->name}}</h3>
                                <p class="mb-0 text-white">{{$marchant->service}}</p>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <!-- Team End -->
        @include('Layouts.footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>