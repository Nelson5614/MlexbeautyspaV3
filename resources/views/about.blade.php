<!DOCTYPE html>
<html lang="en">
@include('Layouts.header')

    </body>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About Us</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        
        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="video">
                            <img src="img/founder.jpg" class="img-fluid rounded" alt="">
                            <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">
                                <img src="img/about-2.jpg" class="img-fluid rounded" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <p class="fs-4 text-uppercase text-primary">About Us</p>
                            <h1 class="display-4 mb-4">Best Spa In Lesotho</h1>
                            <p class="mb-4">Mlex Beauty Spa e se e na le lilemo tse fetang boraro e ntse e thusa basotho ka lits'ebeletsoe tse tsoileng matsoho tsa bophelo bo botle. E ka ba ho ntlafatsa tsela eo u shebahalang ka eona ele ho nyolla boits'epo ba hau, kapa u batla ho khatholoha ka limassage tsa rona, re tla u fa lits'ebeletso tse ntle haholo
                            </p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-gitkraken fa-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Special Offers</h5>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-gift fa-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Special Offers</h5>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                    </div> 
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


@include('layouts.footer')



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