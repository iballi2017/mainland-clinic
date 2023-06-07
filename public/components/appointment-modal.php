<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header px-4">
                <h1 class="fs-300 fw-semi-bold mb-0" id="exampleModalLabel">Select Appointment type</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 pb-5">
                <form action="">
                    <div>
                        <ul class="appointment-types | list-style-none ps-0">
                            <li>
                                <div class="book-radio">
                                    <input type="radio" name="Appointment" id="ClinicVisit" value="Onsite/Physical clinic visit">
                                    <label for="ClinicVisit" class="fs-200">
                                        <div class="d-flex justify-content-between align-items-center w-100">
                                            <div class="d-flex align-items-center">
                                                <div class="fake-btn"></div>
                                                Onsite/Physical clinic visit
                                            </div>
                                            <div>Free</div>
                                        </div>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="book-radio">
                                    <input type="radio" name="Appointment" id="HomeCare" value="Home care service">
                                    <label for="HomeCare" class="fs-200">
                                        <div class="d-flex justify-content-between align-items-center w-100">
                                            <div class="d-flex align-items-center">
                                                <div class="fake-btn"></div>
                                                Home care service
                                            </div>
                                            <div>₦25,000.00</div>
                                        </div>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="book-radio">
                                    <input type="radio" name="Appointment" id="VirtualClinic" value="Virtual clinic">
                                    <label for="VirtualClinic" class="fs-200">
                                        <div class="d-flex justify-content-between align-items-center w-100">
                                            <div class="d-flex align-items-center">
                                                <div class="fake-btn"></div>
                                                Virtual clinic
                                            </div>
                                            <div>₦15,000.00</div>
                                        </div>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn button py-3 text-white" id="appointmentSelectionBtn" disabled>Next</button>
                        <div class="my-2"></div>
                        <button type="button" class="btn button py-3" data-type="inverted" data-bs-dismiss="modal">Go Back</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>