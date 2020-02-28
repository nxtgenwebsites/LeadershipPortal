<section id="page-13">
    <div class="container page-attr p13-main-grid py-5">
			<div class="pg-logo">
				<h4 class="report-header">Name: {{ $profile->first_name }} {{ $profile->last_name }} <span class="fmt-date">{{ date('M d, Y') }}</span></h4>
				<img class="img-fluid" src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130"
					height="55">
      </div>

      <div class="sub-linear">
        <h1 class="display-5 text-gray">Subscale Linear Gap Analysis – Self vs. 360
        </h1>
        <h3 class="text-gray">PQ-i Subscales </h3>
        <h5 class="text-gray">The linear gap analysis below is based on the subscales within the Cognitive, Emotional
          and
          Leadership scales of the PQ-i. The graph below represents the gaps between your self assessment and
          the rater groups within each of the subscales.</h5>
      </div>

      <div class="tb-subscales my-4">
        <div class="labels">
          <h3 class="cognitive h4 rot-labels">COGNITIVE</h3>
          <h3 class="emotional h4 rot-labels">EMOTIONAL</h3>
          <h3 class="leadership h4 rot-labels">LEADERSHIP</h3>
        </div>

        <div class="pqi-subscales">
          <table class="table table-bordered">
						<thead>
              <tr>
                <th style="width: 10px">Subscales</th>
                <th style="width: 50px"></th>
                <th style="width: 10px">Self</th>
                <th style="width: 10px">Manager</th>
                <th style="width: 10px">Peer</th>
                <th style="width: 10px">Direct Report</th>
                <th style="width: 10px">Other</th>
              </tr>
            </thead>
            <tbody>
              <tr class="no-raters">
				   			<td># of Raters</td>
				   			<td></td>
				   			<td>1</td>
				   			<td>{{ $profile->mgr_ttl }}</td>
				   			<td>{{ $profile->peer_ttl }}</td>
				   			<td>{{ $profile->dir_ttl }}</td>
				   			<td>{{ $profile->oth_ttl }}</td>
				   		</tr>
							 <tr>
				   			<td class="text-cognitive">Focused-Thinking </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->focused_thinking) ? $selfSummary->focused_thinking : 0  }}</td>
				   			<td>{{ isset($managersAvg->FT) ? $managersAvg->FT : 0 }}</td>
				   			<td>{{ isset($peersAvg->FT) ? $peersAvg->FT : 0  }}</td>
				   			<td>{{ isset($directsAvg->FT) ? $directsAvg->FT : 0  }}</td>
				   			<td>{{ isset($othersAvg->FT) ? $othersAvg->FT : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td class="text-cognitive">Problem-Solving </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->problem_solving) ? $selfSummary->problem_solving : 0  }}</td>
				   			<td>{{ isset($managersAvg->PS) ? $managersAvg->PS : 0 }}</td>
				   			<td>{{ isset($peersAvg->PS) ? $peersAvg->PS : 0  }}</td>
				   			<td>{{ isset($directsAvg->PS) ? $directsAvg->PS : 0  }}</td>
				   			<td>{{ isset($othersAvg->PS) ? $othersAvg->PS : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td class="text-cognitive">Critical-Thinking</td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->critical_thinking) ? $selfSummary->critical_thinking : 0  }}</td>
				   			<td>{{ isset($managersAvg->CT) ? $managersAvg->CT : 0 }}</td>
				   			<td>{{ isset($peersAvg->CT) ? $peersAvg->CT : 0  }}</td>
				   			<td>{{ isset($directsAvg->CT) ? $directsAvg->CT : 0  }}</td>
				   			<td>{{ isset($othersAvg->CT) ? $othersAvg->CT : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td class="text-cognitive">Decision-Making </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->decision_making) ? $selfSummary->decision_making : 0  }}</td>
				   			<td>{{ isset($managersAvg->DM) ? $managersAvg->DM : 0 }}</td>
				   			<td>{{ isset($peersAvg->DM) ? $peersAvg->DM : 0  }}</td>
				   			<td>{{ isset($directsAvg->DM) ? $directsAvg->DM : 0  }}</td>
				   			<td>{{ isset($othersAvg->DM) ? $othersAvg->DM : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td class="text-cognitive">Explanation </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->explanation) ? $selfSummary->explanation : 0  }}</td>
				   			<td>{{ isset($managersAvg->EX) ? $managersAvg->EX : 0 }}</td>
				   			<td>{{ isset($peersAvg->EX) ? $peersAvg->EX : 0  }}</td>
				   			<td>{{ isset($directsAvg->EX) ? $directsAvg->EX : 0  }}</td>
				   			<td>{{ isset($othersAvg->EX) ? $othersAvg->EX : 0  }}</td>
				   		</tr>
				   		<tr class="bg-gray">
				   			<td class="text-emotional">Self-Awareness </td>
				   			<td></td>
				   			<td class="text-dark">{{ isset($selfSummary->self_awareness) ? $selfSummary->self_awareness : 0  }}</td>
				   			<td class="text-dark">{{ isset($managersAvg->SA) ? $managersAvg->SA : 0 }}</td>
				   			<td class="text-dark">{{ isset($peersAvg->SA) ? $peersAvg->SA : 0  }}</td>
				   			<td class="text-dark">{{ isset($directsAvg->SA) ? $directsAvg->SA : 0  }}</td>
				   			<td class="text-dark">{{ isset($othersAvg->SA) ? $othersAvg->SA : 0  }}</td>
				   		</tr>
				   		<tr class="bg-gray">
				   			<td class="text-emotional">Self-Regulation </td>
				   			<td></td>
				   			<td class="text-dark">{{ isset($selfSummary->self_regulation) ? $selfSummary->self_regulation : 0  }}</td>
				   			<td class="text-dark">{{ isset($managersAvg->SR) ? $managersAvg->SR : 0 }}</td>
				   			<td class="text-dark">{{ isset($peersAvg->SR) ? $peersAvg->SR : 0  }}</td>
				   			<td class="text-dark">{{ isset($directsAvg->SR) ? $directsAvg->SR : 0  }}</td>
				   			<td class="text-dark">{{ isset($othersAvg->SR) ? $othersAvg->SR : 0  }}</td>
				   		</tr>
				   		<tr class="bg-gray">
				   			<td class="text-emotional">Interpersonal Relationships </td>
				   			<td></td>
				   			<td class="text-dark">{{ isset($selfSummary->interpersonal_relationships) ? $selfSummary->interpersonal_relationships : 0  }}</td>
				   			<td class="text-dark">{{ isset($managersAvg->IR) ? $managersAvg->IR : 0 }}</td>
				   			<td class="text-dark">{{ isset($peersAvg->IR) ? $peersAvg->IR : 0  }}</td>
				   			<td class="text-dark">{{ isset($directsAvg->IR) ? $directsAvg->IR : 0  }}</td>
				   			<td class="text-dark">{{ isset($othersAvg->IR) ? $othersAvg->IR : 0  }}</td>
				   		</tr>
				   		<tr class="bg-gray">
				   			<td class="text-emotional">Empathy </td>
				   			<td></td>
				   			<td class="text-dark">{{ isset($selfSummary->empathy) ? $selfSummary->empathy : 0  }}</td>
				   			<td class="text-dark">{{ isset($managersAvg->EM) ? $managersAvg->EM : 0 }}</td>
				   			<td class="text-dark">{{ isset($peersAvg->EM) ? $peersAvg->EM : 0  }}</td>
				   			<td class="text-dark">{{ isset($directsAvg->EM) ? $directsAvg->EM : 0  }}</td>
				   			<td class="text-dark">{{ isset($othersAvg->EM) ? $othersAvg->EM : 0  }}</td>
				   		</tr>
				   		<tr class="bg-gray">
				   			<td class="text-emotional">Motivation</td>
				   			<td></td>
				   			<td class="text-dark">{{ isset($selfSummary->motivation) ? $selfSummary->motivation : 0  }}</td>
				   			<td class="text-dark">{{ isset($managersAvg->MO) ? $managersAvg->MO : 0 }}</td>
				   			<td class="text-dark">{{ isset($peersAvg->MO) ? $peersAvg->MO : 0  }}</td>
				   			<td class="text-dark">{{ isset($directsAvg->MO) ? $directsAvg->MO : 0  }}</td>
				   			<td class="text-dark">{{ isset($othersAvg->MO) ? $othersAvg->MO : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td class="text-leadership">Embodiment </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->embodiment) ? $selfSummary->embodiment : 0  }}</td>
				   			<td>{{ isset($managersAvg->EMB) ? $managersAvg->EMB : 0 }}</td>
				   			<td>{{ isset($peersAvg->EMB) ? $peersAvg->EMB : 0  }}</td>
				   			<td>{{ isset($directsAvg->EMB) ? $directsAvg->EMB : 0  }}</td>
				   			<td>{{ isset($othersAvg->EMB) ? $othersAvg->EMB : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td class="text-leadership">Inspiration </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->inspiration) ? $selfSummary->inspiration : 0  }}</td>
				   			<td>{{ isset($managersAvg->INP) ? $managersAvg->INP : 0 }}</td>
				   			<td>{{ isset($peersAvg->INP) ? $peersAvg->INP : 0  }}</td>
				   			<td>{{ isset($directsAvg->INP) ? $directsAvg->INP : 0  }}</td>
				   			<td>{{ isset($othersAvg->INP) ? $othersAvg->INP : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td class="text-leadership">Excellence</td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->excellence) ? $selfSummary->excellence : 0  }}</td>
				   			<td>{{ isset($managersAvg->EXC) ? $managersAvg->EXC : 0 }}</td>
				   			<td>{{ isset($peersAvg->EXC) ? $peersAvg->EXC : 0  }}</td>
				   			<td>{{ isset($directsAvg->EXC) ? $directsAvg->EXC : 0  }}</td>
				   			<td>{{ isset($othersAvg->EXC) ? $othersAvg->EXC : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td class="text-leadership">Empowerment </td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->excellence) ? $selfSummary->excellence : 0  }}</td>
				   			<td>{{ isset($managersAvg->EMP) ? $managersAvg->EMP : 0 }}</td>
				   			<td>{{ isset($peersAvg->EMP) ? $peersAvg->EMP : 0  }}</td>
				   			<td>{{ isset($directsAvg->EMP) ? $directsAvg->EMP : 0  }}</td>
				   			<td>{{ isset($othersAvg->EMP) ? $othersAvg->EMP : 0  }}</td>
				   		</tr>
				   		<tr>
				   			<td class="text-leadership">Recognition</td>
				   			<td></td>
				   			<td>{{ isset($selfSummary->recognition) ? $selfSummary->recognition : 0  }}</td>
				   			<td>{{ isset($managersAvg->RO) ? $managersAvg->RO : 0 }}</td>
				   			<td>{{ isset($peersAvg->RO) ? $peersAvg->RO : 0  }}</td>
				   			<td>{{ isset($directsAvg->RO) ? $directsAvg->RO : 0  }}</td>
				   			<td>{{ isset($othersAvg->RO) ? $othersAvg->RO : 0  }}</td>
				   		</tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>