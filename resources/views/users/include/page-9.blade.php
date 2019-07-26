<!-- Report Page 9 -->
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
	            <h1 class="display-5">PQ-i Spider Graph – Self (Subscales)</h1>
	            <h3 class="ml-3">The figure on this page provides you with your average score on each of the subscales of the PQ-i. </h3>
	            <ul style="margin-left: 10%;">
	            	<li>The CQ section provides your score on each of the CQ subscales.</li>
	            	<li>The EQ section provides your score on each of the EQ subscales.</li>
	            	<li>The LQ section provides your score on each of the LQ subscales.</li>
	            </ul>
	        </div>
	        <div class="col-md-5">
	        	<h2 style="color:darkblue" class="display-2">CQ</h2>
	        </div>
	        <div class="col-md-6">
	        	<ul class="float-right">
	        		<li>Focused-Thinking</li>
	        		<li>Problem-Solving</li>
	        		<li>Critical-thinking</li>
	        		<li>Decision-Making</li>
	        		<li>Explanation</li>
	        	</ul>
	        </div>
	    </div>

	<div class="row" style="margin-top: -20%;">
			<div class="chart-container">
				<div class="chart" style="height: 500px; width: 8in;" id="_360_spider_graph">

				</div>
			</div>
		</div>

   	<div class="row mt-2" style="margin-top: -20%; margin-bottom: 5%;">
			<div class="col-md-6">
				<h2 style="color:brown" class="display-2">LQ</h2>
			</div>

			<div class="col-md-6">
				<div  class="float-right">
					<h2 style="color:red" class="display-2">EQ</h2>
				</div>
			</div>
	   	</div>
<!-- /Report page 9 -->
