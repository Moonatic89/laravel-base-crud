@extends('layouts.app')


@section ('content')

<div class="container mt-5">

    <a name="create" id="create" class="btn btn-primary text-center" href="{{route('adminpage')}}" role="button">Click
        here to enter Admin section</a>

    <!-- <a name="create" id="create" class="btn btn-primary text-center" href="{{route('admin.comics.create')}}" role="button">Click
        here to add a new Comic</a> -->


    <div class="row row-cols-4 mt-3">
        @foreach($comics as $comic)

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{$comic->title}}</h5>
                    <p class="card-text">
                        {{\Illuminate\Support\Str::limit($comic->description, 40, $end='...')}}
                    </p>

                    <a href="{{route('admin.comics.show', $comic->id)}}" class="btn btn-primary">View</a>
                </div>
            </div>


        </div>




        @endforeach
    </div>
</div>

@endsection