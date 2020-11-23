@extends('layouts.master')

@section('title')
     Orders
@endsection

@section('content')
<form action='/save-order' method='POST'>

  {{ csrf_field() }}

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="item_id" class="col-form-label">Menu Item:</label>
              <select name="item_id" id='item_id' class="form-control">
                        @foreach($items as $i)
                            <option value="{{$i->id}}">{{$i->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="custom_id" class="col-form-label">Custom Coffee:</label>
              <select name="custom_id" id='custom_id' class="form-control">
                        @foreach($customcoffes as $i)
                            <option value="{{$i->id}}">{{$i->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="product" class="col-form-label">Order Info:</label>
              <select name="order_id" id='product_id' class="form-control">
                        @foreach($ordersinfo as $o)
                            <option value="{{$o->id}}">{{$o->customer_name}} {{$o->address}} {{$o->phone}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Menu Items count:</label>
              <input name='items_count' class="form-control" id="recipient-name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">SAVE</button>
        </div>
      </div>
    </div>
  </div>
</form>

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Orders
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
                </h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>Menu Item</th>
                      <th>Custom Coffee</th>
                      <th>Order Info</th>
                      <th>Item count</th>
                      <th>EDIT</th>
                      <th>DELITE</th>
                    </thead>
                    <tbody>
                    @foreach ($orders as $row)
                      <tr>
                        <td> {{$row->id}}</td>
                        <td>{{$row->menuitems->name}}</td>
                        <td>@if($row->customcoffees!==null)
                        {{$row->customcoffees->name}}
                        @endif</td>
                        <td>{{$row->ordersinfo->address}}</td>
                        <td>{{$row->items_count}}</td>
                        <td>
                            <a href='/order-edit/{{ $row->id }}' class='btn, btn-success'>EDIT</a>
                        </td>
                        <td>
                        <form action="/order-delete/{{ $row->id }}" mathod="post">
                            {{ csrf_field() }}
                            {{ method_field('GET') }}
                            <button type="submit" class='btn btn-danger'>DELETE</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
  
@endsection

@section('scripts')

@endsection