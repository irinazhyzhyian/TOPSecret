@extends('layouts.master')

@section('title')
     Products
@endsection

@section('content')
<form action='/save-product' method='POST'>

  {{ csrf_field() }}

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Product name:</label>
              <input type="text" name='name' class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Price:</label>
              <input type="text" name='price' class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Caloric contene:</label>
              <input type="text" name='caloric_content' class="form-control" id="recipient-name">
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
                <h4 class="card-title"> Products
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
                      <th>Name</th>
                      <th>Price</th>
                      <th>Caloric content</th>
                      <th>EDIT</th>
                      <th>DELITE</th>
                    </thead>
                    <tbody>
                    @foreach ($products as $row)
                      <tr>
                        <td> {{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->caloric_content}}</td>
                        <td>
                            <a href='/product-edit/{{ $row->id }}' class='btn, btn-success'>EDIT</a>
                        </td>
                        <td>
                        <form action="/product-delete/{{ $row->id }}" mathod="post">
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