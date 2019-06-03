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
				<!-- Password Recover form -->
				<form class="login-form" method="POST" action="{{ route('password.email') }}">
					@csrf
					<div class="card mb-0">
						@if (session('status'))
		                    <div class="alert alert-success" role="alert">
		                        {{ session('status') }}
		                    </div>
		                @endif
						<div class="card-body">
							<div class="text-center mb-3">
								<img src="{{ asset('images/PORTAL.jpg') }}" alt="" width="250" height="150">
								<h5 class="mb-0">Password recovery</h5>
								<span class="d-block text-muted">We'll send you instructions in email</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-right">
								<input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your email">
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
								</div>
								@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<button type="submit" class="btn btn-outline bg-blue-600 text-blue-400 border-blue-400 btn-block"><i class="icon-spinner11 mr-2"></i> Reset password</button>
						</div>
					</div>
				</form>
				<!-- /Password Recovery form -->

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
