@extends('layouts.app')

<link href="{{ asset('css/basket.css') }}" rel="stylesheet">
 
@section('content')

<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                <div class="card">
                    <div class="row coffeecard">
                        @foreach ($order as $row)
                        <form action="/cart-update/{{ $row->id }}" method="post" class="table-responsive">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }} 
                            <table class="table">
                                <thead class="text-body">
                                    <th>Продукт</th>
                                    <th>Кількість</th>
                                    <th>Ціна</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <h3>{{$row->name}}</h3>
                                    </td>
                                    <td>
                                        <a href="/pluscount/{{ $row->id }}" class="btn btn-warning">+</a>
                                        {{$row->item_count}}
                                        <a href="/minuscount/{{ $row->id }}" class="btn btn-warning">-</a>
                                    </td>
                                    <td>
                                        {{$row->price*$row->item_count}}
                                    </td>
                                    <td>
                                        <a href="/basketdelete/{{ $row->id }}" class='btn btn-danger'>ВИДАЛИТИ</a>
                                        <input type='hidden' name='hid' value='{{ $row->id }}'/>
                                    </td>
                                </tr>
                                </tbody>
                            </table>                          
                        </form>
                        @endforeach
                    </div> 
                </div> 
                </div>   
</br><h1>Інфорація для доставки</h1>
            <form action='/save-ordersinfo' method='POST'>
            {{ csrf_field() }}
            {{ method_field('PUT') }} 

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Час доставки:</label>
              <input type="datetime-local" name='delivery_time' class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Адреса:</label>
              <input type="text" name='address' class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Ім'я отримувача:</label>
              <input type="text" name='customer_name' class="form-control" id="recipient-name" value={{$user->name}}>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Номер телефону:</label>
              <input type="text" name='phone' class="form-control" id="recipient-name" min='10' max='10' value={{$user->phone}}>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Success</button>
            </div>
      
        </form> 
            </div> 
            </div>    
            </div>  






@endsection