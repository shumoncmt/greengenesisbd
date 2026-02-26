<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>All Project</title>
</head>

<style>
    #img{
    height: 70px;
    width: 256px;
}
</style>
<body>
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To LifeSure</h4>
                                <h1 class="display-1 text-white mb-4">Life Insurance Makes You Happy</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy...
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img" style="object-fit: cover;">
                                <img src="img/carousel-2.png" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="img/carousel-2.png" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To LifeSure</h4>
                                <h1 class="display-1 text-white mb-4">Life Insurance Makes You Happy</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy...
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <div class="border-end border-primary pe-3">
                            <a href="https://maps.app.goo.gl/KEiS5rvonyjuTYCt6" class="text-muted small"><i
                                    class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        </div>
                        <div class="ps-3">
                            <a href="mailto:karim@greengenesisbd.com" class="text-muted small"><i
                                    class="fas fa-envelope text-primary me-2"></i>karim@greengenesisbd.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex border-end border-primary pe-3">
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="dropdown ms-3">
                            <a href="#" class="dropdown-toggle text-dark" ><small><i
                                        class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item">English</a>
                                <a href="#" class="dropdown-item">Bangla</a>
                                <a href="#" class="dropdown-item">French</a>
                                <a href="#" class="dropdown-item">Spanish</a>
                                <a href="#" class="dropdown-item">Arabic</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
         <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <!--<h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> LifeSure</h1> -->
                    <img  id="img" src="assets/logo/greengenesisbd.png" alt="Logo"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a> 
                        <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                            <div class="dropdown-menu menu1 mt-4 border-0 shadow">
                                <div class="container">
                                            <a href="{{ route('about') }}" class="dropdown-item">About Us</a>
                                            <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                                            <a href="{{ route('feature') }}" class="dropdown-item">Company Profile</a>
                                            <a href="{{ route('team') }}" class="dropdown-item">Our Team</a>
                                </div>
                            </div>
                        </div>
                          <!--  add maga manu-->
                                <div class="nav-item dropdown position-static">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Products </a>
                                        <div class="dropdown-menu w-100 mt-0 border-0 shadow">
                                            <div class="container">
                                                <div class="row py-4">
                                                    <!-- Column 1 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Industrial Pump</h6>
                                                        <ul>
                                                            <li><a href="#" class="dropdown-item">Dynamic Pump</a></li>
                                                            <li><a href="#" class="dropdown-item">Wilo Pump</a></li>
                                                            <li><a href="#" class="dropdown-item">Seko Dosing Pump</a></li>
                                                            <li><a href="#" class="dropdown-item">Grampus Pump</a></li>
                                                            <li><a href="#" class="dropdown-item">ARO Pump</a></li>
                                                        </ul>
                                                        <h6 class="text-primary text-uppercase">Industrial Motor</h6>
                                                        <ul>
                                                            <li><a href="#" class="dropdown-item">Single Phase Motor</a></li>
                                                            <li><a href="#" class="dropdown-item">Three Phase Motor</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Column 2 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Blower & Diffuser</h6>
                                                        <ul>
                                                            <li><a href="#" class="dropdown-item">Roots Blower</a></li>
                                                            <li><a href="#" class="dropdown-item">Vacuum Roots Blower</a></li>
                                                            <li><a href="#" class="dropdown-item">Ring Blower</a></li>
                                                            <li><a href="#" class="dropdown-item">Disc Diffuser</a></li>
                                                            <li><a href="#" class="dropdown-item">Tube Diffuser</a></li>
                                                            <li><a href="#" class="dropdown-item">Mounting Saddle</a></li>
                                                        </ul>
                                                        <h6 class="text-primary text-uppercase mb-3">Flow Meter</h6>
                                                         <ul>
                                                            <li><a href="#" class="dropdown-item">Electromagnetic Flow Meter</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Column 3 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Water Treatment Chemicals & Media</h6>
                                                        <ul>
                                                            <li><a href="#" class="dropdown-item">Filtration Media</a></li>
                                                            <li><a href="#" class="dropdown-item">Ion Exchange Resin</a></li>  
                                                            <li><a href="#" class="dropdown-item">Activated Carbon</a></li>
                                                            <li><a href="#" class="dropdown-item">Reverse Osmosis Chemicals</a></li>
                                                        </ul>
                                                        <h6 class="text-primary text-uppercase mb-3">RO and UF Membrane</h6>
                                                        <ul>
                                                            <li><a href="#" class="dropdown-item">Reverse Osmosis</a></li>
                                                            <li><a href="#" class="dropdown-item">Ultrafiltration</a></li>
                                                            <li><a href="#" class="dropdown-item">Swimming Pool Solution</a></li>
                                                        </ul>  
                                                    </div>
                                                    <!-- Column 4 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Water Treatment Accessories</h6>
                                                        <ul>
                                                            <li><a href="#" class="dropdown-item">Ionpure</a></li>
                                                            <li><a href="#" class="dropdown-item">Ozone Generator</a></li>
                                                            <li><a href="#" class="dropdown-item">Household Machine</a></li>
                                                            <li><a href="#" class="dropdown-item">Rostfrei Tanks</a></li>
                                                            <li><a href="#" class="dropdown-item">MBR Module</a></li>
                                                            <li><a href="#" class="dropdown-item">Evoqua</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                         <!--  End maga manu-->
                        <div class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Project </a>
                            <div class="dropdown-menu menu1 mt-4 border-0 shadow">
                                <div class="container">
                                            <a href="{{ route('ongoingproject') }}" class="dropdown-item">Ongoing Project</a>
                                            <a href="{{ route('completedproject') }}" class="dropdown-item">Complete Project</a>
                                </div>  
                            </div>
                        </div>
                    <!--  add maga manu-->
                      <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Industrial Solution </a>
                            <div class="dropdown-menu mt-4 border-0 shadow">
                                <div class="container">
                                    <div class="row">
                                        <li><a href="{{ route('about') }}" class="dropdown-item">ETP Plant</a></li>
                                        <li><a href="{{ route('testimonial') }}" class="dropdown-item">STP Plant</a></li>
                                        <li><a href="{{ route('testimonial') }}" class="dropdown-item">WTP Plant</a></li>
                                        <li><a href="{{ route('testimonial') }}" class="dropdown-item">WWTP Plant</a></li>
                                        <li> <a href="{{ route('testimonial') }}" class="dropdown-item">Iron Removal Plant</a></li>
                                        <li><a href="{{ route('testimonial') }}" class="dropdown-item">RO Water Plant</a></li>
                                        <li><a href="{{ route('testimonial') }}" class="dropdown-item">Water Softener Plant in Bangladesh</a></li>
                                        <li><a href="{{ route('testimonial') }}" class="dropdown-item">Surface Water Treatment Plant</a></li>
                                        <li><a href="{{ route('testimonial') }}" class="dropdown-item">Rain Water Harvesting</a></li>
                                        <li><a href="{{ route('testimonial') }}" class="dropdown-item">Bioflok</a></li>
                                    </div>
                                </div>  
                            </div>
                      </div>

                 <!--  End maga manu-->
                        <a href="{{ route('contact') }}" class="nav-item nav-link"  target="_blank">Contact</a>
                    </div>
                </div>
                <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                    <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada"
                        data-wow-delay=".9s">
                        <i class="fa fa-phone-alt fa-2x"></i>
                        <div class="position-absolute" style="top: 7px; right: 12px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                    <div class="d-flex flex-column ms-3">
                        <span>Call to Our Experts</span>
                        <a href="tel:+8801898777647"><span class="text-dark">+880 1898777647</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
    <!--$%adsense%$-->
 <main class="cd__main">
        <!-- Start DEMO HTML (Use the following code into your project)-->
        <div class="wrap">
        <div class="gallery-wrap">
            <ul id="filters" class="clearfix">
                <li class="abs"><span class="filter active" data-filter=".Ongoing, .Complete">ALL</span></li>
                <li class="abs"><span class="filter" data-filter=".Complete">Complete</span></li>
                <li class="abs"><span class="filter" data-filter=".Ongoing">Ongoing</span></li>
            </ul>
    <div id="gallery">
<!-- Complete Project -->
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/portfolio-item/marriott-hotel-wtp-booster-swimming-pool-system/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>WTP Booster</h4>
                                <p>Marriott hotel wtp booster swimming pool system</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/10/Marriott-hotel-wtp-booster-swimming-pool-system-min.jpg" alt="" /> 
                        </div>
                        <h6 style="padding-top: 10px;">WTP Booster</h6>
                        </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/portfolio-item/reverse-osmosis-plant/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>Reverse Osmosis Plant</h4>
                                <p>Water Softener Plant at Square Texcom Limited</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/10/Reverse-Osmosis-Plant-at-Essential-Clothing-Ltd.jpg" alt="" /> 
                        </div>
                        <h6 style="padding-top: 10px;">Reverse Osmosis Plant</h6>
                        </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/portfolio-item/water-softener-plant-at-square-texcom-limited/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>Water Softener Plant</h4>
                                <p>Water Softener Plant at Square Texcom Limited</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/10/Water-Softener-Plant-at-Square-Texcom.jpg" alt="" /> 
                        </div>
                        <h6 style="padding-top: 10px;">Water Softener Plant</h6>
                        </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/portfolio-item/different-capacity-pump-supply-with-electrical-control-panel/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>Different capacity pump supply</h4>
                                <p>Different capacity pump supply with Electrical control Panel at Chittagong American & Efiled</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/10/Different-capacity-pump-supply-with-Electrical-control-Panel.jpg" alt="" /> 
                        </div>
                        <h6 style="padding-top: 10px;">Different capacity pump supply</h6>
                        </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/portfolio-item/centrifugal-bare-pump-supply-with-installation-commissioning/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>Centrifugal Bare Pump</h4>
                                <p>Centrifugal Bare Pump Supply with Installation & Commissioning.</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/10/Centrifugal-Bare-Pump-Supply-with-Installation-Commissioning.jpg" alt="" /> 
                        </div>
                        <h6 style="padding-top: 10px;">Centrifugal Bare Pump</h6>
                        </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/etp-plant-h-washing/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>ETP Plant</h4>
                                <p>H-Washing, ETP Plant, Mongla EPZ.</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/H-Washing-E-TP-Plant-Mongla-EPZ.jpg" alt="" />
                        </div>
                        <h6 style="padding-top: 10px;">ETP Plant</h6>
                        </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/biochemical-etp/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>Biochemical ETP</h4>
                                <p>Biochemical ETP, Ayesha Clothing, Jamgora, Dhaka.</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/Biochemical-E-TP-Ayesha-Clothing-Jamgora-Dhaka.jpg" alt="" />
                        </div>
                        <h6 style="padding-top:10px;">Biochemical ETP</h6>
                        </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/sugar-mills-etp/" data-cat="Complete">
                    <div class="inside">
                    <div class="details">
                        <div class="text">
                        <h4>Sugar Mills ETP</h4>
                        <p>Establishment of ETP at 14 Sugar Mills Under BSFIC.</p></div>  
                        </div>
                        <div class="overlay"></div>
                        <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/Establishment-of-E-TP-at-14-Sugar-Mills-Under-BSFIC.jpg" alt="" />
                        </div>
                    <h6 style="padding-top: 10px;">Sugar Mills ETP</h6>
                    </a>
                <a class="gallery-item Complete" href="https://greengenesisbd.com/recycling-water-treatment-plant/" data-cat="Complete">
                    <div class="inside">
                    <div class="details">
                    <div class="text">
                        <h4>Recycling Water Treatment Plant</h4> 
                        <p>ETP Recycling Water Treatment Plant With 2400′ Distribution Pipeline Work, BRAC Dairy & Food Project, Joydebpur, Gazipur.</p>
                    </div>
                    </div>
                    <div class="overlay"></div>
                    <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/ETP-Rec-ycling-Water-Treatment-Plant-With-2400-Distribution-3.jpg" alt="" /> 
                    </div>
                    <h6 style="padding-top: 10px;">Recycling WTP</h6>
                    </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/iron-removal-plant-project/" data-cat="Complete">
                        <div class="inside">
                        <div class="details">
                        <div class="text">
                            <h4>Iron Removal Plant</h4>
                            <p>5 Nos. 150 m³/hr, Iron Removal Plant, Dhak a WASA</p>
                        </div>
                        </div>
                        <div class="overlay"></div>
                        <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/Iron-Removal-Plant-Dhak-a-WASA.jpg" alt="" />
                        </div>
                        <h6 style="padding-top: 10px;">Iron Removal Plant</h6>
                        </a> 
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/safe-water-supply-throughout/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4> Safe Water Supply Throughout</h4>
                                <p>25 m³/hr. Safe Water Supply Throughout The Country (PSWSC ), Jagannathpur, Sunamganj.</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/Safe-Water-Supply-Throughout-The-Country-PSWSC-Jagannathpur-Sunamganj.jpg" alt="" />     
                            </div>
                        <h6 style="padding-top: 10px;">Safe Water Supply Throughout</h6>
                    </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/booster-system-2/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>Booster System</h4>
                                <p>Booster System at Dynasty Home Gulshan-2, Dhaka.</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/Booster-System-at-D-ynasty-Home-Gulshan-2-Dhaka.jpg" alt="" /> 
                        </div>
                        <h6 style="padding-top: 10px;">Booster System</h6>
                    </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/wtp-with-3000%e2%80%b2-distribution/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>WTP with 3000′ distribution </h4>
                                <p>3 Nos. 2 m³/hr. WTP with 3000′ distribution pipeline work, Norp Knit Industry’s Ltd., Gazipur.</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/WTP-with-3000-distribution.jpg" alt="" /> 
                        </div>
                        <h6 style="padding-top: 10px;">WTP with 3000′ distribution</h6>
                        </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/portfolio-item/submersible-pump-installation-electric-substation-and-necessary-works/" data-cat="Complete">
                            <div class="inside">
                            <div class="details">
                            <div class="text">
                            <h4>Submersible pump Installation</h4>
                            <p>Submersible pump Installation, Electric substation, and necessary works, Bhabodah, Jashore.</p>
                            </div>
                            </div>
                                <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/05/Big-Size-Pump-Installation-BWDB-jessore.jpg" alt="" />
                            </div>
                            <h6 style="padding-top: 10px;"> Big type Submersible pump Installation</h6>
                    </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/portfolio-item/master-plan-water-supply-pipe-line-pump-house-for-national-university-at-gazipur/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>Water Supply Pipe Line & Pump House</h4>
                                <p>Master Plan Water Supply Pipe Line & Pump House For National University At Gazipur</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/05/Master-Plan-Water-Supply-Pipe-Line-Pump-House-For-National-University-At-Gazipur.jpg" alt="" />
                        </div>
                        <h6 style="padding-top: 10px;">Master Plan Water Supply Pipe Line & Pump House For National University At Gazipur </h6>
                    </a>
                    <a class="gallery-item Complete" href="https://greengenesisbd.com/portfolio-item/eco-intimates-mondol-group-wtp-setup/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4>WTP Setup</h4>
                                <p>ECO Intimates Mondol Group WTP Setup All Complete With Out  Commissioningr</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/09/ECO-Intimates-Mondol-Group-WTP-Setup-All-Complete.jpg" alt="" />
                            
                        </div>
                        <h6 style="padding-top: 10px;">WTP Setup</h6>
                    </a>

                    <a class="gallery-item Complete" href="https://greengenesisbd.com/portfolio-item/horizontal-monoblock-pump-set/" data-cat="Complete">
                        <div class="inside">
                            <div class="details">
                            <div class="text">
                                <h4> Booster System</h4>
                                <p>Boster system Horizontal Monoblock Pump Set (Arla foods Bangladesh Ltd)</p>
                            </div>
                            </div>
                            <div class="overlay"></div>
                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/12/Arla-foods-Bangladesh-ltd.png" alt="" />
                        </div>
                        <h6 style="padding-top: 10px;">Booster System</h6>
                        </a>
 <!--Complete Project-->

 <!--Ongoing Project -->
                <a class="gallery-item Ongoing" href="https://greengenesisbd.com/mbbr-stp/" data-cat="Ongoing">
                            <div class="inside">
                                <div class="details">
                                <div class="text">
                                    <h4>MBBR STP</h4>
                                    <p>250 KLD MBBR STP For Essential Clothing Ltd., Akulichala High School, Fulbari Road, Kaliakair.</p>
                                </div>
                                </div>
                                <div class="overlay"></div>
                                <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/250-KLD-MBBR-STP-For-Essential-Clothing-Ltd.jpg" alt="" />
                                
                            </div>
                            <h6 style="padding-top: 10px;">MBBR STP</h6>
                        </a>
                        <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/aristo-tower-stp-civil-work/" data-cat="Ongoing">
                            <div class="inside">
                                    <div class="details">
                                        <div class="text">
                                        <h4>Aristo Tower STP Civil Work</h4>
                                            <p>Tejgaon Industrial Area, Dhaka 1208</p>
                                        </div>
                                    </div>
                                    <div class="overlay"></div>
                                    <img src="https://greengenesisbd.com/wp-content/uploads/2024/09/Aristo-tower-STP-Civil-Word.jpg" alt="" />
                            </div>
                                <h6 style="padding-top: 10px;">Aristo Tower STP</h6>
                        </a>
                                
                         <a class="gallery-item Ongoing" href="https://greengenesisbd.com/fountain-system-swimming-pool-2/" data-cat="Ongoing">
                            <div class="inside">
                                <div class="details">
                                <div class="text">
                                    <h4>Fountain System & Swimming Pool</h4>
                                    <p>Fountain System & Swimming Pool, Aristo Tower, Tejgaon Industrial Area, Dhaka.</p>
                                </div>
                                </div>
                                <div class="overlay"></div>
                                <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/Fountain-System-and-Swimming-Pool-.jpg" alt="" />
                            </div> 
                            <h6 style="padding-top: 10px;">Swimming Pool</h6>
                           </a>

                            <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/nos-swimming-pool/" data-cat="Ongoing">
                                        <div class="inside">
                                            <div class="details">
                                            <div class="text">
                                                <h4>NOS swimming pool.</h4>
                                                <p>NOS swimming pool..</p>
                                            </div>
                                            </div>
                                            <div class="overlay"></div>
                                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/11/NOS-swimming-pool-ongoing-project.jpg" alt="" />
                                        </div>
                                        <h6 style="padding-top: 10px;">NOS swimming pool.</h6>
                                    </a>
                                    <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/nandipara-wasa-irp-project/" data-cat="Ongoing">
                                        <div class="inside">
                                          <div class="details">
                                                <div class="text">
                                                      <h4>IRP Project</h4>
                                                         <p>Nandipara wasa IRP project </p>
                                                       </div>
                                                        </div>
                                                           <div class="overlay"></div>
                                                           <img src="https://greengenesisbd.com/wp-content/uploads/2024/04/Nandipara-wasa-IRP-project-3.jpg" alt="" />
                                                           
                                                       </div>
                                                       <h6 style="padding-top: 10px;">Nandipara wasa IRP project </h6>
                                               </a>
                                    <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/japan-bangladesh-economic-zone-dtw-lowering/" data-cat="Ongoing">
                                        <div class="inside">
                                             <div class="details">
                                                 <div class="text">
                                                   <h4>Deep Tube Well</h4>
                                                       <p>Japan Bangladesh Economic Zone DTW lowering</p>
                                                  </div>
                                             </div>
                                             <div class="overlay"></div>
                                              <img src="https://greengenesisbd.com/wp-content/uploads/2024/11/Japan-Bangladesh-Economic-Zone-DTW-lowering.jpg" alt="" />
                                        </div>
                                        <h6 style="padding-top: 10px;">Deep Tube Well</h6>
                                     </a>
                                     <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/dtw-lowering-universal-denims-ltd/" data-cat="Ongoing">
                                        <div class="inside">
                                             <div class="details">
                                                 <div class="text">
                                                   <h4>DTW lowering</h4>
                                                       <p>DTW lowering Universal denims ltd. (S. Alam group)</p>
                                                  </div>
                                             </div>
                                             <div class="overlay"></div>
                                              <img src="https://greengenesisbd.com/wp-content/uploads/2024/11/DTW-lowering-Universal-denims-ltd.-S.Alam-group.jpg" alt="" />
                                        </div>
                                        <h6 style="padding-top: 10px;">DTW lowering</h6>
                                     </a>

                                     <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/best-holdings-chairman-house-1kld-stp-baridhara-society-dhaka/" data-cat="Ongoing">
                                        <div class="inside">
                                            <div class="details">
                                            <div class="text">
                                                <h4>STP</h4> 
                                                <p>Best holdings chairman house 1KLD STP Baridhara society Dhaka.</p>
                                            </div>
                                            </div>
                                            <div class="overlay"></div>
                                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/11/Best-holdings-chairman-house-1KLD-PSTP-Baridhara-society-Dhaka.jpg" alt="" />
                                        </div>
                                        <h6 style="padding-top: 10px;">STP</h6>
                                        </a>

                                        <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/appreciate-apperials-dtw-project/" data-cat="Ongoing">
                                            <div class="inside">
                                                 <div class="details">
                                                     <div class="text">
                                                       <h4>Appreciate Apperials DTW</h4>
                                                           <p>Approciate Apperials DTW project.</p>
                                                      </div>
                                                 </div>
                                                 <div class="overlay"></div>
                                                  <img src="https://greengenesisbd.com/wp-content/uploads/2024/11/Approciate-Apperials-DTW-project-on-going.jpg" alt="" />
                                            </div>
                                            <h6 style="padding-top: 10px;">Appreciate Apperials DTW</h6>
                                         </a>

                                         <a class="gallery-item Ongoing" href="https://greengenesisbd.com/wtp-plant/" data-cat="Ongoing">
                                            <div class="inside">
                                                <div class="details">
                                                <div class="text">
                                                    <h4>WTP plant </h4>
                                                    <p>10 m³/hr. WTP plant, Bata Shoe Company, Tongi, Gazipur.</p>
                                                </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/WTP-plant-Bata-Shoe-company.jpg" alt="" />
                                                
                                             </div>
                                             <h6 style="padding-top: 10px;">WTP plant</h6>
                                            </a>

                                         <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/water-softener-plant-and-cooling-tower-pump/" data-cat="Ongoing">
                                            <div class="inside">
                                                <div class="details">
                                                <div class="text">
                                                    <h4>Water Softener Plant</h4>
                                                    <p>Water Softener Plant and Cooling Tower pump.</p>
                                                </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="https://greengenesisbd.com/wp-content/uploads/2024/11/20-M3Hr.Water-Softener-Plant-and-Cooling-Tower-pump-at-Square-Denim-Valuka.jpg" alt="" />
                                            </div>
                                            <h6 style="padding-top: 10px;">Water Softener Plant</h6>
                                            </a>
                                            <a class="gallery-item Ongoing" href="https://greengenesisbd.com/stp-mbbr/" data-cat="Ongoing">
                                                <div class="inside">
                                                    <div class="details">
                                                    <div class="text">
                                                        <h4>STP-MBBR</h4>
                                                        <p>3.5 m3/hr. (STP-MBBR), Ispahani Islamia Eye Institute & Hospital., Farmgate, Dhaka.</p>
                                                    </div>
                                                    </div>
                                                    <div class="overlay"></div>
                                                    <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/Ispahani-Islamia-Eye-Institute-Hospital.jpg" alt="" />
                                                </div>
                                                <h6 style="padding-top: 10px;">STP-MBBR</h6>
                                                </a>

                                                <a class="gallery-item Ongoing" href="https://greengenesisbd.com/swimming-pool/" data-cat="Ongoing">
                                                    <div class="inside">
                                                       <div class="details">
                                                        <div class="text">
                                                          <h4>Swimming Pool</h4>
                                                          <p>Swimming Pool, Marriott Hotel (5 Star) Joinabazer, Gazipur.</p>
                                                        </div>
                                                      </div>
                                                      <div class="overlay"></div>
                                                      <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/Swimming-Pool-Marriott-Hotel-5-StarJoinabazer-Gazipur.jpg" alt="" />
                                                   </div>
                                                     <h6 style="padding-top: 10px;">Swimming Pool</h6>
                                                  </a>

                                                  <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/colombia-garments-dtw-lowering/" data-cat="Ongoing">
                                                    <div class="inside">
                                                        <div class="details">
                                                            <div class="text">
                                                            <h4>Deep Tube Well</h4>
                                                                <p>Columbia Garments Ltd Deep Tube Well</p>
                                                            </div>
                                                        </div>
                                                        <div class="overlay"></div>
                                                        <img src="https://greengenesisbd.com/wp-content/uploads/2024/11/Columbia-garments-ltd-deep-tube-wells-min.jpg" alt="" />
                                                </div>
                                                        <h6 style="padding-top: 10px;">Deep Tube Well</h6>
                                          </a>

                                          <a class="gallery-item Ongoing" href="https://greengenesisbd.com/booster-system/" data-cat="Ongoing">
                                            <div class="inside">
                                                 <div class="details">
                                                   <div class="text">
                                                     <h4>Booster System</h4>
                                                      <p>3 Set Booster System, Palmal Ark ay-2, Ashulia, Dhaka.</p>
                                                    </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/3-Set-Booster-System-Palmal-Arkay-2.jpg" alt="" />
                                             </div>
                                              <h6 style="padding-top: 10px;">Booster System</h6>
                                        </a>

                                          <a class="gallery-item Ongoing" href="https://greengenesisbd.com/swimming-pool-system-fountain-system/" data-cat="Ongoing">
                                            <div class="inside">
                                            <div class="details">
                                            <div class="text">
                                            <h4>Swimming Pool System & Fountain System</h4>
                                                <p>Swimming Pool System & Fountain System For Exim Tower, Bir Uttam Ak Khandak ar Road, Gulshan-1, Dhaka.</p>
                                            </div>
                                            </div>
                                                <div class="overlay"></div>
                                            <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/Swimming-Pool-System.jpg" alt="" />
                                        
                                            </div>
                                            <h6 style="padding-top: 10px;">Swimming Pool System</h6>
                                            </a>

                                            <a class="gallery-item Ongoing" href="https://greengenesisbd.com/recycle-water-treatment-plant/" data-cat="Ongoing">
                                                <div class="inside">
                                                      <div class="details">
                                                          <div class="text">
                                                              <h4>Recycle Water Treatment Plant</h4>
                                                              <p>5 m³/hr. Recycle Water Treatment Plant, House of Sunshine Knitwear Ltd., Tejgaon, Dhaka.</p>
                                                          </div>
                                                       </div>
                                                       <div class="overlay"></div>
                                                          <img src="https://greengenesisbd.com/wp-content/uploads/2024/02/5-Set-Booster-System-3-1-1.jpg" alt="" />  
                                                </div>
                                              <h6 style="padding-top: 10px;">Recycle WTP</h6>
                                             </a>
        
                                             <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/leather-industries-of-bangladesh/" data-cat="Ongoing">
                                                <div class="inside">
                                                    <div class="details">
                                                    <div class="text">
                                                        <h4>Biological ETP</h4> 
                                                        <p>Biological ETP Leather Industries of Bangladesh.</p>
                                                    </div>
                                                    </div>
                                                    <div class="overlay"></div>
                                                    <img src="https://greengenesisbd.com/wp-content/uploads/2024/12/Leather-industries-of-Bangladesh-.png" alt="" />
                                                </div>
                                                <h6 style="padding-top: 10px;">Biological ETP</h6>
                                                </a>

                                                <a class="gallery-item Ongoing" href="https://greengenesisbd.com/portfolio-item/effluent-treatment-plant-at-bakhrabad-gas-field/" data-cat="Ongoing">
                                                    <div class="inside">
                                                        <div class="details">
                                                        <div class="text">
                                                            <h4>Biochemical ETP</h4> 
                                                            <p>Enggineering, Procurement Supply Construction installation Commissioning & Testing of an Effluent Treatment Plant</p>
                                                        </div>
                                                        </div>
                                                        <div class="overlay"></div>
                                                        <img src="https://greengenesisbd.com/wp-content/uploads/2024/12/Effluent-Treatment-Plant-at-Bakhrabad-Gas.png" alt="" />
                                                    </div>
                                                    <h6 style="padding-top: 10px;">Biochemical ETP</h6>
                                                    </a>

 <!--Ongoing Project -->

                    
    </div>
    
 </div><!--/gallery-wrap-->

</div>
 </main>
        <!-- END EDMO HTML (Happy Coding!)-->


    <!-- Script JS -->

   
@include('greengenesisbd.master.footer')

</body>
</html>