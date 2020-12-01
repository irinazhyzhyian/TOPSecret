@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<title>Coffee project</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/stylesMain.css') }}" rel="stylesheet">
    <link href="{{ asset('css/queries.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleMenu.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
 

@section('content')

<div id="home">
          <nav>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <nav class="pull">
                    <ul class="top-nav">
                      <li><a href="#intro">Introduction <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#features">Features <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#responsive">Responsive Design <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#portfolio">Portfolio <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#team">Team <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#contact">Get in Touch <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </nav>
          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
			  <div class="overlay"></div>
	<section id="home">
	<div class="overlay"></div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!--Indicator-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class=""></li>
			<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow bounceInUp">
							<div class="home-text text-center">
								<h1>COFFEE<span>-GUSTO</span></h1>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <a href="{{ url('menu') }}" class="learn-more-btn">MENU</a>
                    </div>
                </div>
								<p style="color:white" class="animated fadeInUp delay-05s">ОБЕРИ НАЙКРАЩУ КАВУ ДЛЯ СЕБЕ ЧИ  <em>БЛИЗЬКИХ!</em></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item active">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow bounceInUp">
							<div class="home-text text-center">
								<h1>ВИПІЧКА</h1>
								
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <a href="" class="learn-more-btn">MENU</a>
                    </div>
                </div>

								<p class="animated fadeInUp delay-05s" style="color:white">СМАКОЛИКИ ДО КАВИ <em>І НЕ ТІЛЬКИ</em></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</section>
            </div>
          </section>
        </div>
		<section class="intro text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">WHY GUSTO?</h1>
                <p>Текст текст текст текст <a href="#">текст текст текст</a>. текст текст текст. текст текст текст текст текст текст. Текст текст текст текст текст текст текст текст текст текст текст текст текст. Текст текст текст текст текст текст текст.</p>
              </div>
            </div>
          </div>
        </section>
		<section class = "features1 text-center section-padding1" id="features1">
			<div class = "container">
				<div class="row">
					<div class="col-md-12">
						<h1>services</h1>
						<h3>Наші послуги</h3>
					</div>
				</div>	
			</div>
		</section>
        <section class="features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                
                <div class="features-wrapper">
                  <div class="col-md-4 wp2">
                    <div class="icon">
                      <i class="fa fa-coffee shadow"></i>
                    </div>
                    <h2>Замовлення на сьогодні</h2>
                    <p>БУДЕ ГОТОВЕ ЗА 20 ХВИЛИН! </p><p>(ЯКЩО ЗАМОВЛЯЄТЕ ТІЛЬКИ НАПІЙ)</p>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <div class="icon">
                      <i class="fa fa-gift fa-1g shadow"></i>
                    </div>
                    <h2>Сертифікати</h2>
                    <p>ДЛЯ ДРУЗІВ ТА РІДНИХ НА </p> <p>200 / 300 / 500 ГРН.</p>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-heart shadow"></i>
                    </div>
                    <h2>Замовлення наперед</h2>
                    <p>У  ЗРУЧНИЙ ДЛЯ ВАС ЧАС НА СЬОГОДНІ</p> <p> ЧИ НА НАСТУПНИЙ ДЕНЬ</p>
                  </div>
				  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-car shadow"></i>
                    </div>
                    <h2>Доставка</h2>
                    <p>У МЕЖАХ МІСТА ЧЕРНІВЦІ.</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
		<section class = "features1 text-center section-padding1" id="features2" style="background:#d11122">
			<div class = "container">
				<div class="row">
					<div class="col-md-12">
						<h1 style="color:white">Власний рецепт</h1>
						<h4>Збери свою каву!</h4>
					</div>
				</div>	
			</div>
		</section>
        <section class="text-center" id="responsive" style="background:#bd0e0e">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper" style="background:#bd0e0e">
              <div class="iphone">
                <div class="wp3"></div>
				<img src="{{ asset('img/04.jpg')}}" alt="creation">
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <h1 class="arrow">ЗАВЖДИ ХОТІЛИ СПРОБУВАТИ ПЕРСОНАЛЬНИЙ РЕЦЕПТ КАВИ?</h1>
                        <p>Якщо Ви любитель експериментів та часто думали про невелику чи навіть глобальну зміну у своємо напої, то ми втілимо Ваші мрії у реальність! </p>
						<p></p>
						<p>Переходьте за посиланням та творіть! </p>
							<div class="col-md-6 col-md-offset-3 text-center">
								<a href="{{ url('customcoffee/constructor/') }}" class="learn-more-btn">create</a>
							</div>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
		<div class="ignite-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="{{ url('menu') }}" class="ignite-btn">menu</a>
              </div>
            </div>
          </div>
        </div>
        <section class="swag text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>Our coffee and food<span><em>best</em> sellers</span></h1>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <ul class="slides">
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/latf.jpg" width="290px" height="190px" alt="Portfolio Item">
                          <div class="overlay">
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Фісташкове латте</h2>
                      <p> еспресо,подвійне молоко, помелені фісташки, фісташковий сироп</p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/cap.jfif" width="290px" height="190px"alt="Portfolio Item">
                          <div class="overlay">
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Капучіно</h2>
                      <p> подвійне еспресо, молоко</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/latte.jpg"width="290px" height="190px" alt="Portfolio Item">
                          <div class="overlay">
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Ванільне капучіно</h2>
                      <p>подвійне еспресо, молоко, ванільний цукор, ваніль</p>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/latf.jpg" width="290px" height="190px"alt="Portfolio Item">
                          <div class="overlay">
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Minds</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Hearts</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Ideas</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        
        <section class="team text-center section-padding" id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Наша команда:</h1>
              </div>
            </div>
            <div class="row">
              <div class="team-wrapper">
                <div id="teamSlider">
                  <ul class="slides">
                    <li>                      
                      <div class="col-md-4 wp5 delay-05s">
                        <img src="{{ asset('img/team-02.png') }}" alt="Team Member">
                        <h2>Cersei Lannister</h2>
                        <p>Director</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-1s">
                        <img src="{{ asset('img/team-03.png') }}" alt="Team Member">
                        <h2>Jamie Lannister</h2>
                        <p>Administrator</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    
                      <div class="col-md-4 wp5">
                        <img src="{{ asset('img/team-01.png') }}" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Barista</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
					 </li>
                    <li> 
                      <div class="col-md-4 wp5 delay-05s">
                        <img src="{{ asset('img/team-02.png') }}" alt="Team Member">
                        <h2>Cersei Lannister</h2>
                        <p>Barista</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-1s">
                        <img src="{{ asset('img/team-03.png') }}" alt="Team Member">
                        <h2>Jamie Lannister</h2>
                        <p>barista</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
		<section id="contact">
	<section class = "features1 text-center section-padding1" id="features2" style="background:#d11122">
			<div class = "container">
				<div class="row">
					<div class="col-md-12">
						<h1 style="color:white">форма клієнта</h1>
						<h1 style="font-size:29px; color:black">Не хочете самі наповнювати кошик?</h1>
						<h1 style="color:white">Залиште ваші данні і ми вам передзвонимо!</h1>
					</div>
				</div>	
			</div>
		</section>
	<!-- contact massage-->
	<div class="contact-form">
		<div class="container">
			<div class="row">
				<form action="#">

					<div class="col-sm-4">
						<label for="usr">Your Name</label>
						<input type="text" class="form-control" id="usr">
					</div>
					<div class="col-sm-4">
						<label for="email">Your Email</label>
						<input type="email" class="form-control" id="email">
					</div>
					<div class="col-sm-4">
						<label for="number">Your Number</label>
						<input type="number" class="form-control" id="number" required placeholder="066 123 45 67">
					</div>
					<div class="col-sm-12">
						<label for="massage">Your Massage</label>
						<textarea class="form-control" rows="5" id="massage"></textarea>

						<button type="submit" class="btn red-btn"> SEND YOUR MESSAGE</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>
        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Наші контакти</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                  <p>вул. Кобилянська, 43</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p>+38 066 000 66 66</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <p><a href="#">gustocoffecv@gmail.com</a></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
   @endsection

   @section('scripts')
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
        <script src="{{ asset('js/modernizr.js') }}"></script>
   @endsection