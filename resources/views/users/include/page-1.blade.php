<!-- Report Page 1 -->
		 	<div class="text-center mt-2">
		        <img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="600" height="250">
		    </div>
		    <h1 class="text-center display-3" style="color:#366092; font-family:calibri">
		        PQ-i <br>
		        360&deg; <br>
		        FEEDBACK
		    </h1>
		    <hr>
		    <h2 class="d-flex justify-content-center">{{ $profile->first_name }} {{ $profile->last_name }}</h2>
		    <div class="d-flex justify-content-center">

		    <table>
		        <tr>
		            <td><strong>Total Raters:</strong></td>
		            <td>{{ !empty($profile->raters_ttl) ? $profile->raters_ttl : '0' }}</td>
		        </tr>
		        <tr>
		            <td>Managers:</td>
		            <td>{{ !empty($profile->mgr_ttl) ? $profile->mgr_ttl : '0'  }}</td>
		        </tr>
		        <tr>
		            <td>Peer(s):</td>
		            <td>{{ !empty($profile->peers_ttl) ? $profile->peers_ttl : '0'  }}</td>
		        </tr>
		        <tr>
		            <td>Direct Report:</td>
		            <td>{{ !empty($profile->dir_ttl) ? $profile->dir_ttl : '0'  }}</td>
		        </tr>
		        <tr>
		            <td>Others:</td>
		            <td>{{ !empty($profile->oth_ttl) ? $profile->oth_ttl : '0'  }}</td>
		        </tr>
		    </table>

		    </div>
		    <br><br>
		    <h3 class="text-center">{{ date('M d, Y') }}</h3>
		    <div class="text-center mb-2">
		        <img src="{{ asset('images/report/PIM-Welcome/PIM-Welcome.png') }}" />
		    </div>
<!-- /Report Page 1 -->
