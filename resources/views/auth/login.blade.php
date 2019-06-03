<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Lead360 Dashboard</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/layout_1/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/layout_1/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/layout_1/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/layout_1/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/layout_1/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('js/plugins/forms/validation/validate.min.js') }}"></script>
	<script src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>

	<script src="{{ asset('assets/layout_1/js/app.js') }}"></script>
	<script src="{{ asset('js/demo_pages/login_validation.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
		<div class="navbar-brand">
			<a href="/" class="d-inline-block" style="font-size:16px; color:white">
				The Leadership Portal
			</a>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
					<form class="login-form form-validate" method="post" action="{{ route('login') }}">
                        @csrf
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
							    <img src="{{ asset('images/PORTAL.jpg') }}" alt="" width="250" height="150">
								
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Your credentials</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required placeholder="Email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>

								@error('email')
                                    <label id="email-error" class="validation-invalid-label" for="email">{{ $message }}</label>
                                @enderror
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
								@error('password')
                                    <label id="email-error" class="validation-invalid-label" for="password">{{ $message }}</label>
                                @enderror
							</div>

							<div class="form-group d-flex align-items-center">
								<div class="form-check mb-0">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-input-styled" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked data-fouc>
										Remember
									</label>
								</div>

								<a href="{{ route('password.request') }}" class="ml-auto">Forgot password?</a>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-outline bg-blue-600 text-blue-400 border-blue-400 btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>


							<div class="form-group text-center text-muted content-divider">
								<span class="px-2">Don't have an account?</span>
							</div>

							<div class="form-group">
								<a href="{{ route('register') }}" class="btn btn-light btn-block">Sign up</a>
							</div>

							<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
						</div>
					</div>
				</form>
				<!-- /Login form -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
                        &copy; 2010-2019. <a href="#">The Leadership Portal</a>&reg; by <a href="#">Dr. Richard M. Pfohl</a>
                    </span>

                    <span class="navbar-nav ml-lg-auto">Developed by &nbsp;  <a href="http://www.volxom.com" target="_blank"> Volxom Pvt Ltd</a></span>


				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
