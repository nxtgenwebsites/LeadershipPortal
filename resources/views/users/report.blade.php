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
				<!-- Framed card body table -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Self Assessment</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class=" table-responsive shadow-0 mb-0">
							
						</div>
							
					</div>
				</div>
				<!-- /framed card body table -->

			</div>
			<!-- /content area -->
@endsection