@extends('layouts.master')

@section('title')
<title>Meus Silos</title>
@endsection

@section('content')
<div class="section" id="index-banner" style="min-height: 520px;">
	<div class="container-fluid" style="padding: 0 2%;">
		
		<!-- Page Title -->
		<h4 class="header">
		  <i class="material-icons">dashboard</i>
		  Silos
		</h4>
		<!-- End of Page Title -->
		
		<div class="row">
			@foreach($silos as $silo)
		  <div class="col s12 m3">
		    <div class="card hoverable">
		    	<div class="card-image">
            <img src="images/silo-default.jpg">
            <span class="card-title"></span>
          </div>
		      <div class="card-action center">
		      	<a href="{{ route('silo.dashboard', ['channelId' => $silo->channel_id]) }}">{{ $silo->name }}</a>
		      </div>
		    </div>
		  </div>
		  @endforeach
	  </div>
	</div>
</div>
@endsection