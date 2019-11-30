@extends('layouts.default')

@section('name','Home Page')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-4 pl-3 pr-3">
        <h5 class="d-block font-weight-bold text-brown mt-2">Coffee List</h5>
    </div>
    <hr>
    <div>
        @foreach ($product_list as $product)
            <div class="d-flex align-items-center justify-content-between text-brown pl-3 pr-3 mt-2 mb-2">
                <div class="d-flex align-items-center">
                <h4 class="font-weight-bold pl-3">{{$product->product_name}}</h4>
                </div>
                <div class="font-weight-bold">
                    Rp. {{$product->price}}
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection