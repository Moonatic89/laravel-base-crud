@extends('layouts.adminapp')

@section('content')
<div class="container">
    <h1>Add a new Comic!</h1>

    <form action="{{route('admin.comics.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Comic Name</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Type here Comic's name"
                aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Here goes new comic name.</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Comic Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Insert here Thumb Url"
                aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Here goes new comic url.</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Insert here Comic's description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>

    </form>
</div>

@endsection