@extends('layouts.app')


@section ('content')

<div class="container mt-5">
    <div class="row row-cols-4">
        @foreach($comics as $comic)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{$comic->title}}</h5>
                    <p class="card-text">
                        {{\Illuminate\Support\Str::limit($comic->description, 40, $end='...')}}
                    </p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>


        </div>




        @endforeach
    </div>
</div>

@endsection