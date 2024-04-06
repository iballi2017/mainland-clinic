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
                    <p>At Mainland Clinic, we are dedicated to providing the highest quality of medical care and
                        wellness support to our patients. </p>
                </section>
            </div>
            <div class="col-6 col-md-3">
                <h6 class="fs-200 fw-semi-bold mb-lg-4">Quicklinks</h6>
                <nav>
                    <ul role="list" class="list-style-none ps-0" aria-label="secondary">
                        <li><a href="#" class="text-decoration-none base-text-color-200 line-height-400">About
                                us</a></li>
                        <li><a href="#" class="text-decoration-none base-text-color-200 line-height-400">Careers</a>
                        </li>
                        <li><a href="#" class="text-decoration-none base-text-color-200 line-height-400">FAQs</a>
                        </li>
                        <li><a href="#" class="text-decoration-none base-text-color-200 line-height-400">Terms &
                                conditions</a></li>
                        <li><a href="#" class="text-decoration-none base-text-color-200 line-height-400">Privacy
                                policy</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-12 col-md-3">
                <h6 class="fs-200 fw-semi-bold mb-lg-4">Contacts</h6>
                <ul class="list-style-none ps-0">
                    <li class="mb-4">Email: info@avonhealthcare.com</li>
                    <li class="mb-4">Head Office: 2nd Floor, Afriland Towers, 97/101 Broad Street, Lagos, Nigeria.
                    </li>
                    <li class="mb-4">Phone number: 0700 277 9800</li>
                </ul>

            </div>
            <div class="col-12 col-md-3">
                <h6 class="fs-200 fw-semi-bold mb-lg-4">Newsletter</h6>
                <p>Subscribe to our newsletters to get our latest health updates, promos and discounts.
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
<?php include "appointment-modal.php"; ?>


<!-- jquery-3.7.0 -->
<script src="./lib/jquery-3.7.0.min.js"></script>
<!-- Bootstrap JS @5.2.3 -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script> -->
<script src="./lib/popper-core@2.11.6.min.js"></script>
<script src="./lib/bootstrap-5.2.3/bootstrap.min.js"></script>

<!-- Feather Icons -->
<script src="https://unpkg.com/feather-icons"></script>
<script>
    /**Feather Icons */
    if (feather) null
    feather.replace()
</script>
<!-- OwlCarousel 2.3.4 -->
<script src="./lib/owlcarousel/js/owl.carousel.min.js"></script>
<!-- RateYo -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<!-- Cleave -->
<!-- <script>
    document.addEventListener('DOMContentLoaded', () => {
        var cleaveDate = new Cleave('.input-date', {
            date: true,
            datePattern: ['d', 'm', 'Y']
        });
        var cleave = new Cleave('.input-element', {
            time: true,
            timePattern: ['h', 'm', 's']
        });
    });
</script> -->
<!-- Custom JS -->
<script src="./scripts/custom-booking-calendar.js"></script>
<script src="./scripts/index.jquery.js"></script>
<script src="./scripts/index.js"></script>
</body>

</html>