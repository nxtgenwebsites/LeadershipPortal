<section id="pg-18">
	<div class="container page-attr p4-main-grid py-5">
		<div class="p4-logo">
			<h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <span class="fmt-date">{{ date('M d, Y') }}</span></h4>
			<img class="img-fluid" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
				height="55">
		</div>

		<div class="self-summary">
			<h1 class="p19-title text-gray">PQ-i Percentile Ranking</h1>

			<h5 class="p19-ml-3 text-gray">The leaders and raters who make up the PQ-i database include a mix of males and females
				at all levels, from all types of organizations, and from all over the world. This page
				compares your Self responses and those of your Raters to everyone who have completed
				the PQ-i. The horizontal line at the 30th and 70th percentiles divide the graph into three
				segments, roughly approximating a normal distribution of scores. Each line on the graph
				shows what percentile your Self or a Rater category response falls into for each area. For
				example, if your Self score for Cognitive Intelligence is at the 50th percentile, half of the
				leaders in the database were rated higher by their Raters in this area, and half were rated
				lower.</h5>
		</div>

		<div class="percent-ranking my-5" id="page-18">
		</div>
	</div>
</section>