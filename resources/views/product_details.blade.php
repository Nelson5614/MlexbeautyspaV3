
<!DOCTYPE html>
<html lang="en">
@include('Layouts.header')

<body>


     <!-- Header Start -->
     <div class="container-fluid bg-breadcrumb py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">{{ $product->name }}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Our Products</li>
                    <li class="breadcrumb-item active text-white">{{ $product->name }}</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
  
    
    <!-- Shop Details -->

    <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="video">
                        <img class="img-fluid mb-4" src="{{asset('storage/'.$product->image)}}" alt="">
                            <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">
                                <img src="img/about-2.jpg" class="img-fluid rounded" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <p class="fs-4 text-uppercase text-primary">{{ $product->name }}</p>
                            <h1 class="display-4 mb-4">LSL{{ $product->price }}.00</h1>
                            <p class="mb-4">{!! $product->description !!}
                            </p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="">
                                        
                                        <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="{{url('/contact')}}">Contact Us To Buy</a>
                                    </div>
                                </div>
                               
                            </div>
                         
                    </div> 
                </div>
            </div>
        </div>


    <!-- Footer -->
    @include('layouts.footer')
    <!-- End Footer -->

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- ======= jQuery Library ======= -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- ======= Bootstrap Js ======= -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- ======= Bootstrap Js ======= -->
    <script src="assets/js/menu.min.js"></script>

    <!-- ======= Owlcarousel Js ======= -->
    <script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- ======= Magnific Popup Js ======= -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- ======= Ratina Js ======= -->
    <script src="assets/plugins/retinajs/retina.min.js"></script>

    <!-- ======= Waypoints Js ======= -->
    <script src="assets/plugins/counterup/waypoints.min.js"></script>

    <!-- ======= Counter Up Js ======= -->
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- ======= Countdown Timer Js ======= -->
    <script src="assets/plugins/countdown-timer/countdown.min.js"></script>

    <!-- ======= Isotope Js ======= -->
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- ======= Packery Js ======= -->
   <script src="assets/plugins/isotope/packery-mode.pkgd.min.js"></script>

   <!-- ======= Elevate Zoom Js ======= -->
   <script src="assets/plugins/elevatezoom/jquery.elevateZoom-3.0.8.min.js"></script>

   <!-- ======= Google API ======= -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>

    <!-- ======= Main JS ======= -->
    <script src="assets/js/main.js"></script>

    <!-- ======= Custom JS ======= -->
    <script src="assets/js/custom.js"></script>
</body>

</html>