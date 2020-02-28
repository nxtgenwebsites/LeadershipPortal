<!-- Report Page 7 -->
@include('users/include/report-header')
    <div class="row">
	        <div class="col-md-12">
	            <h1 class="p6-heading">PQ-i - Triangle Graph - 360</h1>
	            <h3 class="p6-title ml-3">The figure on this page provides you with your average score on each of the scales of the PQ-i.</h3>
	            <ul class="p6-title" style="margin-left: 10%;">
	            	<li>The Blue section is your average CQ score</li>
	            	<li>The Red section is your average EQ score.</li>
	            	<li>The Yellow section is your average LQ score. </li>
	            	<li>The Middle section is your average Betterment score.</li>
	            </ul>
	        </div>
	    </div>
    	<div class="row" style="margin-top: 5%; margin-bottom: 10%;">
		<div class="col-md-7 offset-md-3">
		    <div class="p6-box">
            	<img src="{{ asset('images/report/triangle.PNG') }}" alt="self" height="472">
                <div class="p6-text">
                    <h1 class="p6-self-cq">{{ number_format($_360_avg->CQ,1) }}</h1>
                </div>
                <div class="p6-text" >
                    <h1 class="p6-self-bt" style="padding-top: 150px;">{{ number_format($_360_avg->BT,1) }}</h1>
                </div>
                <div class="p6-text">
                    <h1 class="p6-self-eq">{{ number_format($_360_avg->EQ,1) }}</h1>
                </div>
                <div class="p6-text">
                    <h1 class="p6-self-lq">{{ number_format($_360_avg->LQ,1) }}</h1>
                </div>
            </div>
		</div>
	</div>


   	<div class="row mt-2" style="margin-bottom: 5%;">
			<div class="col-md-12" style="background:#ccc; border-radius: 20px;">
				<h2 class="p6-bottom-main-title text-center">Summary of your PQ-i Domain & Betterment Result</h2>
				<p class="text-center p6-bottom-main-text">Your assesment Score indicates areas where there is potential for improvement</p>
			</div>
	   	</div>

<!-- /Report page 7 -->
