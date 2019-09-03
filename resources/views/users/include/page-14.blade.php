<!-- Report Page 14 -->
@include('users/include/report-header')
    <div class="row">
        <div class="col-md-12">
            <h1 class="p14-heading">Cognitive Bar Graph – Self & 360</h1>
            <h3 class="p14-title">This is the set of bar graphs for each of the five subscales related to Cognition. It is a graphical representation of your and your raters average responses for that subscale. It shows the response for Self, the overall Average, and the Average response for each of the rater groups.</h3>
        </div>
    </div>
    
	<div class="row mt-2">
        <div class="col-md-5">
       		<table class="table table-bordered p14-table">
       			<tr class="p14-grey-bg">
       				<td class="p14-table-heading" rowspan="7">Cognitive Quotent</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p14-chart-1"></div>
       	</div>
       	<!-- FT -->
       	<div class="col-md-5">
       		<table class="table table-bordered p14-table">
       			<tr>
       				<td class="p14-table-heading" rowspan="7">Focused Thinking</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p14-chart-2"></div>
       	</div>
       	<!-- PS -->
       	<div class="col-md-5">
       		<table class="table table-bordered p14-table">
       			<tr class="p14-lightblue-bg">
	       				<td class="p14-table-heading" rowspan="7">Problem-Solving</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p14-chart-3"></div>
       	</div>
       	<!-- CT -->
       	<div class="col-md-5">
       		<table class="table table-bordered p14-table">
       		    <tr>
       				<td class="p14-table-heading" rowspan="7">Critical Thinking</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p14-chart-4"></div>
       	</div>
       	<!-- DM -->
       	<div class="col-md-5">
       		<table class="table table-bordered p14-table">
       		    <tr class="p14-lightblue-bg">
	       				<td class="p14-table-heading" rowspan="7">Decision Making</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p14-chart-5"></div>
       	</div>
       	
       	<!-- EX -->
       	<div class="col-md-5">
       		<table class="table table-bordered p14-table">
       		    <tr>
	       				<td class="p14-table-heading" rowspan="7">Explanation</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p14-chart-6"></div>
       	</div>
       	
	</div>
<!-- /Report page 14 -->
