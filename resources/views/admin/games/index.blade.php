@extends('layouts.app')

@section('content')


<div class="container mt-5">

    <a name="create" id="create" class="btn btn-primary text-center" href="{{route('admingames')}}" role="button">Click
        here to enter Admin section</a>


    <div class="row row-cols-4 mt-3">
        @foreach($games as $game)

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{$game->thumb}}" class="card-img-top w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{$game->title}}</h5>
                    <p class="card-text">
                        {{\Illuminate\Support\Str::limit($game->description, 40, $end='...')}}
                    </p>

                    <a href="{{route('admin.games.show', $game->id)}}" class="btn btn-primary">View</a>
                </div>
            </div>


        </div>




        @endforeach
    </div>


</div>

@endsection