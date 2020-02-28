<section id="page-10">
    <div class="container page-attr pie-main-grid py-5">
      <div class="pie-logo">
				<h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <span class="fmt-date">{{ date('M d, Y') }}</span></h4>
				<img class="img-fluid" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
					height="55">
      </div>

      <div class="self-summary">
        <h1 class="p8-main-title">PQ-i Spider Graph – Self vs. 360</h1>
        <h3 class="p8-sub-title">The figure on this page provides you with your average score on each of the subscales
          of the PQ-i. </h3>
        <ul class="p8-sub-title no-list-style" style="margin-left: 10%;">
          <li>The CQ section provides your score on each of the CQ subscales.</li>
          <li>The EQ section provides your score on each of the EQ subscales.</li>
          <li>The LQ section provides your score on each of the LQ subscales.</li>
        </ul>
      </div>
      
      <div class="pie-cq-body">
        <h2 class="pie-cq">CQ</h2>
      </div>

      <div id="p10-chart" class="mx-auto">
      </div>

      <div class="pie-bottom-legend">
        <div class="pie-lq-body">
          <h2 class="pie-lq">LQ</h2>
        </div>
        <div class="pie-eq-body">
          <h2 class="pie-eq">EQ</h2>
        </div>    
      </div>
    </div>
  </section>