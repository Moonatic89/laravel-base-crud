@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add a new Game!</h1>


    <!-- I HAVE TO FINISH THIS -->




    <form action="{{route('admin.games.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Game Name</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Type here Game's name"
                aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Here goes new game name.</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Game Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Insert here Thumb Url"
                aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Here goes new game url.</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Insert here Game's description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>

    </form>
</div>

@endsection