<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>umoneyhelp | Sign Up</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
        <link href="{{ asset ('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset ('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset ('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{ asset ('user/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="login-section sign-section">
        <div class="container-fluid ps-md-0">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="login-imgages">
                        <img src="assets/img/login-img.png">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="login-box">
                        <h1>Sign Up</h1>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label>Name</label>
                                <input type="text" placeholder="Name by bank name" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label>Mobile No.</label>
                                <input type="text" placeholder="10 digit mobile no." class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label>Create password</label>
                                <input type="password" placeholder="123456789" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label>Confirm password</label>
                                <input type="password" placeholder="123456789" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>State</label>
                                        <input class="form-control" placeholder="Punjab"></input>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <input class="form-control" placeholder="Ludhiana"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <label>Pin Code</label>
                                <input type="text" placeholder="853698" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="button">Submit</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="{{ route('user.login') }}" class="sign-up">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="{{ asset ('user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset ('user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset ('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset ('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset ('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset ('user/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset ('user/assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset ('user/assets/js/main.js') }}"></script>
</body>

</html>