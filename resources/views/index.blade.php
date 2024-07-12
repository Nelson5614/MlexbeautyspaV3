<!DOCTYPE html>
<html lang="en">
@include('Layouts.header')

    <body>
        <!-- Carousel Start -->
        <div class="container-fluid carousel-header px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/carousel-4.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-primary text-uppercase mb-3">Mlex Spa & Beauty Center</h4>
                                <h1 class="display-1 text-capitalize text-dark mb-3">Massage Treatment</h1>
                                <p class="mx-md-5 fs-4 px-4 mb-5 text-dark">We have a variety of massages that you can choose from and pamper yourself for a very affordable price.</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    
                                    <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="{{url('/appointments')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/FB_IMG_1720619072183.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Spa & Beauty Center</h4>
                                <h1 class="display-1 text-capitalize text-dark mb-3">Facial Treatment</h1>
                                <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Have you lost confidence becuase of how your skin looks? Try mlex facial cream that has been proven to remove pimples and dark spots on your face</p>
                                <div class="sm-d-flex  align-items-center justify-content-center">
                                  
                                    <a class="btn btn-primary btn-primary-outline-0  py-3 px-5" href="{{url('/appointments')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/corousel-5.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Spa & Beauty Center</h4>
                                <h1 class="display-1 text-capitalize text-dark">Become A Mlex Marchant</h1>
                                <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Basotho bongata ba se ba nkile khato ea ho rekisang lihlaisoa tsa mlex tse kang quava leafs, litlolo le tse ling. Eba emong le uena mme u iketsetse chelete </p>
                                <div class="sm-d-flex align-items-center justify-content-center">
                                    <a class="btn btn-light btn-light-outline-0  py-3 px-5 me-4" href="{{url('/becomeamarchant')}}">Be a Marchant</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


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
                                            <img src="img/services-1.jpg" class="img-fluid rounded" alt="">
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

        
        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="video">
                            <img src="img/founder.jpg" class="img-fluid rounded" alt="">
                            <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">
                                <img src="" class="img-fluid rounded" alt="">
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <p class="fs-4 text-uppercase text-primary">About Us</p>
                        <h1 class="display-4 mb-4"> Best Spa In Lesotho</h1>
                        <p class="mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                        <p class="mb-4">Mlex Beauty Spa e se e na le lilemo tse fetang boraro e ntse e thusa basotho ka lits'ebeletsoe tse tsoileng matsoho tsa bophelo bo botle. E ka ba ho ntlafatsa tsela eo u shebahalang ka eona ele ho nyolla boits'epo ba hau, kapa u batla ho khatholoha ka limassage tsa rona, re tla u fa lits'ebeletso tse ntle haholo
                        </p>
                        <!-- <div class="row g-4">
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
                        </div> -->
                       
                    </div> 
                </div>
            </div>
        </div>
   
        <!-- About End -->


        <!-- Appointment Start -->
        <div class="container-fluid appointment py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="appointment-form p-5">
                            <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                            <h1 class="display-4 mb-4 text-white">Get Appointment</h1>
                            <form action="{{ url('appointments') }}" method="POST">
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
                            <p class="text-dark">Check out seasonal discounts for best offers.</p>
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


        <!-- Gallery Start -->
        <!-- <div class="container-fluid gallery py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <p class="fs-4 text-uppercase text-primary">Our Gallery</p>
                    <h1 class="display-4 mb-4">Let's See Our Gallery</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">All Gallery</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">Skin Care</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Stream Bath</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">Stone Therapy</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">Face Massage</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-1.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-1.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-2.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-2.jpg" data-lightbox="Gallery-2" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-3.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-3.jpg" data-lightbox="Gallery-3" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-4.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-4.jpg" data-lightbox="Gallery-4" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-5.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-5.jpg" data-lightbox="Gallery-5" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-6.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-6.jpg" data-lightbox="Gallery-6" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-7.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-7.jpg" data-lightbox="Gallery-7" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-8.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-8.jpg" data-lightbox="Gallery-8" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-9.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-9.jpg" data-lightbox="Gallery-9" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-10.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-10.jpg" data-lightbox="Gallery-10" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-5.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-5.jpg" data-lightbox="Gallery-11" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-1.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Skin Care</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-1.jpg" data-lightbox="Gallery-12" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-11.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-11.jpg" data-lightbox="Gallery-13" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-12.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-12.jpg" data-lightbox="Gallery-14" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-2.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-2.jpg" data-lightbox="Gallery-15" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-6.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stream Bath</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-6.jpg" data-lightbox="Gallery-16" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-13.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-13.jpg" data-lightbox="Gallery-17" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-2.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-2.jpg" data-lightbox="Gallery-18" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-3.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-3.jpg" data-lightbox="Gallery-19" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-7.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Stone Therapy</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-7.jpg" data-lightbox="Gallery-20" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-4.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-4.jpg" data-lightbox="Gallery-21" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-6.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-6.jpg" data-lightbox="Gallery-22" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-8.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-8.jpg" data-lightbox="Gallery-23" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-14.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-14.jpg" data-lightbox="Gallery-24" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-4.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-4.jpg" data-lightbox="Gallery-25" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" src="img/gallery-8.jpg" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Face Massage</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/gallery-8.jpg" data-lightbox="Gallery-26" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- gallery End -->


        <!-- Pricing Start -->
        <!-- <div class="container-fluid pricing py-5">
            <div class="container py-5">
                <div class="owl-carousel pricing-carousel">
                    <div class="pricing-item">
                        <div class="rounded pricing-content">
                            <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted" style="font-size: 22px; line-height: 45px;">$</small>49<small class="text-muted" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">Basic Plan</h5>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-primary me-2"></i>Full Body Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Deep Tissue Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Hot Stone Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Tissue Body Polish</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Foot & Nail Care</p>
                                <a href="" class="btn btn-primary btn-primary-outline-0 rounded-pill my-2 px-4">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-content rounded">
                            <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted" style="font-size: 22px; line-height: 45px;">$</small>99<small class="text-muted" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">Family Plan</h5>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-primary me-2"></i>Full Body Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Deep Tissue Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Hot Stone Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Tissue Body Polish</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Foot & Nail Care</p>
                                <a href="" class="btn btn-primary btn-primary-outline-0 rounded-pill my-2 px-4">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-content rounded">
                            <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted" style="font-size: 22px; line-height: 45px;">$</small>149<small class="text-muted" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">VIP Plan</h5>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-primary me-2"></i>Full Body Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Deep Tissue Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Hot Stone Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Tissue Body Polish</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Foot & Nail Care</p>
                                <a href="" class="btn btn-primary btn-primary-outline-0 rounded-pill my-2 px-4">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-content rounded">
                            <div class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted" style="font-size: 22px; line-height: 45px;">$</small>199<small class="text-muted" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">Most Plan</h5>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-primary me-2"></i>Full Body Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Deep Tissue Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Hot Stone Massage</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Tissue Body Polish</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Foot & Nail Care</p>
                                <a href="" class="btn btn-primary btn-primary-outline-0 rounded-pill my-2 px-4">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Pricing End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
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


        <!-- Contact Start -->
        <div class="container-fluid pb-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-12">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Address</h4>
                                        <p class="mb-0">Old Europa Maseru 100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Mail Us</h4>
                                        <p class="mb-0">info@mlexbeautyspa.co.ls</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Telephone</h4>
                                        <p class="mb-0">(+266) 56 230 279 / 63 209 170</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Contact End -->



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