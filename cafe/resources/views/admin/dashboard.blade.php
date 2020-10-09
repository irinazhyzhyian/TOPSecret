@extends('layouts.master')

@section('title')
     Admin Panel
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Roles</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th> Name</th>
                      <th>Count</th>
                    </thead>
                    <tbody>
                    @foreach($range as $r)
                      <tr>
                          <td> {{$r->name}} </td>
                          <td>{{$r->c}}</td>
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