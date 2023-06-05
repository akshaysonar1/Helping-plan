<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>umoneyhelp | Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .alert {
            color: red;
        }

        label.error {
            color: red !important;
        }
    </style>
</head>

<body>
<!-- header section -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="{{ route('index') }}"><img src="{{ asset('user/assets/img/logo.svg') }}"
                    alt=""></a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('index') }}">HOME</a></li>
                @if (!empty(Auth::user()->id))
                <li><a class="nav-link scrollto" href="{{ route('user.dashboard.show') }}">DASHBOARD</a></li>
                @endif
                <li><a class="nav-link scrollto" href="{{ route('user.contact') }}">CONTACT US</a></li>
               
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>


    <div class="login-section">
        <div class="container-fluid ps-md-0">
            <div class="row align-items-center">
                <div class="col-md-7 login-imgages">
                    <img src="{{ asset('user/assets/img/login-img.png') }}">
                </div>

                <div class="col-md-5">
                    <form action="{{ route('user.log') }}" method="POST" id="UserLogin">
                        @csrf
                        @method('POST')
                        <div class="login-box">
                            <h1>Login</h1>
                            @if (Session::has('error'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }} session-error">
                                {{ Session::get('error') }}
                            </p>
                            @endif
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile" oninput="process(this)" maxlength="10" id="mobile"
                                    placeholder="Enter Mobile Number">

                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="row justify-content-between mb-4">
                                <div class="col-6">
                                    <a href="{{ route('auth.reset') }}">Forget Password</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href=""> <button type="submit">Login</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a href="{{ route('register') }}" class="sign-up">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div id="preloader"></div>
    <script>
        function process(input) {
            let value = input.value;
            let numbers = value.replace(/[^0-9]/g, "");
            input.value = numbers;
        }
    </script>

    <script>
        $("document").ready(function() {
            setTimeout(function() {
                $(".session-error").remove();
            }, 5000); // 5 secs
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#UserLogin").validate({
                errorClass: "error fail-alert",
                validClass: "valid success-alert",
                rules: {
                    mobile: {
                        required: true,
                        maxlength: 10,
                        minlength: 10,
                    },
                    password: {
                        required: true,
                        minlength: 6,
                    },
                },
                messages: {
                    mobile: {
                        required: 'Please Enter Mobile Number',
                        maxlength: 'Please Enter A Valid Mobile Number',
                        minlength: 'Please Enter A Valid Mobile Number',
                    },
                    password: {
                        required: 'Please Enter Password',
                        minlength: 'Minimum Six Digit Password Required',
                    },

                }
            });
        });
    </script>

    <!-- Vendor JS Files -->

    <script src="{{ asset('user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('user/assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


</body>

</html>