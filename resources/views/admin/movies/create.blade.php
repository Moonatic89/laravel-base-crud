@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add a new Game!</h1>

    <form action="{{route('admin.movies.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Movie Name</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Type here Movie's name"
                aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Here goes new Game name.</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Game Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Insert here Thumb Url"
                aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Here goes new Movie url.</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Insert here Movie's description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>

    </form>
</div>

@endsection