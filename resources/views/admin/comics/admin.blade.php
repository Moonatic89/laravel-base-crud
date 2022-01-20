@extends('layouts.app')


@section('content')

<div class="heading d-flex justify-content-between container">
    <h1>Comics Table</h1>
    <a class="btn btn-primary" href="{{route('admin.comics.create')}}" role="button">Create</a>
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
            @foreach($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td class="bg-image" style="background-image: url({{$comic->thumb}});
            height: 20px;">
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.comics.show', $comic->id)}}">View Comic</a>

                    <a class="btn btn-secondary" href="{{route('admin.comics.edit', $comic->id)}}">Edit Comic</a>
                    <!-- I have to implement this -->

                    <form action="{{route('admin.comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete Comic</button>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection