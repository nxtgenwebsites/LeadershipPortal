<!-- Report Page 12 -->
@include('users/include/report-header')
	   <div class="row">
	        <div class="col-md-12">
	            <h1 class="p12-heading">Linear Gap Analysis – Self vs. 360</h1>
	            <h3 class="p12-title">TOTAL PQ </h3>
	            <h5 class="p12-title">Your total PQ is a general indicator of your overall cognitive, emotional and leadership skills. This
					indicator demonstrates how these skills influence the way you use your head, heart and hands throughout
					the day as you perform the duties of your role.
				</h5>
	         </div>
	   </div>
	   <div class="row">
	   	<table class="table table-bordered" style="font-family:Baskerville Old Face">
	   		<tr>
	   			<td></td>
	   			<td></td>
	   			<td>Self <img src="{{ asset('images/report/icons/Self-Mini.png') }}" /></td>
	   			<td>Manager <img src="{{ asset('images/report/icons/Managers-Mini.png') }}" /></td>
	   			<td>Peer <img src="{{ asset('images/report/icons/Peers-Mini.png') }}" /></td>
	   			<td>Direct Report <img src="{{ asset('images/report/icons/Direct-Reports-Mini.png') }}" /></td>
	   			<td>Other <img src="{{ asset('images/report/icons/Average-Mini.png') }}" /></td>
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
	   			<td>Total PQ-i</td> 
	   			<td style="width:40rem;">
				    <div style="height:200px; width:100%;" id="p12-chart"></div>
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
	            <h5 class="p12-h">Your total CQ, EQ and LQ represent which areas within your PQ-i that either raise or lower your overall
				score and contribute to either the cognitive, emotional or leadership portion of your PQ-i. The greater the
				distance between your Self score and a particular rater score demonstrates a general disagreement between
				your rating and their rating.</h5>
	   </div>
	   <div class="row">
	   	<table class="table table-bordered" style="font-family:Baskerville Old Face">
	   		<tr>
	   			<td></td>
	   			<td></td>
	   			<td>Self <img src="{{ asset('images/report/icons/Self-Mini.png') }}" /></td>
	   			<td>Manager <img src="{{ asset('images/report/icons/Managers-Mini.png') }}" /></td>
	   			<td>Peer <img src="{{ asset('images/report/icons/Peers-Mini.png') }}" /></td>
	   			<td>Direct Report <img src="{{ asset('images/report/icons/Direct-Reports-Mini.png') }}" /></td>
	   			<td>Other <img src="{{ asset('images/report/icons/Average-Mini.png') }}" /></td>
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
	   			<td>Total CQ <br><br> Total EQ <br><br> Total LQ</td>
	   			<td style="width:40rem;">
				    <div style="height:200px;  width:100%;" id="p12-chart-2"></div>
	   			</td>
	   			<td>{{ isset($selfSummary->CQ) ? $selfSummary->CQ : 0  }}<br><br>{{ isset($selfSummary->EQ) ? $selfSummary->EQ : 0  }}<br><br>{{ isset($selfSummary->LQ) ? $selfSummary->LQ : 0  }} <br></td>
	   			<td>{{ isset($managersAvg->CQ) ? $managersAvg->CQ : 0 }} <br><br> {{ isset($managersAvg->EQ) ? $managersAvg->EQ : 0 }} <br><br> {{ isset($managersAvg->LQ) ? $managersAvg->LQ : 0 }} </td>
	   			<td>{{ isset($peersAvg->CQ) ? $peersAvg->CQ : 0  }}      <br><br> {{ isset($peersAvg->EQ) ? $peersAvg->EQ : 0  }}      <br><br>     {{ isset($peersAvg->LQ) ? $peersAvg->LQ : 0  }} </td>
	   			<td>{{ isset($directsAvg->CQ) ? $directsAvg->CQ : 0  }} <br><br> {{ isset($directsAvg->EQ) ? $directsAvg->EQ : 0  }}  <br><br><{{ isset($directsAvg->LQ) ? $directsAvg->LQ : 0  }} </td>
	   			<td>{{ isset($othersAvg->CQ) ? $othersAvg->CQ : 0  }}   <br><br> {{ isset($othersAvg->EQ) ? $othersAvg->EQ : 0  }}      <br><br> {{ isset($othersAvg->LQ) ? $othersAvg->LQ : 0  }}</td>
	   			
	   			<br>
	   			
	   		</tr>
	   		
	   	</table>
	   </div>
	   <div class="row">
	   	<h3>TOTAL Betterment</h3>
	            <h5>Your total Betterment represents a separate measure which focuses on your commitment and dedication
			to betterment and continuous improvement as a healthcare leader.</h5>
	   </div>
	   <div class="row">
	   	<table class="table table-bordered" style="font-family:Baskerville Old Face">
	   		<tr>
	   			<td></td>
	   			<td></td>
	   			<td>Self <img src="{{ asset('images/report/icons/Self-Mini.png') }}" /></td>
	   			<td>Manager <img src="{{ asset('images/report/icons/Managers-Mini.png') }}" /></td>
	   			<td>Peer <img src="{{ asset('images/report/icons/Peers-Mini.png') }}" /></td>
	   			<td>Direct Report <img src="{{ asset('images/report/icons/Direct-Reports-Mini.png') }}" /></td>
	   			<td>Other <img src="{{ asset('images/report/icons/Average-Mini.png') }}" /></td>
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
	   			<td style="width:40rem;">
				    <div style="height:200px; width:100%;" id="p12-chart-5"></div>
	   			</td>
	   			<td>{{ isset($selfSummary->BT) ? $selfSummary->BT : 0  }}</td>
	   			<td>{{ isset($managersAvg->BT) ? $managersAvg->BT : 0 }}</td>
	   			<td>{{ isset($peersAvg->BT) ? $peersAvg->BT : 0  }}</td>
	   			<td>{{ isset($directsAvg->BT) ? $directsAvg->BT : 0  }}</td>
	   			<td>{{ isset($othersAvg->BT) ? $othersAvg->BT : 0  }}</td>
	   		</tr>
	   	</table>
	   </div>
	   <div class="col-md-12 p12-d1" style="background:#DCE6F2">
                <h3 class="p12-h2"><b>TOTAL CQ</b></h3>
	            <p style="color:rgb(36,64,98)">The subscales within this component of the PQ-i address the leader’s ability to think through
				situations, focus on the task at hand, make sound decisions and clearly understand & express their
				ideas.
				</p>
				<h3 class="p12-h3"><b>TOTAL EQ</b></h3>
					            <p style="color:rgb(36,64,98)">The subscales within this component of the PQ-i address the leader’s ability to recognize their own
				abilities, ability to control impulses, develop lasting & meaningful relationships, recognize others
				emotions, and motivate others to move forward when necessary.
				</p>
				<h3 class="p12-h4"><b>TOTAL LQ</b></h3>
					            <p  style="color:rgb(36,64,98)">The subscales within this component of the PQ-i address the leader’s ability to lead by example,
				inspire others, surpass normal expectations, empower & recognize others.
				</p>
	    </div>
<!-- End Report Page 12 -->