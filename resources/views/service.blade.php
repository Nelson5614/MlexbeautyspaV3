<!DOCTYPE html>
<html lang="en">
@include('Layouts.header')

    <body>



        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">Our Services</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Service Page</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        
        <!-- Services Start -->
        <div class="container-fluid services py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-center text-primary">Our Service</p>
                    <h1 class="display-3">Spa & Beauty Services</h1>
                </div>
                <div class="row g-4">
                    @foreach($services as $service)
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>{{$service->name}}</h3>
                                        <p>{!!$service->description!!}</p>
                                        <a href="{{url('appointments')}}" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Book Now</a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img class="img-fluid mb-4" src="{{asset('storage/'.$service->image)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
                </div>
            </div>
        </div>
        <!-- Services End -->



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