@extends('FrontEnd.Master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> accessoire </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('accessoires.create') }}"> Create New accessoire</a>
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
            <th>nom</th>
            <th>prix_sup</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($accessoires as $accessoire)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $accessoire->nom}}</td>
            <td>{{ $accessoire->prix_sup}}</td>

            <td>
                <form action="{{ route('accessoires.destroy',$accessoire->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('accessoires.show',$accessoire->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('accessoires.edit',$accessoire->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $accessoires->links() !!}
    @endsection

    