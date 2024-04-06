<!-- Header -->
<?php include_once "./components/header.php" ?>

<!-- Title section -->
<div class="title-section-container">
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../" class="base-text-color-500 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping cart</li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Shopping cart</h1>
    </section>
</div>


<section class="padding-block-800">
    <div class="container">
        <a href="./shop.php" class="btn border border-primary-500 fw-semi-bold text-primary-500 px-3 py-2 mb-5">Continue shopping</a>

        <div class="border rounded border-accent-50 mb-4">
            <div class="table-responsive">
                <table class="table mb-0" aria-label="shopping cart table">
                    <thead>
                        <tr>
                            <!-- <th scope="col"></th> -->
                            <th scope="col" colspan="2">Item</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quality</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 80px">
                                <div class="cell-inner img-wrap">
                                    <img src="../assets/images/products/patient-warmer.png" alt="Product sample 1" class="img-fluid">
                                </div>
                            </th>
                            <td>
                                <div class="cell-inner">
                                    Avante Wildcat 750 Patient Warmer
                                </div>
                            </td>
                            <td>
                                <div class="cell-inner">
                                    ₦<span class="item-price">283800</span>
                                </div>
                            </td>
                            <td>
                                <div class="cell-inner">
                                    <!-- <div> -->
                                        <div class="qty-ctrl">
                                            <div class="qty-val">1</div>
                                            <div>
                                                <button class="btn-sm qty-add">+</button>
                                            </div>
                                            <div>
                                                <button class="btn-sm qty-remove">-</button>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </td>
                            <td>
                                <div class="cell-inner">₦283,800.00
                                </div>
                            </td>
                            <td>
                                <div class="cell-inner">
                                    <button type="button" aria-label="remove item table item">
                                        <img src="../assets/images/icons/times-dark-box.svg" alt="" class="img-fluid">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!--  -->
                        <tr>
                            <th scope="row" style="width: 80px">
                                <div class="cell-inner img-wrap">
                                    <img src="../assets/images/products/patient-warmer.png" alt="Product sample 1" class="img-fluid">
                                </div>
                            </th>
                            <td>
                                <div class="cell-inner">
                                    Avante Wildcat 750 Patient Warmer
                                </div>
                            </td>
                            <td>
                                <div class="cell-inner">
                                    ₦283,800.00
                                </div>
                            </td>
                            <td>
                                <div class="cell-inner">
                                    <!-- <div> -->
                                        <div class="qty-ctrl">
                                            <div class="qty-val">1</div>
                                            <div>
                                                <button class="btn-sm qty-add">+</button>
                                            </div>
                                            <div>
                                                <button class="btn-sm qty-remove">-</button>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </td>
                            <td>
                                <div class="cell-inner">₦283,800.00
                                </div>
                            </td>
                            <td>
                                <div class="cell-inner">
                                    <button type="button" aria-label="remove item table item">
                                        <img src="../assets/images/icons/times-dark-box.svg" alt="" class="img-fluid">
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--  -->
        <div class="border rounded border-accent-50 ms-auto" style="max-width: 300px">
            <table class="table | mb-0" aria-label="shopping cart summary">
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="text-center title">CART SUMMARY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Subtotal</th>
                        <td class="text-end fw-bold">₦283,800.00</td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="2">
                            <a href="./checkout.php" class="btn">Checkout ₦368,400.00</a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


<section>


    <!-- Success message -->
    <div class="text-center d-flex align-items-center justify-content-center flex-column py-5">
        <h1 class="fs-50 fw-semi-bold py-5 text-accent-50">Cart is empty</h1>
    </div>
</section>



<!-- Footer -->
<?php include_once "./components/footer.php" ?>