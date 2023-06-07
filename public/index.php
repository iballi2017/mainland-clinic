<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAC | Home</title>
    <!-- Font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS @5.2.3 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./assets/stylesheets/bootstrap-5.2.3/bootstrap.min.css">
    <!-- Animate.CSS 4.1.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- OwlCarousel 2.3.4 -->
    <link rel="stylesheet" href="./assets/lib/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/lib/owlcarousel/css/owl.theme.default.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/stylesheets/main.css">
</head>

<body>
    <!-- HEADER -->
    <div class="top-bar fs-50 base-text-color-100 bg-secondary-500 py-3">
        <div class="container d-flex flex-wrap justify-content-between">
            <div class="d-flex flex-wrap mb-2 mb-lg-0">
                <span class="me-5">9, Tinubu Street, off Coker road, illupeju Lagos.</span>
                <!-- <span class="mx-3"></span> -->
                <span>info@mainlandclinics.com</span>
            </div>
            <div>
                <a href="./views/auth.html" class="base-text-color-100 text-decoration-none">login</a> |
                <a href="./views/signup.html" class="base-text-color-100 text-decoration-none">Sign Up</a>
                <div class="dropdown">
                    <span class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">My Account</span>
                    <div class="dropdown-menu">
                        <a class="dropdown-item py-2" href="#">My profile</a>
                        <a class="dropdown-item py-2" href="#">Appointment history</a>
                        <a class="dropdown-item py-2" href="#">My Order history</a>
                        <a class="dropdown-item py-2" href="#">Wishlist</a>
                        <a class="dropdown-item py-2" href="#">Log out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="toolbar sticky-top">
        <nav class="navbar bg-white navbar-expand-lg py-lg-0">
            <!-- <div class="container py-1 py-xl-3"> -->
            <div class="container">
                <a href="./" class="navbar-brand">
                    <img src="./assets/images/brand-logo.svg" alt="Mainland Clinics" class="img-fluid">
                </a>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <!-- <span class="navbar-toggler-icon"></span> -->
                        <i data-feather="menu"></i>
                        <i data-feather="x"></i>
                    </button>
                    <div class="d-lg-none d-flex align-items-center">
                        <span class="spacer"></span>
                        <a href="./views/shopping-cart.php" class="shopping-cart-wrap | position-relative">
                            <img src="./assets/images/icons/shopping-cart.svg" alt="" class="img-fluid">
                            <span
                                class="counter | position-absolute top-0 start-100 translate-middle badge rounded-pill">2</span>
                        </a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse" id="navbarColor02">
                    <ul role="list" class="navbar-nav ms-auto" aria-label="primary">
                        <li class="nav-item">
                            <a class="nav-link active" href="./views/about-us.php">
                                About us
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item py-2 text-center" href="./views/clinical-services.php">
                                    Clinical
                                    Services
                                </a>
                                <a class="dropdown-item py-2 text-center"
                                    href="./views/fitness-wellness-test.php">Fitness/Wellness Test</a>
                                <a class="dropdown-item py-2 text-center"
                                    href="./views/telemedicine.php">Telemedicine</a>
                                <a class="dropdown-item py-2 text-center"
                                    href="./views/pre-employment-test.php">Pre-employment Test</a>
                                <a class="dropdown-item py-2 text-center" href="./views/food-handlers-test.php">
                                    Food
                                    Handlers Test
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./views/contact-us.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./views/career.php">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./views/shop.php">Shop</a>
                        </li>
                    </ul>
                </nav>
                <div class="d-lg-flex d-none">
                    <div class="d-flex align-items-center">
                        <button class="button cta | d-none d-xl-block" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Book an appointment</button>
                        <!-- <a href="./views/book-appointment.php" class="button cta | d-none d-xl-block">Book an appointment</a> -->
                        <span class="spacer"></span>
                        <a href="./views/shopping-cart.php"
                            class="shopping-cart-wrap | position-relative d-none d-md-block">
                            <img src="./assets/images/icons/shopping-cart.svg" alt="" class="img-fluid">
                            <span
                                class="counter | position-absolute top-0 start-100 translate-middle badge rounded-pill">2</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- MAIN -->
    <main>
        <!-- Hero sliders -->
        <!-- OwlCarousel for Hero -->
        <div class="hero-owl-slider | owl-carousel owl-theme">
            <div class="hero-item position-relative">
                <img src="./assets/images/hero-banner-3.jpg" class="d-block w-100" alt="Your Health, Our Priority">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8 p-4" style="background: rgba(0, 0, 0, .4);">
                                <h1 class="fs-hero-title text-white animated animate__slideInDown">
                                    Healthy Starts Here
                                </h1>
                                <p class="fs-400 text-white mb-4 pb-2 animated animate__fadeIn">
                                    Experience Quality
                                    Healthcare and Wellness Support at Our State-of-the-Art Clinic
                                </p>
                                <a href="" class="button py-md-3 px-md-5 me-3 animated animate__slideInLeft">
                                    Read
                                    More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-item position-relative">
                <img src="./assets/images/hero-banner-2.jpg" class="d-block w-100" alt="Experience Better Health">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8 p-4" style="background: rgba(0, 0, 0, .4);">
                                <h1 class="fs-hero-title text-white animated animate__slideInDown">
                                    Experience Better
                                    Health
                                </h1>
                                <p class="fs-400 text-white mb-4 pb-2 animated animate__fadeIn">
                                    Trust Our Expert Team
                                    of Healthcare Professionals to Provide Quality Medical Care and Support for Your
                                    Health Needs
                                </p>
                                <a href="" class="button py-md-3 px-md-5 me-3 animated animate__slideInLeft">
                                    Read
                                    More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-item position-relative">
                <img src="./assets/images/hero-banner-1.jpg" class="d-block w-100" alt="Your Health, Our Priority">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8 p-4" style="background: rgba(0, 0, 0, .4);">
                                <h1 class="fs-hero-title text-white animated animate__slideInDown">
                                    Your Health, Our
                                    Priority
                                </h1>
                                <p class="fs-400 text-white mb-4 pb-2 animated animate__fadeIn">
                                    Experience
                                    Compassionate Care and Comprehensive Medical Services at Our Healthcare Facility
                                </p>
                                <a href="" class="button py-md-3 px-md-5 me-3 animated animate__slideInLeft">
                                    Read
                                    More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- About us -->
        <section class="padding-block-800">
            <div class="container">
                <div class="row g-xl-5">
                    <div class="col-12 col-md-5">
                        <div class="rounded-2 overflow-hidden mb-3 fade-in">
                            <img src="./assets/images/featured-image-1.png" alt="Take control of your health"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="fade-in">
                            <h2 class="fs-section-title animate__animated animate__fadeIn">About us</h2>
                            <h3 class="fs-section-headline fw-bold" style="max-width: 500px;">
                                Take Control of Your
                                Health Today
                            </h3>
                            <p class="line-height-400">
                                At Mainland Clinic, we are dedicated to providing the highest
                                quality of medical care and
                                wellness support to our patients. We believe that everyone deserves access to
                                compassionate,
                                personalized healthcare that meets their unique needs and goals.
                            </p>
                            <a href="./views/about-us.php" class="button">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services -->
        <section class="gray-bg padding-block-800">
            <div class="container">
                <!-- Display services card grid -->
                <div class="services-card-grid">
                    <div class="item">
                        <div class="title">
                            <h2 class="fs-section-title fade-in">Our services</h2>
                            <h3 class="fs-section-headline fw-bold fade-in">Invest in Your Well -Being.</h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feature-card">
                            <img src="./assets/images/feature-card-image-2.png" alt="Clinical Service"
                                class="img-fluid">
                            <div class="title">
                                <span>Clinical Service</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feature-card">
                            <img src="./assets/images/feature-card-image-3.png" alt="Clinical Service"
                                class="img-fluid">
                            <div class="title">
                                <span>Food Handlers Test</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feature-card">
                            <img src="./assets/images/feature-card-image-1.png" alt="Clinical Service"
                                class="img-fluid">
                            <div class="title">
                                <span>Pre-employment Test</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feature-card">
                            <img src="./assets/images/feature-card-image-4.png" alt="Clinical Service"
                                class="img-fluid">
                            <div class="title">
                                <span>Fitness/Wellness Test</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feature-card">
                            <img src="./assets/images/feature-card-image-5.png" alt="Clinical Service"
                                class="img-fluid">
                            <div class="title">
                                <span>Telemedicine</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 h-100">
                            <div class="card-body p-4  fade-in">
                                <p class="fw-regular fs-200 mb-0">Choose Health. Choose Us</p>
                                <p class="fw-semi-bold fs-400 ff-body" style="max-width: 420px;">
                                    We Care for Your
                                    Health
                                    and Well-Being
                                </p>
                                <a href="#" class="button mt-3">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Appointment Booking -->
        <section class="padding-block-700">
            <div class="container">
                <div class="rainbow-type-bg rounded-2">
                    <div class="d-flex align-items-center justify-content-between flex-wrap p-2 p-lg-4">
                        <div>
                            <p class="text-neutral-500 fw-semi-bold fs-150 mb-0">Set a date with us</p>
                            <p class="text-neutral-500 fw-bold fs-300">Experience Compassionate Care and Expertise</p>
                        </div>
                        <a href="#" class="button" data-type="inverted">Book Appointment</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reviews -->
        <section class="gray-bg padding-block-800" id="reviews">
            <div class="container">
                <h2 class="text-center fw-bold fs-500 fade-in">Reviews</h2>
                <p class="sub-heading mb-5 fade-in">
                    Learn More About Our Innovative Medical Services, Holistic Wellness
                    Programs, and
                    Patient-Centered
                    Approach to Healthcare
                </p>
                <!-- Set up your HTML -->
                <div class="reviews-owl-slider | owl-carousel owl-theme fade-in">
                    <div class="review-card">
                        <div class="review-title text-primary-500 fw-semi-bold p-4">Frank</div>
                        <p class="review-body fs-50 px-4 pb-4">
                            "I can't say enough good things about Mainland Clinic.
                            The staff is
                            so friendly and welcoming, and they always take the time to listen to my concerns and
                            answer my questions. I feel like they truly care about my well-being, and I'm so
                            grateful to have them as my healthcare provider."
                        </p>
                        <div class="review-footer bg-primary-500 text-white fw-regular p-4">
                            <div class="foot-text fs-150">Contractor</div>
                            <div class="foot-image">
                                <img data-src="./assets/images/avartar-sample-2.jpg" alt="Reviewer image"
                                    class="img-fluid owl-lazy">
                            </div>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-title text-primary-500 fw-semi-bold p-4">Frank</div>
                        <p class="review-body fs-50 px-4 pb-4">
                            "I can't say enough good things about Mainland Clinic.
                            The staff is
                            so friendly and welcoming, and they always take the time to listen to my concerns and
                            answer my questions. I feel like they truly care about my well-being, and I'm so
                            grateful to have them as my healthcare provider."
                        </p>
                        <div class="review-footer bg-primary-500 text-white fw-regular p-4">
                            <div class="foot-text fs-150">Contractor</div>
                            <div class="foot-image">
                                <img data-src="./assets/images/avartar-sample.jpg" alt="Reviewer image"
                                    class="img-fluid owl-lazy">
                            </div>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-title text-primary-500 fw-semi-bold p-4">Frank</div>
                        <p class="review-body fs-50 px-4 pb-4">
                            "I can't say enough good things about Mainland Clinic.
                            The staff is
                            so friendly and welcoming, and they always take the time to listen to my concerns and
                            answer my questions. I feel like they truly care about my well-being, and I'm so
                            grateful to have them as my healthcare provider."
                        </p>
                        <div class="review-footer bg-primary-500 text-white fw-regular p-4">
                            <div class="foot-text fs-150">Contractor</div>
                            <div class="foot-image">
                                <img data-src="./assets/images/avartar-sample-2.jpg" alt="Reviewer image"
                                    class="img-fluid owl-lazy">
                            </div>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-title text-primary-500 fw-semi-bold p-4">Frank</div>
                        <p class="review-body fs-50 px-4 pb-4">
                            "I can't say enough good things about Mainland Clinic.
                            The staff is
                            so friendly and welcoming, and they always take the time to listen to my concerns and
                            answer my questions. I feel like they truly care about my well-being, and I'm so
                            grateful to have them as my healthcare provider."
                        </p>
                        <div class="review-footer bg-primary-500 text-white fw-regular p-4">
                            <div class="foot-text fs-150">Contractor</div>
                            <div class="foot-image">
                                <img data-src="./assets/images/avartar-sample.jpg" alt="Reviewer image"
                                    class="img-fluid owl-lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Partners -->
        <section class="padding-block-700">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-4">
                        <h2 class="fw-bold ff-title  fade-in">Trusted Business Partners</h2>
                    </div>
                    <div class="col-12 col-lg-8">
                        <ul role="list" data-type="sponsors" class="ps-0 fade-in">
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-01.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-02.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-03.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-04.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-05.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-06.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-07.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-08.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-09.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-10.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                            <li>
                                <div class="sponsor">
                                    <img src="./assets/images/partner-logos/image-11.svg" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- FOOTER -->
    <footer class="bg-secondary-500">
        <div class="container padding-block-600 base-text-color-200 fs-50 line-height-300">
            <div class="row">
                <div class="col-6 col-md-3">
                    <section class="foot-section">
                        <h6 class="navbar-brand mb-4">
                            <span class="visually-hidden">Mainland Clinics</span>
                            <img src="./assets/images/brand-logo.svg" alt="" class="img-fluid">
                        </h6>
                        <p>
                            At Mainland Clinic, we are dedicated to providing the highest quality of medical care and
                            wellness support to our patients.
                        </p>
                    </section>
                </div>
                <div class="col-6 col-md-3">
                    <h6 class="fs-200 fw-semi-bold mb-lg-4">Quicklinks</h6>
                    <nav>
                        <ul role="list" class="list-style-none ps-0" aria-label="secondary">
                            <li>
                                <a href="#" class="text-decoration-none base-text-color-200 line-height-400">
                                    About
                                    us
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none base-text-color-200 line-height-400">Careers</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none base-text-color-200 line-height-400">FAQs</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none base-text-color-200 line-height-400">
                                    Terms &
                                    conditions
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none base-text-color-200 line-height-400">
                                    Privacy
                                    policy
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-md-3">
                    <h6 class="fs-200 fw-semi-bold mb-lg-4">Contacts</h6>
                    <ul class="list-style-none ps-0">
                        <li class="mb-4">Email: info@avonhealthcare.com</li>
                        <li class="mb-4">
                            Head Office: 2nd Floor, Afriland Towers, 97/101 Broad Street, Lagos, Nigeria.
                        </li>
                        <li class="mb-4">Phone number: 0700 277 9800</li>
                    </ul>
                </div>
                <div class="col-12 col-md-3">
                    <h6 class="fs-200 fw-semi-bold mb-lg-4">Newsletter</h6>
                    <p>
                        Subscribe to our newsletters to get our latest health updates, promos and discounts.
                    </p>
                    <form action="">
                        <div class="control-wrapper-merge-button bg-accent-50">
                            <input type="text" id="email" class="w-100 px-3" style="background: unset;">
                            <button class="bg-0">
                                <span class="visually-hidden">Subscribe</span>
                                <img src="./assets/images/icons/green-plane.svg" alt="" class="img-fluid">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr style="border: 1px solid var(--clr-accent-50)">
        <p class="mb-0 text-center base-text-color-200 fs-50 pb-2">Mainland clinic 2023</p>
    </footer>


    <!-- Appointment modal -->
    <?php include "./components/appointment-modal.php"; ?>




    <!-- jquery-3.7.0 -->
    <script src="./assets/lib/jquery-3.7.0.min.js"></script>
    <!-- Bootstrap JS @5.2.3 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script> -->
    <script src="./assets/lib/popper-core@2.11.6.min.js"></script>
    <script src="./assets/lib/bootstrap-5.2.3/bootstrap.min.js"></script>
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        /**Feather Icons */
        if (feather) null
        feather.replace()
    </script>
    <!-- OwlCarousel 2.3.4 -->
    <script src="./assets/lib/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- RateYo -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <!-- Custom JS -->
    <script src="./assets/scripts/index.jquery.js"></script>
    <script src="./assets/scripts/index.js"></script>
</body>

</html>