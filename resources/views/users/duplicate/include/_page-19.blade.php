<!-- Report Page 19 -->
@include('users/include/report-header')
    <div class="row">
	        <div class="col-8">

	        </div>
	       
	        <div class="col-md-12">
	            <h1 class="p19-title">Open-Ended Responses - 360</h1>
	            <h3 class="p19-ml-3">This page shows how your raters responded to the short-answer questions presented in the PQ-i 360. Answering these questions was optional, so you may see a different number of responses to each question and some blanks. If none of your raters chose to answer, “N/R” will appear in the answer field referring to “No Response.”</h3>
				<p class="p19-p1"> <b> 1. What areas of leadership do you believe are strengths for this participant? </b></p>

				@if(count($peer_oer) > 0)
					@foreach($peer_oer as $p => $pv)
						<p class="p19-p2">P{{$p+1}}. {{ $pv->OER1 }}</p>
					@endforeach
				@endif

				@if(count($direct_oer) > 0)
					@foreach($direct_oer as $d => $dv)
						<p class="p19-p2">D{{$d++}}. {{ $dv->OER1 }}</p>
					@endforeach
				@endif

				@if(count($manager_oer) > 0)
					@foreach($manager_oer as $m => $mv)
						<p class="p19-p2">M{{$m++}}. {{ $mv->OER1 }}</p>
					@endforeach
				@endif

				@if(count($other_oer) > 0)
					@foreach($other_oer as $o => $ov)
						<p class="p19-p2">O{{$o++}}. {{ $ov->OER1 }}</p>
					@endforeach
				@endif

				<p class="p19-p1"> <b>2. What areas of leadership do you believe are opportunities for growth for this participant?</b> </p>
				@if(count($peer_oer) > 0)
					@foreach($peer_oer as $p => $pv)
						<p class="p19-p2">
						P{{$p+1}}. {{ $pv->OER2 }}</p>
					@endforeach
				@endif

				@if(count($direct_oer) > 0)
					@foreach($direct_oer as $d => $dv)
						<p class="p19-p2">D{{$d++}}. {{ $dv->OER2 }}</p>
					@endforeach
				@endif

				@if(count($manager_oer) > 0)
					@foreach($manager_oer as $m => $mv)
						<p class="p19-p2">M{{$m++}}. {{ $mv->OER2 }}</p>
					@endforeach
				@endif

				@if(count($other_oer) > 0)
					@foreach($other_oer as $o => $ov)
						<p class="p19-p2">O{{$o++}}. {{ $ov->OER2 }}</p>
					@endforeach
				@endif
	        </div>
	    </div>
<!-- \Report Page 19 -->