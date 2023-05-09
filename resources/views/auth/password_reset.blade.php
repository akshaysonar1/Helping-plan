<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UHelp India Website | Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
      <!-- Favicons -->
	  <link href="{{ asset ('user/assets/img/favicon.png') }}" rel="icon">
	  <!-- Google Fonts -->
	  <link
		  href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		  rel="stylesheet">
	  <!-- Vendor CSS Files -->
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

    <div class="login-section">
		<form action="{{ route('auth.store') }}" method="POST">
			@csrf
			@method('post')
        <div class="container-fluid ps-md-0">
            <div class="row align-items-center">
                <div class="col-md-7">
                    
                    <div class="login-imgages">
						<img src="{{ asset('user/assets/img/login-img.png') }}">
                </div>
                </div>
                <div class="col-md-5">
                    <div class="login-box">
                        <h1>Forgot Password</h1>
                        <div class="row mb-3">
							@if(Session::has('message'))
							<p class="alert alert-info">{{ Session::get('message') }}</p>
							@endif
                            <div class="col-12">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control" name="mobile" oninput="process(this)" maxlength="10" id="phone" >
                            </div>
							<div class="col-12">
                                <label>Message</label>
                                <input type="text" class="form-control" name="message"   >
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" onclick="showSpinner()">Submit</button>
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
		</form>
    </div>

    <div id="preloader"></div>
	<script>        
		function process(input){
	   let value = input.value;
	   let numbers = value.replace(/[^0-9]/g, "");
	   input.value = numbers;
	 }
		  
		 </script>
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
</body>

</html>