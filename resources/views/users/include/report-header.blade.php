<div class="row">
    <div class="col-2 offset-8 p2-left-top">
        <h4 class="report-header float-right">Name: {{ $profile->first_name }} {{ $profile->last_name }} <br> {{ date('M d, Y') }}</h4>
    </div>
    <div class="col-2">
        <img src="{{ asset('images/report/pqi360/logo-PQI.png') }}" width="130" height="55">
    </div>
</div>