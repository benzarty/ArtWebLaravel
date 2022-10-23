@extends('FrontEnd.Master')
@section('content')

<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">

        <form action="{{ url('event/' .$event->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$event->id}}" id="id" />
          <label>Place</label></br>
          <input type="text" name="place" id="place" value="{{$event->place}}" class="form-control"></br>

          <label>Name</label></br>
          <input type="text" name="nameevent" id="nameevent" value="{{$event->nameevent}}" class="form-control"></br>

          <label>DateAjout</label></br>
          <input type="text" name="dateajout" id="dateajout" value="{{$event->dateajout}}" class="form-control"></br>
          <label>DateFin</label></br>
          <input type="text" name="datefin" id="datefin" value="{{$event->datefin}}" class="form-control"></br>
          <label>Velo</label></br>
          <input type="text" name="velo_id" id="velo_id" value="{{$event->velo_id}}" class="form-control"></br>

          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>

    </div>
  </div>
@endsection
