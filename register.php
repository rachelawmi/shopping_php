<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
    <?php include("navbar.php") ?>


    <div class="container-fluid">
        <div class="row min-vh-100">
            <div class="col-12 d-flex align-items-center justify-content-center bg-white">
                <div class="auth-card w-100 p-4 p-md-5" style="max-width: 450px;">
                    <div class="mb-5">
                        <a href="index.php" class="text-decoration-none mb-4 d-inline-block text-primary fw-bold">
                            <i class="bi bi-arrow-left me-2">For our modern styles</i> Back to Home
                        </a>
                        <h2 class="fw-bold">Register</h2>
                    </div>

                    <form>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">User Name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-secondary"></i></span>
                                <input type="text" class="form-control bg-light border-start-0 ps-0" placeholder="Enter Yoru Name" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <label class="form-label small fw-bold">Password</label>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock text-secondary"></i></span>
                                <input type="password" class="form-control bg-light border-start-0 ps-0" placeholder="••••••••" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary-custom w-100 py-3 mb-4">
                            Register
                        </button>

                        <div class="text-center">
                            <p class="small text-secondary">Already have an account?
                                <a href="login.php" class="fw-bold text-primary text-decoration-none">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>