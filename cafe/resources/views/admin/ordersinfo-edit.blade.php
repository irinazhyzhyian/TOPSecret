@extends('layouts.master')

@section('title')
    Edit Order Info
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h1>EDIT Order Info</h1>
                  </div>
                  <div class="card-body">
                  <form action="/ordersinfo-update/{{ $ordersinfo->id }}" method="POST">
                   {{ csrf_field() }}
                   {{ method_field('PUT') }} 
                   <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Order Time:</label>
                        <input type="datetime-local" name='order_time' class="form-control" id="recipient-name" value="{{$ordersinfo->order_time}}">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Delivery Time:</label>
              <input type="datetime-local" name='delivery_time' class="form-control" id="recipient-name" value="{{$ordersinfo->delivery_time}}">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Address:</label>
              <input type="text" name='address' class="form-control" id="recipient-name" value="{{$ordersinfo->address}}">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Customer Name:</label>
              <input type="text" name='customer_name' class="form-control" id="recipient-name" value="{{$ordersinfo->customer_name}}">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Phone:</label>
              <input type="text" name='phone' class="form-control" id="recipient-name" min='10' max='10' value="{{$ordersinfo->phone}}">
            </div>                  
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/ordersinfo" class='btn btn-danger'>Cancel</a>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection