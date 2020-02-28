<section id="page-15">
    <div class="container page-attr p4-main-grid py-5">
			<div class="p4-logo">
				<h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <span class="fmt-date">{{ date('M d, Y') }}</span></h4>
				<img class="img-fluid" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
					height="55">
			</div>

      <div class="p4-self-summary mx-5">
        <h1 class="p15-heading text-gray">Emotional Bar Graph – Self &amp; 360</h1>
        <h3 class="p15-title text-gray h4">This is the set of bar graphs for each of the five subscales related to Emotion.
          It is a
          graphical representation of your and your raters average responses for that subscale. It shows the response
          for Self, the overall Average, and the Average response for each of the rater groups.</h3>
      </div>

      <div class="p4-heading-top">
        <span>Area for Enrichment = {{ $low_range_beg }}-{{ $low_range_end }}</span>
        <span>Effective Functioning = {{$med_range_beg }}-{{ $med_range_end }}</span>
        <span>Enhanced Skills = {{ $high_range_beg }}-{{ $high_range_end }}</span>
      </div>

      <div class="p4-bars ml-3">
				<table class="table table-bordered eq-table mt-2">
       		   <tr class="p15-grey-bg">
       				<td class="eq-table-heading text-uppercase" rowspan="7">Emotional Quotient</td>
       			</tr>
       			<tr class="p15-grey-bg">
       				<td class="p15-table-title"><strong>Self</strong></td>
       				<td class="p15-table-num-eq"><strong>{{ $selfSummary->EQ }}</strong></td>
       			</tr>
       			<tr class="p15-grey-bg">
       				<td class="p15-table-title">Average</td>
       				<td class="p15-table-num-eq">{{ $EQTotalAvg }}</td>
       			</tr>
       			<tr class="p15-grey-bg">
       				<td class="p15-table-title">Manager</td>
       				<td class="p15-table-num-eq">{{ $EQmanagerAvg  }}</td>
       			</tr>
       			<tr class="p15-grey-bg">
       				<td class="p15-table-title">Peer</td>
       				<td class="p15-table-num-eq">{{ $EQpeerAvg  }}</td>
       			</tr>
       			<tr class="p15-grey-bg">
       				<td class="p15-table-title">Direct Report</td>
       				<td class="p15-table-num-eq">{{ $EQdirectAvg  }}</td>
       			</tr>
       			<tr class="p15-grey-bg">
       				<td class="p15-table-title">Other</td>
       				<td class="p15-table-num-eq">{{ $EQotherAvg  }}</td>
       			</tr>
       		</table>
        <div class="chart" id="p15-chart-1">
        </div>

        <table class="table table-bordered sa-table mt-2">
       		   <tr>
	       				<td class="sa-table-heading" rowspan="7">Self-Awareness</td>
	       			</tr>
       			<tr>
	       				<td class="p15-table-title">Self</td>
	       				<td class="p15-table-num">{{ $selfSummary->self_awareness }}</td>
	       			</tr>
       			<tr>
	       				<td class="p15-table-title">Average</td>
	       				<td class="p15-table-num">{{ $SATotalAvg }}</td>
	       			</tr>
       			<tr>
	       				<td class="p15-table-title">Manager</td>
	       				<td class="p15-table-num">{{ $SAmanagerAvg }}</td>
	       			</tr>
       			<tr>
	       				<td class="p15-table-title">Peer</td>
	       				<td class="p15-table-num">{{ $SApeerAvg }}</td>
	       			</tr>
       			<tr>
	       				<td class="p15-table-title">Direct Report</td>
	       				<td class="p15-table-num">{{ $SAdirectAvg }}</td>
	       			</tr>
       			<tr>
	       				<td class="p15-table-title">Other</td>
	       				<td class="p15-table-num">{{ $SAotherAvg }}</td>
	       			</tr> 
       		</table>
        <div class="chart" id="p15-chart-2">
        </div>

        <table class="table table-bordered sr-table mt-2">
       		   	<tr class="p15-red-bg">
	       				<td class="sr-table-heading" rowspan="7">Self-Regulation</td>
	       			</tr>
       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Self</td>
	       				<td class="p15-table-num">{{ $selfSummary->self_regulation }}</td>
	       			</tr>
       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Average</td>
	       				<td class="p15-table-num">{{ $SRTotalAvg }}</td>
	       			</tr>
       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Manager</td>
	       				<td class="p15-table-num">{{ $SRmanagerAvg }}</td>
	       			</tr>
       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Peer</td>
	       				<td class="p15-table-num">{{ $SRpeerAvg }}</td>
	       			</tr>
       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Direct Report</td>
	       				<td class="p15-table-num">{{ $SRdirectAvg }}</td>
	       			</tr>
       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Other</td>
	       				<td class="p15-table-num">{{ $SRotherAvg }}</td>
	       			</tr>
       		</table>
        <div class="chart" id="p15-chart-3">
        </div>

        <table class="table table-bordered ir-table mt-2">
       		   	<tr>
       				<td class="ir-table-heading" rowspan="7">Interpersonal Relationships</td>
       			</tr>
       			<tr>
       				<td class="p15-table-title">Self</td>
       				<td class="p15-table-num">{{ $selfSummary->interpersonal_relationships }}</td>
       			</tr>
       			<tr>
       				<td class="p15-table-title">Average</td>
       				<td class="p15-table-num">{{ $IRTotalAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p15-table-title">Manager</td>
       				<td class="p15-table-num">{{ $IRmanagerAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p15-table-title">Peer</td>
       				<td class="p15-table-num">{{ $IRpeerAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p15-table-title">Direct Report</td>
       				<td class="p15-table-num">{{ $IRdirectAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p15-table-title">Other</td>
       				<td class="p15-table-num">{{ $IRotherAvg }}</td>
       			</tr>
       		</table>
        <div class="chart" id="p15-chart-4">
        </div>

        <table class="table table-bordered ey-table mt-2">
       		   	<tr class="p15-red-bg">
	       				<td class="ey-table-heading" rowspan="7">Empathy</td>
	       			</tr>
	       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Self</td>
	       				<td class="p15-table-num">{{ $selfSummary->empathy }}</td>
	       			</tr>
	       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Average</td>
	       				<td class="p15-table-num">{{ $EMTotalAvg }}</td>
	       			</tr>
	       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Manager</td>
	       				<td class="p15-table-num">{{ $EMmanagerAvg }}</td>
	       			</tr>
	       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Peer</td>
	       				<td class="p15-table-num">{{ $EMpeerAvg }}</td>
	       			</tr>
	       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Direct Report</td>
	       				<td class="p15-table-num">{{ $EMdirectAvg }}</td>
	       			</tr>
	       			<tr class="p15-red-bg">
	       				<td class="p15-table-title">Other</td>
	       				<td class="p15-table-num">{{ $EMotherAvg }}</td>
	       			</tr>
       		</table>
        <div class="chart" id="p15-chart-5">
        </div>

        <table class="table table-bordered mo-table mt-2">
       		   	<tr>
	       				<td class="mo-table-heading" rowspan="7">Motivation</td>
	       			</tr>
	       			<tr>
	       				<td class="p15-table-title">Self</td>
	       				<td class="p15-table-num">{{ $selfSummary->motivation }}</td>
	       			</tr>
	       			<tr>
	       				<td class="p15-table-title">Average</td>
	       				<td class="p15-table-num">{{ $MOmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td class="p15-table-title">Manager</td>
	       				<td class="p15-table-num">{{ $MOmanagerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td class="p15-table-title">Peer</td>
	       				<td class="p15-table-num">{{ $MOpeerAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td class="p15-table-title">Direct Report</td>
	       				<td class="p15-table-num">{{ $MOdirectAvg }}</td>
	       			</tr>
	       			<tr>
	       				<td class="p15-table-title">Other</td>
	       				<td class="p15-table-num">{{ $MOotherAvg }}</td>
	       			</tr>
       		</table>
        <div class="chart" id="p15-chart-6">
        </div>
      </div>

      <div class="p4-heading-bottom">
        <span>Area for Enrichment = {{ $low_range_beg }}-{{ $low_range_end }}</span>
        <span>Effective Functioning = {{$med_range_beg }}-{{ $med_range_end }}</span>
        <span>Enhanced Skills = {{ $high_range_beg }}-{{ $high_range_end }}</span>
      </div>

    </div>
  </section>