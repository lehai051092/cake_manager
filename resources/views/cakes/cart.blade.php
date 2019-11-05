@extends('layouts.app')
@section('content')
    <div class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Product</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Price</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantity</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Remove</div>
                                </th>
                            </tr>
                            </thead>
                            @if($cart)
                            @foreach($cart->products as $item)
                                <tbody>
                                <tr>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">
                                            <img src="{{asset("storage/" . $item['item']->imageCake)}}" alt=""
                                                 width="70" class="img-fluid rounded shadow-sm">
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h5 class="mb-0"><a href="#"
                                                                    class="text-dark d-inline-block align-middle">{{$item['item']->nameCake}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="border-0 align-middle"><strong>{{$item['item']->priceCake}}</strong></td>
                                    <td class="border-0 align-middle">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#">-</a>
                                            </li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">{{$item['itemQuantity']}}<span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">+</a>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="border-0 align-middle"><a href="#" class="text-dark"><i
                                                class="fa fa-trash"></i>DELETE</a></td>
                                </tr>

                                </tbody>
                            @endforeach
                            <tr>
                                <td></td>
                                <td>Total Price</td>
                                    <td >
                                        <a class="page-link" href="#">{{$cart->totalPrice}}<span
                                                class="sr-only">(current)</span></a>
                                    </td>
                            </tr>
                            @endif
                        </table>
                    </div>
                    <!-- End -->
                </div>
            </div>
@endsection
