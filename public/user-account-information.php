<!-- Header -->
<?php include_once "./components/header.php" ?>

<!-- Title section -->
<div class="title-section-container">
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../" class="base-text-color-500 text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item">
                    My Account
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
        <!-- Open sidenav button -->
        <?php require "../components/open-side-nav-button.php" ?>
        <div class="border-accent-50 border rounded-250 p-3">
            <div class="row g-3">
                <div class="col-12 col-lg-4">
                    <!-- User account sidenav -->
                    <?php require "../components/user-account-sidenav.php" ?>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="border-accent-50 border rounded-250 px-3 pt-4 pb-5">
                        <h2 class="fw-semi-bold fs-300 border-bottom border-accent-50 pb-3">Account information</h2>

                        <form action="">
                            <div class="col-12 mb-3">
                                <label class="form-label" for="FirstName">First Name</label>
                                <input type="text" class="form-control" id="FirstName">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="LastName">Last Name</label>
                                <input type="text" class="form-control" id="LastName">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="PhoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="PhoneNumber">
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label" for="CurrentPassword">Current Password</label>
                                <input type="text" class="form-control" id="CurrentPassword">
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label" for="NewPasword">New Pasword</label>
                                <input type="text" class="form-control" id="NewPasword">
                            </div>


                            <div class="col-12 mb-4">
                                <label class="form-label" for="ConfirmNewPasword">Confirm New Pasword</label>
                                <input type="text" class="form-control" id="ConfirmNewPasword">
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
<?php include_once "./components/footer.php" ?>