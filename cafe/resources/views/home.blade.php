@extends('layouts.app')

<link href="{{ asset('css/homeuser.css') }}" rel="stylesheet">

@section('content')
<a href='/home'><div class="homeuserheader">Особистий кабінет</div></a>
<div class="container">
    <div class="row content-center">   
        @foreach ($coffee as $row)
        <div class="row coffeecard">
            <a class="col" href="/customcoffee-edit/{{ $row->id }}">
                <div class='circle'>
                    <h5 class='coffeeName'>{{$row->name}}</h5>
                    <h6 class='coffeePrice'>{{$row->price}} грн</h6>
                    <form action="/customcoffee-delete/{{ $row->id }}" mathod="post">
                        {{ csrf_field() }}
                        {{ method_field('GET') }}
                        <button type="submit" class="btn btn-outline-danger">ВИДАЛИТИ</button>
                    </form>
                </div>
            </a>
        </div> 
        @endforeach        
    </div>
</div>
</div>
@endsection