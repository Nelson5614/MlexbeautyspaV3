<!DOCTYPE html>
<html lang="en">
@include('Layouts.header')

    <body>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">Our testimonial</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">testimonial</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        
        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5" style="background: var(--bs-secondary);">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-primary">Testimonial</p>
                    <h1 class="display-4 mb-4 text-white">What Our Clients Say!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-item rounded p-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="d-flex flex-column mx-auto">
                                        <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <div class="text-center">
                                            <h4 class="mb-2 text-primary">{{$testimonial->name}}</h4>
                                            <p class="m-0 text-white">Client</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="position-absolute" style="top: 20px; right: 25px;">
                                        <i class="fa fa-quote-right fa-2x text-secondary"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="d-flex mb-4">
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="fs-5 mb-0 text-white">{{$testimonial->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


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