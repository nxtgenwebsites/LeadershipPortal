<section id="page-11">
    <div class="container page-attr p11-main-grid py-5">
			<div class="pg-logo">
				<h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <span class="fmt-date">{{ date('M d, Y') }}</span></h4>
				<img class="img-fluid" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
					height="55">
      </div>

      <div class="quad-anal">
        <h1 class="p11-title">Quadrant Gap Analysis – Self vs. 360</h1>
        <h3 class="p11-ml-3">The figure on this page provides you with a general overview of the level of agreement
          between how you
          see yourself and how others see you (gap analysis). </h3>
        <ul style="margin-left: 10%;" class="p11-ml-3">
          <li>The horizontal axis shows you how much agreement there is between your self score and the
            scores your received from your raters. Subscales to the far right indicate consensus (you and
            your raters agree on these scales).</li>
          <li>The vertical axis shows your self-rating. Higher scoring subscales will appear towards the top of
            the graph and lower scoring subscales will appear towards the bottom of the graph.</li>
          <li>Subscales that overlap demonstrate a consistent experience within those particular PQ-i
            cognitive, emotional and/or leadership scales.</li>
        </ul>
      </div>

      <div class="quad-md pt-5">
        <img src="{{ asset('images/report/arrow-11.jpeg') }}">
        <div class="chart-container">
          <div style="width: 100%; height:600px" id="container">
          </div>
        </div>
        <ul style="font-size: 12px; font-family:Baskerville Old Face;color:R 0, G 0, B 0;">
          <h4>LEGEND</h4>
          <li class="p11-t">FT<span style="margin-left: 15px">Foucused-Thinking</span></li>
          <li class="p11-t">PS<span style="margin-left: 15px">Problem-Solving</span></li>
          <li class="p11-t">CT<span style="margin-left: 15px">Critical-Thinking</span></li>
          <li class="p11-t">DM<span style="margin-left: 15px">Decision-Making</span></li>
          <li class="p11-t">EN<span style="margin-left: 15px">Explanation</span></li>
          <li style="list-style:none"><br></li>
          <li class="p11-t1">SA<span style="margin-left: 15px">Self-Awareness</span></li>
          <li class="p11-t1">SR<span style="margin-left: 15px">Self-Regulation</span></li>
          <li class="p11-t1">IR<span style="margin-left: 15px">Interpersonal-Relationship</span></li>
          <li class="p11-t1">EM<span style="margin-left: 15px">Empathy</span></li>
          <li class="p11-t1">MT<span style="margin-left: 15px">Motivation</span></li>
          <li style="list-style:none"><br></li>
          <li class="p11-t1-2">EB<span style="margin-left: 15px">Embodiment</span></li>
          <li class="p11-t1-2">IN<span style="margin-left: 15px">Inspiration</span></li>
          <li class="p11-t1-2">EX<span style="margin-left: 15px">Excellence</span></li>
          <li class="p11-t1-2">EP<span style="margin-left: 15px">Empowerment</span></li>
          <li class="p11-t1-2">RC<span style="margin-left: 15px">Recogination</span></li>
          <li style="list-style:none"><br></li>
          <li style="font-family: Baskerville Old Face; font-size:12pt;color:rgb(198,87,17);">BT<span
              style="margin-left: 15px">Betterment</span></li>
        </ul>
      </div>

      <div class="hr-arrow">
        <img src="{{ asset('images/report/arrow-11b.jpeg') }}">
      </div>

      <div class="quad-bt my-3 pb-4">
        <img class="img-fluid mv-right" src="{{ asset('images/report/wylf1.png') }}">
        <img class="img-fluid mv-right" src="{{ asset('images/report/wylf2.png') }}">
        <img class="img-fluid" src="{{ asset('images/report/wylf3.png') }}">
      </div>
    </div>
  </section>