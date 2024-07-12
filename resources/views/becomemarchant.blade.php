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
                    <li class="breadcrumb-item active text-white">Become A Marchant</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        
        <!-- Become a marchant start -->
        <div class="container-fluid contact py-5" style="background: var(--bs-primary);">
            <div class="container pt-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <h1 class="display-3 text-white mb-4">Become A Marchant</h1>
                            <p class="text-white fs-5">Did you know that you can make a very successful side hustle selling Mlex Beauty Spa products like quava leafs, skin care products, oils and many other of our products, becoming a marchant you are eligible to come to our spa to get your stalk to get you started, our products are already well marketed. FILL OUT THE FORM BELOW TO SIGN UP WITH US AND WE CONTACT YOU IMMEDIATELY.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form rounded p-5">
                            <form action="{{ route('marchant') }}" method="POST">
                                @csrf
                                <h1 class="display-6 mb-4">FILL OUT THIS FORM</h1>
                                <div class="row gx-4 gy-3">
                                    <div class="col-xl-6">
                                        <input type="text" name="name" class="form-control bg-white border-0 py-3 px-4" placeholder="Your First Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" name="email" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" name="phone" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Phone">
                                    </div>
                                   
                                    <div class="col-xl-6">
                                        <select type="text" name="district" class="form-select py-3 border-white bg-white" aria-label="Default select example">
                                            <option selected>Choose District?</option>
                                            <option value="Maseru">Maseru</option>
                                            <option value="Mohale's Hoek">Mohale's Hoek</option>
                                            <option value="Mafeteng">Mafeteng</option>
                                            <option value="Quthing">Quthing</option>
                                            <option value="Butha-Buthe">Butha-Buthe</option>
                                            <option value="Leribe">Leribe</option>
                                            <option value="Berea">Berea</option>
                                            <option value="Qacha's Nek">Qacha's Nek</option>
                                            <option value="Mokhotlong">Mokhotlong</option>
                                            <option value="Thaba-Tseka">Thaba-Tseka</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <select type="text" name="service" class="form-select py-3 border-white bg-white" aria-label="Default select example">
                                            <option selected>What would you like to sell?</option>
                                            <option value="Quava Leafs">Quava Leafs</option>
                                            <option value="Facial Scrub">Facial Scrub</option>
                                            <option value="Mlex Dergents">Mlex Dergents</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control bg-white border-0 py-3 px-4" rows="4" cols="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-primary-outline-0 w-100 py-3 px-5" type="submit">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Become a marchant End -->

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