@extends('layouts.master')
@section('styles')
<script src="{{ asset('js/demo_pages/form_validation.js') }}"></script>
@endsection
@section('content')
	<!-- Page header -->
		<div class="page-header">
			<div class="page-header-content header-elements-md-inline">
				<div class="page-title d-flex">
					<h4><a href="{{ route('home') }}"><i class="icon-arrow-left52 mr-2"></i></a> <span class="font-weight-semibold">Home</span> - User Profile</h4>
					<a href="/" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
				</div>
			</div>
		</div>
	<!-- /page header -->
	<!-- Content area -->
		<div class="content">
			<!-- Form validation -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h5 class="card-title">User Profile</h5>
					<div class="header-elements">
						<div class="list-icons">
	                		<a class="list-icons-item" data-action="collapse"></a>
	                		<a class="list-icons-item" data-action="reload"></a>
	                	</div>
                	</div>
				</div>

				<div class="card-body">
					@if (session('success'))
	                    <div class="alert alert-success" role="alert">
	                        {{ session('success') }}
	                    </div>
	                @endif

					<form class="form-validate-jquery" action="{{ route('profile.store') }}" method="post" enctype='multipart/form-data'>
						@csrf
						<fieldset class="mb-3">

							<!-- Basic text input -->
							<div class="form-group row">
								<label class="col-form-label col-lg-2">First Name <span class="text-danger">*</span></label>
								<div class="col-lg-4">
									<input type="text" id="first-name" value="{{ old('first_name', $profile->first_name) }}" name="first_name" class="form-control" required placeholder="First Name">
									@error('first_name')
                                    	<label id="first-name-error" class="validation-invalid-label" for="first-name">{{ $message }}</label>
                                	@enderror
								</div>

								<label class="col-form-label col-lg-2">Last Name <span class="text-danger">*</span></label>
								<div class="col-lg-4">
									<input type="text" id="last-name" value="{{ old('last_name', $profile->last_name) }}" name="last_name" class="form-control" required placeholder="Last Name">
									@error('last_name')
                                    	<label id="last-name-error" class="validation-invalid-label" for="last-name">{{ $message }}</label>
                                	@enderror
								</div>
							</div>
							<!-- /basic text input -->


							<!-- Basic text input -->
							<div class="form-group row">
								<label class="col-form-label col-lg-2">Primary Email <span class="text-danger">*</span></label>
								<div class="col-lg-4">
									<input type="email" name="primary_email" class="form-control" value="{{ auth()->user()->email }}" disabled placeholder="Text input validation">
								</div>

								<label class="col-form-label col-lg-2">Secondary Email</label>
								<div class="col-lg-4">
									<input type="email" id="secondary-email" name="secondary_email" value="{{ $profile->email_id2 }}" class="form-control" placeholder="Enter Secondary Email">
									@error('secondary_email')
                                    	<label id="secondary-email-error" class="validation-invalid-label" for="secondary-email">{{ $message }}</label>
                                	@enderror
								</div>
							</div>
							<!-- /basic text input -->

							<!-- Basic text input -->
							<div class="form-group row">
								<label class="col-form-label col-lg-2">Address </label>
								<div class="col-lg-4">
									<input type="text" value="{{ $profile->address }}" name="address" class="form-control" placeholder="Address">
								</div>

								<label class="col-form-label col-lg-2">City </label>
								<div class="col-lg-4">
									<input type="text" value="{{ $profile->city }}" name="city" class="form-control" placeholder="Enter Your City">
								</div>
							</div>
							<!-- /basic text input -->

							<!-- Basic text input -->
							<div class="form-group row">
								<label class="col-form-label col-lg-2">State </label>
								<div class="col-lg-2">
									<input type="text" value="{{ $profile->state }}" name="state" class="form-control" placeholder="Your State">
								</div>

								<label class="col-form-label col-lg-1">Zip </label>
								<div class="col-lg-3">
									<input type="text" value="{{ $profile->zip }}" name="zip" class="form-control" placeholder="Zip Code">
								</div>

								<label class="col-form-label col-lg-1">Country </label>
								<div class="col-lg-3">
									<input type="text" value="{{ $profile->country }}" name="country" class="form-control" placeholder="Country">
								</div>
							</div>
							<!-- /basic text input -->

							<!-- Basic text input -->
							<div class="form-group row">
								<label class="col-form-label col-lg-2">Phone 1 </label>
								<div class="col-lg-4">
									<input type="number" value="{{ $profile->phone1 }}" name="phone_1" class="form-control" placeholder="009711232312">
								</div>

								<label class="col-form-label col-lg-2">Phone 2 </label>
								<div class="col-lg-4">
									<input type="number" value="{{ $profile->phone2 }}" name="phone_2" class="form-control" placeholder="009711232312">
								</div>
							</div>
							<!-- /basic text input -->


							<!-- Basic text input -->
							<div class="form-group row">
								<label class="col-form-label col-lg-2">Organization Name</label>
								<div class="col-lg-4">
									<input type="text" value="{{ $profile->organization_name }}" name="organization_name" class="form-control"  placeholder="Organization Name">
								</div>

							<label class="col-form-label col-lg-2">Email Newsletter</label>
								<div class="col-lg-4">

								<div class="custom-control custom-checkbox  mt-2">
										<input type="checkbox" class="custom-control-input" name="email_newsletter" value="1" id="custom_checkbox_stacked_checked" {{ $profile->email_newsletter == 1 ? 'checked':'' }}>
										<label class="custom-control-label" for="custom_checkbox_stacked_checked"></label>

								</div>
								</div>
							</div>
							<!-- /basic text input -->

							<!-- Basic text input -->
							<div class="form-group row">
								<label class="col-form-label col-lg-2">Upload Image</label>
								<div class="col-lg-4">
									@if(!empty($profile->image_main))
									<div class="custom-file">
									    <input type="file" class="custom-file-input" name="image_main" id="image">
										<label class="custom-file-label" for="image">Choose Profile Image</label>
									    <button type="button" class="btn btn-danger btn-sm" data-id="{{ $profile->id }}" id="remove-image">Remove</button>
									    <img src="{{ asset('storage/images/profile/'.$profile->image_main) }}" width="200" height="200" class="img-rectangle mt-2"/>
									</div>
									@else
									<div class="custom-file">
											<input type="file" class="custom-file-input" name="image_main" id="image">
											<label class="custom-file-label" for="image">Choose Profile Image</label>
									</div>
									@endif
									<img src="#" alt="" id="imageMain" width="80" height="80" class="rounded-circle mt-2">
								</div>

								<label class="col-form-label col-lg-2">Organization Logo</label>

								<div class="col-lg-4">
								    @if(!empty($profile->organization_logo))
								    <div class="custom-file">
										<input type="file" class="custom-file-input" name="organization_logo" id="organization">
										<label class="custom-file-label" for="organization">Choose Organization Logo</label>
										<button type="button" class="btn btn-danger btn-sm" data-id="{{ $profile->id }}" id="remove-logo">Remove</button>
									    <img src="{{ asset('storage/images/organizations/'.$profile->organization_logo) }}" width="200" height="200" class="img-rectangle mt-2"/>
									</div>
								    @else
								    <div class="custom-file">
										<input type="file" class="custom-file-input" name="organization_logo" id="organization">
										<label class="custom-file-label" for="organization">Choose Organization Logo</label>
									</div>
									@endif
									<img src="#" alt="" id="Logo" width="80" height="80" class="rounded-circle mt-2">
								</div>
							</div>
							<!-- /basic text input -->
						</fieldset>
						<div class="d-flex justify-content-end align-items-center mt-5">
							<button type="submit" class="btn btn-outline bg-blue-600 text-blue-400 border-blue-400 ml-3 legitRipple">Save <i class="icon-paperplane ml-2"></i></button>
						</div>
					</form>
				</div>
			</div>
			<!-- /form validation -->
		</div>
	<!-- /content area -->
@endsection
@section('scripts')
<script src="{{ asset('js/plugins/forms/validation/validate.min.js') }}"></script>
<script src="{{ asset('js/demo_pages/form_validation.js') }}"></script>
<script>
	function image(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageMain').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function organization(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#Logo').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).on('change','#organization',function(){
        organization(this);
    });

    $(document).on('change','#image',function(){
        image(this);
    });

    $(document).on('click','#remove-image',function(){
        var id = $(this).data('id');
        if ( confirm('Are you sure to Remove Image?') ){
          $.ajax({
            type: 'get',
            url: 'profile/remove/image/'+id,
            success: function(res){
                if(res == 'success') {
                    alert('Image Remove Successfully');
                    location.reload();
                }
            }
          });
        }else {

        }
    });

    $(document).on('click','#remove-logo',function(){
        var id = $(this).data('id');
        if ( confirm('Are you sure to Remove Logo?') ){
          $.ajax({
            type: 'get',
            url: 'profile/remove/logo/'+id,
            success: function(res){
                console.log(res);
                if(res == 'success') {
                    alert('Logo Remove Successfully');
                    location.reload();
                }
            }
          });
        }else {

        }
    });
</script>
@endsection
