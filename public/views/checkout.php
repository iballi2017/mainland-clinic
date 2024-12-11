<!-- Header -->
<?php include_once "../components/header.php" ?>

<!-- Title section -->
<div class="title-section-container">
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../" class="base-text-color-500 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="./shop.php" class="base-text-color-500 text-decoration-none">Shop</a></li>
                <li class="breadcrumb-item"><a href="./shopping-cart.php" class="base-text-color-500 text-decoration-none">Shopping cart</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Checkout</h1>
    </section>
</div>


<section class="padding-block-500">
    <div class="container">
        <div class="border border-accent-50 rounded table-responsive">
            <table class="table mb-0" aria-label="checkout information">
                <thead>
                    <tr>
                        <th scope="col" colspan="3">
                            <span class="fw-semi-bold fs-300">Your Order</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" colspan="2">
                            <span class="fw-semi-bold">
                                <div class="cell-inner">Product</div>
                            </span>
                        </th>
                        <td class="text-end">
                            <span class="fw-semi-bold">
                                <div class="cell-inner">Subtotal
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="3" class="p-0">
                            <table class="table mb-0 table-borderless" aria-label="list of checkout items">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="cell-inner">
                                                Hot sale full auto biochemistry
                                            </div>
                                        </th>
                                        <td class="text-end">
                                            <div class="cell-inner fw-semibold">
                                                x 1
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="cell-inner">
                                                ₦283,800.00
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="cell-inner">
                                                Hot sale full auto biochemistry
                                            </div>
                                        </th>
                                        <td class="text-end">
                                            <div class="cell-inner fw-semibold">
                                                x 1
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="cell-inner">
                                                ₦283,800.00
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="2">
                            <div class="cell-inner">Subtotal</div>
                        </th>
                        <td class="text-end">
                            <div class="cell-inner">₦367,600.00</div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="2">
                            <div class="cell-inner">VAT</div>
                        </th>
                        <td class="text-end">
                            <div class="cell-inner">₦800.00</div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="2">
                            <span class="fw-semi-bold fs-300">
                                <div class="cell-inner">Total</div>
                            </span>
                        </th>
                        <td class="text-end">
                            <span class="fw-semi-bold fs-300">
                                <div class="cell-inner">₦368,400.00
                                </div>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


<section class="padding-block-500">
    <div class="container">
        <form action="">

            <div class="border border-accent-50 rounded pb-3">
                <fieldset>
                    <legend class="fw-semi-bold fs-300 mb-3 border-bottom px-3 py-2">Billing Details</legend>
                    <div class="px-4 py-3">
                        <div class="row g-2 g-lg-3 mb-3">
                            <div class="col-md-6">
                                <label for="FirstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="FirstName">
                            </div>
                            <div class="col-md-6">
                                <label for="LastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="LastName">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="PhoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="PhoneNumber">
                        </div>
                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="Address">
                        </div>

                        <div class="row g-2 g-lg-3">
                            <div class="col-md-6">
                                <label for="Town/City" class="form-label">Town/City</label>
                                <input type="text" id="Town/City" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="State" class="form-label">State</label>
                                <div class="custom-select rounded-250">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select state</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>


            <aside class="fs-150 p-4">
                Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.
            </aside>
            <div class="d-grid mb-5">
                <button class="button">Continue to payment</button>
            </div>
        </form>
    </div>
</section>

<!-- Footer -->
<?php include_once "../components/footer.php" ?>