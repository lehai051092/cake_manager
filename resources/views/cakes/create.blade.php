@extends('layouts.app')
@section('content')
    <form enctype="multipart/form-data" action="{{route("cakes.add")}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name Cake</label>
            <input type="text" class="form-control" name="nameCake">
            @if($errors->has('nameCake'))
                <p class="text-danger">{{$errors->first('nameCake')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Input Image</label>
            <input type="file" class="form-control-file" name="imageCake">
            @if($errors->has('imageCake'))
                <p class="text-danger">{{$errors->first('imageCake')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="priceCake">
            @if($errors->has('priceCake'))
                <p class="text-danger">{{$errors->first('priceCake')}}</p>
            @endif
        </div>
        <div class="form-group">
            <button type="submit">ADD</button>
        </div>
    </form>
@endsection
