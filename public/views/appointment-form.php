<!-- Header -->
<?php include_once "../components/header.php" ?>

<!-- Title section -->
<div class="title-section-container">
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../" class="base-text-color-500 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="../views/book-appointment.php" class="base-text-color-500 text-decoration-none">Book appointment</a></li>
                <li class="breadcrumb-item">Onsite or physical clinic visit</li>
                <li class="breadcrumb-item active" aria-current="page">Schedule</li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Appointment form</h1>
    </section>
</div>

<section class="padding-block-600">
    <div class="container">
        <div class="card">
            <div class="card-header bg-secondary-500">
                <div style="max-width: 124px">
                    <img src="../assets/images/brand-logo-black-and-white.svg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="card-body">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center g-2 g-md-3">
                            <h2 class="fs-300 fw-semi-bold col-md-6 order-md-1 mb-0">Book Appointment</h2>
                            <p class="fw-semi-bold col-md-6 order-md-3 mb-0">Type: Onsite/physical clinic visit</p>
                            <p class="fw-semi-bold col-md-6 order-md-2 text-md-end mb-0">Time: 8:00am - 8:30am</p>
                            <p class="fw-semi-bold col-md-6 order-md-4 text-md-end mb-0">Charge: Free</p>
                        </div>
                    </div>
                </div>
                <!--  -->
                <form action="">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3 g-2 g-md-3">
                                <div class="col-md-6">
                                    <label for="FirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="FirstName">
                                </div>
                                <div class="col-md-6">
                                    <label for="LastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="LastName">
                                </div>
                                <div class="col-md-6">
                                    <label for="DoB" class="form-label">Date of Birth</label>
                                    <div class="custom-date-control" aria-label="inverse-green-icon-date">
                                        <input type="tel" class="input-date border-0" placeholder="DD/MM/YYYY" id="DoB" onfocus="this.showPicker()">
                                    </div>
                                    <!-- <input type="date" class="form-control" placeholder="DD/MM/YYYY" id="DoB"> -->
                                </div>
                                <div class="col-md-6">
                                    <label for="Gender" class="form-label">Gender</label>
                                    <div class="custom-select rounded-250">
                                        <select name="Gender" id="Gender" class="form-select" aria-label="Select gender">
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="EmailAddress" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="EmailAddress">
                                </div>
                                <div class="col-12">
                                    <label for="PhoneNumber" class="form-label">PhoneNumber</label>
                                    <input type="text" class="form-control" id="PhoneNumber">
                                </div>
                                <div class="col-12">
                                    <label for="Address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="Address">
                                </div>
                                <div class="col-12">
                                    <label for="AppointmentTime" class="form-label">Appointment Time</label>
                                    <div class="custom-time-control">
                                        <input type="tel" class="input-element border-0" id="AppointmentTime" placeholder="hh:mm:ss">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="AppointmentTime" class="form-label">Reason for visit / appointment</label>
                                    <textarea name="" id="" cols="30" rows="7" class="form-control"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="ServicesOffer" class="form-label">Services offer</label>
                                    <!-- https://www.w3schools.com/howto/howto_js_filter_dropdown.asp -->
                                    <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown_filter -->
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                                            <a href="#about">About</a>
                                            <a href="#base">Base</a>
                                            <a href="#blog">Blog</a>
                                            <a href="#contact">Contact</a>
                                            <a href="#custom">Custom</a>
                                            <a href="#support">Support</a>
                                            <a href="#tools">Tools</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Reason for visit / appointment -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<?php include_once "../components/footer.php" ?>