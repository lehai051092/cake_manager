@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($cakes as $cake)
                <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('storage/'.$cake->imageCake)}}" class="card-img-top" alt="..." style="width: 286px;height: 300px">
                        <div class="card-body">
                            <h5 class="card-title">{{$cake->nameCake}}</h5>
                            <p>{{$cake->priceCake}}VNĐ </p>
                            <a href="{{route("carts.add", $cake->id)}}" class="btn btn-primary">Add To Cart</a>
                            <a href="{{route("cakes.detail", $cake->id)}}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
