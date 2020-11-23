@extends('layouts.app')
@section('title', 'Products')
@section('content')
    <div class="container products">
        <div class="row">
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="450" height="250">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p style="height:50px;">{{ $product->description }}</p>
                            <p><strong>Ціна: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Купити</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- End row -->
    </div>
@endsection