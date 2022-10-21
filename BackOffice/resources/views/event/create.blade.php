@extends('FrontEnd.Master')
@section('content')
<div class="card">
  <div class="card-header">Event Page</div>
  <div class="card-body">
      
      <form action="{{ url('event') }}" method="post">
        {!! csrf_field() !!}
        <label>Place</label></br>
        <input type="text" name="place" id="place" class="form-control"></br>

        <label>Name</label></br>
        <input type="text" name="nameevent" id="nameevent" class="form-control"></br>

        <label>DateAjout</label></br>
        <input type="text" name="dateajout" id="dateajout" class="form-control"></br>

        <label>DateFin</label></br>
        <input type="text" name="datefin" id="datefin" class="form-control"></br>

        <label>velo_id</label></br>
        <input type="text" name="velo_id" id="velo_id" class="form-control"></br>

       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection
