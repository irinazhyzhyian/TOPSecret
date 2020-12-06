@extends('layouts.master')

@section('title')
    Edit Ingradient
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h1>EDIT Ingradient</h1>
                  </div>
                  <div class="card-body">
                  <form action="/ingradient-update/{{ $ingradients->id }}" method="POST">
                   {{ csrf_field() }}
                   {{ method_field('PUT') }} 
                   <div class="form-group">
              <label for="item_id" class="col-form-label">Menu Item:</label>
              <select name="item_id" id='item_id'  class="form-control">
                    <option value="{{$ingradients->menuitems->id}}" selected>{{$ingradients->menuitems->name}}</option>
                        @foreach($items as $i)
                            <option value="{{$i->id}}">{{$i->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="product" class="col-form-label">Product:</label>
              <select name="product_id" id='product_id' class="form-control">
                    <option value="{{$ingradients->products->id}}" selected>{{$ingradients->products->name}}</option>
                        @foreach($products as $p)
                            <option value="{{$p->id}}">{{$p->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Product count:</label>
              <input name='product_count' class="form-control" required id="recipient-name" value='{{$ingradients->product_count}}'>
            </div>                  
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/ingradients" class='btn btn-danger'>Cancel</a>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection