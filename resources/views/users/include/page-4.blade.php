<!-- Report Page 3 -->
<div class="card">
	<div class="card-body">
	    <div class="row">
	        <div class="col-8">
	            
	        </div>
	        <div class="col-2">
	            <h4>Name: {{ $profile->first_name }} {{ $profile->last_name }}</h4>
	            <h4>{{ date('M d, Y') }}</h4></h4>
	        </div>
	        <div class="col-1">
	            <img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="150" height="85">
	        </div>
	        <div class="col-md-12">
	            <h1 class="display-4">PQ-i - 360 Summary</h1>
	            <h3 class="ml-3">The bar charts below represent your PQ-i – 360 scores. It includes your overall PQ, CQ, EQ, LQ and Betterment scores.</h3>
	        </div>
	   </div>
	   
	        
	   <div class="row mb-2">
	       <div class="col-md-6">
	           <h2 style="background:#ccc; padding-top:2%; color:green">PROFESSIONALISM QUOTIENT <span class="float-right">72</span></h2>
	       </div>     
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:50px" id="bars_basic"></div>
				</div>
            </div> 
	   </div>
	   
	   <div class="row mb-2">
	       <div class="col-md-6">

	           <h2  style="background:#ccc; padding-top:2%; color:blue;">COGNITIVE QUOTIENT<span class="float-right">72</span></h2>
	           
	           <h4>Focused-Thinking <span class="float-right">72</span> <span>
	               <p style="font-size:12px;">clear thinking; clear thoughts; ability to concentrate</p></span></h4>
	           <h4>Problem-Solving <span class="float-right">72</span></h4>
	           <h4>Critical-Thinking  <span class="float-right">72</span></h4>
	           <h4>Decision-Making  <span class="float-right">72</span></h4>
	           <h4>Explanation  <span class="float-right">72</span></h4>
	           
	       </div>     
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:250px" id="bars_basic_2"></div>
				</div>
            </div> 
	   </div>
	</div>
</div>
<!-- /Report page 3 -->
@section('scripts')
    <!-- Theme JS files -->
	<script src="{{ asset('js/plugins/visualization/echarts/echarts.min.js') }}"></script>
	
	<script src="{{ asset('js/demo_pages/charts/page-4.js') }}"></script>
@endsection