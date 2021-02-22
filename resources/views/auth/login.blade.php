<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login RMS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('login_assets') }}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_assets') }}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_assets') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_assets') }}/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_assets') }}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_assets') }}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_assets') }}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('login_assets') }}/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('login_assets') }}/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
          @csrf
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>  
					</div>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" autocomplete="current-password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					{{-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> --}}

					<div class="text-center p-t-120">

					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{ asset('login_assets') }}/{{ asset('login_assets') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login_assets') }}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ asset('login_assets') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login_assets') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login_assets') }}/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('login_assets') }}/js/main.js"></script>

</body>
</html>
