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
                <li class="breadcrumb-item" aria-current="page">
                    My Account
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    My Orders
                </li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Wishlist</h1>
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

                <div class="col-12 col-lg-8" id="order-history">
                    <div class="border-accent-50 border rounded-250 px-3 pt-4 pb-5">
                        <h2 class="fw-semi-bold fs-300 border-bottom border-accent-50 pb-3">Wishlist</h2>
                        <ul class="ps-0 list-style-none py-2">
                            <li>
                                <div class="product-card card | mb-3">
                                    <div class="row g-0">
                                        <div class="col-12 p-3 col-md-1 d-flex align-items-center">
                                            <button class="btn btn-sm p-0">
                                                <img src="../assets/images/icons/cancel-red-box.svg" alt="" class="img-fluid">
                                            </button>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                                            <div class="product-image-wrap">
                                                <img src="../assets/images/product-item.png" class="img-fluid rounded-start" alt="Product item">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <ul class="prod-info | list-style-none ps-0 mb-0" role="list">
                                                    <li class="title fs-150 fw-regular">Combo 10 urine stripe</li>
                                                    <li class="fs-300 fw-semi-bold">₦2,400.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="align-lg-right px-3 pb-3 py-lg-3">
                                                <button href="#" class="btn bg-primary-500 text-white btn-sm px-3">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card card | mb-3">
                                    <div class="row g-0">
                                        <div class="col-12 p-3 col-md-1 d-flex align-items-center">
                                            <button class="btn btn-sm p-0">
                                                <img src="../assets/images/icons/cancel-red-box.svg" alt="" class="img-fluid">
                                            </button>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                                            <div class="product-image-wrap">
                                                <img src="../assets/images/product-item.png" class="img-fluid rounded-start" alt="Product item">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <ul class="prod-info | list-style-none ps-0 mb-0" role="list">
                                                    <li class="title fs-150 fw-regular">Combo 10 urine stripe</li>
                                                    <li class="fs-300 fw-semi-bold">₦2,400.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="align-lg-right px-3 pb-3 py-lg-3">
                                                <button href="#" class="btn bg-primary-500 text-white btn-sm px-3">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include_once "../components/footer.php" ?>