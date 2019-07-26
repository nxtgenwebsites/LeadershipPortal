@php
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
<!-- Report Page 16 -->
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
	            <h1 class="display-5">Leadership Bar Graph – Self & 360</h1>
	            <h3 class="ml-3">This is the set of bar graphs for each of the five subscales related to Leadership. It is a graphical representation of your and your raters average responses for that subscale. It shows the response for Self, the overall Average, and the Average response for each of the rater groups.</h3>
	        </div>
	    </div>
	<div class="row mb-2">
	       <div class="col-md-6">
	       		<table class="table table-bordered" style="background: grey">
	       			<tr>
	       				<td rowspan="7" style="color:brown">Leadership Quotent</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->LQ }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $LQTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $LQmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $LQpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $LQdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $LQotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="lqselfvs360"></div>
				</div>
           </div>
           <div class="col-md-6">
	       		<table class="table table-bordered">
	       			<tr>
	       				<td rowspan="7">Embodiment</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->embodiment }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $EMBTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $EMBmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $EMBpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $EMBdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $EMBotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="embodiment"></div>
				</div>
           </div>
           <div class="col-md-6">
	       		<table class="table table-bordered" style="background: brown">
	       			<tr>
	       				<td rowspan="7">Inspiration</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->inspiration }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $INPTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $INPmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $INPpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $INPdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $INPotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="inspiration"></div>
				</div>
           </div>
           <div class="col-md-6">
	       		<table class="table table-bordered">
	       			<tr>
	       				<td rowspan="7">Excellence</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->excellence }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $EXCTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $EXCmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $EXCpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $EXCdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $EXCotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="excellence"></div>
				</div>
           </div>
           <div class="col-md-6">
	       		<table class="table table-bordered" style="background: brown">
	       			<tr>
	       				<td rowspan="7">Empowerment</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->empowerment }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $EMPTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $EMPmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $EMPpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $EMPdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $EMPotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="empowerment"></div>
				</div>
           </div>
            <div class="col-md-6">
	       		<table class="table table-bordered" >
	       			<tr>
	       				<td rowspan="7">Recognition</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->recognition }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $ROTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $ROmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $ROpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $ROdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $ROotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="recognition"></div>
				</div>
           </div>


	    </div>
<!-- /Report page 6 -->
