<!-- Report Page 6 -->
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
	            <h1 class="display-5">PQ-i - Triangle Graph - Self</h1>
	            <h3 class="ml-3">(Scales) The figure on this page provides you with your average score on each of the scales of the PQ-i.</h3>
	            <ul style="margin-left: 10%;">
	            	<li>The Blue section is your average CQ score</li>
	            	<li>The Red section is your average EQ score.</li>
	            	<li>The Yellow section is your average LQ score. </li>
	            	<li>The Middle section is your average Betterment score.</li>
	            </ul>
	        </div>
	    </div>

	<div class="row" style="margin-top: 5%; margin-bottom: 10%;">
			<div class="col-md-12">
				<div style="background: url('{{ asset('images/report/triangle.PNG') }}') no-repeat; height: 472px; margin-left: 12%;">
						<p style="padding-top: 25%;
    font-size: 3rem;
    font-weight: bold;
    color: #dce6f2;
    padding-left: 34%;">{{ number_format($self_avg->CQ,1) }}</p>
    <div style="padding-top: 10%;
    font-size: 3rem;
    font-weight: bold;
    color: #c45a11;
    padding-left: 34%;">
    				<p>{{ number_format($self_avg->BT,1) }}</p>
    </div>
    <div style="padding-top: 0%;
    color: #7f6000;
    padding-left: 14%;
    font-weight: bold;
    font-size: 3rem;">
	    <p>
	    {{ number_format($self_avg->LQ,1) }}
	    <span class="pull-right" style="margin-left: 33%; color: #fcd5b5">{{ number_format($self_avg->EQ,1) }}</span>
		</p>
    </div>

				</div>
			</div>
		</div>

   	<div class="row mt-2" style="margin-bottom: 5%;">
			<div class="col-md-12" style="background: #ccc; border-radius: 20px;">
				<h2 class="text-center">Summary of your PQ-i Domain & Betterment Result</h2>
				<p class="text-center">Your assesment Score indicates areas where there is potential for improvement</p>
			</div>
	   	</div>
<!-- /Report page 6 -->
