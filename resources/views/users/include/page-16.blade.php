<!-- Report Page 16 -->
@include('users/include/report-header')
    <div class="row">
	        <div class="col-md-12">
	            <h1 class="p15-heading">Leadership Bar Graph – Self & 360</h1>
	            <h3 class="p15-title">This is the set of bar graphs for each of the five subscales related to Emotion. It is a graphical representation of your and your raters average responses for that subscale. It shows the response for Self, the overall Average, and the Average response for each of the rater groups.</h3>
	        </div>
	    </div>
	<div class="row mb-2">
	    <!-- LQ -->
	    <div class="col-md-5">
       		<table class="table table-bordered p16-table">
       		   <tr class="p16-grey-bg">
       				<td class="p16-table-heading-lq" rowspan="7">Leadership Quotent</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p16-chart-1"></div>
       	</div>
       	<!-- EMB -->
	    <div class="col-md-5">
       		<table class="table table-bordered p16-table">
       		   <tr>
	       				<td class="p16-table-heading" rowspan="7">Embodiment</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p16-chart-2"></div>
       	</div>
       	
       	<!-- INS -->
	    <div class="col-md-5">
       		<table class="table table-bordered p16-table">
       		    <tr class="p16-red-bg">
       				<td class="p16-table-heading" rowspan="7">Inspiration</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p16-chart-3"></div>
       	</div>
       	
       	<!-- EXC -->
	    <div class="col-md-5">
       		<table class="table table-bordered p16-table">
       		    <tr>
       				<td class="p16-table-heading" rowspan="7">Excellence</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p16-chart-4"></div>
       	</div>
       	
       	<!-- EMP -->
	    <div class="col-md-5">
       		<table class="table table-bordered p16-table">
       		    <tr class="p16-red-bg">
       				<td class="p16-table-heading" rowspan="7">Empowerment</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p16-chart-5"></div>
       	</div>
       	
       	<!-- RE -->
	    <div class="col-md-5">
       		<table class="table table-bordered p16-table">
       		    <tr>
       				<td class="p16-table-heading" rowspan="7">Recognition</td>
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
       	</div>
       	<div class="col-md-7">
       	    <div class="chart" id="p16-chart-6"></div>
       	</div>
    </div>
<!-- /Report page 16 -->
