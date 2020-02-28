<!-- Report Page 1 -->
		 	<div class="text-center mt-2">
		        <img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="500" height="250" class="img-fluid">
		    </div>
		    <h1 class="text-center display-3 p1-heading">
		        PQ-i <br>
		        360&deg; <br>
		    </h1>
		    <h1 class="text-center display-3 p1-feedback">
		        FEEDBACK
		    </h1>
		        <hr class="p1-hr">
		        <p class="text-center display-3 p1-report"><span class="p1-report-bdr">REPORT</span></p>
		    <h2 class="d-flex justify-content-center p1-name">{{ $profile->first_name }} {{ $profile->last_name }}</h2>
		    <div class="d-flex justify-content-center">

		    <table>
		        <tr>
		            <td class="p1-td"><strong>Total Raters: {{ !empty($profile->raters_ttl) ? $profile->raters_ttl : '0' }}</strong></td>
		        </tr>
		        <tr>
		            <td class="p1-td-1"align="left">Managers: {{ !empty($profile->mgr_ttl) ? $profile->mgr_ttl : '0'  }}</td>
		            
		        </tr>
		        <tr>
		            <td class="p1-td-1" align="left">Peer(s): {{ !empty($profile->peer_ttl) ? $profile->peer_ttl : '0'  }}</td>
		        </tr>
		        <tr>
		            <td class="p1-td-1" align="left">Direct Report: {{ !empty($profile->dir_ttl) ? $profile->dir_ttl : '0'  }}</td>
		        </tr>
		        <tr>
		            <td class="p1-td-1" align="left">Others: {{ !empty($profile->oth_ttl) ? $profile->oth_ttl : '0'  }}</td>
		        </tr>
		    </table>

		    </div>
		    <br>
		    <h3 class="text-center p1-date"><strong>{{ date('M d, Y') }}</strong></h3>
		    <div class="text-center mb-2">
		        <img src="{{ asset('images/report/PIM-Welcome/PIM-Welcome.png') }}" />
		    </div>
<!-- /Report Page 1 -->
