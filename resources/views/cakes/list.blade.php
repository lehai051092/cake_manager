@extends('layouts.app')
@section('content')

    <table class="table table-sm table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cakes as $key => $cake)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$cake->nameCake}}</td>
                <td><img src="{{asset('storage/'.$cake->imageCake)}}" width="50" height="50"></td>
                <td>{{$cake->priceCake . " VND"}}</td>
                <td><a href="{{route('cakes.edit',$cake->id)}}">EDIT</a></td>
                <td><a href="{{route('cakes.delete',$cake->id)}}"
                       onclick="return confirm('Are you delete {{$cake->nameCake}}')">DELETE</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{$cakes->links()}}
    </div>
@endsection
