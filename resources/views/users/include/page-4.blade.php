<!-- Report Page 4 -->
<div class="row">
    <div class="col-md-8 offset-md-2">
		<div class="row">
	        <div class="col-10">
	        	<div class="float-right">

	            <h5>Name: {{ $profile->first_name }} {{ $profile->last_name }}</h5>
	            <h5>{{ date('M d, Y') }}</h5>
	        	</div>
	        </div>
	        <div class="col-1">
	            <img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130" height="55">
	        </div>
	        <div class="col-md-12">
	            <h1 class="display-5">PQ-i-Self Summary</h1>
	            <h3 class="ml-3">The bar charts below represent your PQ-i-Self scores. It includes your overall PQ, CQ, EQ, LQ and Betterment scores.</h3>
	        </div>
		</div>
		<div class="row mb-2">
	       <div class="col-md-6">
	           <h3 style="background:#ccc; padding-top:2%; color:green">PROFESSIONALISM QUOTIENT <span class="float-right">{{ $self_pq }}</span></h3>
	       </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:50px;  width: 4in;" id="bars_basic"></div>
				</div>
            </div>
		</div>
		<div class="row mb-2">
	       <div class="col-md-6">
	           <h3  style="background:#ccc; padding-top:2%; color:blue;">COGNITIVE QUOTIENT<span class="float-right">{{ $self_cq }}</span></h3>
	            <h5>Focused-Thinking <span class="float-right">{{ $self_focused_thinking }}</span> <span>
	               <p style="font-size:12px;">clear thinking; clear thoughts; ability to concentrate</p></span></h5>
				<h5>Problem-Solving <span class="float-right">{{ $self_problem_solving }}</span> <span>
	               <p style="font-size:12px;">ability to find solutions to problems; orderly thinking </p></span></h5>
			 	<h5>Critical-Thinking <span class="float-right">{{  $self_critical_thinking }}</span> <span>
	               <p style="font-size:12px;">disciplined in conceptualizing, applying, analyzing information</p></span></h5>
	            <h5>Decision-Making <span class="float-right">{{ $self_decision_making }}</span> <span>
	               <p style="font-size:12px;">selection of the best course of action among several possibilities</p></span></h5>
	            <h5>Explanation  <span class="float-right">{{ $self_explanation }}</span>
	            	<span>
	            		<p style="font-size:12px;">statements which clarify the cause, context, and consequence of facts</p>
					</span>
				</h5>

	       </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px; width: 4in;" id="bars_basic_2"></div>
				</div>
            </div>
		</div>
		<div class="row mb-2">
	       <div class="col-md-6" style="line-height: 20px;">
	           <h3  style="background:#ccc; padding-top:2%; color:red;">EMOTIONAL QUOTIENT<span class="float-right">{{ $self_eq }}</span></h3>
	            <h5>Self Awareness <span class="float-right">{{ $self_self_awareness }}</span> <span>
	               <p style="font-size:12px;">capacity for introspection; ability to recognize oneself as an individual</p></span></h5>
				<h5>Self-Regulation <span class="float-right">{{ $self_self_regulation }}</span> <span>
	               <p style="font-size:12px;">capacity to control impulses; ability to stop/start doing something </p></span></h5>
			 	<h5>Interpersonal Relationships <span class="float-right">{{ $self_interpersonal_relationships }}</span> <span>
	               <p style="font-size:12px;">a strong, deep, or close association with people; enduring relationships</p></span></h5>
	            <h5>Empathy <span class="float-right">{{ $self_empathy }}</span> <span>
	               <p style="font-size:12px;">the capacity to share or recognize emotions experienced by another</p></span></h5>
	            <h5>Motivation  <span class="float-right">{{ $self_motivation }}</span>
	            	<span>
	            		<p style="font-size:12px;">prompts a person to act or behave in a certain manner when necessary</p>
					</span>
				</h5>

	       </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px; width: 4in;" id="bars_basic_3"></div>
				</div>
            </div>
		</div>
		<div class="row mb-2">
	       <div class="col-md-6" style="line-height: 20px;">
	           <h3  style="background:#ccc; padding-top:2%; color:orange;">LEADERSHIP  QUOTIENT<span class="float-right">{{ $self_lq }}</span></h3>
	            <h5>Embodiment <span class="float-right">{{$self_embodiment}}</span> <span>
	               <p style="font-size:12px;">the perfect representative or example of a quality, idea, etc.</p></span></h5>
				<h5>Inspiration <span class="float-right">{{$self_inspiration}}</span> <span>
	               <p style="font-size:12px;">something that makes someone want to do something </p></span></h5>
			 	<h5>Excellence <span class="float-right">{{$self_excellence}}</span> <span>
	               <p style="font-size:12px;">a talent/quality which is unusually good; surpasses ordinary standards</p></span></h5>
	            <h5>Empowerment <span class="float-right">{{$self_empowerment}}</span> <span>
	               <p style="font-size:12px;">to give power/authority to someone; authorize</p></span></h5>
	            <h5>Recognition  <span class="float-right">{{$self_recognition}}</span>
	            	<span>
	            		<p style="font-size:12px;">acknowledgment of someone as valid; entitled to consideration 1</p>
					</span>
				</h5>

	       </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:300px; width: 4in;" id="bars_basic_4"></div>
				</div>
            </div>
		</div>
		<div class="row mb-2">
	       <div class="col-md-6">
	           <h3 style="background:#ccc; padding-top:2%; color:brown">BETTERMENT <span class="float-right">{{$self_bt}}</span></h3>
	       </div>
            <div class="col-md-6">
                <div class="chart-container">
				<div class="chart" style="height:50px; width: 4in;" id="bars_basic_5"></div>
				</div>
            </div>
		</div>
	</div>
</div>
<!-- /Report page 4 -->

