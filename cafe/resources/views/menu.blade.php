@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleMenu.css') }}">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">


	<!-- Owl Carousel  -->
	<link href="{{ asset('css/owl.carousel.min.css') }}">
	<link href="{{ asset('css/owl.theme.default.min.css') }}">
	<link type="text/css" href="{{ asset('css/styleMenu.css') }}" rel="stylesheet">
	

@section('title', 'Menu')
@section('content')
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-12 em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Смакуй разом з нами!</h1>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


	
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color"> Наше меню ♥</h2>
				</div>
			</div>
			<div class="row">
            @foreach($products as $product)
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{ $product->photo }}" class="fh5co-card-item image-popup">
						<figure class='image'>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{ $product->photo }}" alt="Image" class="img-responsive">
						</figure>
					</a>
						<div class="fh5co-text">
							<h2 class='title'>{{ $product->name }}</h2>
							<p class='text' style='height: 60px; text-align: center;'>{{ $product->description }}</p>
							<p style='margin-left: 40%;'><span style="color: #B22222;" class="price cursive-font">{{ $product->price }} ₴</span></p>
                            <p class="btn-holder"><a style='background: #B22222;' href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Купити</a> </p>
						</div>
				</div>
            @endforeach
						
	</div>

	

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
</div>

@endsection
@section('scripts')
<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ asset('js/jquery.countTo.js') }}"></script>

	<!-- Stellar Parallax -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
	
	<script src="{{ asset('js/moment.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>


	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>
@endsection

