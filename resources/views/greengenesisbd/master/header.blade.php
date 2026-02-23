
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
        rel="stylesheet">

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

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

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

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <!--<h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> LifeSure</h1> -->
                    <img src="assets/logo/greengenesisbd.png" alt="Logo"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a> 
                        <div class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle">About</a>
                            <div class="dropdown-menu mt-4 border-0 shadow">
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
                                                        <h6 class="text-primary text-uppercase mb-3">Pump Solutions</h6>
                                                        <a href="#" class="dropdown-item">Centrifugal Pump</a>
                                                        <a href="#" class="dropdown-item">Booster Pump</a>
                                                        <a href="#" class="dropdown-item">Submersible Pump</a>
                                                        <a href="#" class="dropdown-item">Fire Pump</a>
                                                    </div>

                                                    <!-- Column 2 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Water Treatment</h6>
                                                        <a href="#" class="dropdown-item">RO Plant</a>
                                                        <a href="#" class="dropdown-item">ETP Plant</a>
                                                        <a href="#" class="dropdown-item">Water Softener</a>
                                                        <a href="#" class="dropdown-item">Filter System</a>
                                                    </div>

                                                    <!-- Column 3 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Industrial Equipment</h6>
                                                        <a href="#" class="dropdown-item">Control Panel</a>
                                                        <a href="#" class="dropdown-item">VFD Panel</a>
                                                        <a href="#" class="dropdown-item">Generator</a>
                                                        <a href="#" class="dropdown-item">Compressor</a>
                                                    </div>

                                                    <!-- Column 4 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Accessories</h6>
                                                        <a href="#" class="dropdown-item">Valves</a>
                                                        <a href="#" class="dropdown-item">Pipes</a>
                                                        <a href="#" class="dropdown-item">Fittings</a>
                                                        <a href="#" class="dropdown-item">Spare Parts</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                         <!--  End maga manu-->
                        <div class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle" target="_blank">Project </a>
                            <div class="dropdown-menu mt-4 border-0 shadow">
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
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Industrial Solution</a>
                                        <div class="dropdown-menu w-100 mt-0 border-0 shadow">
                                            <div class="container">
                                                <div class="row py-4">

                                                    <!-- Column 1 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Pump Solutions</h6>
                                                        <a href="#" class="dropdown-item">Centrifugal Pump</a>
                                                        <a href="#" class="dropdown-item">Booster Pump</a>
                                                        <a href="#" class="dropdown-item">Submersible Pump</a>
                                                        <a href="#" class="dropdown-item">Fire Pump</a>
                                                    </div>

                                                    <!-- Column 2 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Water Treatment</h6>
                                                        <a href="#" class="dropdown-item">RO Plant</a>
                                                        <a href="#" class="dropdown-item">ETP Plant</a>
                                                        <a href="#" class="dropdown-item">Water Softener</a>
                                                        <a href="#" class="dropdown-item">Filter System</a>
                                                    </div>

                                                    <!-- Column 3 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Industrial Equipment</h6>
                                                        <a href="#" class="dropdown-item">Control Panel</a>
                                                        <a href="#" class="dropdown-item">VFD Panel</a>
                                                        <a href="#" class="dropdown-item">Generator</a>
                                                        <a href="#" class="dropdown-item">Compressor</a>
                                                    </div>

                                                    <!-- Column 4 -->
                                                    <div class="col-lg-3 col-md-6">
                                                        <h6 class="text-primary text-uppercase mb-3">Accessories</h6>
                                                        <a href="#" class="dropdown-item">Valves</a>
                                                        <a href="#" class="dropdown-item">Pipes</a>
                                                        <a href="#" class="dropdown-item">Fittings</a>
                                                        <a href="#" class="dropdown-item">Spare Parts</a>
                                                    </div>

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
                        <a href="tel:+8801898777647"><span class="text-dark">Free: +880 1898777647</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                                class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Modal Search End -->