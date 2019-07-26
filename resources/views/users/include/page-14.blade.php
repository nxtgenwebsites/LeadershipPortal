@php
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

@endphp
<!-- Report Page 14 -->
    <div class="row">
	    	<div class="col-8">

	        </div>
	        <div class="col-2">
	            <h5>Name: {{ $profile->first_name }} {{ $profile->last_name }}</h5>
	            <h5>{{ date('M d, Y') }}</h5>
	        </div>
	        <div class="col-1">
	            <img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130" height="55">
	        </div>
	        <div class="col-md-12">
	            <h1 class="display-5 ">Cognitive Bar Graph – Self & 360</h1>
	            <h3 class="ml-3">This is the set of bar graphs for each of the five subscales related to Cognition. It is a graphical representation of your and your raters average responses for that subscale. It shows the response for Self, the overall Average, and the Average response for each of the rater groups.</h3>
	        </div>
	    </div>
	<div class="row mb-2">
	        <div class="col-md-6">
	       		<table class="table table-bordered" style="background-color: lightgrey; ">
	       			<tr>
	       				<td rowspan="7" style="border: 1px solid black;">Cognitive Quotent</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-bottom: none;">Self</td>
	       				<td style="border: 1px solid black;">{{ $selfSummary->CQ }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Average</td>
	       				<td style="border: 1px solid black;">{{ $CQTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Manager</td>
	       				<td style="border: 1px solid black;">{{ $cqmanagerAvg  }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Peer</td>
	       				<td style="border: 1px solid black;">{{ $cqpeerAvg  }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Direct Report</td>
	       				<td style="border: 1px solid black;">{{ $cqdirectAvg  }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;">Other</td>
	       				<td style="border: 1px solid black;">{{ $cqotherAvg  }}</td>
	       			</tr>
	       		</table>
	        </div>
            <div class="col-md-6">
                <div class="chart-container">
					<div class="chart" style="height:300px;width: 4in;" id="CQSelfvs360"></div>
				</div>
            </div>
            <div class="col-md-6">
	       		<table class="table table-bordered">
	       			<tr>
	       				<td rowspan="7">Focused Thinking</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->focused_thinking }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $FTTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $FTmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $FTpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $FTdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $FTotherAvg }}</td>
	       			</tr>
	       		</table>
	        </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="focusedThinking"></div>
				</div>
            </div>
            <div class="col-md-6">
	       		<table class="table table-bordered" style="background-color: lightblue;">
	       			<tr>
	       				<td rowspan="7" style="border: 1px solid black;">Problem-Solving</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-bottom: none;">Self</td>
	       				<td style="border: 1px solid black;">{{ $selfSummary->problem_solving }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Average</td>
	       				<td style="border: 1px solid black;">{{ $PSTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Manager</td>
	       				<td style="border: 1px solid black;">{{ $PSmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Peer</td>
	       				<td style="border: 1px solid black;">{{ $PSpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Direct Report</td>
	       				<td style="border: 1px solid black;">{{ $PSdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;">Other</td>
	       				<td style="border: 1px solid black;">{{ $PSotherAvg }}</td>
	       			</tr>
	       		</table>
	        </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="problemSolving"></div>
				</div>
            </div>
            <div class="col-md-6">
	       		<table class="table table-bordered">
	       			<tr>
	       				<td rowspan="7">Critical Thinking</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->critical_thinking }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $CTTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $CTmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $CTpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $CTdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $CTotherAvg }}</td>
	       			</tr>
	       		</table>
	        </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="criticalThinking"></div>
				</div>
            </div>
            <div class="col-md-6">
	       		<table class="table table-bordered" style="background-color: lightblue;">
	       			<tr>
	       				<td rowspan="7" style="border: 1px solid black;">Decision Making</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-bottom: none;">Self</td>
	       				<td style="border: 1px solid black;">{{ $selfSummary->decision_making }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Average</td>
	       				<td style="border: 1px solid black;">{{ $DMTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Manager</td>
	       				<td style="border: 1px solid black;">{{ $DMmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Peer</td>
	       				<td style="border: 1px solid black;">{{ $DMpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;border-bottom: none;">Direct Report</td>
	       				<td style="border: 1px solid black;">{{ $DMdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td style="border: 1px solid black;border-top: none;">Other</td>
	       				<td style="border: 1px solid black;">{{ $DMotherAvg }}</td>
	       			</tr>
	       		</table>
	        </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="decisionMaking"></div>
				</div>
            </div>
            <div class="col-md-6">
	       		<table class="table table-bordered">
	       			<tr>
	       				<td rowspan="7">Explanation</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->explanation }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $EXTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $EXmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $EXpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $EXdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $EXotherAvg }}</td>
	       			</tr>
	       		</table>
	        </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="explanation"></div>
			</div>
           </div>
	    </div>
<!-- /Report page 14 -->
