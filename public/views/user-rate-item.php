<!-- Header -->
<?php include_once "../components/header.php" ?>
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css"> -->
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script> -->

<style>
    @import "https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css";
</style>
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
                    My Orders
                </li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Pending reviews</h1>
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
                        <h2 class="fw-semi-bold fs-300 border-bottom border-accent-50 pb-3">Rate and review product</h2>
                        <div class="ps-0 list-style-none py-2">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="Rating" class="form-label">Your Rating</label>
                                    <!-- <input type="text" name="Rating" class="form-control" id="Rating"> -->
                                    <div id="rateYo"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="FullName" class="form-label">Full Name</label>
                                    <input type="text" name="FullName" class="form-control" id="FullName">
                                </div>
                                <div class="mb-3">
                                    <label for="Message" class="form-label">Message</label>
                                    <textarea name="Message" class="form-control" id="Message" cols="30" rows="4"></textarea>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn button text-white" id="getRating">Submit</button>
                                </div>
                            </form>


                            <!-- Success message -->
                            <div class="text-center d-flex align-items-center justify-content-center flex-column py-5">
                                <h1 class="fs-200 fw-semi-bold py-5">Thank you for your feedback!!</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php include_once "../components/footer.php" ?>