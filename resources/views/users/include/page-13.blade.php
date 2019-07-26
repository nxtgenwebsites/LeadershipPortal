<!-- Report Page 13 -->
<div class="row">
	<div class="col-md-12" style="transform: rotate(-90deg);">
		<div>
		    <div class="row">
		        <div class="col-8">
		        </div>
		        <div class="col-2">
		            <h5>Name: {{ $profile->first_name }} {{ $profile->last_name }}</h5>
		            <h5>{{ date('M d, Y') }}</h5></h5>
		        </div>
		        <div class="col-1">
		            <img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130" height="55">
		        </div>
		        <div class="col-md-12">
		            <h1 class="display-5">Subscale Linear Gap Analysis – Self vs. 360
					</h1>
		            <h3>PQ-i Subscales </h3>
		            <h5>The linear gap analysis below is based on the subscales within the Cognitive, Emotional and Leadership scales of the PQ-i. The graph below represents the gaps between your self assessment and the rater groups within each of the subscales.</h5>
		        </div>
		    </div>
		   	<div class="row">
			   	<div class="col-md-2">
			   		<h3 style="background-color: blue;color:white; transform: rotate(-90deg); width: 106px;margin-top: 150px;margin-left: 34px">COGNITIVE</h3>
			   	</div>
			   	<div class="col-md-10">
				   	<table class="table table-bordered" style="border : 1px solid black;">
				   		<tr>
				   			<td style="width: 10px">Subscales</td>
				   			<td style="width: 50px"></td>
				   			<td style="width: 10px">Self</td>
				   			<td style="width: 10px">Manager</td>
				   			<td style="width: 10px">Peer</td>
				   			<td style="width: 10px">Direct Report</td>
				   			<td style="width: 10px">Other</td>
				   		</tr>
				   		<tr>
				   			<td># of Raters</td>
				   			<td></td>
				   			<td>1</td>
				   			<td>{{ $profile->mgr_ttl }}</td>
				   			<td>{{ $profile->peer_ttl }}</td>
				   			<td>{{ $profile->dir_ttl }}</td>
				   			<td>{{ $profile->oth_ttl }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: blue;font-size: 10px;width: 137px;">Focused-Thinking </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->focused_thinking) ? $selfSummary->focused_thinking : 0  }}</td>
				   			<td>{{ isset($managersAvg->FT) ? $managersAvg->FT : 0 }}</td>
				   			<td>{{ isset($peersAvg->FT) ? $peersAvg->FT : 0  }}</td>
				   			<td>{{ isset($directsAvg->FT) ? $directsAvg->FT : 0  }}</td>
				   			<td>{{ isset($othersAvg->FT) ? $othersAvg->FT : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: blue;font-size: 10px;">Problem-Solving </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->problem_solving) ? $selfSummary->problem_solving : 0  }}</td>
				   			<td>{{ isset($managersAvg->PS) ? $managersAvg->PS : 0 }}</td>
				   			<td>{{ isset($peersAvg->PS) ? $peersAvg->PS : 0  }}</td>
				   			<td>{{ isset($directsAvg->PS) ? $directsAvg->PS : 0  }}</td>
				   			<td>{{ isset($othersAvg->PS) ? $othersAvg->PS : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: blue;font-size: 10px;">Critical-Thinking</td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->critical_thinking) ? $selfSummary->critical_thinking : 0  }}</td>
				   			<td>{{ isset($managersAvg->CT) ? $managersAvg->CT : 0 }}</td>
				   			<td>{{ isset($peersAvg->CT) ? $peersAvg->CT : 0  }}</td>
				   			<td>{{ isset($directsAvg->CT) ? $directsAvg->CT : 0  }}</td>
				   			<td>{{ isset($othersAvg->CT) ? $othersAvg->CT : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: blue;font-size: 10px;">Decision-Making </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->decision_making) ? $selfSummary->decision_making : 0  }}</td>
				   			<td>{{ isset($managersAvg->DM) ? $managersAvg->DM : 0 }}</td>
				   			<td>{{ isset($peersAvg->DM) ? $peersAvg->DM : 0  }}</td>
				   			<td>{{ isset($directsAvg->DM) ? $directsAvg->DM : 0  }}</td>
				   			<td>{{ isset($othersAvg->DM) ? $othersAvg->DM : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: blue;font-size: 10px;">Explanation </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->explanation) ? $selfSummary->explanation : 0  }}</td>
				   			<td>{{ isset($managersAvg->EX) ? $managersAvg->EX : 0 }}</td>
				   			<td>{{ isset($peersAvg->EX) ? $peersAvg->EX : 0  }}</td>
				   			<td>{{ isset($directsAvg->EX) ? $directsAvg->EX : 0  }}</td>
				   			<td>{{ isset($othersAvg->EX) ? $othersAvg->EX : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: red;font-size: 10px;">Self-Awareness </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->self_awareness) ? $selfSummary->self_awareness : 0  }}</td>
				   			<td>{{ isset($managersAvg->SA) ? $managersAvg->SA : 0 }}</td>
				   			<td>{{ isset($peersAvg->SA) ? $peersAvg->SA : 0  }}</td>
				   			<td>{{ isset($directsAvg->SA) ? $directsAvg->SA : 0  }}</td>
				   			<td>{{ isset($othersAvg->SA) ? $othersAvg->SA : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: red;font-size: 10px;">Self-Regulation </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->self_regulation) ? $selfSummary->self_regulation : 0  }}</td>
				   			<td>{{ isset($managersAvg->SR) ? $managersAvg->SR : 0 }}</td>
				   			<td>{{ isset($peersAvg->SR) ? $peersAvg->SR : 0  }}</td>
				   			<td>{{ isset($directsAvg->SR) ? $directsAvg->SR : 0  }}</td>
				   			<td>{{ isset($othersAvg->SR) ? $othersAvg->SR : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: red;font-size: 10px;">Interpersonal Relationships </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->interpersonal_relationships) ? $selfSummary->interpersonal_relationships : 0  }}</td>
				   			<td>{{ isset($managersAvg->IR) ? $managersAvg->IR : 0 }}</td>
				   			<td>{{ isset($peersAvg->IR) ? $peersAvg->IR : 0  }}</td>
				   			<td>{{ isset($directsAvg->IR) ? $directsAvg->IR : 0  }}</td>
				   			<td>{{ isset($othersAvg->IR) ? $othersAvg->IR : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: red;font-size: 10px;">Empathy </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->empathy) ? $selfSummary->empathy : 0  }}</td>
				   			<td>{{ isset($managersAvg->EM) ? $managersAvg->EM : 0 }}</td>
				   			<td>{{ isset($peersAvg->EM) ? $peersAvg->EM : 0  }}</td>
				   			<td>{{ isset($directsAvg->EM) ? $directsAvg->EM : 0  }}</td>
				   			<td>{{ isset($othersAvg->EM) ? $othersAvg->EM : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: red;font-size: 10px;">Motivation</td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->motivation) ? $selfSummary->motivation : 0  }}</td>
				   			<td>{{ isset($managersAvg->MO) ? $managersAvg->MO : 0 }}</td>
				   			<td>{{ isset($peersAvg->MO) ? $peersAvg->MO : 0  }}</td>
				   			<td>{{ isset($directsAvg->MO) ? $directsAvg->MO : 0  }}</td>
				   			<td>{{ isset($othersAvg->MO) ? $othersAvg->MO : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: lightblue;font-size: 10px;">Embodiment </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->embodiment) ? $selfSummary->embodiment : 0  }}</td>
				   			<td>{{ isset($managersAvg->EMB) ? $managersAvg->EMB : 0 }}</td>
				   			<td>{{ isset($peersAvg->EMB) ? $peersAvg->EMB : 0  }}</td>
				   			<td>{{ isset($directsAvg->EMB) ? $directsAvg->EMB : 0  }}</td>
				   			<td>{{ isset($othersAvg->EMB) ? $othersAvg->EMB : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: lightblue;font-size: 10px;">Inspiration </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->inspiration) ? $selfSummary->inspiration : 0  }}</td>
				   			<td>{{ isset($managersAvg->INP) ? $managersAvg->INP : 0 }}</td>
				   			<td>{{ isset($peersAvg->INP) ? $peersAvg->INP : 0  }}</td>
				   			<td>{{ isset($directsAvg->INP) ? $directsAvg->INP : 0  }}</td>
				   			<td>{{ isset($othersAvg->INP) ? $othersAvg->INP : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: lightblue;font-size: 10px;">Excellence</td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->excellence) ? $selfSummary->excellence : 0  }}</td>
				   			<td>{{ isset($managersAvg->EXC) ? $managersAvg->EXC : 0 }}</td>
				   			<td>{{ isset($peersAvg->EXC) ? $peersAvg->EXC : 0  }}</td>
				   			<td>{{ isset($directsAvg->EXC) ? $directsAvg->EXC : 0  }}</td>
				   			<td>{{ isset($othersAvg->EXC) ? $othersAvg->EXC : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: lightblue;font-size: 10px;">Empowerment </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->excellence) ? $selfSummary->excellence : 0  }}</td>
				   			<td>{{ isset($managersAvg->EMP) ? $managersAvg->EMP : 0 }}</td>
				   			<td>{{ isset($peersAvg->EMP) ? $peersAvg->EMP : 0  }}</td>
				   			<td>{{ isset($directsAvg->EMP) ? $directsAvg->EMP : 0  }}</td>
				   			<td>{{ isset($othersAvg->EMP) ? $othersAvg->EMP : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td style="color: lightblue;font-size: 10px;">Recognition</td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->recognition) ? $selfSummary->recognition : 0  }}</td>
				   			<td>{{ isset($managersAvg->RO) ? $managersAvg->RO : 0 }}</td>
				   			<td>{{ isset($peersAvg->RO) ? $peersAvg->RO : 0  }}</td>
				   			<td>{{ isset($directsAvg->RO) ? $directsAvg->RO : 0  }}</td>
				   			<td>{{ isset($othersAvg->RO) ? $othersAvg->RO : 0  }}</td>
				   		</tr>
				   	</table>
			   	</div>
		   	</div>
		</div>
   </div>
</div>
<!-- End Report Page 13 -->