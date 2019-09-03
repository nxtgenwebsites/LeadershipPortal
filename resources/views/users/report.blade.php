@extends('layouts.master')
@section('content')
@php
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



	$low_range = $selfSummary->low_range;
	$low_range_beg = $selfSummary->low_range_beg;
	$low_range_end = $selfSummary->low_range_end;


	$med_range = $selfSummary->med_range;
	$med_range_beg = $selfSummary->med_range_beg;
	$med_range_end = $selfSummary->med_range_end;


	$high_range = $selfSummary->high_range;
	$high_range_beg = $selfSummary->high_range_beg;
	$high_range_end = $selfSummary->high_range_end;


	$_360_pq = round($_360->PQ,1);
	$_360_cq = round($_360->CQ,1);
	$_360_focused_thinking = round($_360->focused_thinking,1);
	$_360_problem_solving = round($_360->problem_solving,1);
	$_360_critical_thinking = round($_360->critical_thinking,1);
	$_360_decision_making = round($_360->decision_making,1);
	$_360_explanation = round($_360->explanation,1);
	$_360_eq = round($_360->EQ,1);
	$_360_self_awareness = round($_360->self_awareness,1);
	$_360_self_regulation = round($_360->self_regulation,1);
	$_360_interpersonal_relationships = round($_360->interpersonal_relationships,1);
	$_360_empathy = round($_360->empathy,1);
	$_360_motivation = round($_360->motivation,1);
	$_360_lq = round($_360->LQ,1);
	$_360_embodiment = round($_360->embodiment,1);
	$_360_inspiration = round($_360->inspiration,1);
	$_360_excellence = round($_360->excellence,1);
	$_360_empowerment = round($_360->empowerment,1);
	$_360_recognition = round($_360->recognition,1);
	$_360_bt = round($_360->BT,1);

	$_360_avg_focused_thinking = round($_360_avg->focused_thinking*2,1);
	$_360_avg_problem_solving = round($_360_avg->problem_solving*2,1);
	$_360_avg_critical_thinking = round($_360_avg->critical_thinking*2,1);
	$_360_avg_decision_making = round($_360_avg->decision_making*2,1);
	$_360_avg_explanation = round($_360_avg->explanation*2,1);
	$_360_avg_self_awareness = round($_360_avg->self_awareness*2,1);
	$_360_avg_self_regulation = round($_360_avg->self_regulation*2,1);
	$_360_avg_interpersonal_relationships = round($_360_avg->interpersonal_relationships*2,1);
	$_360_avg_empathy = round($_360_avg->empathy*2,1);
	$_360_avg_motivation = round($_360_avg->motivation*2,1);
	$_360_avg_embodiment = round($_360_avg->embodiment*2,1);
	$_360_avg_inspiration = round($_360_avg->inspiration*2,1);
	$_360_avg_excellence = round($_360_avg->excellence*2,1);
	$_360_avg_empowerment = round($_360_avg->empowerment*2,1);
	$_360_avg_recognition = round($_360_avg->recognition*2,1);
	
	/* Page-14 */
	
	$cqmanagerAvg = isset($managersAvg->CQ) ? $managersAvg->CQ : 0;
	$cqpeerAvg    = isset($peersAvg->CQ) ? $peersAvg->CQ : 0;
	$cqdirectAvg  = isset($directsAvg->CQ) ? $directsAvg->CQ : 3;
	$cqotherAvg  = isset($othersAvg->CQ) ? $othersAvg->CQ : 0;
	$CQTotalAvg  = ($cqmanagerAvg+$cqpeerAvg+$cqdirectAvg+$cqotherAvg)/4;

	$FTmanagerAvg = isset($managersAvg->FT) ? $managersAvg->FT : 0;
	$FTpeerAvg    = isset($peersAvg->FT) ? $peersAvg->FT : 0;
	$FTdirectAvg  = isset($directsAvg->FT) ? $directsAvg->FT : 3;
	$FTotherAvg  = isset($othersAvg->FT) ? $othersAvg->FT : 0;
	$FTTotalAvg  = ($FTmanagerAvg+$FTpeerAvg+$FTdirectAvg+$FTotherAvg)/4;

	$PSmanagerAvg = isset($managersAvg->PS) ? $managersAvg->PS : 0;
	$PSpeerAvg    = isset($peersAvg->PS) ? $peersAvg->PS : 0;
	$PSdirectAvg  = isset($directsAvg->PS) ? $directsAvg->PS : 3;
	$PSotherAvg  = isset($othersAvg->PS) ? $othersAvg->PS : 0;
	$PSTotalAvg  = ($PSmanagerAvg+$PSpeerAvg+$PSdirectAvg+$PSotherAvg)/4;

	$CTmanagerAvg = isset($managersAvg->CT) ? $managersAvg->CT : 0;
	$CTpeerAvg    = isset($peersAvg->CT) ? $peersAvg->CT : 0;
	$CTdirectAvg  = isset($directsAvg->CT) ? $directsAvg->CT : 3;
	$CTotherAvg  = isset($othersAvg->CT) ? $othersAvg->CT : 0;
	$CTTotalAvg  = ($CTmanagerAvg+$CTpeerAvg+$CTdirectAvg+$CTotherAvg)/4;

	$DMmanagerAvg = isset($managersAvg->DM) ? $managersAvg->DM : 0;
	$DMpeerAvg    = isset($peersAvg->DM) ? $peersAvg->DM : 0;
	$DMdirectAvg  = isset($directsAvg->DM) ? $directsAvg->DM : 3;
	$DMotherAvg  = isset($othersAvg->DM) ? $othersAvg->DM : 0;
	$DMTotalAvg  = ($DMmanagerAvg+$DMpeerAvg+$DMdirectAvg+$DMotherAvg)/4;

	$EXmanagerAvg = isset($managersAvg->EX) ? $managersAvg->EX : 0;
	$EXpeerAvg    = isset($peersAvg->EX) ? $peersAvg->EX : 0;
	$EXdirectAvg  = isset($directsAvg->EX) ? $directsAvg->EX : 3;
	$EXotherAvg  = isset($othersAvg->EX) ? $othersAvg->EX : 0;
	$EXTotalAvg  = ($EXmanagerAvg+$EXpeerAvg+$EXdirectAvg+$EXotherAvg)/4;
	
	/* Page-15 */
	
	$EQmanagerAvg = isset($managersAvg->EQ) ? $managersAvg->EQ : 0;
	$EQpeerAvg    = isset($peersAvg->EQ) ? $peersAvg->EQ : 0;
	$EQdirectAvg  = isset($directsAvg->EQ) ? $directsAvg->EQ : 3;
	$EQotherAvg  = isset($othersAvg->EQ) ? $othersAvg->EQ : 0;
	$EQTotalAvg  = ($EQmanagerAvg+$EQpeerAvg+$EQdirectAvg+$EQotherAvg)/4;

	$SAmanagerAvg = isset($managersAvg->SA) ? $managersAvg->SA : 0;
	$SApeerAvg    = isset($peersAvg->SA) ? $peersAvg->SA : 0;
	$SAdirectAvg  = isset($directsAvg->SA) ? $directsAvg->SA : 3;
	$SAotherAvg  = isset($othersAvg->SA) ? $othersAvg->SA : 0;
	$SATotalAvg  = ($SAmanagerAvg+$SApeerAvg+$SAdirectAvg+$SAotherAvg)/4;

	$SRmanagerAvg = isset($managersAvg->SR) ? $managersAvg->SR : 0;
	$SRpeerAvg    = isset($peersAvg->SR) ? $peersAvg->SR : 0;
	$SRdirectAvg  = isset($directsAvg->SR) ? $directsAvg->SR : 3;
	$SRotherAvg  = isset($othersAvg->SR) ? $othersAvg->SR : 0;
	$SRTotalAvg  = ($SRmanagerAvg+$SRpeerAvg+$SRdirectAvg+$SRotherAvg)/4;

	$IRmanagerAvg = isset($managersAvg->IR) ? $managersAvg->IR : 0;
	$IRpeerAvg    = isset($peersAvg->IR) ? $peersAvg->IR : 0;
	$IRdirectAvg  = isset($directsAvg->IR) ? $directsAvg->IR : 3;
	$IRotherAvg  = isset($othersAvg->IR) ? $othersAvg->IR : 0;
	$IRTotalAvg  = ($IRmanagerAvg+$IRpeerAvg+$IRdirectAvg+$IRotherAvg)/4;

	$EMmanagerAvg = isset($managersAvg->EM) ? $managersAvg->EM : 0;
	$EMpeerAvg    = isset($peersAvg->EM) ? $peersAvg->EM : 0;
	$EMdirectAvg  = isset($directsAvg->EM) ? $directsAvg->EM : 3;
	$EMotherAvg  = isset($othersAvg->EM) ? $othersAvg->EM : 0;
	$EMTotalAvg  = ($EMmanagerAvg+$EMpeerAvg+$EMdirectAvg+$EMotherAvg)/4;

	$MOmanagerAvg = isset($managersAvg->MO) ? $managersAvg->MO : 0;
	$MOpeerAvg    = isset($peersAvg->MO) ? $peersAvg->MO : 0;
	$MOdirectAvg  = isset($directsAvg->MO) ? $directsAvg->MO : 3;
	$MOotherAvg  = isset($othersAvg->MO) ? $othersAvg->MO : 0;
	$MOTotalAvg  = ($MOmanagerAvg+$MOpeerAvg+$MOdirectAvg+$MOotherAvg)/4;
	
	
	/* Page 16 */
	$LQmanagerAvg = isset($managersAvg->LQ) ? $managersAvg->LQ : 0;
	$LQpeerAvg    = isset($peersAvg->LQ) ? $peersAvg->LQ : 0;
	$LQdirectAvg  = isset($directsAvg->LQ) ? $directsAvg->LQ : 3;
	$LQotherAvg  = isset($othersAvg->LQ) ? $othersAvg->LQ : 0;
	$LQTotalAvg  = ($LQmanagerAvg+$LQpeerAvg+$LQdirectAvg+$LQotherAvg)/4;

	$EMBmanagerAvg = isset($managersAvg->EMB) ? $managersAvg->EMB : 0;
	$EMBpeerAvg    = isset($peersAvg->EMB) ? $peersAvg->EMB : 0;
	$EMBdirectAvg  = isset($directsAvg->EMB) ? $directsAvg->EMB : 3;
	$EMBotherAvg  = isset($othersAvg->EMB) ? $othersAvg->EMB : 0;
	$EMBTotalAvg  = ($EMBmanagerAvg+$EMBpeerAvg+$EMBdirectAvg+$EMBotherAvg)/4;

	$INPmanagerAvg = isset($managersAvg->INP) ? $managersAvg->INP : 0;
	$INPpeerAvg    = isset($peersAvg->INP) ? $peersAvg->INP : 0;
	$INPdirectAvg  = isset($directsAvg->INP) ? $directsAvg->INP : 3;
	$INPotherAvg  = isset($othersAvg->INP) ? $othersAvg->INP : 0;
	$INPTotalAvg  = ($INPmanagerAvg+$INPpeerAvg+$INPdirectAvg+$INPotherAvg)/4;

	$EXCmanagerAvg = isset($managersAvg->EXC) ? $managersAvg->EXC : 0;
	$EXCpeerAvg    = isset($peersAvg->EXC) ? $peersAvg->EXC : 0;
	$EXCdirectAvg  = isset($directsAvg->EXC) ? $directsAvg->EXC : 3;
	$EXCotherAvg  = isset($othersAvg->EXC) ? $othersAvg->EXC : 0;
	$EXCTotalAvg  = ($EXCmanagerAvg+$EXCpeerAvg+$EXCdirectAvg+$EXCotherAvg)/4;

	$EMPmanagerAvg = isset($managersAvg->EMP) ? $managersAvg->EMP : 0;
	$EMPpeerAvg    = isset($peersAvg->EMP) ? $peersAvg->EMP : 0;
	$EMPdirectAvg  = isset($directsAvg->EMP) ? $directsAvg->EMP : 3;
	$EMPotherAvg  = isset($othersAvg->EMP) ? $othersAvg->EMP : 0;
	$EMPTotalAvg  = ($EMPmanagerAvg+$EMPpeerAvg+$EMPdirectAvg+$EMPotherAvg)/4;

	$ROmanagerAvg = isset($managersAvg->RO) ? $managersAvg->RO : 0;
	$ROpeerAvg    = isset($peersAvg->RO) ? $peersAvg->RO : 0;
	$ROdirectAvg  = isset($directsAvg->RO) ? $directsAvg->RO : 3;
	$ROotherAvg  = isset($othersAvg->RO) ? $othersAvg->RO : 0;
	$ROTotalAvg  = ($ROmanagerAvg+$ROpeerAvg+$ROdirectAvg+$ROotherAvg)/4;
@endphp
<style>
	.no-list-style>li {
		list-style: none;
		font-size: 18px;
	}
</style>
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
			<div class="card-header">
				<ul class="nav nav-tabs nav-tabs-solid rounded border-0 report-tabs">
					<li class="nav-item"><a href="#basic-tab1" class="nav-link active" data-toggle="tab">Intro</a></li>
					<li class="nav-item"><a href="#basic-tab2" class="nav-link" data-toggle="tab">Welcome</a></li>
					<li class="nav-item"><a href="#basic-tab3" class="nav-link" data-toggle="tab">PIM</a></li>
					<li class="nav-item dropdown">
    					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Summary</a>
    					<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-64px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
    						<a href="#basic-tab4" class="dropdown-item" data-toggle="tab">4. Self</a>
    						<a href="#basic-tab5" class="dropdown-item" data-toggle="tab">5. 360</a>
    					</div>
    				</li>
    				<li class="nav-item dropdown">
    					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Triangle</a>
    					<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-64px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
    						<a href="#basic-tab6" class="dropdown-item" data-toggle="tab">6. Self</a>
    						<a href="#basic-tab7" class="dropdown-item" data-toggle="tab">7. 360</a>
    					</div>
    				</li>
    				<li class="nav-item dropdown">
    					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Spider</a>
    					<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-64px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
    						<a href="#basic-tab8" class="dropdown-item" data-toggle="tab">8. Self</a>
    						<a href="#basic-tab9" class="dropdown-item" data-toggle="tab">9. 360</a>
    						<a href="#basic-tab10" class="dropdown-item" data-toggle="tab">10. Selfvs360</a>
    					</div>
    				</li>
    				<li class="nav-item dropdown">
    					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Spider</a>
    					<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-64px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
    						<a href="#basic-tab11" class="dropdown-item" data-toggle="tab">11. Quadrant Gap Analysis</a>
    						<a href="#basic-tab12" class="dropdown-item" data-toggle="tab">12. Linear Gap Analysis</a>
    						<a href="#basic-tab13" class="dropdown-item" data-toggle="tab">13. Linear Gap Analysis [Subscale]</a>
    					</div>
    				</li>
    				<li class="nav-item dropdown">
    					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Bar</a>
    					<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-64px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
    						<a href="#basic-tab14" class="dropdown-item" data-toggle="tab">14. Cognitive</a>
    						<a href="#basic-tab15" class="dropdown-item" data-toggle="tab">15. Emotional</a>
    						<a href="#basic-tab16" class="dropdown-item" data-toggle="tab">16. Leadership</a>
    						<a href="#basic-tab17" class="dropdown-item" data-toggle="tab">17. Betterment & Balance</a>
    					</div>
    				</li>
    				<li class="nav-item dropdown">
    					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">% Rank</a>
    					<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-64px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
    						<a href="#basic-tab18" class="dropdown-item" data-toggle="tab">18. PQ-i Percentile Ranking</a>
    					</div>
    				</li>
    				<li class="nav-item dropdown">
    					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Open Ended</a>
    					<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-64px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
    						<a href="#basic-tab19" class="dropdown-item" data-toggle="tab">19. Open-Ended Responses [Page 1]</a>
    						<a href="#basic-tab20" class="dropdown-item" data-toggle="tab">20. Open-Ended Responses [Page 2]</a>
    					</div>
    				</li>
    				
    				<li class="nav-item dropdown">
    					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action Plan</a>
    					<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-64px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
    						<a href="#basic-tab21" class="dropdown-item" data-toggle="tab">21. PQ-i Action Plan </a>
    					</div>
    				</li>
				</ul>
			</div>
				<div class="card-body">
				<div class="tab-content">
					<div class="tab-pane active" id="basic-tab1">
						@include('users.include.page-1')
					</div>
					<div class="tab-pane" id="basic-tab2">
						@include('users.include.page-2')
					</div>
					<div class="tab-pane" id="basic-tab3">
						@include('users.include.page-3')
					</div>
					<div class="tab-pane" id="basic-tab4">
						@include('users.include.page-4')
					</div>
					<div class="tab-pane" id="basic-tab5">
						@include('users.include.page-5')
					</div>
					<div class="tab-pane" id="basic-tab6">
						@include('users.include.page-6')
					</div>
					<div class="tab-pane" id="basic-tab7">
						@include('users.include.page-7')
					</div>
					<div class="tab-pane" id="basic-tab8">
						@include('users.include.page-8')
					</div>
					<div class="tab-pane" id="basic-tab9">
						@include('users.include.page-9')
					</div>
					<div class="tab-pane" id="basic-tab10">
						@include('users.include.page-10')
					</div>
					<div class="tab-pane" id="basic-tab11">
						@include('users.include.page-11')
					</div>
					<div class="tab-pane" id="basic-tab12">
						@include('users.include.page-12')
					</div>
					<div class="tab-pane" id="basic-tab13">
						@include('users.include.page-13')
					</div>
					<div class="tab-pane" id="basic-tab14">
						@include('users.include.page-14')
					</div>
					<div class="tab-pane" id="basic-tab15">
						@include('users.include.page-15')
					</div>
					<div class="tab-pane" id="basic-tab16">
						@include('users.include.page-16')
					</div>
					<div class="tab-pane" id="basic-tab17">
						@include('users.include.page-17')
					</div>
					<div class="tab-pane" id="basic-tab18">
						@include('users.include.page-18')
					</div>
					<div class="tab-pane" id="basic-tab19">
						@include('users.include.page-19')
					</div>
					<div class="tab-pane" id="basic-tab20">
						@include('users.include.page-20')
					</div>
					<div class="tab-pane" id="basic-tab21">
						@include('users.include.page-21')
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /content area -->
@endsection
@section('scripts')
	<script>
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


		var p4_360_PQ = "{{ $_360_pq }}";
		var p4_360_CQ = "{{ $_360_cq }}";
		var p4_360_focusedThinking = "{{ $_360_focused_thinking }}";
		var p4_360_problemSolving = "{{ $_360_problem_solving }}";
		var p4_360_criticalThinking = "{{ $_360_critical_thinking }}";
		var p4_360_decisionMaking = "{{ $_360_decision_making }}";
		var p4_360_explanation = "{{ $_360_explanation }}";
		var p4_360_EQ = "{{ $_360_eq }}";
		var p4_360_seflAwareness = "{{ $_360_self_awareness }}";
		var p4_360_seflRegulation = "{{ $_360_self_regulation }}";
		var p4_360_interpersonalRelationships = "{{ $_360_interpersonal_relationships }}";
		var p4_360_empathy = "{{ $_360_empathy }}";
		var p4_360_motivation = "{{ $_360_motivation }}";
		var p4_360_LQ = "{{ $_360_lq }}";
		var p4_360_embodient = "{{ $_360_embodiment }}";
		var p4_360_inspiration = "{{ $_360_inspiration }}";
		var p4_360_excellence = "{{ $_360_excellence }}";
		var p4_360_empowerment = "{{ $_360_empowerment }}";
		var p4_360_recognition = "{{ $_360_recognition }}";
		var p4_360_BT = "{{ $_360_bt }}";

		var _360_avg_focused_thinking = "{{ $_360_avg_focused_thinking }}";
		var _360_avg_problem_solving = "{{ $_360_avg_problem_solving }}";
		var _360_avg_critical_thinking = "{{ $_360_avg_critical_thinking }}";
		var _360_avg_decision_making = "{{ $_360_avg_decision_making }}";
		var _360_avg_explanation = "{{ $_360_avg_explanation }}";
		var _360_avg_self_awareness = "{{ $_360_avg_self_awareness }}";
		var _360_avg_self_regulation = "{{ $_360_avg_self_regulation }}";
		var _360_avg_interpersonal_relationships = "{{ $_360_avg_interpersonal_relationships }}";
		var _360_avg_empathy = "{{ $_360_avg_empathy }}";
		var _360_avg_motivation = "{{ $_360_avg_motivation }}";
		var _360_avg_embodiment = "{{ $_360_avg_embodiment }}";
		var _360_avg_inspiration = "{{ $_360_avg_inspiration }}";
		var _360_avg_excellence = "{{ $_360_avg_excellence }}";
		var _360_avg_empowerment = "{{ $_360_avg_empowerment }}";
		var _360_avg_recognition = "{{ $_360_avg_recognition }}";

		var p4_low_range_beg = "{{ $low_range_beg }}";
		var p4_low_range_end = "{{ $low_range_end }}";
		var p4_med_range_beg = "{{ $med_range_beg }}";
		var p4_med_range_end = "{{ $med_range_end }}";
		var p4_high_range_beg = "{{ $high_range_beg }}";
		var p4_high_range_end = "{{ $high_range_end }}";
		
		var	cqmanagerAvg = "{{ $cqmanagerAvg }}";
	    var cqpeerAvg = "{{ $cqpeerAvg }}";
	    var cqdirectAvg = "{{ $cqdirectAvg }}";
	    var cqotherAvg = "{{ $cqotherAvg }}";
	    var CQTotalAvg = "{{ $CQTotalAvg }}";

	    var FTmanagerAvg = "{{ $FTmanagerAvg }}";
	    var FTpeerAvg = "{{ $FTpeerAvg }}";
	    var FTdirectAvg = "{{ $FTdirectAvg }}";
	    var FTotherAvg = "{{ $FTotherAvg }}";
	    var FTTotalAvg = "{{ $FTTotalAvg }}";

	    var PSmanagerAvg = "{{ $PSmanagerAvg }}";
	    var PSpeerAvg = "{{ $PSpeerAvg }}";
	    var PSdirectAvg = "{{ $PSdirectAvg }}";
	    var PSotherAvg = "{{ $PSotherAvg }}";
	    var PSTotalAvg = "{{ $PSTotalAvg }}";

	    var CTmanagerAvg = "{{ $CTmanagerAvg }}";
	    var CTpeerAvg = "{{ $CTpeerAvg }}";
	    var CTdirectAvg  = "{{ $CTdirectAvg }}";
	    var CTotherAvg = "{{ $CTotherAvg }}";
	    var CTTotalAvg = "{{ $CTTotalAvg }}";

	    var DMmanagerAvg = "{{ $DMmanagerAvg }}";
	    var DMpeerAvg = "{{ $DMpeerAvg }}";
	    var DMdirectAvg = "{{ $DMdirectAvg }}";
	    var DMotherAvg = "{{ $DMotherAvg }}";
	    var DMTotalAvg = "{{ $DMTotalAvg }}";
        
        
	    var EXmanagerAvg = "{{ $EXmanagerAvg }}";
	    var EXpeerAvg = "{{ $EXpeerAvg }}";
	    var EXdirectAvg = "{{ $EXdirectAvg }}";
	    var EXotherAvg = "{{ $EXotherAvg }}";
	    var EXTotalAvg = "{{ $EXTotalAvg }}";
	    
	    //Page 15
	    var EQmanagerAvg = "{{ $EQmanagerAvg }}";
	    var EQpeerAvg = "{{ $EQpeerAvg }}";
	    var EQdirectAvg = "{{ $EQdirectAvg }}";
	    var EQotherAvg = "{{ $EQotherAvg }}";
	    var EQTotalAvg = "{{$EQTotalAvg}}";

	    var SAmanagerAvg = "{{ $SAmanagerAvg }}";
	    var SApeerAvg    = "{{ $SApeerAvg }}";
	    var SAdirectAvg  = "{{ $SAdirectAvg }}";
	    var SAotherAvg   = "{{ $SAotherAvg }}";
	    var SATotalAvg   = "{{ $SATotalAvg }}";

	    var SRmanagerAvg = "{{ $SRmanagerAvg }}";
	    var SRpeerAvg = "{{$SRpeerAvg}}";
	    var SRdirectAvg = "{{ $SRdirectAvg }}";
	    var SRotherAvg = "{{ $SRotherAvg }}";
	    var SRTotalAvg = "{{ $SRTotalAvg }}";

	    var IRmanagerAvg = "{{ $IRmanagerAvg }}";
	    var IRpeerAvg = "{{ $IRpeerAvg  }}";
	    var IRdirectAvg = "{{ $IRdirectAvg }}";
	    var IRotherAvg = "{{ $IRotherAvg }}";
	    var IRTotalAvg = "{{ $IRTotalAvg }}";

	    var EMmanagerAvg = "{{ $EMmanagerAvg }}";
	    var EMpeerAvg = "{{ $EMpeerAvg }}";
	    var EMdirectAvg = "{{ $EMdirectAvg }}";
	    var EMotherAvg = "{{ $EMotherAvg }}";
	    var EMTotalAvg = "{{ $EMTotalAvg }}";
	    
	    var MOmanagerAvg = "{{ $MOmanagerAvg }}";
	    var MOpeerAvg = "{{ $MOpeerAvg }}";
	    var MOdirectAvg = "{{ $MOdirectAvg }}";
	    var MOotherAvg = "{{ $MOotherAvg }}";
	    var MOTotalAvg = "{{ $MOTotalAvg }}";
	    
	    // Page 16
	    var LQmanagerAvg = "{{ $LQmanagerAvg }}";
	    var LQpeerAvg = "{{ $LQpeerAvg }}";
	    var LQdirectAvg = "{{ $LQdirectAvg }}";
	    var LQotherAvg = "{{ $LQotherAvg }}";
	    var LQTotalAvg = "{{ $LQTotalAvg }}";

	    var EMBmanagerAvg = "{{ $EMBmanagerAvg }}";
	    var EMBpeerAvg = "{{ $EMBpeerAvg }}";
	    var EMBdirectAvg = "{{ $EMBdirectAvg }}";
	    var EMBotherAvg = "{{ $EMBotherAvg }}";
	    var EMBTotalAvg = "{{ $EMBTotalAvg }}";

	    var INPmanagerAvg = "{{ $INPmanagerAvg }}";
	    var INPpeerAvg = "{{ $INPpeerAvg }}";
	    var INPdirectAvg = "{{ $INPdirectAvg }}";
	    var INPotherAvg = "{{ $INPotherAvg }}";
	    var INPTotalAvg = "{{ $INPTotalAvg }}";

	    var EXCmanagerAvg = "{{ $EXCmanagerAvg }}";
	    var EXCpeerAvg = "{{ $EXCpeerAvg }}";
	    var EXCdirectAvg = "{{ $EXCdirectAvg }}";
	    var EXCotherAvg = "{{ $EXCotherAvg }}";
	    var EXCTotalAvg = "{{ $EXCTotalAvg }}";

	    var EMPmanagerAvg = "{{ $EMPmanagerAvg }}";
	    var EMPpeerAvg = "{{ $EMPpeerAvg }}";
	    var EMPdirectAvg = "{{ $EMPdirectAvg }}";
	    var EMPotherAvg = "{{ $EMPotherAvg }}";
	    var EMPTotalAvg = "{{ $EMPTotalAvg }}";

	    var ROmanagerAvg = "{{ $ROmanagerAvg }}";
	    var ROpeerAvg = "{{ $ROpeerAvg }}";
	    var ROdirectAvg = "{{ $ROdirectAvg }}";
	    var ROotherAvg = "{{ $ROotherAvg }}";
	    var ROTotalAvg = "{{ $ROTotalAvg }}";
	</script>
    <!-- Theme JS files -->
	<script src="{{ asset('js/plugins/visualization/echarts/echarts.min.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-4.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-5.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-8.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-9.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-10.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-11.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-12.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-14.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-15.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-16.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-17.js') }}"></script>
@endsection
