<!-- Report Page 12 -->
<div class="row">
    <div class="col-md-8 offset-md-2">
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
	            <h1 class="display-5">Linear Gap Analysis – Self vs. 360</h1>
	            <h3>TOTAL PQ </h3>
	            <h5>Your total PQ is a general indicator of your overall cognitive, emotional and leadership skills. This
					indicator demonstrates how these skills influence the way you use your head, heart and hands throughout
					the day as you perform the duties of your role.
				</h5>
	         </div>
	   </div>
	   <div class="row">
	   	<table class="table table-bordered" style="border : 1px solid black;">
	   		<tr>
	   			<td style="width: 10px"></td>
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
	   			<td>Total PQ-i </td>
	   			<td width="300px">
	   				<div class="chart-container">
						<div class="chart" id="PQ-lines"></div>
	   				</div>
	   			</td>
	   			<td>{{ isset($selfSummary->PQ) ? $selfSummary->PQ : 0  }}</td>
	   			<td>{{ isset($managersAvg->PQ) ? $managersAvg->PQ : 0 }}</td>
	   			<td>{{ isset($peersAvg->PQ) ? $peersAvg->PQ : 0  }}</td>
	   			<td>{{ isset($directsAvg->PQ) ? $directsAvg->PQ : 0  }}</td>
	   			<td>{{ isset($othersAvg->PQ) ? $othersAvg->PQ : 0  }}</td>
	   		</tr>
	   	</table>
	   </div>
	   <div class="row">
	   		<h3>TOTAL CQ, EQ and LQ</h3>
	            <h5>Your total CQ, EQ and LQ represent which areas within your PQ-i that either raise or lower your overall
				score and contribute to either the cognitive, emotional or leadership portion of your PQ-i. The greater the
				distance between your Self score and a particular rater score demonstrates a general disagreement between
				your rating and their rating.</h5>
	   </div>
	   <div class="row">
	   	<table class="table table-bordered" style="border : 1px solid black;">
	   		<tr>
	   			<td style="width: 10px"></td>
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
	   			<td>Total CQ </td>
	   			<td>
	   				<div class="chart-container">
						<div class="chart" id="CQ-lines"></div>
	   				</div>
   				</td>
	   			<td>{{ isset($selfSummary->CQ) ? $selfSummary->CQ : 0  }}</td>
	   			<td>{{ isset($managersAvg->CQ) ? $managersAvg->CQ : 0 }}</td>
	   			<td>{{ isset($peersAvg->CQ) ? $peersAvg->CQ : 0  }}</td>
	   			<td>{{ isset($directsAvg->CQ) ? $directsAvg->CQ : 0  }}</td>
	   			<td>{{ isset($othersAvg->CQ) ? $othersAvg->CQ : 0  }}</td>
	   		</tr>
	   		<tr>
	   			<td>Total EQ </td>
	   			<td>
	   				<div class="chart-container">
						<div class="chart" id="EQ-lines"></div>
	   				</div>
	   			</td>
	   			<td>{{ isset($selfSummary->EQ) ? $selfSummary->EQ : 0  }}</td>
	   			<td>{{ isset($managersAvg->EQ) ? $managersAvg->EQ : 0 }}</td>
	   			<td>{{ isset($peersAvg->EQ) ? $peersAvg->EQ : 0  }}</td>
	   			<td>{{ isset($directsAvg->EQ) ? $directsAvg->EQ : 0  }}</td>
	   			<td>{{ isset($othersAvg->EQ) ? $othersAvg->EQ : 0  }}</td>
	   		</tr>
	   		<tr>
	   			<td>Total LQ </td>
	   			<td>
	   				<div class="chart-container">
						<div class="chart" id="LQ-lines"></div>
	   				</div>
	   			</td>
	   			<td>{{ isset($selfSummary->LQ) ? $selfSummary->LQ : 0  }}</td>
	   			<td>{{ isset($managersAvg->LQ) ? $managersAvg->LQ : 0 }}</td>
	   			<td>{{ isset($peersAvg->LQ) ? $peersAvg->LQ : 0  }}</td>
	   			<td>{{ isset($directsAvg->LQ) ? $directsAvg->LQ : 0  }}</td>
	   			<td>{{ isset($othersAvg->LQ) ? $othersAvg->LQ : 0  }}</td>
	   		</tr>
	   	</table>
	   </div>
	   <div class="row">
	   	<h3>TOTAL Betterment</h3>
	            <h5>Your total Betterment represents a separate measure which focuses on your commitment and dedication
			to betterment and continuous improvement as a healthcare leader.</h5>
	   </div>
	   <div class="row">
	   	<table class="table table-bordered" style="border : 1px solid black;">
	   		<tr>
	   			<td style="width: 10px"></td>
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
	   			<td>Total Betterment </td>
	   			<td>
	   				<div class="chart-container">
						<div class="chart" id="BT-lines"></div>
	   				</div>
	   			</td>
	   			<td>{{ isset($selfSummary->BT) ? $selfSummary->BT : 0  }}</td>
	   			<td>{{ isset($managersAvg->BT) ? $managersAvg->BT : 0 }}</td>
	   			<td>{{ isset($peersAvg->BT) ? $peersAvg->BT : 0  }}</td>
	   			<td>{{ isset($directsAvg->BT) ? $directsAvg->BT : 0  }}</td>
	   			<td>{{ isset($othersAvg->BT) ? $othersAvg->BT : 0  }}</td>
	   		</tr>
	   	</table>
	   </div>
	   <div class="col-md-12" style="border: 5px solid skyblue;
                border-radius: 40px;
                padding-top: 10px;
                font-size: 16px;
                margin-top: 10px;
                background: lightblue;">
                <h3 style="color: blue">TOTAL CQ</h3>
	            <p>The subscales within this component of the PQ-i address the leader’s ability to think through
situations, focus on the task at hand, make sound decisions and clearly understand & express their
ideas.
</p>
<h3 style="color: red">TOTAL EQ</h3>
	            <p>The subscales within this component of the PQ-i address the leader’s ability to recognize their own
abilities, ability to control impulses, develop lasting & meaningful relationships, recognize others
emotions, and motivate others to move forward when necessary.
</p>
<h3 style="color: purple">TOTAL LQ</h3>
	            <p>The subscales within this component of the PQ-i address the leader’s ability to lead by example,
inspire others, surpass normal expectations, empower & recognize others.
</p>
	        </div>
</div>
</div>
