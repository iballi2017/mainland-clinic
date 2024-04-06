<!-- Header -->
<?php include_once "./components/header.php" ?>

<!-- Title section -->
<section class="title-section-container">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../" class="base-text-color-500 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Shop</h1>
    </div>
</section>


<section class="">
    <div class="container">

        <div class="d-flex align-items-center justify-content-between mt-4">

            <!-- filter select -->
            <div class="custom-select rounded-250 mb-5 me-2" style="max-width: 200px; height: 36px;">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Sort by</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="3">Lorem ipsum dolor sit amet.</option>
                </select>
            </div>

            <!--  -->
            <div class="custom-input-group rounded-250 mb-5" style="max-width: 200px; height: 36px;">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn" type="button" id="button-addon2">
                        <img src="./assets/images/icons/search-green.svg" alt="" class="img-fluid">
                    </button>
                </div>
            </div>
        </div>


        <h2 class="visually-hidden">Product listing</h2>
        <div class="row g-3 mb-3">
            <div class="col-6 col-md-3">
                <div class="product-item-wrap out-of-stock">
                    <div class="card rounded-250 border-accent-50">
                        <div class="img-wrap">
                            <img src="./assets/images/products/surgical-tables.png" class="card-img-top" alt="Surgical tables">
                        </div>

                        <div class="card-body">
                            <p class="fs-150 product-title">
                                <a href="./product-details.php?title=Accu chek Glucometer strip" title="Accu chek Glucometer strip" class="text-decoration-none base-text-color-500">Accu chek Glucometer strip</a>
                                <br />
                                <span class="fs-300 fw-semi-bold">₦2,400.00</span>
                            </p>

                        </div>

                        <div class="card-footer | bg-white">
                            <button class="btn add-to-cart | w-100">Add to cart</button>
                            <span class="my-1 d-block"></span>
                            <button class="btn add-to-wishlist | w-100">Add to wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="product-item-wrap">
                    <div class="card rounded-250 border-accent-50">
                        <div class="img-wrap">
                            <img src="./assets/images/products/product-sample-1.png" class="card-img-top" alt="...">
                        </div>

                        <div class="card-body">
                            <p class="fs-150 product-title">
                                <a href="./product-details.php?title=Lorem ipsum dolor sit, amet consectetur adipisicing." title="Lorem ipsum dolor sit, amet consectetur adipisicing." class="text-decoration-none base-text-color-500">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing.
                                </a>
                                <br />
                                <span class="fs-300 fw-semi-bold">₦2,400.00</span>
                            </p>

                        </div>

                        <div class="card-footer | bg-white">
                            <button class="btn add-to-cart | w-100">Add to cart</button>
                            <span class="my-1 d-block"></span>
                            <button class="btn add-to-wishlist | w-100">Add to wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Pagination -->
        <!-- <div class="text-end"> -->
        <nav class="my-5" aria-label="Page navigation" role="list">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">
                        <!-- <i data-feather="triangle"></i> -->
                        <svg style="transform: rotate(-90deg);" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-triangle">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        </svg>
                        <!-- <img src="./assets/images/" alt="" class="img-fluid"> -->
                    </a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">
                        <svg style="transform: rotate(90deg);" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-triangle">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        </svg></a></li>
            </ul>
        </nav>
        <!-- </div> -->
    </div>
</section>





<!-- Footer -->
<?php include_once "./components/footer.php" ?>