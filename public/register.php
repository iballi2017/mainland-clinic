<?php
include_once(__DIR__ . "./components/header.php");
?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <div class="auth-card | card shadow-sm border-0">
                <div class="card-body">
                    <h1 class="card-title fw-bold fs-300 text-center mb-4">
                        Sign Up
                    </h1>
                    <form class="d-flex flex-column gap-4">


                        <fieldset class="card">
                            <legend class="card-header fw-semibold fs-200">
                                Personal Information
                            </legend>
                            <div class="card-body">
                                <div class="row g-3 mb-4">
                                    <div class="col">
                                        <label for="Town/City" class="form-label">Town/City</label>
                                        <input type="text" class="form-control" id="Town/City" aria-label="Town/City">
                                    </div>
                                    <div class="col">
                                        <label for="State" class="form-label">State</label>
                                        <select class="form-select cursor-pointer" aria-label="Default select example">
                                            <option selected>Select state</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="full_name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="full_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="phone">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="tel" class="form-control" id="age">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sex" class="form-label">Sex</label>
                                        <select class="form-select cursor-pointer" aria-label="Select sex">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="religion" class="form-label">Religion</label>
                                        <select class="form-select cursor-pointer" id="religion" aria-label="Select religion">
                                            <option value="christianity">Christianity</option>
                                            <option value="islam">Islam</option>
                                            <option value="traditionalist">Traditionalist</option>
                                            <option value="atheist">Atheist</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="marital_status" class="form-label">Marital Status</label>
                                        <select class="form-select cursor-pointer" id="marital_status" aria-label="Select sex">
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="divorced">Divorced</option>
                                            <option value="widowed">Widowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="card">
                            <legend class="card-header fw-semibold fs-200">
                                Address
                            </legend>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">Town/City</label>
                                        <input type="text" class="form-control" id="city">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">State</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="card">
                            <legend class="card-header fw-semibold fs-200 border-bottom">
                                Referrer
                            </legend>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="informant" class="form-label">Informant</label>
                                        <!-- <input type="text" class="form-control" id="informant"> -->
                                        <!-- <label for="State" class="form-label">State</label> -->
                                        <select class="form-select cursor-pointer" aria-label="Default select example">
                                            <option value="1">Toddler</option>
                                            <option value="2">Aged</option>
                                            <option value="3">Non English Speaker</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="relationship" class="form-label">Relationship</label>
                                        <input type="text" class="form-control" id="relationship">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="card">
                            <legend class="card-header fw-semibold fs-200">
                                Create Password
                            </legend>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="confirm_password" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm_password">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="col-12">
                            <button type="submit" class="button">Register</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="my-3"></div>
            <p class="fs-150">Already have an account? <a href="./login.php" class="text-decoration-none text-primary-500 fw-semibold">Log In</a></p>
        </div>
    </div>

    <!-- Success message -->
    <div class="text-center d-flex align-items-center justify-content-center flex-column" style="min-height: 100vh;">
        <h1 class="fs-200 fw-semi-bold">Account Created successfully.</h1>
        <p class="fs-150 mb-4">A mail was sent to your email for verification </p>
        <a href="/" class="button">Go home</a>
    </div>
</div>
<?php
include_once(__DIR__ . "./components/footer.php");
?>