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
				<!-- Report Page 1 -->
				<div class="card">
					<div class="card-body">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a href="#basic-tab1" class="nav-link active" data-toggle="tab">Intro</a></li>
							<li class="nav-item"><a href="#basic-tab2" class="nav-link" data-toggle="tab">Welcome</a></li>
							<li class="nav-item"><a href="#basic-tab3" class="nav-link" data-toggle="tab">PIM</a></li>
							<li class="nav-item"><a href="#basic-tab4" class="nav-link" data-toggle="tab">4.Self</a></li>
							<li class="nav-item"><a href="#basic-tab5" class="nav-link" data-toggle="tab">5.360</a></li>
							<li class="nav-item"><a href="#basic-tab6" class="nav-link" data-toggle="tab">6.Self</a></li>
							<li class="nav-item"><a href="#basic-tab7" class="nav-link" data-toggle="tab">7.360</a></li>
							<li class="nav-item"><a href="#basic-tab8" class="nav-link" data-toggle="tab">8.Self</a></li>
							<li class="nav-item"><a href="#basic-tab9" class="nav-link" data-toggle="tab">9.360</a></li>
							<li class="nav-item"><a href="#basic-tab10" class="nav-link" data-toggle="tab">Selfvs360</a></li>
							<li class="nav-item"><a href="#basic-tab11" class="nav-link" data-toggle="tab">Selfvs360</a></li>
							<li class="nav-item"><a href="#basic-tab12" class="nav-link" data-toggle="tab">Selfvs360</a></li>
							<li class="nav-item"><a href="#basic-tab13" class="nav-link" data-toggle="tab">Selfvs360</a></li>
							<li class="nav-item"><a href="#basic-tab14" class="nav-link" data-toggle="tab">Selfvs360</a></li>
							<li class="nav-item"><a href="#basic-tab15" class="nav-link" data-toggle="tab">Selfvs360</a></li>
							<li class="nav-item"><a href="#basic-tab16" class="nav-link" data-toggle="tab">Selfvs360</a></li>
							<li class="nav-item"><a href="#basic-tab17" class="nav-link" data-toggle="tab">%Ranking</a></li>
							<li class="nav-item"><a href="#basic-tab18" class="nav-link" data-toggle="tab">Open-Ended</a></li>
							<li class="nav-item"><a href="#basic-tab19" class="nav-link" data-toggle="tab">Open-Ended</a></li>
							<li class="nav-item"><a href="#basic-tab20" class="nav-link" data-toggle="tab">Action Plan</a></li>
						</ul>
						<div class="tab-content">
							<h2 class="text-center" style="color:blue">PQ-i 360 &deg Feedback Report</h2>
							<p class="text-center" style="color:red">A Report on the result of your self assessment as well as the assigned 360 raters based on your professionalism and betterment in a clinical setting</p>
							<div class="tab-pane fade show active" id="basic-tab1">
								@include('users.include.page-1')
							</div>

							<div class="tab-pane fade" id="basic-tab2">
								@include('users.include.page-2')
							</div>

							<div class="tab-pane fade" id="basic-tab3">
								@include('users.include.page-3')
							</div>

							<div class="tab-pane fade" id="basic-tab4">
								@include('users.include.page-4')
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /content area -->
@endsection
