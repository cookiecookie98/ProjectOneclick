<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">
<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2023 14:38:20 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- Layout config Js -->
    <script src="public/admin/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="public/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="public/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="public/admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="public/admin/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container-fluid pt-5">
        <div class="ocean">
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        <!-- auth page bg -->

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <!-- <div class="row">
            <div class="col-lg-12">
              <div class="text-center mt-sm-5 mb-4 text-white-50">
                <div>
                  <a href="index.html" class="d-inline-block auth-logo">
                    <img src="assets/images/logo/1.png" alt="" height="60" />
                  </a>
                </div>
                <p class="mt-3 fs-15 fw-medium">
                  Premium Admin & Dashboard Template
                </p>
              </div>
            </div>
          </div> -->
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <div class="col-lg-12">
                                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                                            <div>
                                                <a href="index.php" class="d-inline-block auth-logo">
                                                    <img src="public/assets/images/logo/1.png" alt="" height="60" />
                                                </a>
                                            </div>
                                            <p class="mt-3 fs-15 fw-medium" style="color: black">
                                                Welcome to our website!
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-muted">Login to continue to One Click.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="views/user/process-login.php" method="POST">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="name"
                                                placeholder="Enter username" />
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="auth-pass-reset-basic.html" class="text-muted">Forgot
                                                    Password?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input"
                                                    placeholder="Enter Password" id="password-input" name="password" />
                                                <span
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                    id="password-addon">
                                                    <i class="ri-eye-fill align-middle"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="auth-remember-check" />
                                            <label class="form-check-label" for="auth-remember-check">Remember
                                                me</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit" name="submit">
                                                Login
                                            </button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title">Login with</h5>
                                            </div>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-primary btn-icon waves-effect waves-light">
                                                    <i class="ri-facebook-fill fs-16"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-danger btn-icon waves-effect waves-light">
                                                    <i class="ri-google-fill fs-16"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-dark btn-icon waves-effect waves-light">
                                                    <i class="ri-github-fill fs-16"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-info btn-icon waves-effect waves-light">
                                                    <i class="ri-twitter-fill fs-16"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="mb-0">
                                                Don't have an account ?
                                                <a href="auth-signup-basic.html"
                                                    class="fw-semibold text-primary text-decoration-underline">
                                                    Sign up
                                                </a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->


    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="public/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/admin/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="public/admin/assets/libs/node-waves/waves.min.js"></script>
    <script src="public/admin/assets/libs/feather-icons/feather.min.js"></script>
    <script src="public/admin/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="public/admin/assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="public/admin/assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="public/admin/assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="public/admin/assets/js/pages/password-addon.init.js"></script>
</body>

</html>