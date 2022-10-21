@extends('FrontEnd.Master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show accessoire</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('accessoires.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nom:</strong>
                {{ $accessoire->nom}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>prix supplementaire:</strong>
                {{ $accessoire->prix_sup }}
            </div>
        </div>
    </div>
@endsection
