@extends('FrontEnd.Master')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Place : {{ $event->place }}</h5>
        <h5 class="card-title">nameevent : {{ $event->nameevent }}</h5>
        <h5 class="card-title">dateajout : {{ $event->dateajout }}</h5>
        <h5 class="card-title">datefin : {{ $event->datefin }}</h5>
        <h5 class="card-title">velo_id : {{ $event->velo_id }}</h5>
  </div>
      
    </hr>
  
  </div>
@endsection
