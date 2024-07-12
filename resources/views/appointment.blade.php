<!DOCTYPE html>
<html lang="en">
@include('Layouts.header')

    <body>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">Appointment</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Appointment</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        
        <!-- Appointment Start -->
        <div class="container-fluid appointment py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="appointment-form p-5">
                            <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                            <h1 class="display-4 mb-4 text-white">Get Appointment</h1>
                            <form action="{{ route('appointments') }}" method="POST">
                                @csrf
                                <div class="row gy-3 gx-4">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" class="form-control py-3 border-white bg-transparent text-white" placeholder="First Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" name="email" class="form-control py-3 border-white bg-transparent text-white" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="phone" class="form-control py-3 border-white bg-transparent text-white" placeholder="phone number">
                                    </div>
                                  
                                    <div class="col-lg-6">
                                        <input type="date" name="date" class="form-control py-3 border-white bg-transparent">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="time" name="time" class="form-control py-3 border-white bg-transparent">
                                    </div>
                                    <div class="col-lg-6">
                                        <select name="guests" class="form-select py-3 border-white bg-transparent" aria-label="Default select example">
                                            <option selected>Number Of Guests</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="3">4</option>
                                            <option value="3">5</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="form-control border-white bg-transparent text-white" name="message" type=" text" id="area-text" cols="30" rows="5" placeholder="What Service would you like to book for?"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-primary-outline-0 w-100 py-3 px-5">SUBMIT NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="appointment-time p-5">
                            <h1 class="display-5 mb-4">Opening Hours</h1>
                            <div class="d-flex justify-content-between fs-5 text-white">
                                <p>Saturday:</p>
                                <p>08:00 am – 3:00 pm</p>
                            </div>
                            <div class="d-flex justify-content-between fs-5 text-white">
                                <p>Sunday:</p>
                                <p>08:00 am – 3:00 pm</p>
                            </div>
                            <div class="d-flex justify-content-between fs-5 text-white">
                                <p>Monday:</p>
                                <p>08:00 am – 7:00 pm</p>
                            </div>
                            <div class="d-flex justify-content-between fs-5 text-white">
                                <p>Tuesday:</p>
                                <p>08:00 am – 7:00 pm</p>
                            </div>
                            <div class="d-flex justify-content-between fs-5 text-white">
                                <p>Wednes:</p>
                                <p>08:00 am – 7:00 pm</p>
                            </div>
                            <div class="d-flex justify-content-between fs-5 text-white mb-4">
                                <p>Thursday:</p>
                                <p>08:00 am – 7:00 pm</p>
                            </div>
                            <div class="d-flex justify-content-between fs-5 text-white mb-4">
                                <p>Friday:</p>
                                <p>08:00 am – 7:00 pm</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Start -->
            <!-- <div class="container-fluid counter-section">
                <div class="container py-5">
                    <div class="row g-5 justify-content-center">
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="counter-item p-5">
                                <div class="counter-content bg-white p-4">
                                    <i class="fas fa-globe fa-5x text-primary mb-3"></i>
                                    <h5 class="text-primary">Worldwide Clients</h5>
                                    <div class="svg-img">
                                        <svg width="100" height="50">
                                            <polygon points="55, 10 85, 55 25, 55 25," style="fill: #DCCAF2;"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="counter-quantity">
                                    <span class="text-white fs-2 fw-bold" data-toggle="counter-up">379</span>
                                    <span class="h1 fw-bold text-white">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="counter-item p-5">
                                <div class="counter-content bg-white p-4">
                                    <i class="fas fa-spa fa-5x text-primary mb-3"></i>
                                    <h5 class="text-primary">Wellness & Spa</h5>
                                    <div class="svg-img">
                                        <svg width="100" height="50">
                                            <polygon points="55, 10 85, 55 25, 55 25," style="fill: #DCCAF2;"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="counter-quantity">
                                    <span class="text-white fs-2 fw-bold" data-toggle="counter-up">829</span>
                                    <span class="h1 fw-bold text-white">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="counter-item p-5">
                                <div class="counter-content bg-white p-4">
                                    <i class="fas fa-users fa-5x text-primary mb-3"></i>
                                    <h5 class="text-primary">Happy Customers</h5>
                                    <div class="svg-img">
                                        <svg width="100" height="50">
                                            <polygon points="55, 10 85, 55 25, 55 25," style="fill: #DCCAF2;"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="counter-quantity">
                                    <span class="text-white fs-2 fw-bold" data-toggle="counter-up">713</span>
                                    <span class="h1 fw-bold text-white">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Counter End -->
        </div>
        <!-- Appointment End -->
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