@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('product.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <br>
    <form action="{{route('product.update',$product->id)}}" method="post" role="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('company')?' has-error':''}}">
                    <strong>Company:</strong>
                    <input type="text" name="title" value="{{ $product->company }}" class="form-control" placeholder="title">
                    <span class="text-danger">{{$errors->first('company')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('price')?' has-error':''}}">
                    <strong>Price:</strong>
                    <input type="number" name="price" value="{{ $product->price }}" class="form-control" placeholder="price">
                    <span class="text-danger">{{$errors->first('price')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('Quantity')?' has-error':''}}">
                    <strong>Quantity:</strong>
                    <input type="number" name="count" value="{{ $product->Quantity }}" class="form-control" placeholder="count">
                    <span class="text-danger">{{$errors->first('Quantity')}}</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
