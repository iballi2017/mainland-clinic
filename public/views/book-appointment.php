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
        <button id="my-prev-button">Prev</button>
        <button id="my-next-button">Next</button>
        <div id='calendar-container'>
            <div id='calendar'></div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php include_once "../components/footer.php" ?>