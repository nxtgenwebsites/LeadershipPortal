<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The Leadership Portal</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/layout_1/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/layout_1/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/layout_1/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/layout_1/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/layout_1/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />

	<!-- Core JS files -->
	<script src="{{ asset('js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>

	<script src="{{ asset('assets/layout_1/js/app.js') }}"></script>
	<script src="{{ asset('js/demo_pages/login.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
		<div class="navbar-brand" style="height:4rem">
            <a href="{{ route('home') }}" class="d-inline-block">
                <table>
                    <tr>
                        <td><img src="{{ asset('images/header-icon.png') }}" style="height:2.5rem" /></td>
                        <td style="font-size:16px; color:white;">The Leadership Portal</td>
                    </tr>
                </table>
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

				<!-- Registration form -->
				<form class="flex-fill" method="POST" action="{{ route('register') }}">
                        @csrf
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="card mb-0">
								<div class="card-body">
									<div class="text-center mb-3">
										<img src="{{ asset('images/Logo.png') }}" alt="Leadership Portal" >
										<h5 class="mb-0">Create account</h5>
										<span class="d-block text-muted">All fields are required</span>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="text" class="form-control" name="first_name" placeholder="First name"required value="{{ old('first_name') }}">
												<div class="form-control-feedback">
													<i class="icon-user-check text-muted"></i>
												</div>
											</div>

											@error('first_name')
			                                    <label class="validation-invalid-label">{{ $message }}</label>
			                                @enderror
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="text" class="form-control" name="last_name" placeholder="Last name"required value="{{ old('last_name') }}">
												<div class="form-control-feedback">
													<i class="icon-user-check text-muted"></i>
												</div>
											</div>
											@error('last_name')
			                                    <label class="validation-invalid-label">{{ $message }}</label>
			                                @enderror
										</div>
									</div>

									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="email" class="form-control" name="email" placeholder="Your email" required value="{{ old('email') }}">
										<div class="form-control-feedback">
											<i class="icon-mention text-muted"></i>
										</div>
									</div>
									@error('email')
	                                    <label class="validation-invalid-label">{{ $message }}</label>
	                                @enderror

									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Create password" required>
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
											@error('password')
											<label id="email-error" class="validation-invalid-label" for="password">{{ $message }}</label>
			                                  
			                                @enderror
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="password" class="form-control" name="password_confirmation" placeholder="Repeat password" required>
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="text-center">
										<button type="submit" class="btn btn-outline bg-blue-600 text-blue-400 border-blue-400"><b><i class="icon-plus3"></i></b> Create account</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<!-- /registration form -->

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
