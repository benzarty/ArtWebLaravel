@extends('FrontEnd.Master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> velo </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('velos.create') }}"> Create New velo</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>type</th>
            <th>marque</th>
            <th>couleur</th>
            <th>descrpiton</th>
            <th>tarif</th>
            <th>image </th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($velos as $velo)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $velo->type}}</td>
            <td>{{ $velo->marque }}</td>
            <td>{{ $velo->couleur }}</td>
            <td>{{ $velo->description }}</td>
            <td>{{ $velo->tarif}}</td>
            <td>{{$velo->image}}</td>
            <td>
                <form action="{{ route('velos.destroy',$velo->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('velos.show',$velo->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('velos.edit',$velo->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    @endsection
