<!-- Header -->
<?php include_once "../components/header.php" ?>

<!-- Title section -->
<div class="title-section-container">
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../" class="base-text-color-500 text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Account Information
                </li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Account Information</h1>
    </section>
</div>

<section class="padding-block-600">
    <div class="container">
        <button class="navbar-toggler p-0 mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#account-side-navigation" aria-expanded="false" aria-label="Toggle side navigation">
            <i data-feather="menu"></i>
        </button>
        <div class="border-accent-50 border rounded-250 p-3">
            <div class="row g-3">
                <div class="col-12 col-lg-4">
                    <nav class="border-accent-50 border rounded-250 p-3 collapse navbar-collapse" id="account-side-navigation">
                        <button class="navbar-toggler p-0 mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#account-side-navigation" aria-expanded="false" aria-label="Toggle side navigation">
                            <i data-feather="x"></i>
                        </button>
                        <ul role="list" class="mb-0 ps-0" aria-label="side navigation">
                            <li class="nav-list">
                                <div class="icon-content-wrap">
                                    <div class="nav-icon">
                                        <img src="../assets/images/icons/profile-avatar.svg" alt="profile vatar" class="img-fluid" />
                                    </div>
                                    <div>
                                        <div class="fw-semi-bold fs-300">
                                            <div>
                                                My Profile
                                            </div>
                                        </div>
                                        <ul class="ps-0 list-style-none">
                                            <li>
                                                <a href="#" class="fs-150 text-decoration-none text-secondary-500">Account information</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fs-150 text-decoration-none text-secondary-500">Address</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-list">
                                <div class="icon-content-wrap">
                                    <div class="nav-icon">
                                        <img src="../assets/images/icons/file-folder.svg" alt="profile vatar" class="img-fluid" />
                                    </div>
                                    <div>
                                        <div class="fw-semi-bold fs-300">
                                            <div>
                                                My Orders
                                            </div>
                                        </div>
                                        <ul class="ps-0 list-style-none">
                                            <li>
                                                <a href="#" class="fs-150 text-decoration-none text-secondary-500">Order history</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fs-150 text-decoration-none text-secondary-500">Wishlist</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-list">
                                <div class="icon-content-wrap">
                                    <div class="nav-icon">
                                        <img src="../assets/images/icons/carlendar.svg" alt="profile vatar" class="img-fluid" />
                                    </div>
                                    <div>
                                        <div class="fw-semi-bold fs-300">
                                            <div>
                                                My Appointments
                                            </div>
                                        </div>
                                        <ul class="ps-0 list-style-none">
                                            <li>
                                                <a href="#" class="fs-150 text-decoration-none text-secondary-500">Appointment history</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fs-150 text-decoration-none text-secondary-500">Pending reviews</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-list">
                                <div class="icon-content-wrap">
                                    <div class="nav-icon">
                                        <img src="../assets/images/icons/trah-can-times.svg" alt="profile vatar" class="img-fluid" />
                                    </div>
                                    <div>
                                        <div class="fw-semi-bold fs-300">
                                            <div>
                                                Delete account
                                            </div>
                                        </div>
                                        <ul class="ps-0 list-style-none">
                                            <li>
                                                <a href="#" class="fs-150 text-decoration-none text-secondary-500">Delete account</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-list">
                                <button class="btn logout-btn">Logout</button>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="col-12 col-lg-8">
                    <div class="border-accent-50 border rounded-250 px-3 pt-4 pb-5">
                        <h2 class="fw-semi-bold fs-300 border-bottom border-accent-50 pb-3">Address</h2>

                        <form action="">
                            <div class="col-12 mb-3">
                                <label class="form-label" for="Address">Address</label>
                                <input type="text" class="form-control" id="Address">
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 mb-3">
                                    <label class="form-label" for="Town/City">Town/City</label>
                                    <input type="text" class="form-control" id="Town/City">
                                </div>
                                <div class="col-12 col-lg-6 mb-3">
                                    <label class="form-label" for="Address">State</label>
                                    <div class="custom-select rounded-250">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select state</option>
                                            <option value="1">Adamawa</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="3">Lorem ipsum dolor sit amet.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="button submit-btn">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include_once "../components/footer.php" ?>