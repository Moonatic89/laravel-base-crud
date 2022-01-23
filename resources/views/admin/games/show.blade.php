@extends('layouts.app')

@section('content')


<div class="container d-flex justify-content-center mt-5">

    <div class="card" style="width: 18rem;">
        <img src="{{$game->thumb}}" class="card-img-top" alt="{{$game->title}}">
        <div class="card-body">
            <h5 class="card-title">{{$game->title}}</h5>
            <p class="card-text">{{$game->description}}</p>
        </div>
    </div>

</div>



@endsection