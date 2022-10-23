 @extends('FrontEnd.Master')
@section('content')
<div class="card">
  <div class="card-header">velo</div>
  <div class="card-body">

    <form action="{{ route('velos.store') }}" method="POST">
        {!! csrf_field() !!}
        <label>Type</label></br>
        <input type="text" name="type" class="form-control" placeholder="Type">

        <label>Marque</label></br>
        <input type="text" name="marque" class="form-control" placeholder="marque">
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"placeholder="description"></br>

        <label>couleur</label></br>
        <input type="text" name="couleur" id="couleur" class="form-control" placeholder="couleur"></br>
        <label>Tarif</label></br>
        <input type="text" name="tarif" id="tarif" class="form-control"placeholder="tarif"></br>
        <label>image</label></br>
        <input type="file" class="form-control" name="image" />
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

  </div>
</div>
@endsection
