@extends('layouts.app')


@section('content')

<div class="heading container d-flex align-items-center">
    <h1>Games Table</h1>
    <a class=" badge rounded-pill bg-info text-dark" href="{{route('admin.games.create')}}" role="button"><span>New
            Game</span></a>
</div>


@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
            <tr>
                <td scope="row">{{$game->id}}</td>
                <td>{{$game->title}}</td>
                <td class="bg-image" style="background-image: url({{$game->thumb}});
            height: 20px;">
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.games.show', $game->id)}}">View game</a>

                    <a class="btn btn-secondary" href="{{route('admin.games.edit', $game->id)}}">Edit game</a>
                    <!-- I have to implement this -->





                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#delete{{$game->id}}">
                        <i class="fas fa-trash"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="delete{{$game->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-{{$game->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete game {{$game->title}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Delete is irreversible. Are you sure?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('admin.games.destroy', $game->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection