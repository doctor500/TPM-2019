@extends('layouts.default')


@section('name','Add New Product')

@section('content')
<div class="container col-md-6">
    <div class="d-flex align-items-center justify-content-between mt-4 pl-3 pr-3">
        <h4 class="d-block font-weight-bold text-brown mt-2">Add Coffee</h4>
    </div>
    <hr>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
    @endif
    <form action="{{url('product')}}" method="POST" class="form-group"> 
        @csrf
        <div class="input-group p-2">
        <input type="text" class="form-control" placeholder="Product Name" name="product_name" value="{{old('product_name')}}">
        </div>
        <div class="input-group p-2">
            <input type="text" class="form-control" placeholder="Price" name="price" value="{{old('price')}}">
        </div>
        <div class="p-2">
            <button class="btn btn-warning text-white d-block" type="submit">Add Coffee</button>
        </div>
    </form>
</div>
@endsection