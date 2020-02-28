<section id="page-4">
    <div class="container page-attr py-5 p4-main-grid">
      <div class="p4-logo">
        <h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <span class="fmt-date">{{ date('M d, Y') }}</span></h4>
        <img class="img-fluid" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
          height="55">
      </div>

      <div class="p4-self-summary">
        <h1 class="display-4 p4-heading">PQ-i-Self Summary</h1>
        <h3 class="p4-heading-desc ml-3">The bar charts below represent your PQ-i-Self scores. It includes your overall
          PQ, CQ, EQ, LQ and Betterment scores.</h3>
      </div>

      <div class="p4-heading-top">
        <span>Area for Enrichment={{ $low_range_beg }}-{{ $low_range_end }}</span>
        <span>Effective Functioning={{$med_range_beg }}-{{ $med_range_end }}</span>
        <span>Enhanced Skills={{ $high_range_beg }}-{{ $high_range_end }}</span>
      </div>

      <div class="p4-bars">
        <h3 class="p4-pq mt-2 mb-4">PROFESSIONALISM QUOTIENT <span>{{ $self_pq }}</span></h3>
        <div class="chart" id="professional-quotient">
        </div>
        
        <div class="cog-text mt-0">
          <h3 class="p4-cq mt-2">CONGNITIVE QUOTIENT <span>{{ $self_cq }}</span></h3>
          <h5 class="p4-cq-desc">Focused-Thinking <span class="p4-desc-span pt-2">{{ $self_focused_thinking }}</span> <span>
              <p>clear thinking; clear thoughts; ability to concentrate</p>
            </span></h5>
          <h5 class="p4-cq-desc">Problem-Solving <span class="p4-desc-span pt-2">{{ $self_problem_solving }}</span> <span>
              <p>ability to find solutions to problems; orderly thinking </p>
            </span></h5>
          <h5 class="p4-cq-desc">Critical-Thinking <span class="p4-desc-span pt-2">{{  $self_critical_thinking }}</span> <span>
              <p>disciplined in conceptualizing, applying, analyzing information</p>
            </span></h5>
          <h5 class="p4-cq-desc">Decision-Making <span class="p4-desc-span">{{ $self_decision_making }}</span> <span>
              <p>selection of the best course of action among several possibilities</p>
            </span></h5>
          <h5 class="p4-cq-desc">Explanation <span class="p4-desc-span">{{ $self_explanation }}</span>
            <span>
              <p>statements which clarify the cause, context, and consequence of facts</p>
            </span>
          </h5>
        </div>
        <div class="chart" id="congnitive-quotient">
        </div>

        <div class="em-text mt-2 mb-0">
          <h3 class="p4-eq">EMOTIONAL QUOTIENT<span>{{ $self_eq }}</span></h3>
          <h5 class="p4-cq-desc">Self Awareness <span class="p4-desc-span pt-2">{{ $self_self_awareness }}</span> <span>
              <p style="font-size:12px;">capacity for introspection; ability to recognize oneself as an individual</p>
            </span></h5>
          <h5 class="p4-cq-desc">Self-Regulation <span class="p4-desc-span pt-2">{{ $self_self_regulation }}</span> <span>
              <p>capacity to control impulses; ability to stop/start doing something </p>
            </span></h5>
          <h5 class="p4-cq-desc">Interpersonal Relationships <span class="p4-desc-span pt-1">{{ $self_interpersonal_relationships }}</span> <span>
              <p>a strong, deep, or close association with people; enduring relationships</p>
            </span></h5>
          <h5 class="p4-cq-desc mt-0">Empathy <span class="p4-desc-span">{{ $self_empathy }}</span> <span>
              <p>the capacity to share or recognize emotions experienced by another</p>
            </span></h5>
          <h5 class="p4-cq-desc">Motivation <span class="p4-desc-span">{{ $self_motivation }}</span><span>
              <p>prompts a person to act or behave in a certain manner when necessary</p>
            </span></h5>
        </div>
        <div class="chart" id="emotional-quotient">
        </div>

        <div class="ld-text mt-2 mb-0">
          <h3 class="p4-lq">LEADERSHIP QUOTIENT<span>{{ $self_lq }}</span></h3>
          <h5 class="p4-cq-desc">Embodiment <span class="p4-desc-span pt-2">{{$self_embodiment}}</span> <span>
              <p>the perfect representative or example of a quality, idea, etc.</p>
            </span></h5>
          <h5 class="p4-cq-desc">Inspiration <span class="p4-desc-span pt-2">{{$self_inspiration}}</span> <span>
              <p>something that makes someone want to do something </p>
            </span></h5>
          <h5 class="p4-cq-desc">Excellence <span class="p4-desc-span pt-1">{{$self_excellence}}</span> <span>
              <p>a talent/quality which is unusually good; surpasses ordinary standards</p>
            </span></h5>
          <h5 class="p4-cq-desc">Empowerment <span class="p4-desc-span">{{$self_empowerment}}</span> <span>
              <p>to give power/authority to someone; authorize</p>
            </span></h5>
          <h5 class="p4-cq-desc">Recognition <span class="p4-desc-span">{{$self_recognition}}</span>
            <span>
              <p>acknowledgment of someone as valid; entitled to consideration 1</p>
            </span>
          </h5>
        </div>
        <div class="chart" id="leadership-quotient">
        </div>

        <h3 class="p4-pq my-3">BETTERMENT <span>{{ $self_bt }}</span></h3>
        <div class="chart" id="betterment-quotient">
        </div>
      </div>
      
      <div class="p4-heading-bottom">
        <span>Area for Enrichment={{ $low_range_beg }}-{{ $low_range_end }}</span>
        <span>Effective Functioning={{$med_range_beg }}-{{ $med_range_end }}</span>
        <span>Enhanced Skills={{ $high_range_beg }}-{{ $high_range_end }}</span>
      </div>
    </div>
  </section>