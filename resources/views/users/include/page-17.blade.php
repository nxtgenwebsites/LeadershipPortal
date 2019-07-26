@php
	$BTmanagerAvg = isset($managersAvg->BT) ? $managersAvg->BT : 0;
	$BTpeerAvg    = isset($peersAvg->BT) ? $peersAvg->BT : 0;
	$BTdirectAvg  = isset($directsAvg->BT) ? $directsAvg->BT : 3;
	$BTotherAvg  = isset($othersAvg->BT) ? $othersAvg->BT : 0;
	$BTTotalAvg  = ($BTmanagerAvg+$BTpeerAvg+$BTdirectAvg+$BTotherAvg)/4;
@endphp
<!-- Report Page 17 -->
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
	            <h1 class="display-5">Betterment and Balance Bar Graph – Self & 360</h1>
	            <h3 class="ml-3">This is the set of bar graphs for the Betterment scale and the Balance calculation. The Betterment scale is a graphical representation of your and your raters average responses for that scale. It shows the response for Self, the overall Average, and the Average response for each of the rater groups. Your Betterment score, as previously mentioned, is not part of your PQ-i however it demonstrates your commitment to betterment.</h3>
	        </div>
	    </div>

	<div class="row mb-2">
	       <div class="col-md-6">
	       		<table class="table table-bordered" style="background: grey">
	       			<tr>
	       				<td rowspan="7">BETTERMENT</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>{{ $selfSummary->BT }}</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>{{ $BTTotalAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>{{ $BTmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>{{ $BTpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>{{ $BTdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td>{{ $BTotherAvg }}</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="betterment"></div>
				</div>
           </div>
	    </div>

    <div class="row mb-2">
	    	<div class="col-md-12">
	            <h1 class="display-5">PQ-i Balance</h1>
	            <h3 class="ml-3">Your PQ-i balance is based on the relationship between your Cognitive Quotient (CQ), Emotional Quotient (EQ) and your Leadership Quotient (LQ). The lower the score in this bar graph the better balanced you are within each of these quotients. The higher the score in this bar graph the more imbalanced you are within each of these quotients. A lower overall PQ-i along with a low score in this graph demonstrates a comfort level within each of the quotients and the participant does not rely on one specific skill to achieve their overall professionalism. In contrast a higher PQ-i and a high score on this graph demonstrates more of an erratic use of these quotients and the participant may rely more on one specific skill to achieve their overall professionalism. Even though the goal of the PQ-I is to improve your overall score it is also the goal of the PQ-I to help you improve your balance between each of the quotients.</h3>
	        </div>
	    </div>

    <div class="row mb-2">
	       <div class="col-md-6">
	       		<table class="table table-bordered" style="background: grey">
	       			<tr>
	       				<td rowspan="7">PQ- iBALANCE</td>
	       			</tr>
	       			<tr>
	       				<td>Self</td>
	       				<td>130.7</td>
	       			</tr>
	       			<tr>
	       				<td>Average</td>
	       				<td>101.7</td>
	       			</tr>
	       			<tr>
	       				<td>Manager</td>
	       				<td>120.0</td>
	       			</tr>
	       			<tr>
	       				<td>Peer</td>
	       				<td>123.7</td>
	       			</tr>
	       			<tr>
	       				<td>Direct Report</td>
	       				<td>12.5</td>
	       			</tr>
	       			<tr>
	       				<td>Other</td>
	       				<td></td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px;width: 4in;" id="pq_i_balance"></div>
				</div>
           </div>
	    </div>
<!-- /Report page 17 -->
