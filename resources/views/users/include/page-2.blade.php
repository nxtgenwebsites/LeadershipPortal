<!-- Report Page 2 -->
	<div class="row">
		    <div class="col-3 offset-6">
		        <h4>Name: {{ $profile->first_name }} {{ $profile->last_name }}</h4>
		        <h4>{{ date('M d, Y') }}</h4>
		    </div>
		    <div class="col-1">
		        <img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130" height="55">
		    </div>
		</div>
	<div class="row">
		    <div class="col-md-12">
		        <h1 class="display-4">Welcom to your PQ-i 360&deg;</h1>
		    </div>
		    <div class="col-md-12" style="border: 5px solid blue;
		        border-radius: 20px;
		        padding-top: 10px;
		        font-size: 16px;
		        background: lightblue;">
		        <p>The PQ-I 360 is a multirater measure of cognitive intelligence (CI), emotional intelligence (EI), leadership
		            intelligence (LI) and Betterment which is designed to provide you with a complete "360-degree" view of
		            your ability to think, relate and lead within your current role within healthcare. Your report combines your
		            self-evaluation with that of your raters, providing you with a rich understanding of your overall
		            Professionalism Intelligence (PI) capabilities.
		            It is important to start with your self-evaluation first and then look at how others rated you, which is why
		            throughout this report, your will see your results separated into a "Self Summary" vs. a "360 Summary."</p>
		    </div>
		    </div>
    <div class="row mt-5">
		    <div class="col-md-6">
		        <img src="{{ asset('images/report/Raters/Raters.png') }}" />
		    </div>
		    <div class="col-md-6">
		        <h3 style="font-size:14px;"><span style="color:red; font-weight:bold">How to read this report.</span> This report contains information gathered from both yourself (self rating) and people who were identified as your raters. These raters may be your manager(s), superior(s), peers, direct reports, subordinates, or others and will be appropriately labeled as such throughout this report.</h3>

		        <h3 style="font-size:14px;"><span style="color:red; font-weight:bold">Scores.</span> You and your raters responded to the exact same items assessing your Professionalism Intelligence (PI) across a variety of skill areas (e.g., critical-thinking, self-awareness, inspiration). You will see scores for each scale of the PQ-i model. The associated competencies of this model are explained further on the next page.</h3>

		        <h3 style="font-size:14px;"><span style="color:red; font-weight:bold">Confidentiality.</span> It is highly recommended that you have a minimum of 3 respondents in each of the rater groups. This protects the goal of confidentiality of the respondents and focusing entirely on the rater groups overall response rather than on a specific raters response. All information contained in this report is shared only with you and your designated coaching team each of whom take your confidentiality seriously.</h3>

		        <h3 style="font-size:14px;"><span style="color:red; font-weight:bold">Gaps and Agreements.</span> The terms “gap” and “agreement” are used throughout your report to speak to any differences or similarities that exist between rater groups. A gap exists when one group sees you as significantly different than does another rater group. Gaps of 10 points or more are considered significant. Agreement, on the contrary, exists when there is less than 10 points difference between rater group score.   </h3>
		    </div>
		    <div class="col-md-9 offset-md-1 mt-4">
		        <img src="{{ asset('images/report/arrow.PNG') }}" />
		    </div>
		</div>
<!-- /Report page 2 -->
