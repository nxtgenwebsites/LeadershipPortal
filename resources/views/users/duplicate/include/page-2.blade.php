<section id="page-2">
  <div class="container page-attr py-5 p2-main-grid">
    <div class="p2-logo">
      <h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <br> {{ date('M d, Y') }}</span></h4>
      <img class="img-fluid logo-360" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
        height="55">
    </div>
    <div class="p2-welcome pt-3 mx-5">
      <h1 class="display-4 p2-heading">Welcome to your PQ-i 360° Report</h1>
      <div class="p2-box">
        <p class="p2-box-text">The PQ-i 360 is a multirater measure of cognitive intelligence (CI), emotional
          intelligence (EI), leadership intelligence (LI) and Betterment which is designed to provide you with a complete "360-degree" view of
          your ability to think, relate and lead within your current role within healthcare. Your report combines
          your self-evaluation with that of your raters, providing you with a rich understanding of your overall
          Professionalism Intelligence (PI) capabilities.</p>
        <p>It is important to start with your self-evaluation first and then look at how others rated you, which is
          why throughout this report, your will see your results separated into a "Self Summary" vs. a "360 Summary."
        </p>
      </div>
    </div>
    <div class="p2-raters py-5">
      <div class="p2-lhs text-center">
        <img class="img-fluid" src="{{ asset('images/report/Raters/Raters.png') }}">
      </div>
      <div class="p2-rhs px-5">
        <h3 class="p2-text"><span>How to read this report.</span> This report contains information gathered from
          both yourself (self rating) and people who were identified as your raters. These raters may be your manager(s),
          superior(s), peers, direct reports, subordinates, or others and will be appropriately labeled as such
          throughout this report.</h3>

        <h3 class="p2-text"><span>Scores.</span> You and your raters responded to the exact same items assessing
          your Professionalism Intelligence (PI) across a variety of skill areas (e.g., critical-thinking,
          self-awareness, inspiration). You will see scores for each scale of the PQ-i model. The associated competencies of this
          model are explained further on the next page.</h3>

        <h3 class="p2-text"><span>Confidentiality.</span> It is highly recommended that you have a minimum of 3
          respondents in each of the rater groups. This protects the goal of confidentiality of the respondents and
          focusing entirely on the rater groups overall response rather than on a specific raters response. All
          information contained in this report is shared only with you and your designated coaching team each of
          whom take your confidentiality seriously.</h3>

        <h3 class="p2-text"><span>Gaps and Agreements.</span> The terms “gap” and “agreement” are used throughout
          your report to speak to any differences or similarities that exist between rater groups. A gap exists when one
          group sees you as significantly different than does another rater group. Gaps of 10 points or more are
          considered significant. Agreement, on the contrary, exists when there is less than 10 points difference between rater
          group score. </h3>
      </div>
    </div>
    <div class="p2-arrow sub-grid">
      <img src="{{ asset('images/report/arrow.PNG') }}">
    </div>
  </div>
</section>