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


<!--  -->
<button class="button cta | d-none d-xl-block" data-bs-toggle="modal" data-bs-target="#confirmSelection">Book an appointment</button>

<div class="modal fade" id="confirmSelection" data-bs-backdrop="static" tabindex="-1" aria-labelledby="confirmSelectionLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header px-4 justify-content-center border-0">
                <h1 class="fs-300 fw-semi-bold mb-0" id="confirmSelectionLabel">Do you want to proceed?</h1>
            </div>
            <div class="modal-body px-4 pb-5">
                <div class="d-grid">
                    <button type="button" class="btn button py-3 text-white" id="appointmentSelectionBtn">Yes</button>
                    <div class="my-2"></div>
                    <button type="button" class="btn button py-3" data-type="inverted" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const exampleModal = document.getElementById('confirmSelection')
    exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        console.log("button$: ", button)
        let recipient;
        if (!button) return;
        // Extract info from data-bs-* attributes
        recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        const modalTitle = exampleModal.querySelector('.modal-title')
        const modalBodyInput = exampleModal.querySelector('.modal-body input')
        if (modalTitle) modalTitle.textContent = `New message to ${recipient}`
        if (modalBodyInput) modalBodyInput.value = recipient;
    })
</script>


<!-- Footer -->
<?php include_once "../components/footer.php" ?>