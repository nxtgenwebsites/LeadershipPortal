@extends('layouts.master')

@section('content')
<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><a href="{{ route('home') }}"><i class="icon-arrow-left52 mr-2"></i></a> <span class="font-weight-semibold">Users</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Framed card body table -->
				<div class="card">
					@if (session('success'))
	                    <div class="alert alert-success mb-1" role="alert">
	                        {{ session('success') }}
	                    </div>
	                @endif
					<div class="card-header header-elements-inline">
						<h5 class="card-title">User Records</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                	</div>
	                	</div>
					</div>


					<div class="card-body">
						<div class=" table-responsive shadow-0 mb-0">
							<table class="table datatable-basic">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Lock</th>
										<th>Role</th>
										<th>Report 360</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									@php $no = 1; @endphp
									@if( count($users) > 0 )
									@foreach($users as $user)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $user->first_name }}</td>
											<td>{{ $user->last_name }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->lock }}</td>
											<td>{{ ucFirst($user->user_type) }}</td>
											<td><a href="{{ route('users.report', $user->token_id) }}" class="btn btn-sm btn-primary">Report 360</a></td>
											<td>
												<div class="list-icons">
							                		<a href="#" class="list-icons-item edit"
							                		data-id="{{ $user->id }}"
							                		data-first="{{ $user->first_name }}"
							                		data-last="{{ $user->last_name }}"
							                		data-lock="{{ $user->lock }}"
							                		data-role="{{ $user->user_type }}"
							                		data-toggle="modal" data-target="#edit_modal">
							                			<i class="icon-pencil7"></i>
						                			</a>
							                		<a href="#" class="list-icons-item delete" data-id="{{ $user->id }}" data-toggle="modal" data-target="#remove_modal">
							                			<i class="icon-trash"></i>
						                			</a>
							                	</div>
											</td>
										</tr>
									@endforeach
									@else
										<td colspan="5" align="center">No User Found</td>
									@endif
								</tbody>
							</table>
						</div>
							
					</div>
				</div>
				<!-- /framed card body table -->

			</div>
			<!-- /content area -->


<!-- Edit modal -->
	<div id="edit_modal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">
			<form action="#" id="edit-form" method="post">
				@csrf @method('put')
				<div class="modal-content">
					<div class="modal-header bg-transparent">
						<h5 class="modal-title">Update User</h5>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">

						<div class="form-group row">
							<label for="first_name" class="col-form-label col-lg-4">First Name</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="first_name"  id="first">
							</div>
						</div>
						<div class="form-group row">
							<label for="first_name" class="col-form-label col-lg-4">Last Name</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="last_name"  id="last">
							</div>
						</div>
						<div class="form-group row">
							<label for="first_name" class="col-form-label col-lg-4">Lock/Unlock User</label>
							<div class="col-lg-6">
								<select name="lock" class="form-control" id="lock">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="first_name" class="col-form-label col-lg-4">Select Role</label>
							<div class="col-lg-6">
								<select name="user_type" class="form-control" id="role">
									<option value="admin">Admin</option>
									<option value="leader">Leader</option>
								</select>
							</div>
						</div>
					</div>

					<div class="modal-footer bg-transparent">
						<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-outline bg-blue-600 text-blue-400 border-blue-400">Save changes</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- /edit modal -->

<!-- Remove modal -->
	<div id="remove_modal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<form action="#" id="delete-form" method="post">
				@csrf @method('delete')
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Confirm action</h5>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						You are about to remove this User. Are you sure?
					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-outline bg-blue-600 text-blue-400 border-blue-400">Yes, remove</button>
						<button type="button" class="btn btn-light" data-dismiss="modal">No, thanks</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- /remove modal -->

@endsection
@section('scripts')
<script src="{{ asset('js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('js/demo_pages/datatables_basic.js') }}"></script>
<script type="text/javascript">
	$(document).on('click', '.edit', function(){
		var id = $(this).data('id');
		var first = $(this).data('first');
		var last = $(this).data('last');
		var lock = $(this).data('lock');
		var role = $(this).data('role');
		var url  = "{{ route('users.update', "id") }}";
		var route = url.replace('id', id);
		$('#edit-form').attr('action', route);
		$('#first').val(first);
		$('#last').val(last);
		$('#lock').val(lock);
		$('#role').val(role);
	});

	$(document).on('click', '.delete', function(){
		var id = $(this).data('id');
		var first = $(this).data('first');
		var last = $(this).data('last');
		var role = $(this).data('role');
		var url  = "{{ route('users.destroy', "id") }}";
		var route = url.replace('id', id);
		$('#delete-form').attr('action', route);
	});
</script>
@endsection
