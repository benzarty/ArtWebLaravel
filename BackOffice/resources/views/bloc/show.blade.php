@extends('FrontEnd.Master')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Title : {{ $bloc->Title }}</h5>
        <h5 class="card-title">Description : {{ $bloc->Description }}</h5>
        <h5 class="card-title">Picture : {{ $bloc->Picture }}</h5>
  </div>
      
    </hr>
  
  </div>
@endsection
