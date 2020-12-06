@extends('layouts.master')

@section('title')
    Edit Position
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h1>EDIT Position</h1>
                  </div>
                  <div class="card-body">
                  <form action="/position-update/{{ $positions->id }}" method="POST">
                   {{ csrf_field() }}
                   {{ method_field('PUT') }} 
                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" name="position" required value="{{$positions->position}}" class="form-control">
                    </div>                    
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/positions" class='btn btn-danger'>Cancel</a>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection