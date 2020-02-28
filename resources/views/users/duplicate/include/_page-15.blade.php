<!-- Report Page 15 -->
@include('users/include/report-header')
    <div class="row">
	        <div class="col-md-12">
	            <h1 class="p15-heading">Emotional Bar Graph – Self & 360</h1>
	            <h3 class="p15-title">This is the set of bar graphs for each of the five subscales related to Emotion. It is a graphical representation of your and your raters average responses for that subscale. It shows the response for Self, the overall Average, and the Average response for each of the rater groups.</h3>
	        </div>
	    </div>
	    <div class="row mt-2">
        <div class="col-md-3 offset-md-1 p4-heading-desc">
            Area for Enrichment = {{ $low_range_beg }}-{{ $low_range_end }}
        </div>
        
        <div class="col-md-3 p4-heading-desc">
            Effective Functioning = {{$med_range_beg }}-{{ $med_range_end }}
        </div>
        
        <div class="col-md-3 p4-heading-desc">
             Enhanced Skills = {{ $high_range_beg }}-{{ $high_range_end }}
        </div>
    </div>
	<div class="row mb-2">
	    
	    
	    <!-- EQ -->
       	<div class="col-md-3">
       		<table class="table table-bordered p15-table">
       		   <tr class="p15-grey-bg">
       				<td class="p15-table-heading-eq" rowspan="7">Emotional Quotent</td>
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
       	</div>
       	<div class="col-md-9">
       	    <div class="chart" id="p15-chart-1"></div>
       	</div>
       	
       	<!-- SA -->
       	<div class="col-md-3">
       		<table class="table table-bordered p15-table">
       		   <tr>
	       				<td class="p15-table-heading" rowspan="7">Self-Awareness</td>
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
       	</div>
       	<div class="col-md-9">
       	    <div class="chart" id="p15-chart-2"></div>
       	</div>
       	
       	<!-- SR -->
       	<div class="col-md-3">
       		<table class="table table-bordered p15-table">
       		   	<tr class="p15-red-bg">
	       				<td class="p15-table-heading" rowspan="7">Self-Regulation</td>
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
       	</div>
       	<div class="col-md-9">
       	    <div class="chart" id="p15-chart-3"></div>
       	</div>
       	
       	<!-- IR -->
       	<div class="col-md-3">
       		<table class="table table-bordered p15-table">
       		   	<tr>
       				<td class="p15-table-heading" rowspan="7">Interpersonal Relationships</td>
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
       	</div>
       	<div class="col-md-9">
       	    <div class="chart" id="p15-chart-4"></div>
       	</div>
       	
       	<!-- EM -->
       	<div class="col-md-3">
       		<table class="table table-bordered p15-table">
       		   	<tr class="p15-red-bg">
	       				<td class="p15-table-heading" rowspan="7">Empathy</td>
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
       	</div>
       	<div class="col-md-9">
       	    <div class="chart" id="p15-chart-5"></div>
       	</div>
       	
       	<!-- MO -->
       	<div class="col-md-3">
       		<table class="table table-bordered p15-table">
       		   	<tr>
	       				<td class="p15-table-heading" rowspan="7">Motivation</td>
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
       	</div>
       	<div class="col-md-9">
       	    <div class="chart" id="p15-chart-6"></div>
       	</div>
    </div>
    <div class="row">
        <div class="col-md-3 offset-md-1 p4-heading-desc">
            Area for Enrichment = {{ $low_range_beg }}-{{ $low_range_end }}
        </div>
        
        <div class="col-md-3 p4-heading-desc">
            Effective Functioning = {{$med_range_beg }}-{{ $med_range_end }}
        </div>
        
        <div class="col-md-3 p4-heading-desc">
             Enhanced Skills = {{ $high_range_beg }}-{{ $high_range_end }}
        </div>
    </div>
<!-- /Report page 6 -->
