@extends('FrontEnd.Master')
@section('content')
<div class="card">
  <div class="card-header">Blog Page</div>
  <div class="card-body">
      
      <form action="{{ url('bloc') }}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="Title" id="Title" class="form-control"></br>

        <label>Description</label></br>
        <input type="text" name="Description" id="Description" class="form-control"></br>

        <label>Picture</label></br>
        <input type="text" name="Picture" id="Picture" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection
