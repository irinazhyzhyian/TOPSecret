@extends('layouts.app')

<link href="{{ asset('css/homeuser.css') }}" rel="stylesheet">

@section('content')
<a href='/home'><div class="homeuserheader">Особистий кабінет</div></a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div>
                    <div class="row coffeecard">
                        @foreach ($recept as $row)
                        <form action="/customcoffee-update/{{ $row->id }}" method="post" class="table-responsive">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }} 
                            <table class="table">
                                <thead class="text-body">
                                    <th>Інградіент</th>
                                    <th>Кількість</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                    <select name="product_id" id='product_id' class="form-control">
                                        <option value="{{$row->pid}}" selected>{{$row->name}}</option>
                                        @foreach($products as $p)
                                        <option value="{{$p->id}}">{{$p->name}}</option>
                                        @endforeach
                                    </select>
                                    </td>
                                    <td><input type='text' name = 'product_count' value='{{$row->product_count}}' class="form-control"></td>
                                    <td>
                                        <button type='submit' class="btn btn-warning">ЗБЕРЕГТИ</button>
                                        <a href="/dellingradient/{{ $row->id }}" class='btn btn-danger'>ВИДАЛИТИ</a>
                                        <input type='hidden' name='hid' value='{{ $row->id }}'/>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                        @endforeach
                        <form action="/customcoffee-ingradient/{{$custId}}" method="post" class="table-responsive">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }} 
                            <table class="table">
                                <thead class="text-body">
                                    <th>Інградіент</th>
                                    <th>Кількість</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                    <select name="product_id" id='product_id' class="form-control">
                                        @foreach($products as $p)
                                        <option value="{{$p->id}}">{{$p->name}}</option>
                                        @endforeach
                                    </select>
                                    </td>
                                    <td><input type='text' name = 'product_count' value='' class="form-control"></td>
                                    <td>
                                        <button type='submit' class="btn btn-warning">ДОДАТИ</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
