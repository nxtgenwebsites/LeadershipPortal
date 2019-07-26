@php
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

@endphp
<!-- Report Page 15 -->
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
	            <h1 class="display-5">Emotional Bar Graph – Self & 360</h1>
	            <h3 class="ml-3">This is the set of bar graphs for each of the five subscales related to Emotion. It is a graphical representation of your and your raters average responses for that subscale. It shows the response for Self, the overall Average, and the Average response for each of the rater groups.</h3>
	        </div>
	    </div>
	<div class="row mb-2">
	       <div class="col-md-6">
	       		<table class="table table-bordered" style="background: darkgrey">
	       			<tr>
	       				<td rowspan="7" style="color:red">Emotional Quotent</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->EQ }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $EQTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $EQmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $EQpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $EQdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $EQotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="eqselfvs360"></div>
				</div>
           </div>
           <div class="col-md-6">
	       		<table class="table table-bordered">
	       			<tr>
	       				<td rowspan="7">Self-Awareness</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->self_awareness}}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $SATotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $SAmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $SApeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $SAdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $SAotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="selfAwareness"></div>
				</div>
           </div>
           <div class="col-md-6">
	       		<table class="table table-bordered" style="background: pink">
	       			<tr>
	       				<td rowspan="7">Self-Regulation</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->self_regulation }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $SRTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $SRmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $SRpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $SRdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $SRotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="selfRegulation"></div>
				</div>
           </div>
           <div class="col-md-6">
	       		<table class="table table-bordered">
	       			<tr>
	       				<td rowspan="7">Interpersonal Relationships</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->interpersonal_relationships }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $IRTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $IRmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $IRpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $IRdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $IRotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="interpersonalRelationship"></div>
				</div>
           </div>
           <div class="col-md-6">
	       		<table class="table table-bordered" style="background: pink">
	       			<tr>
	       				<td rowspan="7">Empathy</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->empathy }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $EMTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $EMmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $EMpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $EMdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $EMotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="empathy"></div>
				</div>
           </div>
            <div class="col-md-6">
	       		<table class="table table-bordered">
	       			<tr>
	       				<td rowspan="7">Motivation</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->motivation }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $MOTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $MOmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $MOpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $MOdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $MOotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="motivation"></div>
				</div>
           </div>


	    </div>
<!-- /Report page 6 -->
