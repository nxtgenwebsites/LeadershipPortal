<section id="page-16">
	<div class="container page-attr p4-main-grid py-5">
		<div class="p4-logo">
			<h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <span class="fmt-date">{{ date('M d, Y') }}</span></h4>
			<img class="img-fluid" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
				height="55">
		</div>

		<div class="self-summary mx-5">
			<h1 class="p15-heading text-gray">Leadership Bar Graph – Self &amp; 360</h1>
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
			<table class="table table-bordered lq-table mt-2">
       		   <tr class="p16-grey-bg">
       				<td class="lq-table-heading text-uppercase" rowspan="7">Leadership Quotient</td>
       			</tr>
       			<tr class="p16-grey-bg">
       				<td class="p16-table-title"><strong>Self</strong></td>
       				<td class="p16-table-num-lq"><strong>{{ $selfSummary->LQ }}</strong></td>
       			</tr>
       			<tr class="p16-grey-bg">
       				<td class="p16-table-title">Average</td>
       				<td class="p16-table-num-lq">{{ $LQTotalAvg }}</td>
       			</tr>
       			<tr class="p16-grey-bg">
       				<td class="p16-table-title">Manager</td>
       				<td class="p16-table-num-lq">{{ $LQmanagerAvg  }}</td>
       			</tr>
       			<tr class="p16-grey-bg">
       				<td class="p16-table-title">Peer</td>
       				<td class="p16-table-num-lq">{{ $LQpeerAvg  }}</td>
       			</tr>
       			<tr class="p16-grey-bg">
       				<td class="p16-table-title">Direct Report</td>
       				<td class="p16-table-num-lq">{{ $LQdirectAvg  }}</td>
       			</tr>
       			<tr class="p16-grey-bg">
       				<td class="p16-table-title">Other</td>
       				<td class="p16-table-num-lq">{{ $LQotherAvg  }}</td>
	       		</tr>
       		</table>
			<div class="chart" id="p16-chart-1">
			</div>

			<table class="table table-bordered em-table mt-2">
       		   <tr>
	       				<td class="em-table-heading" rowspan="7">Embodiment</td>
	       			</tr>
       			<tr>
	       				<td class="p16-table-title">Self</td>
	       				<td class="p16-table-num"><strong>{{ $selfSummary->embodiment }}</strong></td>
	       			</tr>
       			<tr>
	       				<td class="p16-table-title">Average</td>
	       				<td class="p16-table-num">{{ $EMBTotalAvg }}</td>
	       			</tr>
       			<tr>
	       				<td class="p16-table-title">Manager</td>
	       				<td class="p16-table-num">{{ $EMBmanagerAvg }}</td>
	       			</tr>
       			<tr>
	       				<td class="p16-table-title">Peer</td>
	       				<td class="p16-table-num">{{ $EMBpeerAvg }}</td>
	       			</tr>
       			<tr>
	       				<td class="p16-table-title">Direct Report</td>
	       				<td class="p16-table-num">{{ $EMBdirectAvg }}</td>
	       			</tr>
       			<tr>
	       				<td class="p16-table-title">Other</td>
	       				<td class="p16-table-num">{{ $EMBotherAvg }}</td>
	       			</tr> 
       		</table>
			<div class="chart" id="p16-chart-2">
			</div>

			<table class="table table-bordered ins-table mt-2">
       		    <tr class="p16-red-bg">
       				<td class="ins-table-heading" rowspan="7">Inspiration</td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Self</td>
       				<td class="p16-table-num"><strong>{{ $selfSummary->inspiration }}</strong></td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Average</td>
       				<td class="p16-table-num">{{ $INPTotalAvg }}</td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Manager</td>
       				<td class="p16-table-num">{{ $INPmanagerAvg }}</td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Peer</td>
       				<td class="p16-table-num">{{ $INPpeerAvg }}</td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Direct Report</td>
       				<td class="p16-table-num">{{ $INPdirectAvg }}</td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Other</td>
       				<td class="p16-table-num">{{ $INPotherAvg }}</td>
       			</tr>
       		</table>
			<div class="chart" id="p16-chart-3">
			</div>

			<table class="table table-bordered ex-table mt-2">
       		    <tr>
       				<td class="ex-table-heading" rowspan="7">Excellence</td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Self</td>
       				<td class="p16-table-num"><strong>{{ $selfSummary->excellence }}</strong></td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Average</td>
       				<td class="p16-table-num">{{ $EXCTotalAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Manager</td>
       				<td class="p16-table-num">{{ $EXCmanagerAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Peer</td>
       				<td class="p16-table-num">{{ $EXCpeerAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Direct Report</td>
       				<td class="p16-table-num">{{ $EXCdirectAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Other</td>
       				<td class="p16-table-num">{{ $EXCotherAvg }}</td>
       			</tr>
       		</table>
			<div class="chart" id="p16-chart-4">
			</div>

			<table class="table table-bordered ep-table mt-2">
       		    <tr class="p16-red-bg">
       				<td class="ep-table-heading" rowspan="7">Empowerment</td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Self</td>
       				<td class="p16-table-num"><strong>{{ $selfSummary->empowerment }}</strong></td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Average</td>
       				<td class="p16-table-num">{{ $EMPTotalAvg }}</td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Manager</td>
       				<td class="p16-table-num">{{ $EMPmanagerAvg }}</td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Peer</td>
       				<td class="p16-table-num">{{ $EMPpeerAvg }}</td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Direct Report</td>
       				<td class="p16-table-num">{{ $EMPdirectAvg }}</td>
       			</tr>
       			<tr class="p16-red-bg">
       				<td class="p16-table-title">Other</td>
       				<td class="p16-table-num">{{ $EMPotherAvg }}</td>
       			</tr>
       		</table>
			<div class="chart" id="p16-chart-5">
			</div>

			<table class="table table-bordered rc-table mt-2">
       		    <tr>
       				<td class="rc-table-heading" rowspan="7">Recognition</td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Self</td>
       				<td class="p16-table-num"><strong>{{ $selfSummary->recognition }}</strong></td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Average</td>
       				<td class="p16-table-num">{{ $ROmanagerAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Manager</td>
       				<td class="p16-table-num">{{ $ROmanagerAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Peer</td>
       				<td class="p16-table-num">{{ $ROpeerAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Direct Report</td>
       				<td class="p16-table-num">{{ $ROdirectAvg }}</td>
       			</tr>
       			<tr>
       				<td class="p16-table-title">Other</td>
       				<td class="p16-table-num">{{ $ROotherAvg }}</td>
       			</tr>
       		</table>
			<div class="chart" id="p16-chart-6">
			</div>
		</div>

		<div class="p4-heading-bottom">
			<span>Area for Enrichment = {{ $low_range_beg }}-{{ $low_range_end }}</span>
			<span>Effective Functioning = {{$med_range_beg }}-{{ $med_range_end }}</span>
			<span>Enhanced Skills = {{ $high_range_beg }}-{{ $high_range_end }}</span>
		</div>

	</div>
</section>