<?php
include_once(__DIR__ . "./components/header.php");
?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-lg-5 mx-auto">
            <div class="auth-card | card shadow-sm border-0">
                <div class="card-body">
                    <h1 class="card-title fw-bold fs-300 text-center mb-4">
                        Sign In
                    </h1>
                    <form class="d-flex flex-column gap-4">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="password" class="form-label">Password</label>
                                        <a href="#" class="fw-semibold fs-100 text-decoration-none" style="color: #1D9BF0">Forgot password?</a>
                                    </div>

                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="button w-100">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="my-3"></div>
            <p class="fs-150">Don't have an account? <a href="./register.php" class="text-decoration-none text-primary-500 fw-semibold">Register</a></p>
        </div>
    </div>
</div>
<?php
include_once(__DIR__ . "./components/footer.php");
?>