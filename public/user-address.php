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
                    Address
                </li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Address</h1>
    </section>
</div>

<section class="padding-block-600">
    <div class="container">
        <div class="col-12 col-lg-4">
            <!-- Open sidenav button -->
            <?php require "../components/open-side-nav-button.php" ?>
        </div>
        <div class="border-accent-50 border rounded-250 p-3">
            <div class="row g-3">
                <div class="col-12 col-lg-4">
                    <!-- User account sidenav -->
                    <?php require "../components/user-account-sidenav.php" ?>
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
<?php include_once "./components/footer.php" ?>