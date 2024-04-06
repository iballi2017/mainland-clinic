<!-- Header -->
<?php include_once "./components/header.php" ?>

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
    <div class="container mb-5">
        <div class="card mb-3">
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
                    <div class="card mb-3">
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
                                        <input type="tel" class="input-date border-0" placeholder="DD/MM/YYYY" id="DoB">
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
                                    <label for="AppointmentTime" class="form-label">Services offer</label>

                                    <div class="custom-search-dropdown wrapper custom-search-dropdown-1">
                                        <div class="select-btn">
                                            <span class="placeholder-text" id="serviceCategory">Select category</span>
                                            <i data-feather="chevron-down"></i>
                                        </div>
                                        <div class="content shadow-sm">
                                            <div class="search">
                                                <i data-feather="search"></i>
                                                <input type="text" placeholder="Search">
                                            </div>
                                            <ul class="options ps-0">
                                                <li>Australia</li>
                                                <li>Colombia</li>
                                                <li>Denmark</li>
                                                <li>Germany</li>
                                                <li>Indonesia</li>
                                                <li>Australia</li>
                                                <li>Colombia</li>
                                                <li>Denmark</li>
                                                <li>Germany</li>
                                                <li>Indonesia</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                                <div class="col-md-6">
                                    <label for="AppointmentTime" class="form-label">Type</label>
                                    <!-- <div class="custom-search-dropdown wrapper" id="custom-search-dropdown-2"> -->
                                    <div class="custom-search-dropdown custom-search-dropdown-2 wrapper">
                                        <div class="select-btn">
                                            <span class="placeholder-text" id="serviceType">Select type</span>
                                            <i data-feather="chevron-down"></i>
                                        </div>
                                        <div class="content shadow-sm">
                                            <div class="search">
                                                <i data-feather="search"></i>
                                                <input type="text" placeholder="Search">
                                            </div>
                                            <ul class="options ps-0">
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Reason for visit / appointment -->
                            </div>
                            <fieldset>
                                <legend class="fs-200">Is this your first appointment with us/are you a new patient ?</legend>
                                <div class="row mb-3 g-2 g-md-3">
                                    <div class="col">
                                        <ul class="list-style-none ps-0 mb-0 d-flex align-items-center">
                                            <li class="me-5">
                                                <div class="custom-radio-control">
                                                    <input type="radio" name="FirstAppointment" id="Yes" value="1">
                                                    <label for="Yes" class="fs-200">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="fake-btn"></div>
                                                            <span class="fw-semi-bold">Yes</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-radio-control">
                                                    <input type="radio" name="FirstAppointment" id="No" value="0">
                                                    <label for="No" class="fs-200">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="fake-btn"></div>
                                                            <span class="fw-semi-bold">No</span>                                                            
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row g-2 g-md-3">
                                <div class="col-md-6">
                                    <label for="LastAppointmentDate" class="form-label">If yes last appointment date</label>
                                    <div class="custom-date-control" aria-label="inverse-green-icon-date">
                                        <input type="tel" class="input-date-2 border-0" placeholder="DD/MM/YYYY" id="LastAppointmentDate">
                                    </div>
                                    <!-- <input type="date" class="form-control" placeholder="DD/MM/YYYY" id="DoB"> -->
                                </div>
                                <div class="col-12">
                                    <label for="Comment" class="form-label">Comment</label>
                                    <textarea name="Comment" id="Comment" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn button px-3 text-white">Continue to Payment</button>
                </form>
            </div>
        </div>
        <button class="btn button px-3" data-type="inverted">Go back to calender</button>
    </div>
</section>
<script>
    /* Cleave  */
    var cleaveDate = new Cleave(".input-date", {
        date: true,
        datePattern: ["d", "m", "Y"],
    });
    var cleaveDate2 = new Cleave(".input-date-2", {
        date: true,
        datePattern: ["d", "m", "Y"],
    });
    var cleaveTime = new Cleave(".input-element", {
        time: true,
        timePattern: ["h", "m", "s"],
    });
</script>
<!-- Footer -->
<?php include_once "./components/footer.php" ?>