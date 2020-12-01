<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
<<<<<<< HEAD
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>


    <!-- Styles -->
    <link href="{{ asset('scss/coffee_creator.scss') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/styleCart.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" >
</head>

<body>
<nav>
=======
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('scss/coffee_creator.scss') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">


</head>

<body>
<nav class=''>
>>>>>>> 3fbe1813acc7ce1d241280f14bd68c93fcb4f1bc
    <div class='headers'>
        <div>
        <h2 class="logo-g"> GUSTO COFFEE</h2>
        </div>
        <div class="headers-links">
<<<<<<< HEAD
    <a class="text-16-800" href="{{ url('/') }}">Home</a>
    <a class="text-16-800" href="{{ url('menu') }}"> Menu</a>
    <a class="text-16-800"href="{{ url('customcoffee/constructor/') }}">Constructor</a>
    <a class="text-16-800" href="{{ url('home') }}"> Room</a>
    <div class="dropdown">
                <a class="text-16-800" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart<span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </a>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>До сплати: <span class="text-info"> {{ $total }} ₴</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4">
                                    <img width='70' height='60' src="{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Кількість:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">Переглянути всі</a>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Authentication Links -->
                        @guest
                                <a class="text-16-800" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                    <a class="text-16-800" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="text-16-800" type="submit">
                                        {{ __('Logout') }}
                                    </button>
                                </form>
 
                            </li>
                        @endguest
                
            </div>
=======
    <a class="text-16-800">Home</a>
    <a class="text-16-800">About</a>
    <a class="text-16-800"> Coffee</a>
    <a class="text-16-800"> Food</a>
    <a class="text-16-800">Special</a>
    <a class="text-16-800">Team</a>
    <a class="text-16-800">Constructor</a>
>>>>>>> 3fbe1813acc7ce1d241280f14bd68c93fcb4f1bc
        </div>
    </div>
</nav>

