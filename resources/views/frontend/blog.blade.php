<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Charity HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.default.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="{{asset('assets/frontendtps://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
		  <script src="{{asset('assets/frontendtps://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- NAVGATION -->
		<nav id="main-navbar">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.html"><img src="{{ asset('assets/frontend/img/logo.png') }}" alt="logo"></a>
					</div>
					<!-- Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle-btn">
							<i class="fa fa-bars"></i>
						</button>
					<!-- Mobile toggle -->

					<!-- Mobile Search toggle -->
					<button class="search-toggle-btn">
							<i class="fa fa-search"></i>
						</button>
					<!-- Mobile Search toggle -->
				</div>

				<!-- Search -->
				<div class="navbar-search">
					<button class="search-btn"><i class="fa fa-search"></i></button>
					<div class="search-form">
						<form>
							<input class="input" type="text" name="search" placeholder="Search">
						</form>
					</div>
				</div>
				<!-- Search -->

				  <!-- Nav menu -->
        <ul class="navbar-menu nav navbar-nav navbar-right">
          <li><a href="{{url('/home')}}">Home</a></li>
          <li><a href="#">About</a></li>
          <li class="has-dropdown"><a href="#">Produk</a>
            <ul class="dropdown">
              <li><a href="{{url('/produk')}}">Tas Ransel</a></li>
              <li><a href="{{url('/kantor')}}">Tas Kantor</a></li>
            </ul>
          </li>
          <li class="has-dropdown"><a href="#">Events</a>
            <ul class="dropdown">
              <li><a href="/singel-causes">Single event</a></li>
            </ul>
          </li>
          <li><a href="{{url('/blog')}}">Blog</a>
          </li>
          <li><a href="#">Contact</a></li>
        </ul>
        <!-- Nav menu -->
      </div>
    </nav>
    <!-- /NAVGATION -->
    
		<!-- Page Header -->
		<div id="page-header">
			<!-- section background -->
			<div class="section-bg" style="background-image: url({{asset('assets/frontend/img/background-2.jpg')}});"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1>Blog Page</h1>
							<ul class="breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li class="active">Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header content -->
		</div>
		<!-- /Page Header -->
	</header>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- MAIN -->
				<main id="main" class="col-md-9">
					<div class="row">

						<!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="{{asset('assets/frontend/img/post-1.jpg')}}" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article -->

						<!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="{{asset('assets/frontend/img/post-2.jpg')}}" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article -->

						<div class="clearfix visible-md visible-lg"></div>

						<!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="{{asset('assets/frontend/img/post-3.jpg')}}" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article -->

						<!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="{{asset('assets/frontend/img/post-4.jpg')}}" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article -->

						<div class="clearfix visible-md visible-lg"></div>

						<!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="{{asset('assets/frontend/img/post-5.jpg')}}" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article -->

						<!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="{{asset('assets/frontend/img/post-6.jpg')}}" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article -->

						<!-- pagination -->
						<div class="col-md-12">
							<ul class="article-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li>...</li>
								<li><a href="#">12</a></li>
							</ul>
						</div>
						<!-- /pagination -->
					</div>
				</main>
				<!-- /MAIN -->

				<!-- ASIDE -->
				<aside id="aside" class="col-md-3">
					<!-- category widget -->
					<div class="widget">
						<h3 class="widget-title">Category</h3>
						<div class="widget-category">
							<ul>
								<li><a href="#">Health<span>(57)</span></a></li>
								<li><a href="#">Food<span>(86)</span></a></li>
								<li><a href="#">Education<span>(241)</span></a></li>
								<li><a href="#">Donation<span>(65)</span></a></li>
								<li><a href="#">Events<span>(14)</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- posts widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Posts</h3>
						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="{{asset('assets/frontend/img/widget-1.jpg')}}" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="{{asset('assets/frontend/img/widget-2.jpg')}}" alt="">
								</div>
								<div class="widget-content">
									Vix fuisset tibique facilisis cu. Justo accusata ius at
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="{{asset('assets/frontend/img/widget-3.jpg')}}" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->
					</div>
					<!-- /posts widget -->

					<!-- causes widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Causes</h3>

						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="{{asset('assets/frontend/img/widget-1.jpg')}}" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 64%;"></div>
										</div>
									</div>
								</div>
							</a>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<!-- /single causes -->

						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="{{asset('assets/frontend/img/widget-2.jpg')}}" alt="">
								</div>
								<div class="widget-content">
									Vix fuisset tibique facilisis cu. Justo accusata ius at
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 75%;"></div>
										</div>
									</div>
								</div>
							</a>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<!-- /single causes -->

						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="{{asset('assets/frontend/img/widget-3.jpg')}}" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 53%;"></div>
										</div>
									</div>
								</div>
							</a>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<!-- /single causes -->
					</div>
					<!-- causes widget -->
				</aside>
				<!-- /ASIDE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
	<footer id="footer" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer contact -->
				<div class="col-md-4">
					<div class="footer">
						<div class="footer-logo">
							<a class="logo" href="#"><img src="{{asset('assets/frontend/img/logo.png')}}" alt=""></a>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="footer-contact">
							<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							<li><i class="fa fa-phone"></i> 607-279-9246</li>
							<li><i class="fa fa-envelope"></i> <a href="#">Charity@email.com</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer contact -->

				<!-- footer galery -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Galery</h3>
						<ul class="footer-galery">
							<li><a href="#"><img src="{{asset('assets/frontend/img/galery-1.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('assets/frontend/img/galery-2.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('assets/frontend/img/galery-3.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('assets/frontend/img/galery-4.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('assets/frontend/img/galery-5.jpg')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('assets/frontend/img/galery-6.jpg')}}" alt=""></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer galery -->

				<!-- footer newsletter -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Newsletter</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
						<form class="footer-newsletter">
							<input class="input" type="email" placeholder="Enter your email">
							<button class="primary-button">Subscribe</button>
						</form>
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer newsletter -->
			</div>
			<!-- /row -->

			<!-- footer copyright & nav -->
			<div id="footer-bottom" class="row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Causes</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
					</div>
				</div>
			</div>
			<!-- /footer copyright & nav -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{asset('assets/frontend/jquery.min.js')}}"></script>
	<script src="{{asset('assets/frontend/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/frontend/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/frontend/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('assets/frontend/main.js')}}"></script>

</body>

</html>