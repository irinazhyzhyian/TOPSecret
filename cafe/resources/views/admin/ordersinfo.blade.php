@extends('layouts.master')

@section('title')
     Orders Info
@endsection

@section('content')
<form action='/save-ordersinfo' method='POST'>

  {{ csrf_field() }}

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Order Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Order Time:</label>
              <input type="datetime-local" required name='order_time' class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Delivery Time:</label>
              <input type="datetime-local" required name='delivery_time' class="form-control" id="recipient-name" min='{{date("Y-m-d H:i:s")}}'/>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Address:</label>
              <input type="text" name='address' required class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                        <label for="product" class="col-form-label">Customer ID:</label>
                        <select name="user_id" id='product_id' class="form-control">
                        @foreach($users as $o)
                            <option value="{{$o->id}}">{{$o->id}} {{$o->name}}</option>
                        @endforeach
                        </select>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Customer Name:</label>
              <input type="text" name='customer_name' required class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Phone:</label>
              <input type="text" name='phone' required class="form-control" id="recipient-name" min='10' max='10'>
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
                <h4 class="card-title"> Orders Info
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
                      <th>Order Time</th>
                      <th>Delivery Time</th>
                      <th>Address</th>
                      <th>Customer ID</th>
                      <th>Customer Name</th>
                      <th>Phone</th>
                      <th>EDIT</th>
                      <th>DELITE</th>
                    </thead>
                    <tbody>
                    @foreach ($ordersinfo as $row)
                      <tr>
                        <td> {{$row->id}}</td>
                        <td>{{$row->order_time}}</td>
                        <td>{{$row->delivery_time}}</td>
                        <td>{{$row->address}}</td>
                        <td>{{$row->user_id}}</td>
                        <td>{{$row->customer_name}}</td>
                        <td>{{$row->phone}}</td>
                        <td>
                            <a href='/ordersinfo-edit/{{ $row->id }}' class='btn btn-success'>EDIT</a>
                        </td>
                        <td>
                        <form action="/ordersinfo-delete/{{ $row->id }}" mathod="post">
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