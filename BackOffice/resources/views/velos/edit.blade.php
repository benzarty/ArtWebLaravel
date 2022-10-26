@extends('FrontEnd.Master')

@section('content')
{{-- <div class="card">
    <div class="card-header">edit velo </div>
    <div class="card-body">
        <form action="{{ route('velos.update',$velo) }}" method="POST">
            @csrf
            @method('PUT')


          <label>Type</label></br>
          <input type="text" name="type" class="form-control" placeholder="Type" value="{{ old('type', $velo->type) }}">

          <label>Marque</label></br>
          <input type="text" name="marque"  class="form-control" placeholder="marque"value="{{ old('marque', $velo->marque) }}"></br>

          <label>Description</label></br>
          <input type="text" name="description"  class="form-control" placeholder="description"value="{{ old('description', $velo->description) }}"></br>
          <label>Tarif</label></br>
          <input type="text" name="tarif" id="tarif" value="{{ old('tarif', $velo->tarif) }}" class="form-control"></br>
          {{-- <label>image</label></br>
          <input type="file" class="form-control" name="image"  id="image" value="{{ old('image', $velo->image) }}"/> --}}

          {{-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>

    </div>
  </div>
@endsection --}}

    <form action="{{ route('velos.update',$velo) }}" method="POST">
        @csrf
        @method('PUT')
        @include('velos.partials.accessoires')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <input type="text" name="type" class="form-control" placeholder="Type" value="{{ old('type', $velo->type) }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>marque:</strong>
                    <input type="text" name="marque"  class="form-control" placeholder="marque" value="{{ old('marque', $velo->marque) }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>couleur:</strong>
                    <textarea class="form-control" style="height:150px" name="couleur" placeholder="couleur" value="{{ old('couleur', $velo->couleur) }}"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descrpiton" value="{{ old('description', $velo->description) }}"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tarif:</strong>
                    <textarea class="form-control" style="height:150px" name="tarif" placeholder="tarif" value="{{ old('tarif', $velo->tarif) }}"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
