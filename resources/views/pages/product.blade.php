@extends('layouts.default')

@section('name','Product List')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-4 pl-3 pr-3">
        <h5 class="d-block font-weight-bold text-brown mt-2">Coffee</h5>
        <a class="btn btn-warning text-white d-block" href="<?php echo url('/product/add')?>">Add Coffee</a>
    </div>
    <hr>
    <div>
        @foreach ($product_list as $product)
            <div class="d-flex align-items-center justify-content-between text-brown pl-3 pr-3 mt-2 mb-2">
                <div class="d-flex align-items-center">
                    <h4 class="font-weight-bold pl-3">{{$product->product_name}}</h4>
                </div>
                <div class="d-flex align-items-center">
                    <div class="font-weight-bold mr-3">
                        Rp. {{$product->price}}
                    </div>
                    <div>
                        <a class="btn btn-success text-white d-block m-1" href="{{url('/product/edit',$product->id)}}">Edit Coffee</a>
                    <form action="{{url('/product',$product->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-danger text-white d-block m-1" type="submit">Delete Coffee</button>

                    </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection