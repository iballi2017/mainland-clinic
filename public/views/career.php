<!-- Header -->
<?php include_once "../components/header.php" ?>

<!-- Title section -->
<div class="title-section-container">
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../" class="base-text-color-500 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Career</li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Career</h1>
    </section>
</div>


<section class="padding-block-800">
    <div class="container">
        <!-- filter select -->
        <div class="custom-select rounded-250 mb-5" style="max-width: 200px">
            <select class="form-select" aria-label="Default select example">
                <option selected>Job Type</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="3">Lorem ipsum dolor sit amet.</option>
            </select>
        </div>

        <!-- Job Preview List -->
        <ul class="list-style-none ps-0">
            <li class="row g-0 px-2 py-3 px-lg-3 border-accent-50 border rounded-250 mb-4">
                <div class="col-12 col-lg-10">
                    <div class="fw-semi-bold">Medical Doctors</div>
                    <a href="#" class="fs-50 text-alt-200 text-decoration-none mb-2 d-block">More Details</a>
                </div>
                <div class="col-12 col-lg-2 text-lg-end">
                    <a href="./job-details.php?title=Medical Doctors" class="button text-capitalize">Apply now</a>
                </div>
            </li>
            <li class="row g-0 px-2 py-3 px-lg-3 border-accent-50 border rounded-250 mb-4">
                <div class="col-12 col-lg-10">
                    <div class="fw-semi-bold">Nurses</div>
                    <a href="./job-details.php" class="fs-50 text-alt-200 text-decoration-none mb-2 d-block">More Details</a>
                </div>
                <div class="col-12 col-lg-2 text-lg-end">
                    <a href="./job-details.php?title=Nurses" class="button text-capitalize">Apply now</a>
                </div>
            </li>
        </ul>
    </div>
</section>


<!-- Appointment Booking -->
<?php include_once "../components/appointment-booking.php" ?>

<!-- Footer -->
<?php include_once "../components/footer.php" ?>