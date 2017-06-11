@extends('layouts.master')

@section('title')
<title>Dashboard</title>
@endsection

@section('content')
<div class="section" id="index-banner">
  <div class="container-fluid" style="padding: 0 2%;">
    
    <!-- Page Title -->
    <h4 class="header">
      <i class="material-icons">dashboard</i>
      Dashboard <span style="font-size: 0.5em;"> > {{ $silo->name }}</span>
    </h4>
    <!-- End of Page Title -->
    
    <div class="row">
      <div class="col s12 m12">
        <div class="card-panel hoverable">
          <div class="card-content">
            <div id="temperatureChart"></div>
          </div>
        </div>
      </div>

      <div class="col s12 m12">
        <div class="card-panel hoverable">
          <div class="card-content">
            <div id="umidadeChart"></div>
          </div>
        </div>
      </div>

      <div class="col s12 m12">
        <div class="card-panel hoverable">
          <div class="card-content">
            <div id="gasChart"></div>
          </div>
        </div>
      </div>

      <div class="col s12 m12">
        <div class="card-panel hoverable">
          <div class="card-content">
            <div id="pressureChart"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection

@section('custom_scripts')
<script type="text/javascript">
	$(document).ready(function () {
		var channel = '{{ $channel }}';

		google.charts.load("current", {packages:["corechart"]});
		google.charts.setOnLoadCallback(drawChartTemp(channel));
		google.charts.setOnLoadCallback(drawChartUmidade(channel));
		google.charts.setOnLoadCallback(drawChartGas(channel));
		google.charts.setOnLoadCallback(drawChartPressure(channel));
	});
</script>
@endsection