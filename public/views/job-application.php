<!-- Header -->
<?php include_once "../components/header.php" ?>

<!-- Title section -->
<div class="title-section-container">
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../" class="base-text-color-500 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Career</li>
                <li class="breadcrumb-item active" aria-current="page">Medical Doctors</li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Medical Doctors</h1>
    </section>
</div>


<section class="padding-block-800">
    <div class="container">

        <div class="border-accent-50 border rounded-250">
            <div class="border-accent-50 border-bottom p-3 fw-semi-bold fs-300">Application form</div>
            <div class="px-3 my-5">
                <form action="">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="FullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control mb-4" id="FullName">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="EmailAddress" class="form-label">Email Address</label>
                            <input type="text" class="form-control mb-4" id="EmailAddress">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="Phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control mb-4" id="Phone">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control mb-4" id="Address">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="CoverLetter" class="form-label cust-file-display mb-4">
                                <span>Upload Cover Letter</span>
                                <input type="file" class="form-control mb-4" id="CoverLetter">
                                <span class="">
                                    <div class="icon-wrap">
                                        <img src="../assets/images/icons/plus-gray.svg" alt="" class="img-fluid">
                                    </div>
                                    <p>Drop the file or choose from drive</p>
                                </span>
                            </label>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="Resume" class="form-label cust-file-display">
                                <span>Upload CV/Resume</span>
                                <input type="file" class="form-control mb-4" id="Resume">
                                <span class="">
                                    <div class="icon-wrap">
                                        <img src="../assets/images/icons/plus-gray.svg" alt="" class="img-fluid">
                                    </div>
                                    <p>Drop the file or choose from drive</p>
                                </span>
                            </label>
                        </div>
                    </div>

                    <!-- Submitted files -->
                    <ul class="list-style-none mb-0 ps-0" id="file-list">
                        <li class="file-item">
                            <span>Akinolu Mogaji Cover letter</span>
                            <button type="button" aria-label="remove item table item">
                                <img src="../assets/images/icons/times-dark-box.svg" alt="">
                            </button>
                        </li>
                        <li class="file-item">
                            <span>Akinolu Mogaji CV/Resume</span>
                            <button type="button" aria-label="remove item table item">
                                <img src="../assets/images/icons/times-dark-box.svg" alt="">
                            </button>
                        </li>
                    </ul>
                    <button class="button mt-3">Submit</button>
                </form>
            </div>
        </div>

    </div>
</section>


        <!-- Success message -->
        <div class="text-center d-flex align-items-center justify-content-center flex-column"
            style="min-height: 100vh;">
            <h1 class="fs-200 fw-semi-bold mb-4">Application submited Successfully</h1>
            <a href="/" class="button">Go home</a>
        </div>
    </div>

<!-- Footer -->
<?php include_once "../components/footer.php" ?>