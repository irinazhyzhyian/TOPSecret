@extends('layouts.master')

@section('title')
     Positions
@endsection

@section('content')
<form action='/save-position' method='POST'>

  {{ csrf_field() }}

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New position</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Position name:</label>
              <input type="text" name='position' class="form-control" id="recipient-name">
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
                <h4 class="card-title"> Positions
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
                      <th>Position</th>
                      <th>EDIT</th>
                      <th>DELITE</th>
                    </thead>
                    <tbody>
                    @foreach ($positions as $row)
                      <tr>
                        <td> {{$row->id}}</td>
                        <td>{{$row->position}}</td>
                        <td>
                            <a href='/position-edit/{{ $row->id }}' class='btn, btn-success'>EDIT</a>
                        </td>
                        <td>
                        <form action="/position-delete/{{ $row->id }}" mathod="post">
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