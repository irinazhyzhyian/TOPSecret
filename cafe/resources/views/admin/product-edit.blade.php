@extends('layouts.master')

@section('title')
    Edit Product
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h1>EDIT Product</h1>
                  </div>
                  <div class="card-body">
                  <form action="/product-update/{{ $products->id }}" method="POST">
                   {{ csrf_field() }}
                   {{ method_field('PUT') }} 
                   <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Product name:</label>
                        <input type="text" name='name' required class="form-control" id="recipient-name" value='{{$products->name}}'>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Price:</label>
                        <input type="text" name='price' required class="form-control" id="recipient-name" value='{{$products->price}}'>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Caloric contene:</label>
                        <input type="text" name='caloric_content' class="form-control" id="recipient-name" value='{{$products->caloric_content}}'>
                    </div>                  
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/products" class='btn btn-danger'>Cancel</a>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection