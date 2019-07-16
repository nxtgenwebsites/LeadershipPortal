<!-- Report Page 11 -->
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
				<h1 class="display-5">Quadrant Gap Analysis – Self vs. 360</h1>
				<h3 class="ml-3">The figure on this page provides you with a general overview of the level of agreement between how you
				see yourself and how others see you (gap analysis).  </h3>
				<ul style="margin-left: 10%;">
					<li>The horizontal axis shows you how much agreement there is between your self score and the
						scores your received from your raters. Subscales to the far right indicate consensus (you and
					your raters agree on these scales).</li>
					<li>The vertical axis shows your self-rating. Higher scoring subscales will appear towards the top of
					the graph and lower scoring subscales will appear towards the bottom of the graph.</li>
					<li>Subscales that overlap demonstrate a consistent experience within those particular PQ-i
					cognitive, emotional and/or leadership scales.</li>
				</ul>
			</div>
			<div class="col-md-2 mt-4">
				<img src="{{ asset('images/report/arrow-11.jpeg') }}" />
			</div>
			<div class="col-md-7">
				<div class="chart-container">
					<div class="chart" style="width: 100%; height:25rem" id="google-bubble"></div>
				</div>
			</div>
			<div class="col-md-3 mt-4">
				<ul style="font-size: 12px;"><h4>LEGEND</h4>
					<li style="color: blue">FT <span style="margin-left: 15px">Foucused-Thinking</span></li>
					<li style="color: blue">PS <span style="margin-left: 15px">Problem-Solving</span></li>
					<li style="color: blue">CT <span style="margin-left: 15px">Critical-Thinking</span></li>
					<li style="color: blue">DM <span style="margin-left: 15px">Decision-Making</span></li>
					<li style="color: blue">EX <span style="margin-left: 15px">Explanation</span></li>
					<li style="color: red; margin-top: 8px">SA <span style="margin-left: 15px">Self-Awareness</span></li>
					<li style="color: red;">SR <span style="margin-left: 15px">Self-Regulation</span></li>
					<li style="color: red;">IR <span style="margin-left: 15px">Interpersonal-Relationship</span></li>
					<li style="color: red;">EM <span style="margin-left: 15px">Empathy</span></li>
					<li style="color: red;">MT <span style="margin-left: 15px">Motivation</span></li>
					<li style="color: brown;margin-top: 8px">SA <span style="margin-left: 15px">Self-Awareness</span></li>
					<li style="color: brown;">IN <span style="margin-left: 15px">Inspiration</span></li>
					<li style="color: brown;">EX <span style="margin-left: 15px">Excellence</span></li>
					<li style="color: brown;">EP <span style="margin-left: 15px">Empowerment</span></li>
					<li style="color: brown;">RC <span style="margin-left: 15px">Recogination</span></li>
					<li style="color: blue;margin-top: 8px">BT <span style="margin-left: 15px">Betterment</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<img src="{{ asset('images/report/arrow-11b.jpeg') }}" />
				</div>
				<div class="col-md-4" style="
				border-top-left-radius: 20px;border-top-right-radius: 20px;
				font-size: 16px;
				background: lightgreen;">
				<h5 style="background-color: green;margin-top: 1px;width: 108%;    margin-left: -9px;text-align: center;border-top-left-radius: 20px;border-top-right-radius: 20px;">What to <b>LOOK</b> FOR</h5>
				<p >Subscales falling in the left quadrants have awareness gaps, meaning you see yourself differently from the way others see you.You may be unaware of,or "blind" to your own PQ-i  strengths and weakness.
				</p>
			</div>
			<div class="col-md-4 offset-md-1" style="
			border-top-left-radius: 20px;border-top-right-radius: 20px;
			font-size: 16px;
			background: lightgreen;
			margin-top: 50px;
			height: 1.1in;">
			<h5 style="background-color: green;margin-top: 1px;width: 109%;    margin-left: -9px;text-align: center;border-top-left-radius: 20px;border-top-right-radius: 20px;">What to <b>LOOK</b> FOR</h5>
			<p >Concentration in the right two quadrants indicates a healthy level of self awareness
			</p>
		</div>
		<div class="col-md-3">
			<img src="{{ asset('images/report/boxes.jpeg') }}" />
		</div>
	</div>
</div>
</div>
</div>
<!-- /Report page 6 -->
