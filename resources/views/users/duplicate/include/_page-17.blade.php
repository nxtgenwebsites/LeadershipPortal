<!-- Report Page 17 -->
@include('users/include/report-header')
    <div class="row">

	        <div class="col-md-12">
	            <h1 class="p17-title">Betterment and Balance Bar Graph – Self & 360</h1>
	            <h3 class="p17-sub-title ml-3">This is the set of bar graphs for the Betterment scale and the Balance calculation. The Betterment scale is a graphical representation of your and your raters average responses for that scale. It shows the response for Self, the overall Average, and the Average response for each of the rater groups. Your Betterment score, as previously mentioned, is not part of your PQ-i however it demonstrates your commitment to betterment.</h3>
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
	       <div class="col-md-3">
				<table class="table table-bordered p17-table">
						<tr>
							<td class="p17-table-heading" rowspan="7">BETTERMENT</td>
						</tr>
						<tr>
							<td class="p17-table-title"><strong>Self</strong></td>
							<td class="p17-table-num-bt"><strong>{{ $selfSummary->BT }}</strong></td>
						</tr>
						<tr>
							<td class="p17-table-title">Average</td>
							<td class="p17-table-num-bt">{{ $BTTotalAvg }}</td>
						</tr>
						<tr>
							<td class="p17-table-title">Manager</td>
							<td class="p17-table-num-bt">{{ $BTmanagerAvg  }}</td>
						</tr>
						<tr>
							<td class="p17-table-title">Peer</td>
							<td class="p17-table-num-bt">{{ $BTpeerAvg  }}</td>
						</tr>
						<tr>
							<td class="p17-table-title">Direct Report</td>
							<td class="p17-table-num-bt">{{ $BTdirectAvg  }}</td>
						</tr>
						<tr>
							<td class="p17-table-title">Other</td>
							<td class="p17-table-num-bt">{{ $BTotherAvg  }}</td>
						</tr>
				</table>
	       </div>
           <div class="col-md-9">
                
				<div id="p17-chart-1"></div>
           </div>
	    </div>

    <div class="row mb-2">
	    	<div class="col-md-12">
	            <h1 class="p17-title">PQ-i Balance</h1>
	            <h3 class="p17-sub-title ml-3">Your PQ-i balance is based on the relationship between your Cognitive Quotient (CQ), Emotional Quotient (EQ) and your Leadership Quotient (LQ). The lower the score in this bar graph the better balanced you are within each of these quotients. The higher the score in this bar graph the more imbalanced you are within each of these quotients. A lower overall PQ-i along with a low score in this graph demonstrates a comfort level within each of the quotients and the participant does not rely on one specific skill to achieve their overall professionalism. In contrast a higher PQ-i and a high score on this graph demonstrates more of an erratic use of these quotients and the participant may rely more on one specific skill to achieve their overall professionalism. Even though the goal of the PQ-I is to improve your overall score it is also the goal of the PQ-I to help you improve your balance between each of the quotients.</h3>
	        </div>
	    </div>

    <div class="row mb-2">
	       <div class="col-md-3">
	       		<table class="table table-bordered p17-table" style="background: lightgrey">
	       			<tr>
	       				<td class="p17-table-heading-bl" rowspan="7">PQ- iBALANCE</td>
	       			</tr>
	       			<tr>
	       				<td class="p17-table-title"><strong>Self</strong></td>
	       				<td class="p17-table-num-bl"><strong>130.7</strong></td>
	       			</tr>
	       			<tr>
	       				<td class="p17-table-title">Average</td>
	       				<td class="p17-table-num-bl">101.7</td>
	       			</tr>
	       			<tr>
	       				<td class="p17-table-title">Manager</td>
	       				<td class="p17-table-num-bl">120.0</td>
	       			</tr>
	       			<tr>
	       				<td class="p17-table-title">Peer</td>
	       				<td class="p17-table-num-bl">123.7</td>
	       			</tr>
	       			<tr>
	       				<td class="p17-table-title">Direct Report</td>
	       				<td class="p17-table-num-bl">12.5</td>
	       			</tr>
	       			<tr>
	       				<td class="p17-table-title">Other</td>
	       				<td class="p17-table-num-bl">0</td>
	       			</tr>
	       		</table>
	       </div>
           <div class="col-md-9">
		    <div class="chart" id="p17-chart-2"></div>
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
<!-- /Report page 17 -->