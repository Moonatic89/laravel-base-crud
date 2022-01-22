@extends('layouts.app')

@section('content')


<div class="container mt-5">

    <a name="create" id="create" class="btn btn-primary text-center" href="{{route('adminmovies')}}" role="button">Click
        here to enter Admin section</a>



    <div class="row row-cols-4 mt-3">
        @foreach($movies as $movie)

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{$movie->thumb}}" class="card-img-top w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{$movie->title}}</h5>
                    <p class="card-text">
                        {{\Illuminate\Support\Str::limit($movie->description, 40, $end='...')}}
                    </p>

                    <a href="{{route('admin.movies.show', $movie->id)}}" class="btn btn-primary">View</a>
                </div>
            </div>


        </div>




        @endforeach
    </div>

</div>

@endsection