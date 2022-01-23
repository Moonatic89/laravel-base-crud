@extends('layouts.app')


@section('content')

<div class="container">
    <h1>Modifica Movie</h1>

    @include('partials.errors')

    <form action="{{route('admin.movies.update', $movie->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                placeholder="Type your title here" aria-describedby="titleHelper" value="{{$movie->title}}">
            <small id="titleHelper" class="text-muted">Type a title for your movie. max: 250</small>
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">movie Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('title') is-invalid @enderror"
                placeholder="Insert here Thumb Url" aria-describedby="titleHelper" value="{{$movie->thumb}}">
            <small id="titleHelper" class="text-muted">Here goes new movie Thumbnail url.</small>
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                id="description" rows="3">
            {{$movie->description}}
            </textarea>
            @error('description')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>

    </form>
</div>

@endsection