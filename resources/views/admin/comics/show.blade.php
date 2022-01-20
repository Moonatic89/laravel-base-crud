@extends('layouts.adminapp')




@section('content')


<div class="container">
    <div class="issue text-center">

        <h2>{{$comic->series}}</h2>




        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active pill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled pill</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Body</p>
            </div>
        </div>



    </div>

</div>


@endsection