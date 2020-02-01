
<!DOCTYPE html>

<!--
   Template:   Multipurpose Portfolio HTML Website Template
   Author:     Raxmatilla Fayziyev TSMG-18/1 
   URL:         https://cspi.uz
   Agar siz bu yozuvni o'qigan bo'lsangiz sahifani eng so'ngidagi gapniham o'qing.
-->

<html lang="en">
	<head>

		<!-- Title -->
		<title>Aivo - Multipurpose Portfolio HTML Website Template</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Responsive multipurpose portfolio HTML website template">
		<meta name="keywords" content="HTML5, CSS3, Bootsrtrap, Responsive, Multipurpose, Portfolio, Template, Theme, Website, Themetorium" />
		

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Google fonts (https://www.google.com/fonts) -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet"> <!-- Global font -->

		<!-- Bootstrap 3 CSS (https://getbootstrap.com/docs/3.3/) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}">

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/animsition/css/animsition.min.css') }}"> <!-- Animsition CSS (http://git.blivesta.com/animsition/) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/fontawesome/css/fontawesome-all.min.css') }}"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/linearicons/style.css') }}"> <!-- Linearicons CSS (https://linearicons.com) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/owl-carousel/css/owl.carousel.min.css') }}"> <!-- Owl Carousel CSS (http://www.owlcarousel.owlgraphic.com) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/owl-carousel/css/owl.theme.default.min.css') }}"> <!-- Owl Carousel CSS (http://www.owlcarousel.owlgraphic.com) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/animate.css') }}"> <!-- Animate CSS (https://daneden.github.io/animate.css') }}/) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css') }}"> <!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/lightgallery/css/lightgallery.min.css') }}"> <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->

		<!-- Theme master CSS -->
		<link rel="stylesheet" type='text/css' href="{{ ('front/assets/css/helper.css') }}">
		<link rel="stylesheet" type='text/css' href="{{ ('front/assets/css/theme.css') }}">


		<!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
		<![endif]-->

	</head>

	
	<!-- ===========
	///// Body /////
	================
	* Use class "animsition" to enable page transition while page loads.
	* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
	-->
	<body id="body" class="animsition tt-boxed">


		<!-- =================
		//// Begin header //// 
		======================
		* Use class "header-show-hide-on-scroll" to hide header on scroll down and show on scroll up.
		* Use class "header-fixed-top" to set header to fixed position.
		* Use class "header-transparent" to set header to transparent.
		* Use class "header-transparent-dark" to enable transparent dark header (use it for light background). Note: class "header-transparent" is required!
		* Use class "menu-align-left" to align menu to left.
		* Use class "menu-align-right" to align menu to right.
		* Use class "menu-align-center" to align menu to center (do not use with header classes!).
		-->
		<header id="header" class="header-show-hide-on-scroll header-transparent menu-align-right">

			<!-- Begin header inner -->
			<div class="header-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->

				<!-- Begin logo 
				================ -->
				<div id="logo">
					<!-- logo images for big screens -->
					<a href="index.html" class="logo-dark"><img src="{{ ('front/assets/img/logo-dark.png') }}" alt="logo"></a>
					<a href="index.html" class="logo-light"><img src="{{ ('front/assets/img/logo-light.png') }}" alt="logo"></a>

					<!-- logo images for smaller screens -->
					<a href="index.html" class="logo-dark-m"><img src="{{ ('front/assets/img/logo-dark-m.png') }}" alt="logo"></a>
					<a href="index.html" class="logo-light-m"><img src="{{ ('front/assets/img/logo-light-m.png') }}" alt="logo"></a>
				</div>
				<!-- End logo -->

				<!-- Begin header attributes (add/remove class "hide" to enable/disable header attributes without removing the code).
				============================= -->
				<div class="header-attributes">
					<ul>

						<!-- Begin header attributes search (clobal search) 
						==================================================== -->
						<li>
							<a href="home-full-screen-slideshow.html#" class="h-attr-search-trigger"><i class="fas fa-search"></i></a>
							<div class="h-attr-search">
								<div class="h-attr-search-inner">
									<p class="h-attr-search-text">Search</p>
									<form id="h-attr-search-form" class="form-btn-inside" method="get" action="search-results.html">
										<input type="text" id="h-attr-search-input" name="search" placeholder="Type your keywords ...">
										<button type="submit"><i class="fas fa-search"></i></button>
									</form>
									<div class="h-attr-search-suggestions">
										<h3 class="h-attr-search-sugg-title">- May We Suggest?</h3>
										<!-- Random or most used tags. Note: maximum 20 suggestions/tags! -->
										<p><a href="home-full-screen-slideshow.html">#love</a> <a href="home-full-screen-slideshow.html">#funny</a> <a href="home-full-screen-slideshow.html">#gifs</a> <a href="home-full-screen-slideshow.html">#print</a> <a href="home-full-screen-slideshow.html">#digital</a> <a href="home-full-screen-slideshow.html">#motion</a> <a href="home-full-screen-slideshow.html">#hilarious</a> <a href="home-full-screen-slideshow.html">#good</a> <a href="home-full-screen-slideshow.html">#super</a> <a href="home-full-screen-slideshow.html">#portfolio</a> <a href="home-full-screen-slideshow.html">#blog</a> <a href="home-full-screen-slideshow.html">#funny</a> <a href="home-full-screen-slideshow.html">#branding</a> <a href="home-full-screen-slideshow.html">#yesyes</a> <a href="home-full-screen-slideshow.html">#concept</a> <a href="home-full-screen-slideshow.html">#colored</a> <a href="home-full-screen-slideshow.html">#fancy</a> <a href="home-full-screen-slideshow.html">#effects</a> <a href="home-full-screen-slideshow.html">#experimental</a> <a href="home-full-screen-slideshow.html">#photoshop</a></p>
									</div>
								</div> <!-- /.h-attr-search-inner -->
								<div class="h-attr-search-close"><i class="tt-close-btn tt-close-light"></i> <span>Close</span></div>
							</div> <!-- /.h-attr-search -->
						</li>
						<!-- End header attributes search -->

						<!-- Begin header attributes dropdown (languages)
						==================================================
						* Use class "h-attr-dropdown-dark" to enable dropdown dark style.
						* Use class "h-attr-dropdown-color" to enable dropdown colored style.
						-->
						<li class="h-attr-dropdown-wrap h-attr-dropdown-master h-attr-lang h-attr-dropdown-dark h-attr-dropdown-right">
							<a href="home-full-screen-slideshow.html#0"><img src="{{ ('front/assets/img/flags/gb.png') }}" alt="English">EN</a>
							<ul class="h-attr-dropdown">
								<li><a href="home-full-screen-slideshow.html" title="English"><img src="{{ ('front/assets/img/flags/gb.png') }}" alt="English">EN</a></li>
								<li><a href="home-full-screen-slideshow.html" title="French"><img src="{{ ('front/assets/img/flags/fr.png') }}" alt="French">FR</a></li>
								<li><a href="home-full-screen-slideshow.html" title="Deutsch"><img src="{{ ('front/assets/img/flags/de.png') }}" alt="Deutsch">DE</a></li>
							</ul> <!-- /.h-attr-dropdown -->
						</li>
						<!-- End header attributes dropdown -->

						<!-- Begin header attributes side panel holder 
						=============================================== -->
						<li>
							<!-- Begin header attributes side panel trigger -->
							<a href="home-full-screen-slideshow.html" id="h-attr-side-panel-trigger">
								<span class="hide-from-md"><i class="fas fa-bars"></i></span>
								<span class="hide-to-md"><i class="fas fa-ellipsis-v"></i></span>
							</a>
							<!-- End header attributes side panel trigger -->

							<!-- Begin header attributes side panel -->
							<div id="h-attr-side-panel">
								<div class="h-attr-side-panel-inner">
									<div class="h-attr-side-panel-close"><i class="tt-close-btn tt-close-light"></i></div>

									<!-- Begin header attributes side panel widget -->
									<div class="h-attr-side-panel-widget sp-text-box">
										<h4>- Aditional Info</h4>
										<p>Doloremque necessitatibus eius assumenda, voluptatum eos reprehenderit iusto nampus etmo namis!</p>

										<p>Consectetur adipisicing elit. Fugiat dolorum cum soluta quidem, eos saepe. Veritatis cum quia officiis tenetur omnis eaque it doloremque necessit: <a target="_blank" href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium">https://themeforest.net</a></p>
									</div>
									<!-- End header attributes side panel widget -->

									<!-- Begin header attributes side panel widget -->
									<div class="h-attr-side-panel-widget">
										<a target="_blank" href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="btn btn-primary btn-block">Buy This Template!</a>
										<p class="margin-top-15 small">Enimat illum atera ates expedita obcaecati atque.</p>
									</div>
									<!-- End header attributes side panel widget -->

									<!-- Begin header attributes side panel widget -->
									<div class="h-attr-side-panel-widget">

										<h5>Instagram:</h5>
										
										<!-- Begin thumbnail list 
										==========================
										* Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
										* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4" or "gutter-5" to add more space between items.
										-->
										<ul class="thumb-list col-4 gutter-3">
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-1.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-2.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-3.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-4.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-5.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-6.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-7.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-8.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-9.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-10.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-11.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-12.jpg') }}"></a></li>
										</ul>
										<!-- End thumbnail list -->

									</div>
									<!-- End header attributes side panel widget -->

								</div> <!-- /.h-attr-side-panel-inner -->
							</div>
							<!-- End header attributes side panel -->

						</li>
						<!-- End header attributes side panel holder -->

						<!-- Begin mobile menu toggle button (tt-main-menu) -->
						<li>
							<div id="tt-m-menu-toggle-btn">
								<span></span>
							</div>
						</li>
						<!-- End mobile menu toggle button -->

						<!-- Begin header attributes button (disabled on smaller screens!) -->
						<li class="hide-from-md">
							<a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="h-attr-button" target="_blank">Buy<span class="hide-from-lg"> This Theme</span>!</a>
						</li>
						<!-- End header attributes button -->
					</ul>
				</div>
				<!-- End header attributes -->

				<!-- ====================
				//// Begin main menu ////
				===================== -->
				<nav class="tt-main-menu">

					<!-- Collect the nav links for toggling 
					========================================
					* Use class "tt-submenu-dark" to enable submenu dark style.
					* Use class "tt-submenu-color" to enable submenu colored style.
					-->
					<div class="tt-menu-collapse tt-submenu-dark">
						<ul class="tt-menu-nav">

							<!-- Example of menu links without submenu (use only <li> elements!)
							=====================================================================
							<li class="active"><a href="">Link 1</a></li>
							<li><a href="">Link 2</a></li>
							<li><a href="">Link 3</a></li> 
							-->

							<!-- Begin submenu (submenu master)
							==================================== -->
							<li class="tt-submenu-wrap tt-submenu-master active">
								<a href="home-full-screen-slideshow.html#0">Home</a>
								<div class="tt-submenu">
									<ul class="tt-submenu-list">
										<li><a href="home-landing-1.html">Home Landing 1</a></li>
										<li><a href="home-landing-2.html">Home Landing 2</a></li>
										<li><a href="home-landing-3.html">Home Landing 3</a></li>
										<li class="active"><a href="home-full-screen-slideshow.html">Full Screen Slideshow</a></li>
										<li><a href="home-full-screen-single-image.html">Full Screen Image</a></li>
										<li><a href="home-full-screen-video.html">Full Screen Video</a></li>
									</ul> <!-- /.tt-submenu-list -->
								</div> <!-- /.tt-submenu -->
							</li>
							<!-- End submenu (sub-master) -->

							<!-- Begin submenu (submenu master)
							==================================== -->
							<li class="tt-submenu-wrap tt-submenu-master">
								<a href="home-full-screen-slideshow.html#0">About</a>
								<div class="tt-submenu">
									<ul class="tt-submenu-list">

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">About Us</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="about-us.html">About Us 1</a></li>
													<li><a href="about-us-2.html">About Us 2</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">About Me</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="about-me.html">About Me 1</a></li>
													<li><a href="about-me-2.html">About Me 2</a></li>
													<li><a href="about-me-3.html">About Me 3</a></li>
													<li><a href="about-me-4.html">About Me 4</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">The Team</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="team.html">The Team 1</a></li>
													<li><a href="team-2.html">The Team 2</a></li>
													<li><a href="team-3.html">The Team 3</a></li>
													<li><a href="team-4.html">The Team 4</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

									</ul> <!-- /.tt-submenu-list -->
								</div> <!-- /.tt-submenu -->
							</li>
							<!-- End submenu (sub-master) -->

							<!-- Begin submenu (submenu master)
							==================================== -->
							<li class="tt-submenu-wrap tt-submenu-master">
								<a href="home-full-screen-slideshow.html#0">Portfolio</a>
								<div class="tt-submenu">
									<ul class="tt-submenu-list">
										
										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Portfolio Grid</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="portfolio-grid-1.html">Portfolio Grid 1</a></li>
													<li><a href="portfolio-grid-2.html">Portfolio Grid 2</a></li>
													<li><a href="portfolio-grid-3.html">Portfolio Grid 3</a></li>
													<li><a href="portfolio-grid-4.html">Portfolio Grid 4</a></li>
													<li><a href="portfolio-grid-5.html">Portfolio Grid 5</a></li>
													<li><a href="portfolio-grid-6.html">Portfolio Grid 6</a></li>
													<li><a href="portfolio-grid-7.html">Portfolio Grid 7</a></li>
													<li><a href="portfolio-grid-no-crop.html">Grid No Crop</a></li>
													<li><a href="portfolio-grid-one-column-1.html">Grid One Column 1</a></li>
													<li><a href="portfolio-grid-one-column-2.html">Grid One Column 2</a></li>
													<li><a href="portfolio-grid-styles.html">Grid Item Styles</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Portfolio List</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="portfolio-list-1.html">Portfolio List 1</a></li>
													<li><a href="portfolio-list-2.html">Portfolio List 2</a></li>
													<li><a href="portfolio-list-3.html">Portfolio List 3</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Portfolio Carousel</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="portfolio-carousel-1.html">Portfolio Carousel 1</a></li>
													<li><a href="portfolio-carousel-2.html">Portfolio Carousel 2</a></li>
													<li><a href="portfolio-carousel-3.html">Portfolio Carousel 3</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Portfolio Single</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="portfolio-single-1.html">Portfolio Single 1</a></li>
													<li><a href="portfolio-single-2.html">Portfolio Single 2</a></li>
													<li><a href="portfolio-single-3.html">Portfolio Single 3</a></li>
													<li><a href="portfolio-single-4.html">Portfolio Single 4</a></li>
													<li><a href="portfolio-single-5.html">Portfolio Single 5</a></li>
													<li><a href="portfolio-single-6.html">Portfolio Single 6</a></li>
													<li><a href="portfolio-single-7.html">Portfolio Single 7</a></li>
													<li><a href="portfolio-single-8.html">Portfolio Single 8</a></li>
													<li><a href="portfolio-single-9.html">Portfolio Single 9</a></li>
													<li><a href="portfolio-single-10.html">Portfolio Single 10</a></li>
													<li><a href="portfolio-single-11.html">Portfolio Single 11</a></li>
													<li><a href="portfolio-single-12.html">Portfolio Single 12</a></li>
													<li><a href="portfolio-single-grid-no-crop.html">Single Grid No Crop</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Portfolio Archive</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="portfolio-archive.html">Portfolio Archive 1</a></li>
													<li><a href="portfolio-archive-2.html">Portfolio Archive 2</a></li>
													<li><a href="portfolio-archive-3.html">Portfolio Archive 3</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<li><a href="portfolio-slideshow.html">Portfolio Slideshow</a></li>

									</ul> <!-- /.tt-submenu-list -->
								</div> <!-- /.tt-submenu -->
							</li>
							<!-- End submenu (sub-master) -->

							<!-- Begin submenu (submenu master)
							==================================== -->
							<li class="tt-submenu-wrap tt-submenu-master">
								<a href="home-full-screen-slideshow.html#0">Blog</a>
								<div class="tt-submenu">
									<ul class="tt-submenu-list">

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Blog List</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="blog-list-classic.html">Classic</a></li>
													<li><a href="blog-list-simple.html">Classic Simple</a></li>
													<li><a href="blog-list-grid.html">Grid</a></li>
													<li><a href="blog-list-grid-sidebar.html">Grid + Sidebar</a></li>
													<li><a href="blog-list-grid-fluid.html">Grid Fluid</a></li>
													<li><a href="blog-list-grid-fluid-sidebar.html">Grid Fluid + Sidebar</a></li>
													<li><a href="blog-list-thumbnails.html">Thumbnails List</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Blog Single Post</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="blog-single.html">Single Post Style 1</a></li>
													<li><a href="blog-single-2.html">Single Post Style 2</a></li>
													<li><a href="blog-single-3.html">Single Post Style 3</a></li>
													<li><a href="blog-single-4.html">Single Post Style 4</a></li>
													<li><a href="blog-single-5.html">Single Post Style 5</a></li>
													<li><a href="blog-single-simple.html">Single Post Simple</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<li><a href="blog-archive.html">Blog Archive</a></li>

									</ul> <!-- /.tt-submenu-list -->
								</div> <!-- /.tt-submenu -->
							</li>
							<!-- End submenu (sub-master) -->

							<!-- Begin submenu (submenu master)
							==================================== -->
							<li class="tt-submenu-wrap tt-submenu-master">
								<a href="home-full-screen-slideshow.html#0">Contact</a>
								<div class="tt-submenu">
									<ul class="tt-submenu-list">
										<li><a href="contact.html">Contact Style 1</a></li>
										<li><a href="contact-2.html">Contact Style 2</a></li>
										<li><a href="contact-3.html">Contact Style 3</a></li>
										<li><a href="contact-4.html">Contact Style 4</a></li>
										<li><a href="contact-5.html">Contact Style 5</a></li>
									</ul> <!-- /.tt-submenu-list -->
								</div> <!-- /.tt-submenu -->
							</li>
							<!-- End submenu (sub-master) -->

							<!-- Begin submenu (submenu master)
							==================================== -->
							<li class="tt-submenu-wrap tt-submenu-master">
								<a href="home-full-screen-slideshow.html#0">More</a>
								<div class="tt-submenu">
									<ul class="tt-submenu-list">

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Header Menu</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">

													<!-- Begin submenu
													=================== -->
													<li class="tt-submenu-wrap">
														<a href="home-full-screen-slideshow.html#0">Main Menu</a>
														<div class="tt-submenu">
															<ul class="tt-submenu-list">
																<li><a href="menu-align-left.html">Align Left</a></li>
																<li><a href="menu-align-right.html">Align Right</a></li>
																<li><a href="menu-align-center.html">Align Center</a></li>
																<li><a href="menu-submenu-dark.html">Submenu Dark</a></li>
																<li><a href="menu-submenu-light.html">Submenu Light</a></li>
																<li><a href="menu-submenu-color.html">Submenu Color</a></li>
															</ul> <!-- /.tt-submenu-list -->
														</div> <!-- /.tt-submenu -->
													</li>
													<!-- End submenu -->

													<!-- Begin submenu
													=================== -->
													<li class="tt-submenu-wrap">
														<a href="home-full-screen-slideshow.html#0">Overlay Menu</a>
														<div class="tt-submenu">
															<ul class="tt-submenu-list">
																<li><a href="portfolio-carousel-1.html">Slide Top</a></li>
																<li><a href="portfolio-carousel-2.html">Slide Bottom</a></li>
																<li><a href="about-me-2.html">Slide Left</a></li>
																<li><a href="portfolio-slideshow.html">Slide Right</a></li>
																<li><a href="home-full-screen-single-image.html">Slide Left Half</a></li>
																<li><a href="portfolio-list-3.html">Slide Right Half</a></li>
																<li><a href="portfolio-list-2.html">Zoom In</a></li>
															</ul> <!-- /.tt-submenu-list -->
														</div> <!-- /.tt-submenu -->
													</li>
													<!-- End submenu -->

												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Dummy Pages</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="page-dummy-classic.html">Classic</a></li>
													<li><a href="page-dummy-classic-sidebar-left.html">Classic Sidebar Left</a></li>
													<li><a href="page-dummy-classic-sidebar-right.html">Classic Sidebar Right</a></li>
													<li><a href="page-dummy-modern.html">Modern</a></li>
													<li><a href="page-dummy-modern-fluid.html">Modern Fluid</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">FAQ</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="page-faq-sidebar-left.html">FAQ Sidebar Left</a></li>
													<li><a href="page-faq-sidebar-right.html">FAQ Sidebar Right</a></li>
													<li><a href="page-faq.html">FAQ No Sidebar</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">404 Error</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="page-404.html">404 Error Style 1</a></li>
													<li><a href="page-404-2.html">404 Error Style 2</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Services</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="services.html">Services Style 1</a></li>
													<li><a href="services-2.html">Services Style 2</a></li>
													<li><a href="services-3.html">Services Style 3</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Pricing</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="page-pricing-3-col.html">Pricing 3 Columns</a></li>
													<li><a href="page-pricing-4-col.html">Pricin 4 Columns</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Search Results</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="search-results.html">Search Results 1</a></li>
													<li><a href="search-results-2.html">Search Results 2</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Password Protected</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="page-password.html">Password Protected 1</a></li>
													<li><a href="page-password-2.html">Password Protected 2</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Login/Register</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="page-login-1.html">Login 1</a></li>
													<li><a href="page-login-2.html">Login 2</a></li>
													<li><a href="page-register-1.html">Register 1</a></li>
													<li><a href="page-register-2.html">Register 2</a></li>
													<li><a href="page-lost-password-1.html">Lost Password 1</a></li>
													<li><a href="page-login-2.html">Lost Password 2</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

										<li><a href="footer-styles.html">Footer Styles</a></li>

										<!-- Begin submenu
										=================== -->
										<li class="tt-submenu-wrap">
											<a href="home-full-screen-slideshow.html#0">Multilevel Submenu</a>
											<div class="tt-submenu">
												<ul class="tt-submenu-list">
													<li><a href="home-full-screen-slideshow.html">Dummy link 1</a></li>
													<li><a href="home-full-screen-slideshow.html">Dummy link 2</a></li>

													<!-- Begin submenu
													=================== -->
													<li class="tt-submenu-wrap">
														<a href="home-full-screen-slideshow.html#0">Dummy link 3</a>
														<div class="tt-submenu">
															<ul class="tt-submenu-list">
																<li><a href="home-full-screen-slideshow.html">Dummy link 1</a></li>
																<li><a href="home-full-screen-slideshow.html">Dummy link 2</a></li>

																<!-- Begin submenu
																=================== -->
																<li class="tt-submenu-wrap">
																	<a href="home-full-screen-slideshow.html#0">Dummy link 3</a>
																	<div class="tt-submenu">
																		<ul class="tt-submenu-list">
																			<li><a href="home-full-screen-slideshow.html">Dummy link 1</a></li>
																			<li><a href="home-full-screen-slideshow.html">Dummy link 2</a></li>
																			<li><a href="home-full-screen-slideshow.html">Dummy link 3</a></li>
																			<li><a href="home-full-screen-slideshow.html">Dummy link 4</a></li>
																			<li><a href="home-full-screen-slideshow.html">Dummy link 5</a></li>
																		</ul> <!-- /.tt-submenu-list -->
																	</div> <!-- /.tt-submenu -->
																</li>
																<!-- End submenu -->

																<li><a href="home-full-screen-slideshow.html">Dummy link 4</a></li>
																<li><a href="home-full-screen-slideshow.html">Dummy link 5</a></li>
															</ul> <!-- /.tt-submenu-list -->
														</div> <!-- /.tt-submenu -->
													</li>
													<!-- End submenu -->

													<li><a href="home-full-screen-slideshow.html">Dummy link 4</a></li>
													<li><a href="home-full-screen-slideshow.html">Dummy link 5</a></li>
												</ul> <!-- /.tt-submenu-list -->
											</div> <!-- /.tt-submenu -->
										</li>
										<!-- End submenu -->

									</ul> <!-- /.tt-submenu-list -->
								</div> <!-- /.tt-submenu -->
							</li>
							<!-- End submenu (sub-master) -->

						</ul> <!-- /.tt-menu-nav -->
					</div> <!-- /.tt-menu-collapse -->

				</nav> 
				<!-- End main menu -->

			</div>
			<!-- End header inner -->

		</header>
		<!-- End header -->


		<!-- *************************************
		*********** Begin body content *********** 
		************************************** -->
		<div id="body-content">


			<!-- ==========================
			///// Begin intro section /////
			===============================
			* Use classes "intro-xs", "intro-sm", "intro-lg" "intro-xlg" or "intro-full" to set intro size.
			* Use class "intro-full-m" to set intro size for small screens only.
			-->
			<section id="tt-intro" class="intro-full">
				<div class="tt-intro-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->

					<!-- Begin content carousel (https://owlcarousel2.github.io/OwlCarousel2/)
					====================================================================
					* Use class "nav-outside" for outside nav (requires boxed layout).
					* Use class "nav-outside-top" for outside top nav (requires enough space at the top of the carousel).
					* Use class "nav-bottom-right" for bottom right nav.
					* Use class "nav-rounded" for rounded nav.
					* Use class "nav-light" to enable nav light style.
					* Use class "dots-outside" for outside dots (requires enough space at the bottom of the carousel).
					* Use class "dots-left", "dots-right" or "dots-center-right" to align dots.
					* Use class "dots-rounded" for rounded dots.
					* Use class "owl-mousewheel" to enable mousewheel support.
					* Use class "cursor-grab" to enable cursor grab icon (no effect on links!).
					* Use class "cc-hover-zoom" to enable carousel items hover effect.
					================================================================
					* Available carousel data attributes:
							data-items="5".......................(items visible on desktop)
							data-tablet-landscape="4"............(items visible on mobiles)
							data-tablet-portrait="3".............(items visible on mobiles)
							data-mobile-landscape="2"............(items visible on tablets)
							data-mobile-portrait="1".............(items visible on tablets)
							data-loop="true".....................(true/false)
							data-margin="10".....................(space between items)
							data-center="true"...................(true/false)
							data-start-position="0"..............(item start position)
							data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css') }}/)
							data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css') }}/)
							data-mouse-drag="false"..............(true/false)
							data-touch-drag="false"..............(true/false)
							data-autoheight="true"...............(true/false)
							data-autoplay="true".................(true/false)
							data-autoplay-timeout="5000".........(milliseconds)
							data-autoplay-hover-pause="true".....(true/false)
							data-autoplay-speed="800"............(milliseconds)
							data-drag-end-speed="800"............(milliseconds)
							data-nav="true"......................(true/false)
							data-nav-speed="800".................(milliseconds)
							data-dots="false"....................(true/false)
							data-dots-speed="800"................(milliseconds)
					-->
					<div class="owl-carousel cursor-grab bg-dark nav-bottom-right" data-lazy-load="true" data-items="1" data-loop="true" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-timeout="8000" data-animate-in="fadeIn" data-animate-out="fadeOut">

						<!-- Begin carousel item 
						========================= -->
						<div class="cc-item">

							<!-- Begin intro image 
							=======================
							* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
							-->
							<div class="intro-image-wrap parallax-6">
								<div class="intro-image bg-dark bg-image owl-lazy" data-src="{{ ('front/assets/img/page-header/page-header-bg-23.jpg') }}">
									
									<!-- Element cover 
									===================
									* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
									* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
									* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
									-->
									<div class="cover cover-opacity-5"></div>

								</div> <!-- /.intro-image -->
							</div>
							<!-- End intro image wrap -->

							<!-- Begin intro caption 
							=========================
							* Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right". 
							* Size classes: "intro-caption-xs", "intro-caption-sm", "intro-caption-lg", "intro-caption-xlg", "intro-caption-xxlg".
							* Use class "parallax-1" up to "parallax-6" to enable parallax effect (no effect on mobile devices!).
							* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scrolls (no effect on mobile devices!).
							-->
							<div class="intro-caption-wrap caption-animate intro-caption-lg bottom-left parallax-4">
								<div class="intro-caption-holder">
									<div class="intro-caption center">
										<h1 class="intro-title">What Are You Waiting For?</h1>
										<h2 class="intro-subtitle">Build your beautiful portfolio website today!</h2>

										<!-- Begin intro description (recommended max 170 characters!) 
										============================= -->
										<div class="intro-description">
											Aivo – is a complete HTML5 and CSS3 website template. It fits perfectly for freelancers, artists and design agencies. It looks great with all types of devices.
										</div>
										<!-- End intro-description -->

										<!-- Begin intro buttons -->
										<div class="intro-buttons">
											<a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="btn btn-primary margin-top-5 margin-right-10" target="_blank">Buy It Now!</a> 
											<a href="home-full-screen-slideshow.html" class="btn btn-white-bordered margin-top-5">Discover More</a>
										</div>
										<!-- End intro buttons -->

									</div> <!-- /.intro-caption -->
								</div> <!-- /.intro-caption-holder -->
							</div>
							<!-- End intro caption wrap -->

						</div>
						<!-- End carousel item -->

						<!-- Begin carousel item 
						========================= -->
						<div class="cc-item">

							<!-- Begin intro image 
							=======================
							* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
							-->
							<div class="intro-image-wrap parallax-6">
								<div class="intro-image bg-dark bg-image owl-lazy" data-src="{{ ('front/assets/img/page-header/page-header-bg-6.jpg') }}">
									
									<!-- Element cover 
									===================
									* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
									* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
									* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
									-->
									<div class="cover cover-opacity-5"></div>

								</div> <!-- /.intro-image -->
							</div>
							<!-- End intro image wrap -->

							<!-- Begin intro caption 
							=========================
							* Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right". 
							* Size classes: "intro-caption-xs", "intro-caption-sm", "intro-caption-lg", "intro-caption-xlg", "intro-caption-xxlg".
							* Use class "parallax-1" up to "parallax-6" to enable parallax effect (no effect on mobile devices!).
							* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scrolls (no effect on mobile devices!).
							-->
							<div class="intro-caption-wrap caption-animate intro-caption-lg bottom-left parallax-4">
								<div class="intro-caption-holder">
									<div class="intro-caption center">
										<h1 class="intro-title">Start Growing Your Business</h1>
										<h2 class="intro-subtitle">Build your beautiful portfolio website today!</h2>

										<!-- Begin intro description (recommended max 170 characters!) 
										============================= -->
										<div class="intro-description">
											Aivo – is a complete HTML5 and CSS3 website template. It fits perfectly for freelancers, artists and design agencies. It looks great with all types of devices.
										</div>
										<!-- End intro-description -->

										<!-- Begin intro buttons -->
										<div class="intro-buttons">
											<a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="btn btn-primary margin-top-5 margin-right-10" target="_blank">Buy It Now!</a> 
											<a href="home-full-screen-slideshow.html" class="btn btn-white-bordered margin-top-5">Discover More</a>
										</div>
										<!-- End intro buttons -->

									</div> <!-- /.intro-caption -->
								</div> <!-- /.intro-caption-holder -->
							</div>
							<!-- End intro caption wrap -->

						</div>
						<!-- End carousel item -->

						<!-- Begin carousel item 
						========================= -->
						<div class="cc-item">

							<!-- Begin intro image 
							=======================
							* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
							-->
							<div class="intro-image-wrap parallax-6">
								<div class="intro-image bg-dark bg-image owl-lazy" data-src="{{ ('front/assets/img/page-header/page-header-bg-17.jpg') }}">
									
									<!-- Element cover 
									===================
									* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
									* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
									* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
									-->
									<div class="cover cover-opacity-5"></div>

								</div> <!-- /.intro-image -->
							</div>
							<!-- End intro image wrap -->

							<!-- Begin intro caption 
							=========================
							* Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right". 
							* Size classes: "intro-caption-xs", "intro-caption-sm", "intro-caption-lg", "intro-caption-xlg", "intro-caption-xxlg".
							* Use class "parallax-1" up to "parallax-6" to enable parallax effect (no effect on mobile devices!).
							* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scrolls (no effect on mobile devices!).
							-->
							<div class="intro-caption-wrap caption-animate intro-caption-lg bottom-left parallax-4">
								<div class="intro-caption-holder">
									<div class="intro-caption intro-caption-lg center">
										<h1 class="intro-title">Show Yourself to the World</h1>
										<h2 class="intro-subtitle">Build your beautiful portfolio website today!</h2>

										<!-- Begin intro description (recommended max 170 characters!) 
										============================= -->
										<div class="intro-description">
											Aivo – is a complete HTML5 and CSS3 website template. It fits perfectly for freelancers, artists and design agencies. It looks great with all types of devices.
										</div>
										<!-- End intro-description -->

										<!-- Begin intro buttons -->
										<div class="intro-buttons">
											<a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="btn btn-primary margin-top-5 margin-right-10" target="_blank">Buy It Now!</a> 
											<a href="home-full-screen-slideshow.html" class="btn btn-white-bordered margin-top-5">Discover More</a>
										</div>
										<!-- End intro buttons -->

									</div> <!-- /.intro-caption -->
								</div> <!-- /.intro-caption-holder -->
							</div>
							<!-- End intro caption wrap -->

						</div>
						<!-- End carousel item -->

					</div>
					<!-- End content carousel -->

				</div> <!-- /.tt-intro-inner -->
			</section>
			<!-- End intro section -->









			<!-- =======================================
			///// Begin services section (style-1) /////
			============================================ 
			* Add class "ss-light" if you use a dark background.
			-->
			<section id="services-section" class="services-style-1">
				<div class="services-inner tt-wrap">

					<!-- Begin info box wrap 
					========================= 
					* Use class "ib-style-2" to change info box style.
					* Use class "ib-boxed" enable info box boxed style.
					* Use class "ib-icon-color" to enable icon colored style (no effect with class: "ib-icon-bg-color").
					* Use class "ib-icon-bg-shape" to enable icon background shape (no effect with class: "ib-icon-bg-color").
					* Use class "ib-icon-bg-color" to enable icon background color style.
					* Use class "ib-icon-rounded" to enable icon rounded style (class "ib-icon-bg-color" is required!).
					* Use class "ib-light" if the background is dark.
					-->
					<div class="info-box-wrap ib-boxed ib-icon-color">
						
						<div class="row">
							<div class="col-sm-4">

								<!-- Begin info box -->
								<div class="info-box">
									<span class="info-box-icon"><span class="lnr lnr-screen"></span></span>
									<div class="info-box-info">
										<h3 class="info-box-heading"><a href="services-3.html">Web Design</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Aenean ac consectetur quam. Donec malesuada lacus nec ullamcorper pellentesque praesent ulis. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->

							<div class="col-sm-4">

								<!-- Begin info box -->
								<div class="info-box">
									<span class="info-box-icon"><span class="lnr lnr-cog"></span></span>
									<div class="info-box-info">
										<h3 class="info-box-heading"><a href="services-3.html">Web Development</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Integer at condimentum orci, ut euismod ante. Class aptent taciti sociosqu ad litora torquent. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->

							<div class="col-sm-4">

								<!-- Begin info box -->
								<div class="info-box">
									<span class="info-box-icon"><span class="lnr lnr-camera-video"></span></span>
									<div class="info-box-info">
										<h3 class="info-box-heading"><a href="services-3.html">Motion Graphics</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessit officia tempor. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->
						</div> <!-- /.row -->

						<div class="row">
							<div class="col-sm-4">

								<!-- Begin info box -->
								<div class="info-box">
									<span class="info-box-icon"><span class="lnr lnr-leaf"></span></span>
									<div class="info-box-info">
										<h3 class="info-box-heading"><a href="services-3.html">Illustrations</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Aenean ac consectetur quam. Donec malesuada lacus nec ullamcorper pellentesque praesent ulis. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->

							<div class="col-sm-4">

								<!-- Begin info box -->
								<div class="info-box">
									<span class="info-box-icon"><span class="lnr lnr-users"></span></span>
									<div class="info-box-info">
										<h3 class="info-box-heading"><a href="services-3.html">Marketing</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Integer at condimentum orci, ut euismod ante. Class aptent taciti sociosqu ad litora torquent. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->

							<div class="col-sm-4">

								<!-- Begin info box -->
								<div class="info-box">
									<span class="info-box-icon"><span class="lnr lnr-pie-chart"></span></span>
									<div class="info-box-info">
										<h3 class="info-box-heading"><a href="services-3.html">Analytics</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessit officia tempore. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->
						</div> <!-- /.row -->

					</div>
					<!-- End info box wrap -->

				</div> <!-- /.services-inner -->
			</section>













			<section class="call-to-action-section cta-style-2 bg-image" style="background-image: url({{ ('front/assets/img/pattern/pt-2.jpg') }});">

				<!-- Element cover 
				===================
				* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
				* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
				* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
				-->
				<!-- <div class="cover cover-opacity-4"></div> -->

				<div class="cta-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->
					<div class="row">
						<div class="col-md-6">

							<!-- Begin tt-heading 
							====================== 
							* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
							* Use class "text-center" or "text-right" to align tt-heading.
							* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
							-->
							<div class="tt-heading tt-heading-xxlg">
								<div class="tt-heading-inner">
									<h1 class="tt-heading-title">What Next?</h1>
									<div class="tt-heading-subtitle">Interested in working with us?</div>
									
									<!-- Begin zig-zag separator 
									============================= 
									* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
									* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
									-->
									<div class="zig-zag-separator">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</div>
									<!-- End zig-zag separator -->

								</div> <!-- /.tt-heading-inner -->
							</div>
							<!-- End tt-heading -->

						</div> <!-- /.col -->

						<div class="col-md-6">

							<p>Fusce et velit sed augue rhoncus tempor. Sed ac lacinia augue, nec lacinia felis. Sed sit amet diam leo. Praesent vel malesuada arcu. Donec mattis, arcu vel vehicula feugiat sem turpis.</p>
							
							<div class="margin-top-30">
								<a href="contact.html" class="btn btn-primary btn-lg margin-top-5">Let's Work Together!</a>
							</div>

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.cta-inner -->
			</section>











  <!--  Blog qismi -->
  <div class="tt-heading tt-heading-lg text-center padding-on">
	<div class="tt-heading-inner">
		<h1 class="tt-heading-title">Pricing Plans</h1>
		<div class="tt-heading-subtitle">Please choose your pricing plan</div>
		
		<!-- Begin zig-zag separator 
		============================= 
		* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
		* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
		-->
		<div class="zig-zag-separator">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<!-- End zig-zag separator -->

		<div class="tt-heading-text">
			<p>Duis mattis quam quis quam cursus, a rutrum ante luctus. Phasellus porta ornare enim ac euismod. Nulla fringilla lectus ac tincidunt viverra.</p>
		</div>

	</div> <!-- /.tt-heading-inner -->
</div>

  <div class="blog-list-inner" >  <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->

	<div class="row no-margin">
	
		<!-- Content column -->
		<div class="col-md-12 no-padding-left no-padding-right">

			<div class="isotope-wrap">
				
				<!-- Begin isotope
				===================
				* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4", "gutter-5" or "gutter-6" to add more space between items.
				* Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
				-->
				<div class="isotope col-4 gutter-3">

					<!-- Begin isotope items wrap 
					============================== -->
					<div style="position: relative; height: 1065.63px;" class="isotope-items-wrap no-margin">

						<!-- Grid sizer (do not remove!!!) -->
						<div class="grid-sizer"></div>


						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 0px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a style="background-image: url(&quot;{{ ('front/assets/img/blog/list/blog-1.jpg') }}&quot;);" href="blog-single.html" class="bl-item-image bg-image lazy"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Web Design</a> <a href="blog-archive.html">Coding</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Responsive Web Design: 50 Examples and Best Practices</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 28, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 10</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 331.85px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-2.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>25 Free and Premium Admin HTML Website Templates and Layouts</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 22, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 66</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 663.7px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-3.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Coding</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Why Designers and Web Developers Must Work Together</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 14, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Kate Dixon">Kate Dixon</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 3</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 995.55px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-4.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Time-Saving Tools and Resources for Freelance Designers</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 11, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 0</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 0px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-5.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Tutorials</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>How to Create a Flat Cityscape in Adobe Illustrator</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 04, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 331.85px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-7.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>21 tips for Creating a Great Personal Online Portfolio</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 04, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Kate Dixon">Kate Dixon</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 663.7px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-9.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Coding</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Convert PSD to HTML – Useful Resources for Web Designers</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 04, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Kate Dixon">Kate Dixon</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 995.55px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-6.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Premium Web Tools &amp; Services Recommended By Professionals</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 02, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

					</div>
					<!-- End isotope items wrap -->

				</div>
				<!-- End isotope -->

			</div> <!-- /.isotope-wrap -->


			<!-- Begin tt-pagination 
			========================= 
			* Use class "tt-pagin-center" or "tt-pagin-right" to align pagination 
			* Use class "tt-pagin-rounded" to enable pagination rounded style -->
			<div class="tt-pagination-wrap">
				<ul class="tt-pagination">
					
					<li class="active center"><a href="blog-list-grid-fluid.html#0">Barcha yangilik va elonlarni ko'rish</a></li>
				   
				</ul>

			</div>
			<!-- End tt-pagination -->

		</div> <!-- /.col (Content column) -->

	</div> <!-- /.row -->

</div> <!-- /.blog-list-inner -->


















					<!-- Begin split box (based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height)
					======================= -->
					<div class="split-box">
						<div class="container-fluid">
							<div class="row">
								<div class="row-lg-height bg-dark-4 text-white">

									<!-- Column (Split box image) 
									==============================
									* Use class "frame-left" or "frame-right" to enable split box image frame (Effect only on element boxed layout!).
									* Use class "sbi-shadow" to enable split box image shadow effect (Effect only on element boxed layout!).
									-->
									<div class="col-lg-push-6 col-lg-6 col-lg-height split-box-image no-padding bg-image lazy" data-src="{{ ('front/assets/img/misc/testimonials-bg-2.jpg') }}">

										<!-- Split box image height
										============================
										* You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-90" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css') }}" file for more info. Note: class "sbi-height" is required.
										-->
										<div class="sbi-height padding-height-70"></div>

									</div> <!-- /.col -->

									<!-- Column (use class "col-lg-top", "col-lg-middle" or "col-lg-bottom" to align content) -->
									<div class="col-lg-pull-6 col-lg-6 col-lg-height col-lg-middle no-padding">

										<!-- Begin split box content 
										=============================
										* Depends on which side the content is located use class "sb-content-left" or "sb-content-right".
										* Use class "sb-shifted-left" or "sb-shifted-right" to enable shifted content (not recommended for long content).
										* Use class "sb-content-color" to enable content box colored style.
										-->
										<div class="split-box-content sb-content-left">
											
											<!-- Begin info box wrap 
											========================= 
											* Use class "ib-style-2" to change info box style.
											* Use class "ib-boxed" enable info box boxed style.
											* Use class "ib-icon-color" to enable icon colored style (no effect with class: "ib-icon-bg-color").
											* Use class "ib-icon-bg-shape" to enable icon background shape (no effect with class: "ib-icon-bg-color").
											* Use class "ib-icon-bg-color" to enable icon background color style.
											* Use class "ib-icon-rounded" to enable icon rounded style (class "ib-icon-bg-color" is required!).
											* Use class "ib-light" if the background is dark.
											-->
											<div class="info-box-wrap ib-light ib-style-2">
												
												<div class="row">
													<div class="col-sm-6">

														<!-- Begin info box -->
														<div class="info-box">
															<span class="info-box-icon"><span class="lnr lnr-screen"></span></span>
															<div class="info-box-info">
																<h3 class="info-box-heading"><a href="home-landing-3.html">Web Design</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Aenean ac consectetur quam. Donec malesuada lacus nec ullamcorper pellentesque praesent ulis. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->

													<div class="col-sm-6">

														<!-- Begin info box -->
														<div class="info-box">
															<span class="info-box-icon"><span class="lnr lnr-cog"></span></span>
															<div class="info-box-info">
																<h3 class="info-box-heading"><a href="home-landing-3.html">Web Development</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Integer at condimentum orci, ut euismod ante. Class aptent taciti sociosqu ad litora torquent. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->

													<div class="col-sm-6">

														<!-- Begin info box -->
														<div class="info-box">
															<span class="info-box-icon"><span class="lnr lnr-camera-video"></span></span>
															<div class="info-box-info">
																<h3 class="info-box-heading"><a href="home-landing-3.html">Motion Graphics</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessit officia tempor. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->

													<div class="col-sm-6">

														<!-- Begin info box -->
														<div class="info-box">
															<span class="info-box-icon"><span class="lnr lnr-leaf"></span></span>
															<div class="info-box-info">
																<h3 class="info-box-heading"><a href="home-landing-3.html">Illustrations</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessit officia tempor. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->
												</div> <!-- /.row -->

											</div>
											<!-- End info box wrap -->

										</div>
										<!-- End split box content -->

									</div> <!-- /.col -->

								</div> <!-- /.row-height -->
							</div> <!-- /.row -->
						</div> <!-- /.container -->
					</div>
					<!-- End split box -->

				</div> <!-- /.page-section-inner -->
			</section>
			<!-- End page section -->






            <div class="portfolio-list-inner isotope-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->
					
                <!-- Begin isotope
                ===================
                * Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4", "gutter-5" or "gutter-6" to add more space between items.
                * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
                -->
                <div class="isotope col-4 gutter-3">
                    
                    <!-- Begin isotope top content -->
                    <div class="isotope-top-content">

                        <!-- Begin isotope categories (if you don't want to use a isotope filter then you can use the category list instead to present portfolio categories on separate pages. Just uncomment if needed. Note: do not forget to remove isotope filter code!).
                        ================================= 
                        * Add class "active" to <li> if you need active link on current page.
                        * Use class "iso-cat-center" or "iso-cat-right" to align category list.
                        -->
                        <!-- <div class="isotope-categories-wrap">
                            <ul class="isotope-categories">
                                <li class="icl-title"><span>Categories: </span></li>
                                <li class="active"><a href="">Branding</a></li>
                                <li><a href="">Print</a></li>
                                <li><a href="">Digital</a></li>
                                <li><a href="">Motion</a></li>
                            </ul>
                        </div> -->
                        <!-- End isotope categories -->


                        <!-- Begin isotope filter
                        ==========================
                        * Use class "fi-btn" to enable filter button (default style).
                        * Use class "fi-center" or "fi-right" to align filter ("fi-center"= no effect on "fi-btn").
                        * Use class "fi-btn-dark" to enable filter button dark style (class "fi-btn" is required!).
                        * Use class "fi-btn-light" to enable filter button light style (class "fi-btn" is required!).
                        * Use class "fi-btn-tansparent-dark" to enable filter button transparent dark style (class "fi-btn" is required! No effect on smaller screens!).
                        * Use class "fi-btn-tansparent-light" to enable filter button transparent light style (class "fi-btn" is required! No effect on smaller screens!).
                        * Use class "fi-btn-dropdown-dark" to enable filter button dropdown dark style (class "fi-btn" is required!).
                        * Use class "fi-btn-dropdown-light" to enable filter button dropdown light style (class "fi-btn" is required!).
                        -->
                        <div class="isotope-filter fi-btn fi-right fi-btn-dropdown-dark">
                            <div class="isotope-filter-button">
                                <span class="ifb-icon"><span class="lnr lnr-funnel"></span></span>
                                <span class="ifb-icon-close"><i class="fas fa-times"></i></span> <!-- effect on small screens!) -->

                                <!-- Begin filter button text
                                ==============================
                                * Use class "hide-from-xs" to disable button text on small screens.
                                * Use class "hide" to disable button text permanently.
                                -->
                                <span class="ifb-text">Filter</span>
                                <!-- End filter button text -->

                            </div> <!-- /.isotope-filter-button -->

                            <!-- Begin isotope filter links -->
                            <ul class="isotope-filter-links">
                                <li class="ifl-title"><span>Filter: </span></li>
                                <li><button class="active" data-filter="*">Show All</button></li>
                                <li><button data-filter=".branding">Branding</button></li>
                                <li><button data-filter=".print">Print</button></li>
                                <li><button data-filter=".digital">Digital</button></li>
                                <li><button data-filter=".motion">Motion</button></li>
                            </ul>
                            <!-- End isotope filter links -->
                        </div>
                        <!-- End isotope filter -->

                    </div>
                    <!-- End isotope top content -->

                    <!-- Begin isotope items wrap 
                    ==============================
                    * Use class "pli-alter-1", "pli-alter-2", "pli-alter-3", "pli-alter-4" or "pli-alter-5" to change portfolio list item style. Note: style "pli-alter-4" is no effect on small screens (for better user experience)!
                    * Use class "pli-dark" to enable dark hover overlay (effect only with default hover overlay and "pli-alter-4", "pli-alter-5" classes!).
                    * Use class "pli-colored" or "pli-multi-colored" to enable colored hover overlay (effect only with default hover overlay and "pli-alter-4", "pli-alter-5" classes!).
                    * Use class "pli-frame" to enable image frames.
                    -->
                    <div style="position: relative; height: 888.683px;" class="isotope-items-wrap pli-dark pli-alter-4">

                        <!-- Grid sizer (do not remove!!!) -->
                        <div class="grid-sizer"></div>


                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 0px; top: 0px;" class="isotope-item digital">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-1.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-1.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-1.html">Elper Nomadis</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 328.4px; top: 0px;" class="isotope-item print">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-2.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-16.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-2.html">Futter Samantis</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Print</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 656.8px; top: 0px;" class="isotope-item branding">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-3.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-3.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-3.html">Tartumi Sandera Naomis</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 985.2px; top: 0px;" class="isotope-item digital">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-4.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-4.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->
                                    
                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-4.html">Tetera Laktus</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 656.8px; top: 199.083px;" class="isotope-item motion">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-5.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-5.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-5.html">Tant Saktra Memis</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Motion</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 985.2px; top: 199.083px;" class="isotope-item branding digital">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-6.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-17.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-6.html">Intuisa Jacobis Untra</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a>, <a href="portfolio-grid-no-crop.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 0px; top: 217.55px;" class="isotope-item digital">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-7.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-19.gif') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-7.html">Marevik Trastis</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 656.8px; top: 416.633px;" class="isotope-item branding">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-8.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-20.gif') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-8.html">Kampur &amp; Brena</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 328.4px; top: 439.233px;" class="isotope-item print">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-9.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-18.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-9.html">Ekona Rufu Tatemi Antem</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Print</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 0px; top: 472.05px;" class="isotope-item digital">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-1.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-10.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-1.html">Kakteil Nurk Um Akso</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 985.2px; top: 638.316px;" class="isotope-item branding motion">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-2.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-11.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-2.html">Gravitek Fucena Ekrem</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a>, <a href="portfolio-grid-no-crop.html">Motion</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 0px; top: 671.133px;" class="isotope-item digital branding">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-3.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-12.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-3.html">Lehitsesa Linnas</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a>, <a href="portfolio-grid-no-crop.html">Branding</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 656.8px; top: 671.133px;" class="isotope-item digital branding">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-4.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-15.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-4.html">Watres Boletum</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                    </div>
                    <!-- End isotope items wrap -->


                    <!-- Begin tt-pagination 
                    ========================= 
                    * Use class "tt-pagin-center" or "tt-pagin-right" to align pagination 
                    * Use class "tt-pagin-rounded" to enable pagination rounded style -->
                    <div class="tt-pagination-wrap tt-pagin-center">
                        <ul class="tt-pagination">
                           
                            <li class="active"><a href="portfolio-grid-no-crop.html#0">Barcha suratlarni ko'rish.</a></li>
                           
                        </ul>

                       
                    </div>
                    <!-- End tt-pagination -->

                    <!-- Begin isotope pagination (Note: "Load More" button is for design purposes only!)
                    ============================== -->
                    <!-- <div class="iso-load-more-wrap">
                        <div class="iso-load-more">
                            <button class="iso-load-more-button">Load More</button>
                        </div>
                    </div> -->
                    <!-- End isotope pagination -->
<hr>
                </div>
                <!-- End isotope -->

            </div> <!-- /.portfolio-list-inner (/.isotope-wrap) -->
        
            <section class="video-promo-section bg-image" style="background-image: url({{ ('front/assets/img/misc/misc-5.jpg') }});">

				<!-- Element cover 
				===================
				* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
				* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
				* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
				-->
				<div class="cover cover-opacity-5"></div>

				<div class="video-promo-inner tt-wrap">
					
					<!-- Begin video promo caption 
					=============================== -->
					<div class="video-promo-caption">

						<!-- Begin tt-heading 
						====================== 
						* Use class "text-center" or "text-right" to align tt-heading.
						* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
						-->
						<div class="tt-heading tt-heading-xlg text-center text-white">
							<div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->
								
									
								<h1 class="tt-heading-title">Video Promo</h1>
								<div class="tt-heading-subtitle">Watch our video presentation</div>
								
								<!-- Begin zig-zag separator 
								============================= 
								* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
								* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
								-->
								<!-- <div class="zig-zag-separator">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div> -->
								<!-- End zig-zag separator -->

							</div> <!-- /.tt-heading-inner -->
						</div>
						<!-- End tt-heading -->
					
						<!-- Begin video promo button
						==============================
						* Use class "vpb-animated" to enable button animation.
						* Note: Just add your Youtube or Vimeo video link. 
						-->
						<div class="video-promo-btn-wrap vpb-animated lightgallery">
							<a href="https://vimeo.com/9176726" class="video-promo-btn lg-trigger">
								<span class="lnr lnr-camera-video"></span>
							</a>
						</div>
						<!-- End video promo button -->

					</div>
					<!-- End video promo caption -->

				</div> <!-- /.video-promo-inner -->
			</section>
            
            
         <!-- ===========================
			///// Begin footer section /////
			================================
			* Use class "footer-dark" to enable dark footer.
			* Use class "no-margin-top" if needed. 
			-->
			<section id="footer" class="no-margin-top">
				<div class="footer-inner">
					<div class="footer-container tt-wrap">
						<div class="row">
							<div class="col-sm-12 col-md-3">

								<!-- Begin footer block (logo) -->
								<div class="footer-block">
									<div class="f-block-logo">
										<!-- logo images for big screens -->
										<a href="index.html" class="logo-dark"><img src="{{ ('front/assets/img/logo-dark.png') }}" alt="logo"></a>
										<a href="index.html" class="logo-light"><img src="{{ ('front/assets/img/logo-light.png') }}" alt="logo"></a>

										<!-- logo images for smaller screens -->
										<a href="index.html" class="logo-dark-m"><img src="{{ ('front/assets/img/logo-dark-m.png') }}" alt="logo"></a>
										<a href="index.html" class="logo-light-m"><img src="{{ ('front/assets/img/logo-light-m.png') }}" alt="logo"></a>
									</div>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-4 col-md-2">

								<!-- Begin footer block (links) -->
								<div class="footer-block">
									<h4 class="f-block-heading">Menu</h4>
									<ul class="f-block-links">
										<li><a href="about-us.html">About</a></li>
										<li><a href="portfolio-grid-1.html">Portfolio</a></li>
										<li><a href="blog-list-classic.html">Blog</a></li>
										<li><a href="page-faq-sidebar-right.html">FAQ</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-4 col-md-2">

								<!-- Begin footer block (social) -->
								<div class="footer-block">
									<h4 class="f-block-heading">Follow</h4>
									<ul class="f-block-links">
										<li><a href="https://www.facebook.com/themetorium" target="_blank">Facebook</a></li>
										<li><a href="https://twitter.com/Themetorium" target="_blank">Twitter</a></li>
										<li><a href="https://plus.google.com/+SiiliOnu" target="_blank">Google+</a></li>
										<li><a href="https://www.behance.net/Themetorium" target="_blank">Behance</a></li>
										<li><a href="https://dribbble.com/Themetorium" target="_blank">Dribbble</a></li>
									</ul>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-4 col-md-2">

								<!-- Begin footer block (text) -->
								<div class="footer-block">
									<h4 class="f-block-heading">Contact</h4>
									<div class="f-block-text">
										<p>121 King Street, Melbourne, Australia</p>
										<p>+123 456 789 000<br>
										<a href="mailto:info@youremail.com">info@youremail.com</a></p>
									</div>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-12 col-md-3">

								<!-- Begin footer block (text) -->
								<div class="footer-block">
									<h4 class="f-block-heading">About</h4>
									<div class="f-block-text padding-right-30">
										Sed non auctor magna. Nunc eu ultrices orci. Donec commodo ligula in massa ultricies volutpat. Fusce vel cursus lectus.
									</div>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div> <!-- /.footer-container -->

					<!-- Begin footer bottom -->
					<div class="footer-bottom">
						<div class="footer-container tt-wrap">
							<div class="row">
								<div class="col-md-6">

									<!-- Begin footer copyright -->
									<div class="footer-bottom-col-left">
										&copy; Aivo / All rights reserved
									</div>
									<!-- End footer copyright -->

								</div> <!-- /.col -->

								<div class="col-md-6">

									<div class="footer-bottom-col-right">
										Design by: <a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" target="_blank">Themetorium</a>
									</div>

								</div> <!-- /.col -->

							</div> <!-- /.row -->
						</div> <!-- /.footer-container -->
					</div>
					<!-- End footer bottom -->

				</div> <!-- /.footer-inner -->

				<!-- Scroll to top button -->
				<a href="home-full-screen-slideshow.html#body" class="scrolltotop sm-scroll" title="Scroll to top"></a>

			</section>
			<!-- End footer section -->

		</div>
		<!-- End body content -->



        

		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="{{ ('front/assets/vendor/jquery/jquery.min.js') }}"></script> <!--- jQuery JS (https://jquery.com) -->
		<script src="{{ ('front/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script> <!-- Bootstrap 3 JS (https://getbootstrap.com/docs/3.3/) -->

		<!-- Libs and Plugins JS -->
		<script src="{{ ('front/assets/vendor/animsition/js/animsition.min.js') }}"></script> <!-- Animsition JS (http://git.blivesta.com/animsition/) -->
		<script src="{{ ('front/assets/vendor/jquery.easing.min.js') }}"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
		<script src="{{ ('front/assets/vendor/isotope.pkgd.min.js') }}"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="{{ ('front/assets/vendor/imagesloaded.pkgd.min.js') }}"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
		<script src="{{ ('front/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script> <!-- Owl Carousel JS (http://www.owlcarousel.owlgraphic.com) -->
		<script src="{{ ('front/assets/vendor/jquery.mousewheel.min.js') }}"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->
		<script src="{{ ('front/assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js') }}"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
		<script src="{{ ('front/assets/vendor/jquery.dotdotdot.js') }}"></script> <!-- jQuery.dotdotdot JS (more info: https://github.com/FrDH/jQuery.dotdotdot) -->
		<script src="{{ ('front/assets/vendor/jquery.waypoints.min.js') }}"></script> <!-- Waypoints JS (more info: https://github.com/imakewebthings/waypoints) -->
		<script src="{{ ('front/assets/vendor/jquery.counterup.min.js') }}"></script> <!-- Count-Up JS (more info: https://github.com/ciromattia/jquery.counterup) -->
		<script src="{{ ('front/assets/vendor/lightgallery/js/lightgallery.min.js') }}"></script> <!-- lightGallery JS (http://sachinchoolur.github.io/lightGallery) -->
		<script src="{{ ('front/assets/vendor/lightgallery/js/lightgallery-all.min.js') }}"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
		<script src="{{ ('front/assets/vendor/jquery-lazy/js/jquery.lazy.min.js') }}"></script> <!-- jqueryLazy JS (http://jquery.eisbehr.de/lazy/) -->
		<script src="{{ ('front/assets/vendor/jquery-lazy/js/jquery.lazy.plugins.min.js') }}"></script> <!-- jqueryLazy Plugins JS (http://jquery.eisbehr.de/lazy/) -->

		<!-- Theme master JS -->
		<script src="{{ ('front/assets/js/theme.js') }}"></script>



		<!--==============================
		///// Begin Google Analytics /////
		============================== -->

		<!-- Paste your Google Analytics code here. 
		Go to http://www.google.com/analytics/ for more information. -->


		<!-- Global site tag (gtag.js') }}) - Google Analytics -->
        
        <!-- CODE BU YERGA QO'YILADI -->

		<!--==============================
		///// End Google Analytics /////
		============================== -->



	</body>
<!-- 


Haa manashu gapni nazarda tutgandim....

Siz shu yergaham ahamiyat bergan ekansiz demak siz sinchikovsiz.
Manga esa sinchikov odamlar umuman yoqmaydi shu sabab tezgina saytdan chiqib ketishingizni maslahat berardim.

Agar sayt qaysi CMS da qilingani sizni qiziqtirsa, homtama bo'lmang bu sayt Frameworkda qilingan qaysiligini esa o'ziz toping. 

-->
</html>