@extends('layouts.adminapp')




@section('content')


<div class="container d-flex justify-content-center mt-5">

    <div class="card" style="width: 18rem;">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->series}}">
        <div class="card-body">
            <h5 class="card-title">{{$comic->series}}</h5>
            <p class="card-text">{{$comic->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$comic->price}}</li>

        </ul>
    </div>

</div>



@endsection