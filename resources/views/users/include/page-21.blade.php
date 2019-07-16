<style>
	.blue-backgroud {
		background: blue;
		color:white;
	}
	.blue-backgroud tbody tr td {
		background: lightblue;
		color:white;
	}
</style>
<!-- Report Page 6 -->
<div class="row">
    <div class="col-md-8 offset-md-2">
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
	            <h1 class="display-5">PQ-I – Action Plan</h1>
	            <p class="ml-3">The steps you take towards achieving your PQ-I and Betterment goals will determine whether or not success is realized. Use this step-by-step activity plan to help guide you towards accomplishing personal objectives. Remember to use the SMART® goal setting criteria for each goal. </p>
	            <p class="ml-3">
					Write down three PQ-i skills, emotions and/or behaviors that require further development (i.e. self-awareness, critical-thinking, being a better listener, understanding and reacting to stress..etc.). The SMART® goals should then help you strengthen these PQ-i skills, emotions and behaviors.
	            </p>
	            <ol style="margin-left: 2%;">
	            	<li></li>
	            	<li></li>
	            	<li></li>
	            </ol>
	            <p class="ml-3">
					Write down three overall qualities, values, virtues that you would like to possess (selfdiscipline, accountability, integrity, credibility, focused leadership, being a team player, communicating clearly). The SMART® goals outlined above should help you achieve these qualities, values, virtues
	            </p>

	            <ol style="margin-left: 2%;">
	            	<li></li>
	            	<li></li>
	            	<li></li>
	            </ol>

	            <p class="ml-3">
					Use the following action plan template to transfer your SMART® goals and track them with your coach.
	            </p>
	        </div>
	    </div>


	   	<div class="row mt-2">
	   		<div class="col-md-12">
		   		<table class="table table-bordered blue-backgroud">
					<thead>
						<tr>
							<td>Smart Goal</td>
							<td>Time Frame</td>
							<td>Benefits</td>
							<td>Measure of Success</td>
							<td>Support and Resource Needed</td>
							<td>Potential Barier</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
				<p class="mt-2">
					I commit to this action plan _____________________________
					<br><span style="margin-left:20%">Signature</span>
				</p>
	   		</div>
	   	</div>
	</div>
</div>
<!-- /Report page 6 -->
