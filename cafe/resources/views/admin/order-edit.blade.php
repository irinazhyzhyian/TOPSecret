@extends('layouts.master')

@section('title')
    Edit Order
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h1>EDIT Order</h1>
                  </div>
                  <div class="card-body">
                  <form action="/order-update/{{ $orders->id }}" method="POST">
                   {{ csrf_field() }}
                   {{ method_field('PUT') }} 
                   <div class="form-group">
                        <label for="item_id" class="col-form-label">Menu Item:</label>
                        <select name="item_id" id='item_id' class="form-control">
                            <option value="{{$orders->menuitems->id}}" selected>{{$orders->menuitems->name}}</option>
                        @foreach($items as $i)
                            <option value="{{$i->id}}">{{$i->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product" class="col-form-label">Order Info:</label>
                        <select name="order_id" id='product_id' class="form-control">
                            <option value="{{$orders->ordersinfo->id}}" selected>{{$orders->ordersinfo->address}}</option>
                        @foreach($ordersinfo as $o)
                            <option value="{{$o->id}}">{{$o->customer_name}}{{$o->address}}{{$o->phone}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Menu Items count:</label>
                        <input name='items_count' class="form-control" id="recipient-name" value="{{$orders->items_count}}">
                    </div>           
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/orders" class='btn btn-danger'>Cancel</a>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection