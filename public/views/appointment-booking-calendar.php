<!-- Header -->
<?php include_once "../components/header.php" ?>

<!-- Title section -->
<div class="title-section-container">
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../" class="base-text-color-500 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Book Appointment</li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Book Appointment</h1>
    </section>
</div>

<section class="padding-block-600">
    <div class="container">
        <div class="border border-accent-50 rounded-250 pb-4">
            <div id="calendar"></div>
        </div>
    </div>
</section>

<!-- <button class="button cta | d-none d-xl-block" data-bs-toggle="modal" data-bs-target="#confirmSelection">Book an appointment</button> -->
<div class="modal fade" id="confirmSelection" data-bs-backdrop="static" tabindex="-1" aria-labelledby="confirmSelectionLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header px-4 justify-content-center border-0">
                <h1 class="fs-300 fw-semi-bold mb-0" id="confirmMessage"></h1>
            </div>
            <div class="modal-body px-4 pb-5">
                <div class="d-grid">
                    <!-- <button type="button" class="btn button py-3 text-white" id="confirmSelectionBtn">Yes</button>
                    <div class="my-2"></div>
                    <button type="button" class="btn button py-3" data-type="inverted" data-bs-dismiss="modal">No</button> -->
                    <input type="button" class="btn button py-3 text-white" data-bs-dismiss="modal" id="confirmYes" value="Yes" />
                    <div class="my-2"></div>
                    <input type="button" class="btn button py-3" data-type="inverted" data-bs-dismiss="modal" id="confirmNo" value="No" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include_once "../components/footer.php" ?>