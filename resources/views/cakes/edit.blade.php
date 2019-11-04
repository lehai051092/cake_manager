@extends('layouts.app')
@section('content')
    <form enctype="multipart/form-data" action="{{route("cakes.update", $cake->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name Cake</label>
            <input type="text" class="form-control" name="nameCake" value="{{$cake->nameCake}}">
            @if($errors->has('nameCake'))
                <p class="text-danger">{{$errors->first('nameCake')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Old Image</label>
            <td><img src="{{asset('storage/'.$cake->imageCake)}}" width="50" height="50"></td>
            <label>Input Image</label>
            <input type="file" class="form-control-file" name="imageCake">
            @if($errors->has('imageCake'))
                <p class="text-danger">{{$errors->first('imageCake')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="priceCake" value="{{$cake->priceCake}}">
            @if($errors->has('priceCake'))
                <p class="text-danger">{{$errors->first('imageCake')}}</p>
            @endif
        </div>
        <div class="form-group">
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
