@extends('layouts.master')
@section('content')
<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><a href="{{ route('home') }}"><i class="icon-arrow-left52 mr-2"></i></a> <span class="font-weight-semibold">Report</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->

			<!-- Content area -->
			<div class="content">
				@include('users.include.page-1')
				@include('users.include.page-2')
				@include('users.include.page-3')
				@include('users.include.page-4')
			</div>
			<!-- /content area -->
@endsection