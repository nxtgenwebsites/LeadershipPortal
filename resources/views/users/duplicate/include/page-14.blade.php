<section id="page-14">
	<div class="container page-attr p4-main-grid py-5">
		<div class="p4-logo">
			<h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <span class="fmt-date">{{ date('M d, Y') }}</span></h4>
			<img class="img-fluid" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
				height="55">
		</div>

		<div class="p4-self-summary mx-5">
			<h1 class="p14-heading text-gray">Cognitive Bar Graph – Self &amp; 360</h1>
			<h3 class="p14-title text-gray h4">This is the set of bar graphs for each of the five subscales related to
				Cognition. It is
				a graphical representation of your and your raters average responses for that subscale. It shows the
				response for Self, the overall Average, and the Average response for each of the rater groups.</h3>
		</div>

		<div class="p4-heading-top">
			<span>Area for Enrichment = {{ $low_range_beg }}-{{ $low_range_end }}</span>
			<span>Effective Functioning = {{$med_range_beg }}-{{ $med_range_end }}</span>
			<span>Enhanced Skills = {{ $high_range_beg }}-{{ $high_range_end }}</span>
		</div>

		<div class="p4-bars ml-3">
			<table class="table table-bordered cq-table mt-2">
					<tr class="p14-grey-bg">
						<td class="cq-table-heading text-uppercase" rowspan="7">Cognitive Quotent</td>
					</tr>
					<tr class="p14-grey-bg">
						<td class="p14-table-title"><strong>Self</strong></td>
						<td class="p14-table-num"><strong>{{ $selfSummary->CQ }}</strong></td>
					</tr>
					<tr class="p14-grey-bg">
						<td class="p14-table-title">Average</td>
						<td class="p14-table-num">{{ $CQTotalAvg }}</td>
					</tr>
					<tr class="p14-grey-bg">
						<td class="p14-table-title">Manager</td>
						<td class="p14-table-num">{{ $cqmanagerAvg  }}</td>
					</tr>
					<tr class="p14-grey-bg">
						<td class="p14-table-title">Peer</td>
						<td class="p14-table-num">{{ $cqpeerAvg  }}</td>
					</tr>
					<tr class="p14-grey-bg">
						<td class="p14-table-title">Direct Report</td>
						<td class="p14-table-num">{{ $cqdirectAvg  }}</td>
					</tr>
					<tr class="p14-grey-bg">
						<td class="p14-table-title">Other</td>
						<td class="p14-table-num">{{ $cqotherAvg  }}</td>
					</tr>
				</table>
			<div class="chart" id="p14-chart-1">
			</div>

			<table class="table table-bordered ft-table mt-2">
				<tr>
					<td class="ft-table-heading" rowspan="7">Focused Thinking</td>
				</tr>
				<tr>
					<td class="p14-table-title">Self</td>
					<td class="p14-table-num">{{ $selfSummary->focused_thinking }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Average</td>
					<td class="p14-table-num">{{ $FTTotalAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Manager</td>
					<td class="p14-table-num">{{ $FTmanagerAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Peer</td>
					<td class="p14-table-num">{{ $FTpeerAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Direct Report</td>
					<td class="p14-table-num">{{ $FTdirectAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Other</td>
					<td class="p14-table-num">{{ $FTotherAvg }}</td>
				</tr> 
			</table>
			<div class="chart" id="p14-chart-2">
			</div>

			<table class="table table-bordered ps-table mt-2">
				<tr class="p14-lightblue-bg">
					<td class="ps-table-heading" rowspan="7">Problem-Solving</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Self</td>
					<td class="p14-table-num">{{ $selfSummary->problem_solving }}</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Average</td>
					<td class="p14-table-num">{{ $PSTotalAvg }}</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Manager</td>
					<td class="p14-table-num">{{ $PSmanagerAvg }}</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Peer</td>
					<td class="p14-table-num">{{ $PSpeerAvg }}</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Direct Report</td>
					<td class="p14-table-num">{{ $PSdirectAvg }}</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Other</td>
					<td class="p14-table-num">{{ $PSotherAvg }}</td>
				</tr>
			</table>
			<div class="chart" id="p14-chart-3">
			</div>

			<table class="table table-bordered ct-table mt-2">
				<tr>
					<td class="ct-table-heading" rowspan="7">Critical Thinking</td>
				</tr>
				<tr>
					<td class="p14-table-title">Self</td>
					<td class="p14-table-num">{{ $selfSummary->critical_thinking }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Average</td>
					<td class="p14-table-num">{{ $CTTotalAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Manager</td>
					<td class="p14-table-num">{{ $CTmanagerAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Peer</td>
					<td class="p14-table-num">{{ $CTpeerAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Direct Report</td>
					<td class="p14-table-num">{{ $CTdirectAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Other</td>
					<td class="p14-table-num">{{ $CTotherAvg }}</td>
				</tr>
			</table>
			<div class="chart" id="p14-chart-4">
			</div>

			<table class="table table-bordered dm-table mt-2">
				<tr class="p14-lightblue-bg">
					<td class="dm-table-heading" rowspan="7">Decision Making</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Self</td>
					<td class="p14-table-num">{{ $selfSummary->decision_making }}</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Average</td>
					<td class="p14-table-num">{{ $DMTotalAvg }}</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Manager</td>
					<td class="p14-table-num">{{ $DMmanagerAvg }}</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Peer</td>
					<td class="p14-table-num">{{ $DMpeerAvg }}</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Direct Report</td>
					<td class="p14-table-num">{{ $DMdirectAvg }}</td>
				</tr>
				<tr class="p14-lightblue-bg">
					<td class="p14-table-title">Other</td>
					<td class="p14-table-num">{{ $DMotherAvg }}</td>
				</tr>
				</table>
			<div class="chart" id="p14-chart-5">
			</div>

			<table class="table table-bordered exp-table mt-2">
				<tr>
					<td class="exp-table-heading" rowspan="7">Explanation</td>
				</tr>
				<tr>
					<td class="p14-table-title">Self</td>
					<td class="p14-table-num">{{ $selfSummary->explanation }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Average</td>
					<td class="p14-table-num">{{ $EXTotalAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Manager</td>
					<td class="p14-table-num">{{ $EXmanagerAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Peer</td>
					<td class="p14-table-num">{{ $EXpeerAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Direct Report</td>
					<td class="p14-table-num">{{ $EXdirectAvg }}</td>
				</tr>
				<tr>
					<td class="p14-table-title">Other</td>
					<td class="p14-table-num">{{ $EXotherAvg }}</td>
				</tr>
			</table>
			<div class="chart" id="p14-chart-6">
			</div>
		</div>


		<div class="p4-heading-bottom">
			<span>Area for Enrichment = {{ $low_range_beg }}-{{ $low_range_end }}</span>
			<span>Effective Functioning = {{$med_range_beg }}-{{ $med_range_end }}</span>
			<span>Enhanced Skills = {{ $high_range_beg }}-{{ $high_range_end }}</span>
		</div>

	</div>
</section>