@extends('layouts.master')

@section('title')
    Edit Menu Item
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h1>EDIT Menu Item</h1>
                  </div>
                  <div class="card-body">
                  <form action="/menuitem-update/{{ $menuitems->id }}" method="POST">
                   {{ csrf_field() }}
                   {{ method_field('PUT') }} 
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Menu Item name:</label>
                        <input type="text" name='name' class="form-control" id="recipient-name" value='{{$menuitems->name}}'>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Price:</label>
                        <input type="text" name='price' class="form-control" id="recipient-name" value='{{$menuitems->price}}'>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Description:</label>
                        <textarea name='description' class="form-control" id="recipient-name">{{$menuitems->description}}</textarea>
                     </div>
                     <div class="form-group">
                        <label for="recipient-name1" class="col-form-label">Photo:</label>
                        <input name='photo' class="form-control" id="recipient-name1" value='{{$menuitems->description}}'/>
                     </div>                  
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/menuitems" class='btn btn-danger'>Cancel</a>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection