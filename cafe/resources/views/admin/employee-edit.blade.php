@extends('layouts.master')

@section('title')
    Edit Employee
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h1>EDIT Employee</h1>
                  </div>
                  <div class="card-body">
                  <form action="/employee-update/{{ $employee->id }}" method="POST">
                   {{ csrf_field() }}
                   {{ method_field('PUT') }} 
                   <div class="form-group">
              <label for="recipient-name" class="col-form-label">First name:</label>
              <input type="text" name='first_name' class="form-control" id="recipient-name" value="{{$employee->first_name}}">
            </div>
            <div class="form-group">
              <label for="recipient-name1" class="col-form-label">Last name:</label>
              <input type="text" name='last_name' class="form-control" id="recipient-name1" value="{{$employee->last_name}}">
            </div>
            <div class="form-group">
              <label for="recipient-name2" class="col-form-label">Description:</label>
              <textarea name='description' class="form-control" id="recipient-name2">{{$employee->description}}</textarea>
            </div>
            <div class="form-group">
              <label for="position_id" class="col-form-label">Position name:</label>
              <select name="position_id" id='position_id' class="form-control">
                <option value="{{$employee->positions->id}}" selected>{{$employee->positions->position}}</option>
                        @foreach($pos as $p)
                            <option value="{{$p->id}}">{{$p->position}}</option>
                        @endforeach
                        </select>
            </div>                    
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/employee" class='btn btn-danger'>Cancel</a>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection