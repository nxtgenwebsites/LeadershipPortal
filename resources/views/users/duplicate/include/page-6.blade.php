<section id="page-6">
    <div class="container page-attr tri-main-grid py-5">
      <div class="tri-logo">
				<h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <span class="fmt-date">{{ date('M d, Y') }}</span></h4>
        <img class="img-fluid" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
          height="55">
      </div>

      <div class="self-summary">
        <h1 class="tri-heading">PQ-i - Triangle Graph - Self</h1>
        <h3 class="tri-title ml-3">(Scales) The figure on this page provides you with your average score on each of the
          scales of the PQ-i.</h3>
        <ul class="tri-title" style="margin-left: 10%;">
          <li>The Blue section is your average CQ score</li>
          <li>The Red section is your average EQ score.</li>
          <li>The Yellow section is your average LQ score. </li>
          <li>The Middle section is your average Betterment score.</li>
        </ul>
      </div>

      <div class="tri-chart mx-auto my-5"> 
        <div class="tri-box">
          <img class="img-fluid" src="{{ asset('images/report/triangle.PNG') }}" alt="self" height="472">
          <div class="tri-text">
            <h1 class="tri-self-cq">{{ number_format($self_avg->CQ,1) }}</h1>
          </div>
          <div class="tri-text">
            <h1 class="tri-self-bt">{{ number_format($self_avg->BT,1) }}</h1>
          </div>
          <div class="tri-text">
            <h1 class="tri-self-eq">{{ number_format($self_avg->EQ,1) }}</h1>
          </div>
          <div class="tri-text">
            <h1 class="tri-self-lq">{{ number_format($self_avg->LQ,1) }}</h1>
          </div>
        </div>
      </div>
      
      <div class="summary-box mx-auto my-5">
        <h2 class="tri-bottom-main-title text-center">Summary of your PQ-i Domain &amp; Betterment Result</h2>
        <p class="text-center tri-bottom-main-text">Your assesment Score indicates areas where there is potential for
          improvement</p>
      </div>
    </div>
  </section>