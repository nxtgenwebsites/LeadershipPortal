<!-- Report Page 4 -->
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
	            <img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="150" height="85">
	        </div>
	        <div class="col-md-12">
	            <h1 class="display-5">PQ-i-360 Summary</h1>
	            <h3 class="ml-3">The bar charts below represent your PQ-i-360 scores. It includes your overall PQ, CQ, EQ, LQ and Betterment scores.</h3>
	        </div>
	   </div>
	   <div class="row mb-2">
	       <div class="col-md-6">
	           <h3 style="background:#ccc; padding-top:2%; color:green">PROFESSIONALISM QUOTIENT <span class="float-right">72</span></h3>
	       </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:50px" id="bars_basic"></div>
				</div>
            </div>
	   </div>
	   <div class="row mb-2">
	       <div class="col-md-6">
	           <h3  style="background:#ccc; padding-top:2%; color:blue;">COGNITIVE QUOTIENT<span class="float-right">72</span></h3>
	            <h5>Focused-Thinking <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">clear thinking; clear thoughts; ability to concentrate</p></span></h5>
				<h5>Problem-Solving <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">ability to find solutions to problems; orderly thinking </p></span></h5>
			 	<h5>Critical-Thinking <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">disciplined in conceptualizing, applying, analyzing information</p></span></h5>
	            <h5>Decision-Making <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">selection of the best course of action among several possibilities</p></span></h5>
	            <h5>Explanation  <span class="float-right">72</span>
	            	<span>
	            		<p style="font-size:12px;">statements which clarify the cause, context, and consequence of facts</p>
					</span>
				</h5>

	       </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px" id="bars_basic_2"></div>
				</div>
            </div>
	   </div>
	   <div class="row mb-2">
	       <div class="col-md-6" style="line-height: 20px;">
	           <h3  style="background:#ccc; padding-top:2%; color:red;">EMOTIONAL QUOTIENT<span class="float-right">72</span></h3>
	            <h5>Focused-Thinking <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">clear thinking; clear thoughts; ability to concentrate</p></span></h5>
				<h5>Problem-Solving <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">ability to find solutions to problems; orderly thinking </p></span></h5>
			 	<h5>Critical-Thinking <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">disciplined in conceptualizing, applying, analyzing information</p></span></h5>
	            <h5>Decision-Making <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">selection of the best course of action among several possibilities</p></span></h5>
	            <h5>Explanation  <span class="float-right">72</span>
	            	<span>
	            		<p style="font-size:12px;">statements which clarify the cause, context, and consequence of facts</p>
					</span>
				</h5>

	       </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px" id="bars_basic_3"></div>
				</div>
            </div>
	   </div>
	   <div class="row mb-2">
	       <div class="col-md-6" style="line-height: 20px;">
	           <h3  style="background:#ccc; padding-top:2%; color:orange;">LEADERSHIP  QUOTIENT<span class="float-right">72</span></h3>
	            <h5>Focused-Thinking <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">clear thinking; clear thoughts; ability to concentrate</p></span></h5>
				<h5>Problem-Solving <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">ability to find solutions to problems; orderly thinking </p></span></h5>
			 	<h5>Critical-Thinking <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">disciplined in conceptualizing, applying, analyzing information</p></span></h5>
	            <h5>Decision-Making <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">selection of the best course of action among several possibilities</p></span></h5>
	            <h5>Explanation  <span class="float-right">72</span>
	            	<span>
	            		<p style="font-size:12px;">statements which clarify the cause, context, and consequence of facts</p>
					</span>
				</h5>

	       </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px" id="bars_basic_4"></div>
				</div>
            </div>
	   </div>
	   <div class="row mb-2">
	       <div class="col-md-6">
	           <h3 style="background:#ccc; padding-top:2%; color:brown">BETTERMENT <span class="float-right">72</span></h3>
	       </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:50px" id="bars_basic_5"></div>
				</div>
            </div>
	   </div>
	</div>
</div>
<!-- /Report page 4 -->
@section('scripts')
    <!-- Theme JS files -->
	<script src="{{ asset('js/plugins/visualization/echarts/echarts.min.js') }}"></script>
	<script src="{{ asset('js/demo_pages/charts/page-4.js') }}"></script>
@endsection
