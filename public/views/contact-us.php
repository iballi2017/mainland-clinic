<!-- Header -->
<?php include_once "../components/header.php" ?>

<!-- Title section -->
<div class="title-section-container">
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../" class="base-text-color-500 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Services</li>
                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Contact us</h1>
    </section>
</div>


<section class="padding-block-800">
    <div class="container bg-accent-300 rounded px-4 py-5">
        <h2 class="fw-bold text-primary-700 text-center mb-5">Get in touch today</h2>
        <form action="">
            <div class="row">
                <div class="col-12 col-lg-6 mb-4">
                    <label for="FullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control border-0" id="FullName">
                </div>
                <div class="col-12 col-lg-6 mb-4">
                    <label for="Email" class="form-label">Email Address</label>
                    <input type="email" class="form-control border-0" id="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 mb-4">
                    <label for="Phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control border-0" id="Phone">
                </div>
                <div class="col-12 col-lg-6 mb-4">
                    <label for="Subject" class="form-label">Subject</label>
                    <input type="text" class="form-control border-0" id="Subject">
                </div>
            </div>
            <div class="mb-4">
                <label for="Message" class="form-label">Message</label>
                <textarea name="" id="" cols="30" rows="5" class="form-control border-0"></textarea>
            </div>
            <button class="button fs-600 submit-btn" type="button">Submit</button>
            <span class="text-alt-100 fw-regular fs-300">
                Sent!
            </span>
        </form>
    </div>
</section>


<section>
    <div class="container">
        <h3 class="text-center fw-bold fs-500 mb-4" style="max-width: 500px; margin: 0 auto">Just in case you don’t get a response</h3>
        <ul class="list-style-none ps-0 row g-3">
            <li class="col-12 col-md-4">
                <div class="com-card">
                    <div class="icon">
                        <img src="../assets/images/icons/phone-purple.svg" alt="" class="img-fluid">
                    </div>
                    <h6 class="title text-center">Call center number</h6>
                    <p class="text-primary-700 fs-50 text-center">09099841554</p>
                </div>
            </li>
            <li class="col-12 col-md-4">
                <div class="com-card">
                    <div class="icon">
                        <img src="../assets/images/icons/location-purple.svg" alt="" class="img-fluid">
                    </div>
                    <h6 class="title text-center">Address</h6>
                    <p class="text-primary-700 fs-50 text-center">9, Tinubu Street, off Coker road, illupeju Lagos.</p>
                </div>
            </li>
            <li class="col-12 col-md-4">
                <div class="com-card">
                    <div class="icon">
                        <img src="../assets/images/icons/@-purple.svg" alt="" class="img-fluid">
                    </div>
                    <h6 class="title text-center">Email Address</h6>
                    <p class="text-primary-700 fs-50 text-center">Clientservices@hacmedical.org</p>
                </div>
            </li>
        </ul>
    </div>
</section>


<!-- Appointment Booking -->
<?php include_once "../components/appointment-booking.php" ?>

<!-- Footer -->
<?php include_once "../components/footer.php" ?>