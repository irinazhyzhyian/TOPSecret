@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
@section('title', 'Cart')
@section('content')
<div class='container'>
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Продукт</th>
            <th style="width:10%">Ціна</th>
            <th style="width:8%">Кількість</th>
            <th style="width:22%" class="text-center">Сплатити</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        <?php $total = 0 ?>
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['price'] }} ₴</td>
                    <td data-th="Quantity">
                        <input type="number" min=1 value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
        <tr class="visible-xs">
        </tr>
        <tr>
            <td><a href="{{ url('/menu') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Продовжити замовляти</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>До сплати {{ $total }} ₴</strong></td>
        </tr>
        </tfoot>
    </table>
    </br>
    @if(count((array) session('cart'))>0)
        <h1>Інфорація для доставки</h1>
            <form action='/save-ordersinfo' method='POST'>

            {{ csrf_field() }}
            {{ method_field('PUT') }} 

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Час доставки:</label>
              <input type="datetime-local" name='delivery_time' min='{{date("Y-m-d H:i:s")}}' class="form-control" id="recipient-name" required>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Адреса:</label>
              <input type="text" name='address' class="form-control" id="recipient-name" required>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Ім'я отримувача:</label>
              <input type="text" required name='customer_name' class="form-control" id="recipient-name" value=@if (isset($user)){{$user->name}}@endif>
              <input type="text" name='user_id' hidden value=@if(isset($user)){{$user->id}}@endif>
            </div>
            <div class="form-group">
              <label for="recipient-name" required class="col-form-label">Номер телефону:</label>
              <input type="text" name='phone' pattern="[0]{1}[0-9]{9}" required placeholder="0951458809" class="form-control" id="recipient-name"  value=@if(isset($user)){{$user->phone}}@endif>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Замовити</button>
            </div>
      
        </form> 
</div>
    @endif
@endsection
@section('scripts')
    <script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection