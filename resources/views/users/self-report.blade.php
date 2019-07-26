@php
	$self_pq = $selfSummary->PQ;
	$self_cq = $selfSummary->CQ;
	$self_focused_thinking = $selfSummary->focused_thinking;
	$self_problem_solving = $selfSummary->problem_solving;
	$self_critical_thinking = $selfSummary->critical_thinking;
	$self_decision_making = $selfSummary->decision_making;
	$self_explanation = $selfSummary->explanation;
	$self_eq = $selfSummary->EQ;
	$self_self_awareness = $selfSummary->self_awareness;
	$self_self_regulation = $selfSummary->self_regulation;
	$self_interpersonal_relationships = $selfSummary->interpersonal_relationships;
	$self_empathy = $selfSummary->empathy;
	$self_motivation = $selfSummary->motivation;
	$self_lq = $selfSummary->LQ;
	$self_embodiment = $selfSummary->embodiment;
	$self_inspiration = $selfSummary->inspiration;
	$self_excellence = $selfSummary->excellence;
	$self_empowerment = $selfSummary->empowerment;
	$self_recognition = $selfSummary->recognition;
	$self_bt = $selfSummary->BT;

	$self_avg_focused_thinking = $self_avg->focused_thinking*2;
	$self_avg_problem_solving = $self_avg->problem_solving*2;
	$self_avg_critical_thinking = $self_avg->critical_thinking*2;
	$self_avg_decision_making = $self_avg->decision_making*2;
	$self_avg_explanation = $self_avg->explanation*2;
	$self_avg_self_awareness = $self_avg->self_awareness*2;
	$self_avg_self_regulation = $self_avg->self_regulation*2;
	$self_avg_interpersonal_relationships = $self_avg->interpersonal_relationships*2;
	$self_avg_empathy = $self_avg->empathy*2;
	$self_avg_motivation = $self_avg->motivation*2;
	$self_avg_embodiment = $self_avg->embodiment*2;
	$self_avg_inspiration = $self_avg->inspiration*2;
	$self_avg_excellence = $self_avg->excellence*2;
	$self_avg_empowerment = $self_avg->empowerment*2;
	$self_avg_recognition = $self_avg->recognition*2;


	$areaOfEnrichment 		 = $selfSummary->low_range;
	$areaOfEnrichmentBeg 	 = $selfSummary->low_range_beg;
	$areaOfEnrichmentEnd 	 = $selfSummary->low_range_end;
	$effectiveFunctioning    = $selfSummary->med_range;
	$effectiveFunctioningBeg = $selfSummary->med_range_beg;
	$effectiveFunctioningEnd = $selfSummary->med_range_end;
	$enhancedSkill    		 = $selfSummary->high_range;
	$enhancedSkillBeg    	 = $selfSummary->high_range_beg;
	$enhancedSkillEnd    	 = $selfSummary->high_range_end;
	$increments   			 = $selfSummary->increment_range;

	$low_range = $selfSummary->low_range;
	$low_range_beg = $selfSummary->low_range_beg;
	$low_range_end = $selfSummary->low_range_end;


	$med_range = $selfSummary->med_range;
	$med_range_beg = $selfSummary->med_range_beg;
	$med_range_end = $selfSummary->med_range_end;


	$high_range = $selfSummary->high_range;
	$high_range_beg = $selfSummary->high_range_beg;
	$high_range_end = $selfSummary->high_range_end;
@endphp
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
				<div class="card">
					<div class="card-header">
						<ul class="nav nav-tabs nav-justified nav-tabs-highlight report-tabs">
							<li class="nav-item"><a href="#basic-tab1" class="nav-link active" data-toggle="tab">Intro</a></li>
							<li class="nav-item"><a href="#basic-tab2" class="nav-link" data-toggle="tab">Welcome</a></li>
							<li class="nav-item"><a href="#basic-tab3" class="nav-link" data-toggle="tab">PIM</a></li>
							<li class="nav-item"><a href="#basic-tab4" class="nav-link" data-toggle="tab">4.Self</a></li>
							<li class="nav-item"><a href="#basic-tab5" class="nav-link" data-toggle="tab">5.360</a></li>
							<li class="nav-item"><a href="#basic-tab6" class="nav-link" data-toggle="tab">6.Self</a></li>
							<li class="nav-item"><a href="#basic-tab7" class="nav-link" data-toggle="tab">7.360</a></li>
							<li class="nav-item"><a href="#basic-tab8" class="nav-link" data-toggle="tab">8.Self</a></li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="tab-content">
					<h2 class="text-center" style="color:blue">PQ-i 360 &deg Feedback Report</h2>
					<p class="text-center" style="color:red">A Report on the result of your self assessment as well as the assigned 360 raters based on your professionalism and betterment in a clinical setting</p>
					<div class="tab-pane active" id="basic-tab1">
						@include('users.include.self.page-1')
					</div>
					<div class="tab-pane" id="basic-tab2">
						@include('users.include.self.page-2')
					</div>
					<div class="tab-pane" id="basic-tab3">
						@include('users.include.self.page-3')
					</div>
					<div class="tab-pane" id="basic-tab4">
						@include('users.include.self.page-4')
					</div>
					<div class="tab-pane" id="basic-tab5">
						@include('users.include.self.page-5')
					</div>
					<div class="tab-pane" id="basic-tab6">
						@include('users.include.self.page-6')
					</div>
					<div class="tab-pane" id="basic-tab7">
						@include('users.include.self.page-7')
					</div>
					<div class="tab-pane" id="basic-tab8">
						@include('users.include.self.page-8')
					</div>
					</div>
				</div>
			</div>
			<!-- /content area -->
@endsection
@section('scripts')
	<script>
		var p4_low_range_beg = "{{ $low_range_beg }}";
		var p4_low_range_end = "{{ $low_range_end }}";
		var p4_med_range_beg = "{{ $med_range_beg }}";
		var p4_med_range_end = "{{ $med_range_end }}";
		var p4_high_range_beg = "{{ $high_range_beg }}";
		var p4_high_range_end = "{{ $high_range_end }}";
		var selfPQ = "{{ $self_pq }}";

		var p4selfCQ = "{{ $self_cq }}";
		var p4_self_focusedThinking = "{{ $self_focused_thinking }}";
		var p4_self_problemSolving = "{{ $self_problem_solving }}";
		var p4_self_criticalThinking = "{{ $self_critical_thinking }}";
		var p4_self_decisionMaking = "{{ $self_decision_making }}";
		var p4_self_explanation = "{{ $self_explanation }}";
		var p4_selfEQ = "{{ $self_eq }}";
		var p4_self_seflAwareness = "{{ $self_self_awareness }}";
		var p4_self_seflRegulation = "{{ $self_self_regulation }}";
		var p4_self_interpersonalRelationships = "{{ $self_interpersonal_relationships }}";
		var p4_self_empathy = "{{ $self_empathy }}";
		var p4_self_motivation = "{{ $self_motivation }}";
		var p4_selfLQ = "{{ $self_lq }}";
		var p4_self_embodient = "{{ $self_embodiment }}";
		var p4_self_inspiration = "{{ $self_inspiration }}";
		var p4_self_excellence = "{{ $self_excellence }}";
		var p4_self_empowerment = "{{ $self_empowerment }}";
		var p4_self_recognition = "{{ $self_recognition }}";
		var p4_selfBT = "{{ $self_bt }}";

		var self_avg_focused_thinking = "{{ $self_avg_focused_thinking }}";
		var self_avg_problem_solving = "{{ $self_avg_problem_solving }}";
		var self_avg_critical_thinking = "{{ $self_avg_critical_thinking }}";
		var self_avg_decision_making = "{{ $self_avg_decision_making }}";
		var self_avg_explanation = "{{ $self_avg_explanation }}";
		var self_avg_self_awareness = "{{ $self_avg_self_awareness }}";
		var self_avg_self_regulation = "{{ $self_avg_self_regulation }}";
		var self_avg_interpersonal_relationships = "{{ $self_avg_interpersonal_relationships }}";
		var self_avg_empathy = "{{ $self_avg_empathy }}";
		var self_avg_motivation = "{{ $self_avg_motivation }}";
		var self_avg_embodiment = "{{ $self_avg_embodiment }}";
		var self_avg_inspiration = "{{ $self_avg_inspiration }}";
		var self_avg_excellence = "{{ $self_avg_excellence }}";
		var self_avg_empowerment = "{{ $self_avg_empowerment }}";
		var self_avg_recognition = "{{ $self_avg_recognition }}";
	</script>
	<script src="{{ asset('js/plugins/visualization/echarts/echarts.min.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/self-page-4.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/self-page-6.js') }}"></script>
@endsection
