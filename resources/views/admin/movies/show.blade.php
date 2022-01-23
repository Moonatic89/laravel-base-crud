@extends('layouts.app')

@section('content')


<div class="container d-flex justify-content-center mt-5">

    <div class="card" style="width: 18rem;">
        <img src="{{$movie->thumb}}" class="card-img-top" alt="{{$movie->title}}">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <p class="card-text">{{$movie->description}}</p>
        </div>
    </div>

</div>



@endsection