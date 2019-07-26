<!-- Report Page 19 -->
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
				<p> <b> 1. What areas of leadership do you believe are strengths for this participant? </b></p>

				@if(count($peer_oer) > 0)
					@foreach($peer_oer as $p => $pv)
						<p>P{{$p+1}}. {{ $pv->OER1 }}</p>
					@endforeach
				@endif

				@if(count($direct_oer) > 0)
					@foreach($direct_oer as $d => $dv)
						<p>D{{$d++}}. {{ $dv->OER1 }}</p>
					@endforeach
				@endif

				@if(count($manager_oer) > 0)
					@foreach($manager_oer as $m => $mv)
						<p>M{{$m++}}. {{ $mv->OER1 }}</p>
					@endforeach
				@endif

				@if(count($other_oer) > 0)
					@foreach($other_oer as $o => $ov)
						<p>O{{$o++}}. {{ $ov->OER1 }}</p>
					@endforeach
				@endif

				<p> <b>2. What areas of leadership do you believe are opportunities for growth for this participant?</b> </p>
				@if(count($peer_oer) > 0)
					@foreach($peer_oer as $p => $pv)
						<p>P{{$p+1}}. {{ $pv->OER2 }}</p>
					@endforeach
				@endif

				@if(count($direct_oer) > 0)
					@foreach($direct_oer as $d => $dv)
						<p>D{{$d++}}. {{ $dv->OER2 }}</p>
					@endforeach
				@endif

				@if(count($manager_oer) > 0)
					@foreach($manager_oer as $m => $mv)
						<p>M{{$m++}}. {{ $mv->OER2 }}</p>
					@endforeach
				@endif

				@if(count($other_oer) > 0)
					@foreach($other_oer as $o => $ov)
						<p>O{{$o++}}. {{ $ov->OER2 }}</p>
					@endforeach
				@endif
	        </div>
	    </div>
<!-- \Report Page 19 -->