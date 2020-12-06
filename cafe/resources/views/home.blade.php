@extends('layouts.main')

<link href="{{ asset('css/homeuser.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('css/styleMenu.css') }}" rel="stylesheet">
@section('content')
<div class="wall">
<a href='/home'><div class="homeuserheader"><img class="img" src="/img/cup.png" alt="cup" >ОСОБИСТИЙ КАБІНЕТ</div></a>
<div class="container">
    <div class="row content-center">   
        @foreach ($coffee as $row)
        <div class="row coffeecard">
            <a class="col">
                <div class='round'>
                <img class="circle" src="/img/circle.jpg" alt="circle" >
                    <div class='middle'>
                    <h5 class='coffeeName'>{{$row->name}}</h5>
                    @foreach(preg_split('/","/',$row->composition) as $l)
                        <h6 class='coffeePrice'>{{$l}}</h6>
                    @endforeach
                    <form action="/customcoffee-delete/{{ $row->id }}" mathod="post">
                        {{ csrf_field() }}
                        {{ method_field('GET') }}
                        <button type="submit" class="btn btn-outline-danger">ВИДАЛИТИ</button>
                    </form>
                </div>
                </div>
            </a>
        </div> 
        @endforeach        
    </div>
</div>
</div>
</div>
@endsection