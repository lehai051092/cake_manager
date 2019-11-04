@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card-deck">
                <div class="card">
                    <img src="{{asset('storage/'.$cake->imageCake)}}" class="card-img-top" alt="..." style="width: 286px;height: 300px">
                    <div class="card-body">
                        <h5 class="card-title">{{$cake->nameCake}}</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
        </div>
    </div>
@endsection
