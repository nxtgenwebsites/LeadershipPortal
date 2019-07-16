<!-- Report Page 6 -->
<div class="row">
	<div class="col-md-8 offset-md-2">
	    <div class="row">
	        <div class="col-8">

	        </div>
	        <div class="col-2">
	            <h5>Name: {{ $profile->first_name }} {{ $profile->last_name }}</h5>
	            <h5>{{ date('M d, Y') }}</h5></h5>
	        </div>
	        <div class="col-1">
	            <img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130" height="55">
	        </div>
	        <div class="col-md-12">
	            <h1 class="display-5">Open-Ended Responses - 360</h1>
	            <h3 class="ml-3">This page shows how your raters responded to the short-answer questions presented in the PQ-i 360. Answering these questions was optional, so you may see a different number of responses to each question and some blanks. If none of your raters chose to answer, “N/R” will appear in the answer field referring to “No Response.”</h3>

				<p><b>3. When challenges arise within the workplace, how does this participant respond?</b></p>
				@if(count($peer_oer) > 0)
					@foreach($peer_oer as $p => $pv)
						<p>P{{$p+1}}. {{ $pv->OER3 }}</p>
					@endforeach
				@endif

				@if(count($direct_oer) > 0)
					@foreach($direct_oer as $d => $dv)
						<p>D{{$d++}}. {{ $dv->OER3 }}</p>
					@endforeach
				@endif

				@if(count($manager_oer) > 0)
					@foreach($manager_oer as $m => $mv)
						<p>M{{$m++}}. {{ $mv->OER3 }}</p>
					@endforeach
				@endif

				@if(count($other_oer) > 0)
					@foreach($other_oer as $o => $ov)
						<p>O{{$o++}}. {{ $ov->OER3 }}</p>
					@endforeach
				@endif



				<p> <b> 4. This program is about participant self-betterment. How would you advise this participant on how they can align themselves better toward this goal? </b></p>
				@if(count($peer_oer) > 0)
					@foreach($peer_oer as $p => $pv)
						<p>P{{$p+1}}. {{ $pv->OER4 }}</p>
					@endforeach
				@endif

				@if(count($direct_oer) > 0)
					@foreach($direct_oer as $d => $dv)
						<p>D{{$d++}}. {{ $dv->OER4 }}</p>
					@endforeach
				@endif

				@if(count($manager_oer) > 0)
					@foreach($manager_oer as $m => $mv)
						<p>M{{$m++}}. {{ $mv->OER4 }}</p>
					@endforeach
				@endif

				@if(count($other_oer) > 0)
					@foreach($other_oer as $o => $ov)
						<p>O{{$o++}}. {{ $ov->OER4 }}</p>
					@endforeach
				@endif

	        </div>
	    </div>
	</div>
</div>
