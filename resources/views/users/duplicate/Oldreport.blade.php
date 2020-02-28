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
	
	/* Page-11 */
	$self_quad_cq = round($self_quad->CQ,1);
	$self_quad_ft = round($self_quad->focused_thinking,1);
	$self_quad_ps = round($self_quad->problem_solving,1);
	$self_quad_ct = round($self_quad->critical_thinking,1);
	$self_quad_dm = round($self_quad->decision_making,1);
	$self_quad_ex = round($self_quad->explanation,1);
	$self_quad_eq = round($self_quad->EQ,1);
	$self_quad_sa = round($self_quad->self_awareness,1);
	$self_quad_sr = round($self_quad->self_regulation,1);
	$self_quad_ir = round($self_quad->interpersonal_relationships,1);
	$self_quad_em = round($self_quad->empathy,1);
	$self_quad_mo = round($self_quad->motivation,1);
	$self_quad_lq = round($self_quad->LQ,1);
	$self_quad_emb = round($self_quad->embodiment,1);
	$self_quad_ins = round($self_quad->inspiration,1);
	$self_quad_exc = round($self_quad->excellence,1);
	$self_quad_emp = round($self_quad->empowerment,1);
	$self_quad_re = round($self_quad->recognition,1);
	$self_quad_bt = round($self_quad->BT,1);
	
	$quad_360_cq = $quad_360->CQ;
	$quad_360_ft = $quad_360->FT;
	$quad_360_ps = $quad_360->PS;
	$quad_360_ct = $quad_360->CT;
	$quad_360_dm = $quad_360->DM;
	$quad_360_ex = $quad_360->EX;
	$quad_360_eq = $quad_360->EQ;
	$quad_360_sa = $quad_360->SA;
	$quad_360_sr = $quad_360->SR;
	$quad_360_ir = $quad_360->IR;
	$quad_360_em = $quad_360->EM;
	$quad_360_mo = $quad_360->MO;
	$quad_360_lq = $quad_360->LQ;
	$quad_360_emb = $quad_360->EMB;
	$quad_360_ins = $quad_360->INS;
	$quad_360_exc = $quad_360->EXC;
	$quad_360_emp = $quad_360->EMP;
	$quad_360_re = $quad_360->RE;
	$quad_360_bt = $quad_360->BT;
	
	/* Page-14 */
	
	$cqmanagerAvg = isset($managersAvg->CQ) ? round($managersAvg->CQ,1) : 0;
	$cqpeerAvg    = isset($peersAvg->CQ) ? round($peersAvg->CQ,1) : 0;
	$cqdirectAvg  = isset($directsAvg->CQ) ? round($directsAvg->CQ,1) : 3;
	$cqotherAvg  = isset($othersAvg->CQ) ? round($othersAvg->CQ,1) : 0;
	$CQTotalAvg  = round( ($cqmanagerAvg+$cqpeerAvg+$cqdirectAvg+$cqotherAvg)/4,1 );

	$FTmanagerAvg = isset($managersAvg->FT) ? round($managersAvg->FT,1) : 0;
	$FTpeerAvg    = isset($peersAvg->FT) ? round($peersAvg->FT,1) : 0;
	$FTdirectAvg  = isset($directsAvg->FT) ? round($directsAvg->FT,1) : 3;
	$FTotherAvg  = isset($othersAvg->FT) ? round($othersAvg->FT,1) : 0;
	$FTTotalAvg  = round( ($FTmanagerAvg+$FTpeerAvg+$FTdirectAvg+$FTotherAvg)/4,1 );

	$PSmanagerAvg = isset($managersAvg->PS) ? round($managersAvg->PS,1) : 0;
	$PSpeerAvg    = isset($peersAvg->PS) ? round($peersAvg->PS,1) : 0;
	$PSdirectAvg  = isset($directsAvg->PS) ? round($directsAvg->PS,1) : 3;
	$PSotherAvg  = isset($othersAvg->PS) ? round($othersAvg->PS,1) : 0;
	$PSTotalAvg  = round( ($PSmanagerAvg+$PSpeerAvg+$PSdirectAvg+$PSotherAvg)/4,1);

	$CTmanagerAvg = isset($managersAvg->CT) ? round($managersAvg->CT,1) : 0;
	$CTpeerAvg    = isset($peersAvg->CT) ? round($peersAvg->CT,1) : 0;
	$CTdirectAvg  = isset($directsAvg->CT) ? round($directsAvg->CT,1) : 3;
	$CTotherAvg  = isset($othersAvg->CT) ? round($othersAvg->CT,1) : 0;
	$CTTotalAvg  = round( ($CTmanagerAvg+$CTpeerAvg+$CTdirectAvg+$CTotherAvg)/4,1);

	$DMmanagerAvg = isset($managersAvg->DM) ? round($managersAvg->DM,1) : 0;
	$DMpeerAvg    = isset($peersAvg->DM) ? round($peersAvg->DM,1) : 0;
	$DMdirectAvg  = isset($directsAvg->DM) ? round($directsAvg->DM,1) : 3;
	$DMotherAvg  = isset($othersAvg->DM) ? round($othersAvg->DM,1) : 0;
	$DMTotalAvg  = round( ($DMmanagerAvg+$DMpeerAvg+$DMdirectAvg+$DMotherAvg)/4,1);

	$EXmanagerAvg = isset($managersAvg->EX) ? round( $managersAvg->EX,1) : 0;
	$EXpeerAvg    = isset($peersAvg->EX) ? round( $peersAvg->EX,1) : 0;
	$EXdirectAvg  = isset($directsAvg->EX) ? round( $directsAvg->EX,1) : 3;
	$EXotherAvg  = isset($othersAvg->EX) ? round( $othersAvg->EX,1) : 0;
	$EXTotalAvg  = round( ($EXmanagerAvg+$EXpeerAvg+$EXdirectAvg+$EXotherAvg)/4,1);
	
	/* Page-15 */
	
	$EQmanagerAvg = isset($managersAvg->EQ) ? round($managersAvg->EQ,1) : 0;
	$EQpeerAvg    = isset($peersAvg->EQ) ? round($peersAvg->EQ,1) : 0;
	$EQdirectAvg  = isset($directsAvg->EQ) ? round($directsAvg->EQ,1) : 3;
	$EQotherAvg  = isset($othersAvg->EQ) ? round($othersAvg->EQ,1) : 0;
	$EQTotalAvg  = round( ($EQmanagerAvg+$EQpeerAvg+$EQdirectAvg+$EQotherAvg)/4,1);

	$SAmanagerAvg = isset($managersAvg->SA) ? round($managersAvg->SA,1) : 0;
	$SApeerAvg    = isset($peersAvg->SA) ? round($peersAvg->SA,1) : 0;
	$SAdirectAvg  = isset($directsAvg->SA) ? round($directsAvg->SA,1) : 3;
	$SAotherAvg  = isset($othersAvg->SA) ? round($othersAvg->SA,1) : 0;
	$SATotalAvg  = round(($SAmanagerAvg+$SApeerAvg+$SAdirectAvg+$SAotherAvg)/4,1);

	$SRmanagerAvg = isset($managersAvg->SR) ? round($managersAvg->SR,1) : 0;
	$SRpeerAvg    = isset($peersAvg->SR) ? round($peersAvg->SR,1) : 0;
	$SRdirectAvg  = isset($directsAvg->SR) ? round($directsAvg->SR,1) : 3;
	$SRotherAvg  = isset($othersAvg->SR) ? round($othersAvg->SR,1) : 0;
	$SRTotalAvg  = round( ($SRmanagerAvg+$SRpeerAvg+$SRdirectAvg+$SRotherAvg)/4,1);

	$IRmanagerAvg = isset($managersAvg->IR) ? round( $managersAvg->IR,1) : 0;
	$IRpeerAvg    = isset($peersAvg->IR) ? round( $peersAvg->IR,1) : 0;
	$IRdirectAvg  = isset($directsAvg->IR) ? round( $directsAvg->IR,1) : 3;
	$IRotherAvg  = isset($othersAvg->IR) ? round( $othersAvg->IR,1) : 0;
	$IRTotalAvg  = round( ($IRmanagerAvg+$IRpeerAvg+$IRdirectAvg+$IRotherAvg)/4,1);

	$EMmanagerAvg = isset($managersAvg->EM) ? round( $managersAvg->EM,1) : 0;
	$EMpeerAvg    = isset($peersAvg->EM) ? round( $peersAvg->EM,1) : 0;
	$EMdirectAvg  = isset($directsAvg->EM) ? round( $directsAvg->EM,1) : 3;
	$EMotherAvg  = isset($othersAvg->EM) ? round( $othersAvg->EM,1) : 0;
	$EMTotalAvg  = round( ($EMmanagerAvg+$EMpeerAvg+$EMdirectAvg+$EMotherAvg)/4,1);

	$MOmanagerAvg = isset($managersAvg->MO) ? round( $managersAvg->MO,1) : 0;
	$MOpeerAvg    = isset($peersAvg->MO) ? round( $peersAvg->MO,1) : 0;
	$MOdirectAvg  = isset($directsAvg->MO) ? round( $directsAvg->MO,1) : 3;
	$MOotherAvg  = isset($othersAvg->MO) ? round( $othersAvg->MO,1) : 0;
	$MOTotalAvg  = round( ($MOmanagerAvg+$MOpeerAvg+$MOdirectAvg+$MOotherAvg)/4,1);
	
	
	/* Page 16 */
	$LQmanagerAvg = isset($managersAvg->LQ) ? round( $managersAvg->LQ,1) : 0;
	$LQpeerAvg    = isset($peersAvg->LQ) ? round( $peersAvg->LQ,1) : 0;
	$LQdirectAvg  = isset($directsAvg->LQ) ? round( $directsAvg->LQ,1) : 3;
	$LQotherAvg  = isset($othersAvg->LQ) ? round( $othersAvg->LQ,1) : 0;
	$LQTotalAvg  = round( ($LQmanagerAvg+$LQpeerAvg+$LQdirectAvg+$LQotherAvg)/4,1);

	$EMBmanagerAvg = isset($managersAvg->EMB) ? round( $managersAvg->EMB,1) : 0;
	$EMBpeerAvg    = isset($peersAvg->EMB) ? round( $peersAvg->EMB,1) : 0;
	$EMBdirectAvg  = isset($directsAvg->EMB) ? round( $directsAvg->EMB,1) : 3;
	$EMBotherAvg  = isset($othersAvg->EMB) ? round( $othersAvg->EMB,1) : 0;
	$EMBTotalAvg  = round( ($EMBmanagerAvg+$EMBpeerAvg+$EMBdirectAvg+$EMBotherAvg)/4,1);

	$INPmanagerAvg = isset($managersAvg->INP) ? round( $managersAvg->INP,1) : 0;
	$INPpeerAvg    = isset($peersAvg->INP) ? round( $peersAvg->INP,1) : 0;
	$INPdirectAvg  = isset($directsAvg->INP) ? round( $directsAvg->INP,1) : 3;
	$INPotherAvg  = isset($othersAvg->INP) ? round( $othersAvg->INP,1) : 0;
	$INPTotalAvg  = round( ($INPmanagerAvg+$INPpeerAvg+$INPdirectAvg+$INPotherAvg)/4,1);

	$EXCmanagerAvg = isset($managersAvg->EXC) ? round( $managersAvg->EXC,1) : 0;
	$EXCpeerAvg    = isset($peersAvg->EXC) ? round( $peersAvg->EXC,1) : 0;
	$EXCdirectAvg  = isset($directsAvg->EXC) ? round( $directsAvg->EXC,1) : 3;
	$EXCotherAvg  = isset($othersAvg->EXC) ? round( $othersAvg->EXC,1) : 0;
	$EXCTotalAvg  = round( ($EXCmanagerAvg+$EXCpeerAvg+$EXCdirectAvg+$EXCotherAvg)/4,1);

	$EMPmanagerAvg = isset($managersAvg->EMP) ? round( $managersAvg->EMP,1) : 0;
	$EMPpeerAvg    = isset($peersAvg->EMP) ? round( $peersAvg->EMP,1) : 0;
	$EMPdirectAvg  = isset($directsAvg->EMP) ? round( $directsAvg->EMP,1) : 3;
	$EMPotherAvg  = isset($othersAvg->EMP) ? round( $othersAvg->EMP,1) : 0;
	$EMPTotalAvg  = round( ($EMPmanagerAvg+$EMPpeerAvg+$EMPdirectAvg+$EMPotherAvg)/4,1);

	$ROmanagerAvg = isset($managersAvg->RO) ?round(  $managersAvg->RO,1) : 0;
	$ROpeerAvg    = isset($peersAvg->RO) ? round( $peersAvg->RO,1) : 0;
	$ROdirectAvg  = isset($directsAvg->RO) ? round( $directsAvg->RO,1) : 3;
	$ROotherAvg  = isset($othersAvg->RO) ? round( $othersAvg->RO,1) : 0;
	$ROTotalAvg  = round( ($ROmanagerAvg+$ROpeerAvg+$ROdirectAvg+$ROotherAvg)/4,1);
	
	/*Page 17*/
	$BTmanagerAvg = isset($managersAvg->BT) ? round($managersAvg->BT,1) : 0;
	$BTpeerAvg    = isset($peersAvg->BT) ? round($peersAvg->BT,1) : 0;
	$BTdirectAvg  = isset($directsAvg->BT) ? round($directsAvg->BT,1) : 3;
	$BTotherAvg  = isset($othersAvg->BT) ? round($othersAvg->BT,1) : 0;
	$BTTotalAvg  = round( ($BTmanagerAvg+$BTpeerAvg+$BTdirectAvg+$BTotherAvg)/4,1);
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
		@include('users.duplicate.include.page-1')
		@include('users.duplicate.include.page-2')
		@include('users.duplicate.include.page-3')
		@include('users.duplicate.include.page-4')
		@include('users.duplicate.include.page-5')
		@include('users.duplicate.include.page-6')
		@include('users.duplicate.include.page-7')
		@include('users.duplicate.include.page-8')
		@include('users.duplicate.include.page-9')
		@include('users.duplicate.include.page-10')
		@include('users.duplicate.include.page-11')
		@include('users.duplicate.include.page-12')
		@include('users.duplicate.include.page-13')
		@include('users.duplicate.include.page-14')
		@include('users.duplicate.include.page-15')
		@include('users.duplicate.include.page-16')
		@include('users.duplicate.include.page-17')
		@include('users.duplicate.include.page-18')
		@include('users.duplicate.include.page-19')
		@include('users.duplicate.include.page-20')
		@include('users.duplicate.include.page-21')
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
		
		
		// Page 11 Start
		    var self_quad_cq  = "{{ $self_quad_cq }}";
        	var self_quad_ft  = "{{ $self_quad_ft }}";
        	var self_quad_ps  = "{{ $self_quad_ps }}";
        	var self_quad_ct  = "{{ $self_quad_ct }}";
        	var self_quad_dm  = "{{ $self_quad_dm }}"; 
        	var self_quad_ex  = "{{ $self_quad_ex }}";
        	var self_quad_eq  = "{{ $self_quad_eq }}";
        	var self_quad_sa  = "{{ $self_quad_sa }}";
        	var self_quad_sr  = "{{ $self_quad_sr }}";
        	var self_quad_ir  = "{{ $self_quad_ir }}";
        	var self_quad_em  = "{{ $self_quad_em }}";
        	var self_quad_mo  = "{{ $self_quad_mo }}";
        	var self_quad_lq  = "{{ $self_quad_lq }}";
        	var self_quad_emb = "{{ $self_quad_emb }}";
        	var self_quad_ins = "{{ $self_quad_ins }}";
        	var self_quad_exc = "{{ $self_quad_exc }}";
        	var self_quad_emp = "{{ $self_quad_emp }}";
        	var self_quad_re  = "{{ $self_quad_re }}";
        	var self_quad_bt  = "{{ $self_quad_bt }}";
        	
        	var quad_360_cq  = "{{ $quad_360_cq  }}";
        	var quad_360_ft  = "{{ $quad_360_ft  }}";
        	var quad_360_ps  = "{{ $quad_360_ps  }}";
        	var quad_360_ct  = "{{ $quad_360_ct  }}";
        	var quad_360_dm  = "{{ $quad_360_dm  }}";
        	var quad_360_ex  = "{{ $quad_360_ex  }}";
        	var quad_360_eq  = "{{ $quad_360_eq  }}";
        	var quad_360_sa  = "{{ $quad_360_sa  }}";
        	var quad_360_sr  = "{{ $quad_360_sr  }}";
        	var quad_360_ir  = "{{ $quad_360_ir  }}";
        	var quad_360_em  = "{{ $quad_360_em  }}";
        	var quad_360_mo  = "{{ $quad_360_mo  }}";
        	var quad_360_lq  = "{{ $quad_360_lq  }}";
        	var quad_360_emb = "{{ $quad_360_emb }}";
        	var quad_360_ins = "{{ $quad_360_ins }}";
        	var quad_360_exc = "{{ $quad_360_exc }}";
        	var quad_360_emp = "{{ $quad_360_emp }}";
        	var quad_360_re  = "{{ $quad_360_re  }}";
        	var quad_360_bt  = "{{ $quad_360_bt  }}";
		// page 11 End
		
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
	    
	    // Page 12
	    var managerAvgPQ = "{{ isset($managersAvg->PQ) ? $managersAvg->PQ : 0 }}";
	    var peersAvgPQ   = "{{ isset($peersAvg->PQ) ? $peersAvg->PQ : 0  }}";
	    var directsAvgPQ   = "{{ isset($directsAvg->PQ) ? $directsAvg->PQ : 0  }}";
	    var othersAvgPQ   = "{{ isset($othersAvg->PQ) ? $othersAvg->PQ : 0  }}";
	    
	    var selfCQ = "{{ isset($selfSummary->CQ) ? $selfSummary->CQ : 0  }}";
	    var selfEQ = "{{ isset($selfSummary->EQ) ? $selfSummary->EQ : 0  }}";
	    var selfLQ = "{{ isset($selfSummary->LQ) ? $selfSummary->LQ : 0  }}";
	    
	    var managerAvgCQ = "{{ isset($managersAvg->CQ) ? $managersAvg->CQ : 0 }}";
	    var managerAvgEQ = "{{ isset($managersAvg->EQ) ? $managersAvg->EQ : 0 }}";
	    var managerAvgLQ = "{{ isset($managersAvg->LQ) ? $managersAvg->LQ : 0 }}";
	    
	    var peersAvgCQ   = "{{ isset($peersAvg->CQ) ? $peersAvg->CQ : 0  }}";
	    var peersAvgEQ   = "{{ isset($peersAvg->EQ) ? $peersAvg->EQ : 0  }}";
	    var peersAvgLQ   = "{{ isset($peersAvg->LQ) ? $peersAvg->LQ : 0  }}";
	    
	    var directsAvgCQ   = "{{ isset($directsAvg->CQ) ? $directsAvg->CQ : 0  }}";
	    var directsAvgEQ   = "{{ isset($directsAvg->EQ) ? $directsAvg->EQ : 0  }}";
	    var directsAvgLQ   = "{{ isset($directsAvg->LQ) ? $directsAvg->LQ : 0  }}";
	    
	    var othersAvgCQ    = "{{ isset($othersAvg->CQ) ? $othersAvg->CQ : 0  }}";
	    var othersAvgEQ    = "{{ isset($othersAvg->EQ) ? $othersAvg->EQ : 0  }}";
	    var othersAvgLQ    = "{{ isset($othersAvg->LQ) ? $othersAvg->LQ : 0  }}";
	    
	    var seflBT = "{{ isset($selfSummary->BT) ? $selfSummary->BT : 0  }}";
	    var managerAvgBT = "{{ isset($managersAvg->BT) ? $managersAvg->BT : 0 }}";
	    var peersAvgBT = "{{ isset($peersAvg->BT) ? $peersAvg->BT : 0 }}";
	    var directsAvgBT = "{{ isset($directsAvg->BT) ? $directsAvg->BT : 0 }}";
	    var othersAvgBT = "{{ isset($othersAvg->BT) ? $othersAvg->BT : 0 }}";
 	    
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
	<script src="{{ asset('js/demo_pages/charts/page-18.js') }}"></script>
    <script src="{{ asset('assets/js/html2canvas.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <script src="{{ asset('assets/js/pdf.js') }}"></script>

@endsection
