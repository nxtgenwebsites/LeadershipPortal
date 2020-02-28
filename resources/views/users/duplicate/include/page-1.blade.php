
<section id="page-1">
    <div class="container page-attr py-3 p1-main-grid">
      <div class="top text-center">
        <img class="img-fluid mb-5 mx-auto" src="{{ asset('images/report/pqi360/logo-PQI.png') }}"
          width="500" height="250">
        <h1 class="p1-pq display-3">PQ-i</h1>
        <h1 class="p1-360 display-3">360&deg;</h1>
        <h1 class="p1-feedback display-3">Feedback</h1>
      </div>
      <div class="bottom text-center">
        <p class="display-1 py-3 p1-report"><span class="p1-report-bdr">REPORT</span></p>
        <h2 class="p1-name">{{ $profile->first_name }} {{ $profile->last_name }}</h2>
        <p class="mb-0">
          <strong>Total Raters: {{ !empty($profile->raters_ttl) ? $profile->raters_ttl : '0' }}</strong>
        </p class>
        <div class="p1-summary mx-auto">
          <p>Managers: {{ !empty($profile->mgr_ttl) ? $profile->mgr_ttl : '0'  }}</p>
          <p>Peer(s): {{ !empty($profile->peer_ttl) ? $profile->peer_ttl : '0'  }}</p>
          <p>Direct Report: {{ !empty($profile->dir_ttl) ? $profile->dir_ttl : '0'  }}</p>
          <p>Others: {{ !empty($profile->oth_ttl) ? $profile->oth_ttl : '0'  }}</p>
        </div>
        <h3 class="text-center p1-date mt-3"><strong>{{ date('M d, Y') }}</strong></h3>
        <img class="img-fluid my-4" src="{{ asset('images/report/PIM-Welcome/PIM-Welcome.png') }}">
      </div>
    </div>
  </section>