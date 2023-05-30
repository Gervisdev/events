@extends('Layouts.app')

@section('title', 'liste des évenements')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card rounded-0 shadow">
                <div class="card-header">
                    <h3>liste des évenements</h3>
                </div>
                <div class="card-body">
                    <table class=" table table-bordered">
                     <thead>
                        <tr>
                            <th>#</th>
                            <th>titre</th>
                            <th>descritpion</th>
                            <th>date  début</th>
                            <th>date fin</th>
                            <th>prix</th>
                            <th>Date de création</th>
                            <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->start_date }}</td>
                            <td>{{ $event->end_date }}</td>
                            <td>{{ $event->price }}</td>
                            <td>{{ $event->created_at -> diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('edit_event',$event->id) }}" class="btn btn-success btn-sm">Modifier</a>
                                <a href="{{ route('destroy',$event->id) }}" class="btn btn-danger btn-sm" >Supprimer</a>
                               
                            </td>

                        </tr>
                        @endforeach
                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection