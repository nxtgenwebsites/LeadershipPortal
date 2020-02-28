<section id="page-9">
	<div class="container page-attr pie-main-grid py-5">
		<div class="pie-logo">
			<h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <span class="fmt-date">{{ date('M d, Y') }}</span></h4>
			<img class="img-fluid" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
				height="55">
		</div>
		
		<div class="self-summary">
			<h1 class="p8-main-title">PQ-i Spider Graph – Self (Subscales)</h1>
			<h3 class="p8-sub-title">The figure on this page provides you with your average score on each of the subscales
				of the PQ-i. </h3>
			<ul class="p8-sub-title" style="margin-left: 5%;">
				<li>The CQ section provides your score on each of the CQ subscales.</li>
				<li>The EQ section provides your score on each of the EQ subscales.</li>
				<li>The LQ section provides your score on each of the LQ subscales.</li>
			</ul>
		</div>

		<div class="pie-cq-body">
			<h2 class="pie-cq">CQ</h2>
			<ul class="pie-ul">
				<li style="list-style-type:square;color: #3F6A9F"><span>Focused-Thinking</span></li>
				<li style="list-style-type:square;color: #9E403E"><span>Problem-Solving</span></li>
				<li style="list-style-type:square;color: #7F9A49"><span>Critical-thinking</span></li>
				<li style="list-style-type:square;color: #695087"><span>Decision-Making</span></li>
				<li style="list-style-type:square;color: #3C8CA3"><span>Explanation</span></li>
			</ul>
		</div>

		<div id="p9-chart">
		</div>

		<div class="pie-bottom-legend">
			<div class="pie-lq-body">
				<h2 class="pie-lq">LQ</h2>
				<ul class="pie-ul">
					<li style="list-style-type:square;color: #4AACC5"><span>Embodiment</span></li>
					<li style="list-style-type:square;color: #FA9448"><span>Inspiration</span></li>
					<li style="list-style-type:square;color: #A9BBD8"><span>Excellence</span></li>
					<li style="list-style-type:square;color: #DAAAAA"><span>Empowerment</span></li>
					<li style="list-style-type:square;color: #C6D5AC"><span>Recogination</span></li>
				</ul>
			</div>

			<div class="pie-eq-body">
				<h2 class="pie-eq">EQ</h2>
				<ul class="pie-ul">
					<li style="list-style-type:square;color: #CC7B39"><span style="color: black">Self-Awareness</span></li>
					<li style="list-style-type:square;color: #4F81BC"><span style="color: black">Self-Regulation</span></li>
					<li style="list-style-type:square;color: #C0504E"><span style="color: black">Interpersonal
							Relationships</span></li>
					<li style="list-style-type:square;color: #9BBB58"><span style="color: black">Empathy</span></li>
					<li style="list-style-type:square;color: #8064A1"><span style="color: black">Motivation</span></li>
				</ul>
			</div>
		</div>     
	</div>
</section>