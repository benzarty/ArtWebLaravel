@extends('FrontEnd.Master')


@section('content')
<hr class="border-light container-m--x my-4">
                        <h6 class="text-muted small font-weight-bold py-3 my-4">Borderless table</h6>

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Lieu Event</th>
                                    <th>Event  Name</th>
                                    <th>Date Ajout</th>
                                    <th>Date Fin</th>
                                    <th>Velo _id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <th scope="row">{{$event ->id}}</th>
                                    <td>{{ $event ->place }}</td>
                                    <td>{{ $event ->nameevent }}</td>
                                    <td>{{$event ->dateajout}}</td>
                                    <td>{{$event ->datefin}}</td>
                                    <td>{{$event ->velo_id}}</td>

                                </tr>
                               @endforeach
                              
                            </tbody>
                        </table>

@endsection