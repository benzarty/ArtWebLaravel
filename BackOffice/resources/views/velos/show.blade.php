@extends('FrontEnd.Master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show velo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('velos.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type:</strong>
                {{ $velo->type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $velo->descrpiton }}
            </div>
        </div>
    </div>
@endsection
