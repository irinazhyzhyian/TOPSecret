@extends('layouts.master')

@section('title')
    Employee
@endsection

@section('content')
<form action='/save-employee' method='POST'>

  {{ csrf_field() }}

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New employee</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">First name:</label>
              <input type="text" name='first_name' class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name1" class="col-form-label">Last name:</label>
              <input type="text" name='last_name' class="form-control" id="recipient-name1">
            </div>
            <div class="form-group">
              <label for="recipient-name2" class="col-form-label">Description:</label>
              <textarea name='description' class="form-control" id="recipient-name2"></textarea>
            </div>
            <div class="form-group">
              <label for="position_id" class="col-form-label">Position name:</label>
              <select name="position_id" id='position_id' class="form-control">
                        @foreach($pos as $p)
                            <option value="{{$p->id}}">{{$p->position}}</option>
                        @endforeach
                        </select>
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
                <h4 class="card-title"> Employee
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
                      <th>First name</th>
                      <th>Last name</th>
                      <th>Description</th>
                      <th>Position</th>
                      <th>EDIT</th>
                      <th>DELITE</th>
                    </thead>
                    <tbody>
                    @foreach ($employee as $row)
                      <tr>
                        <td> {{$row->id}}</td>
                        <td>{{$row->first_name}}</td>
                        <td>{{$row->last_name}}</td>
                        <td>{{$row->description}}</td>
                        <td>{{$row->positions->position}}</td>
                        <td>
                            <a href='/employee-edit/{{ $row->id }}' class='btn, btn-success'>EDIT</a>
                        </td>
                        <td>
                        <form action="/employee-delete/{{ $row->id }}" mathod="post">
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