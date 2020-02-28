<!-- Report Page 4 -->
@include('users/include/report-header')
<div class="row">
    <div class="col-md-12">
        <h1 class="p4-heading">PQ-i-Self Summary</h1>
        <h3 class="p4-heading-desc ml-3">The bar charts below represent your PQ-i-Self scores. It includes your overall PQ, CQ, EQ, LQ and Betterment scores.</h3>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-3 offset-md-1 p4-heading-desc">
        Area for Enrichment = {{ $low_range_beg }}-{{ $low_range_end }}
    </div>
    
    <div class="col-md-3 p4-heading-desc">
        Effective Functioning = {{$med_range_beg }}-{{ $med_range_end }}
    </div>
    
    <div class="col-md-3 p4-heading-desc">
         Enhanced Skills = {{ $high_range_beg }}-{{ $high_range_end }}
    </div>
</div>
<div class="row">
    <div class="col-md-3">
       <h3 class="p4-pq">PROFESSIONALISM QUOTIENT <span class="float-right">{{ $self_pq }}</span></h3>
    </div>
    <div class="col-md-9">
        <div class="chart" id="professional-quotient"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <h3 class="p4-cq">CONGNITIVE QUOTIENT <span class="float-right">{{ $self_cq }}</span></h3>
        <h5 class="p4-cq-desc">Focused-Thinking <span class="p4-desc-span">{{ $self_focused_thinking }}</span> <span>
           <p>clear thinking; clear thoughts; ability to concentrate</p></span></h5>
    	<h5 class="p4-cq-desc">Problem-Solving <span class="p4-desc-span">{{ $self_problem_solving }}</span> <span>
           <p>ability to find solutions to problems; orderly thinking </p></span></h5>
     	<h5 class="p4-cq-desc">Critical-Thinking <span class="p4-desc-span">{{  $self_critical_thinking }}</span> <span>
           <p>disciplined in conceptualizing, applying, analyzing information</p></span></h5>
        <h5 class="p4-cq-desc">Decision-Making <span class="p4-desc-span">{{ $self_decision_making }}</span> <span>
           <p>selection of the best course of action among several possibilities</p></span></h5>
        <h5 class="p4-cq-desc">Explanation  <span class="p4-desc-span">{{ $self_explanation }}</span>
        	<span>
        		<p>statements which clarify the cause, context, and consequence of facts</p>
    		</span>
    	</h5>
    </div>
    
    <div class="col-md-9">
        <div class="chart" id="congnitive-quotient"></div>
    </div>
</div>
	<div class="row mb-2">
	    <div class="col-md-3">
            	<h3 class="p4-eq">EMOTIONAL QUOTIENT<span class="float-right">{{ $self_eq }}</span></h3>
       
            	<h5 class="p4-cq-desc">Self Awareness <span class="p4-desc-span">{{ $self_self_awareness }}</span> <span>
	               <p style="font-size:12px;">capacity for introspection; ability to recognize oneself as an individual</p></span></h5>
		<h5 class="p4-cq-desc">Self-Regulation <span class="p4-desc-span">{{ $self_self_regulation }}</span> <span>
	               <p>capacity to control impulses; ability to stop/start doing something </p></span></h5>
		<h5 class="p4-cq-desc">Interpersonal Relationships <span class="p4-desc-span">{{ $self_interpersonal_relationships }}</span> <span><p>a strong, deep, or close association with people; enduring relationships</p></span></h5>
            <h5 class="p4-cq-desc">Empathy <span class="p4-desc-span">{{ $self_empathy }}</span> <span><p>the capacity to share or recognize emotions experienced by another</p></span></h5>
            <h5 class="p4-cq-desc">Motivation  <span class="p4-desc-span">{{ $self_motivation }}</span><span><p>prompts a person to act or behave in a certain manner when necessary</p></span</h5>
        </div>
        <div class="col-md-9">
            <div class="chart" id="emotional-quotient"></div>
        </div>
	</div>
	
	<div class="row mb-2">
        <div class="col-md-3">
           <h3 class="p4-lq">LEADERSHIP  QUOTIENT<span class="float-right">{{ $self_lq }}</span></h3>
            <h5 class="p4-cq-desc">Embodiment <span class="p4-desc-span">{{$self_embodiment}}</span> <span>
               <p>the perfect representative or example of a quality, idea, etc.</p></span></h5>
    		<h5 class="p4-cq-desc">Inspiration <span class="p4-desc-span">{{$self_inspiration}}</span> <span>
               <p>something that makes someone want to do something </p></span></h5>
    	 	<h5 class="p4-cq-desc">Excellence <span class="p4-desc-span">{{$self_excellence}}</span> <span>
               <p>a talent/quality which is unusually good; surpasses ordinary standards</p></span></h5>
            <h5 class="p4-cq-desc">Empowerment <span class="p4-desc-span">{{$self_empowerment}}</span> <span>
               <p>to give power/authority to someone; authorize</p></span></h5>
            <h5 class="p4-cq-desc">Recognition  <span class="p4-desc-span">{{$self_recognition}}</span>
            	<span>
            		<p>acknowledgment of someone as valid; entitled to consideration 1</p>
    			</span>
    		</h5>
        </div>
        <div class="col-md-9">
            <div class="chart" id="leadership-quotient"></div>
        </div>
	</div>
	
	<div class="row mb-2">
        <div class="col-md-3">
           <h3 class="p4-pq">BETTERMENT <span class="float-right">{{ $self_bt }}</span></h3>
        </div>
        <div class="col-md-9">
            <div class="chart" id="betterment-quotient"></div>
        </div>
	</div>
	<div class="row">
        <div class="col-md-3 offset-md-1 p4-heading-desc">
            Area for Enrichment = {{ $low_range_beg }}-{{ $low_range_end }}
        </div>
        
        <div class="col-md-3 p4-heading-desc">
            Effective Functioning = {{$med_range_beg }}-{{ $med_range_end }}
        </div>
        
        <div class="col-md-3 p4-heading-desc">
             Enhanced Skills = {{ $high_range_beg }}-{{ $high_range_end }}
        </div>
    </div>
<!-- /Report page 4 -->
