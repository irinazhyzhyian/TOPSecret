@extends('layouts.master')

@section('title')
    Custom coffe
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Custom Coffee </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>User</th>
                      <th>Name</th>
                      <th>DELITE</th>
                    </thead>
                    <tbody>
                    @foreach ($customcoffee as $row)
                      <tr>
                        <td> {{$row->id}}</td>
                        <td>{{$row->users->name}}</td>
                        <td>{{$row->name}}</td>
                        <td>
                        <form action="/customcoffee-delete/{{ $row->id }}" mathod="post">
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