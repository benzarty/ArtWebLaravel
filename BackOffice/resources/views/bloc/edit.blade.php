@extends('FrontEnd.Master')
@section('content')

<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">
        
        <form action="{{ url('bloc/' .$bloc->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$bloc->id}}" id="id" />
          <label>Title</label></br>
          <input type="text" name="Title" id="Title" placeholder="{{$bloc->Title}}" class="form-control"></br>

          <label>Description</label></br>
          <input type="text" name="Description" id="Description" value="{{$bloc->Description}}" class="form-control"></br>

          <label>Picture</label></br>
          <input type="text" name="Picture" id="Picture" value="{{$bloc->Picture}}" class="form-control"></br>

          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
    
    </div>
  </div>
@endsection
