<!DOCTYPE html>
<html lang="en">

@include('Layouts.header')

    <body>



        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">Our Products</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Our Products</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        
        <!-- Pricing Start -->
        <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">Our Natural</span>Working Products</h1>
                <p class="mb-5">Here are some of the proucts you can get from mlex beauty spa</p>
            </div>
            <div class="row g-4">
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{asset('storage/'.$product->image)}}" alt="">
                            <div class="mb-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(99)</small>
                            </div>
                            <a href="{{route('product_details', $product->slug)}}" class="h6 d-inline-block mb-2">{{$product->name}}</a>
                            <h5 class="text-primary mb-3">LSL{{$product->price}}.00</h5>
                            <a href="{{route('product_details', $product->slug)}}" class="btn btn-outline-primary px-3">View Product</a>
                        </div>
                    </div>
                @endforeach
               
                
            </div>
        </div>
    </div>
        <!-- Pricing End -->



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