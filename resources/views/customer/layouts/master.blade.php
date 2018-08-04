<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Shop Lab907</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="YOURStore - Responsive HTML5 Template">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="favicon.ico">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<!-- External Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('external/slick/slick.css') }}">
		<link rel="stylesheet" href="{{ asset('external/slick/slick-theme.css') }}">
		<link rel="stylesheet" href="{{ asset('external/magnific-popup/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('external/bootstrap-select/bootstrap-select.css') }}">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('external/rs-plugin/css/settings.css') }}" media="screen" />
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/home.css') }}">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="{{ asset('font/style.css') }}">
		<!-- Head Libs -->	
		<!-- Modernizr -->
		<script src="{{ asset('external/modernizr/modernizr.js') }}"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
		<!-- Modernizr -->
		<script src="{{ asset('external/jquery/jquery-2.1.4.min.js') }}"></script> 
		<script src="{{ asset('external/modernizr/modernizr.js') }}"></script>
		<script type="text/javascript">
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
		</script>
		<style type="text/css">
			.error{
				color : red;
			}
		</style>



	</head>
	<body class="index">				  
		<div id="loader-wrapper">
			<div id="loader">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>
		<!-- Back to top -->
	    <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
	    <!-- /Back to top -->
	    <!-- mobile menu -->
		<div class="hidden">
			<nav id="off-canvas-menu">				
				<ul class="expander-list">				
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="index.html"><span class="act-underline">LAYOUT</span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links-layout" role="menu">												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-1.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 1 (Default)</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-02.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-2.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 2</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-03.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-3.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 3</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-04.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-4.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 4</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-05.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-5.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 5</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-06.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-6.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 6</span>
								</a>
								</span>											
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-07.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-7.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 7</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-08.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-8.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 8</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-09.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-9.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 9</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-10.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-10.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 10</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-11.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-11.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 11</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-12.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/layout-img-12.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 12</span>
								</a>
								</span>
							</li>
						</ul>
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="listing.html"><span class="act-underline">LISTING</span></a>
						</span>						
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing.html">
								<span class="figure"><img class="img-responsive" src="images/custom/listing-img-1.png" alt=""/></span>
								<span class="figcaption text-uppercase">left column</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing-left-right-col.html">
								<span class="figure"><img class="img-responsive" src="images/custom/listing-img-2.png" alt=""/></span>
								<span class="figcaption text-uppercase">left, right column</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing-col-right_03.html">
								<span class="figure"><img class="img-responsive" src="images/custom/listing-img-3.png" alt=""/></span>
								<span class="figcaption text-uppercase">right column</span>
								</a>
								</span>											
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing-without-col-04.html">
								<span class="figure"><img class="img-responsive" src="images/custom/listing-img-4.png" alt=""/></span>
								<span class="figcaption text-uppercase">without columns</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing-col-left-without-without-static-block_05.html">
								<span class="figure"><img class="img-responsive" src="images/custom/listing-img-5.png" alt=""/></span>
								<span class="figcaption text-uppercase">left column,<br> without Static block</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing-without-col-without-static-block_06.html">
								<span class="figure"><img class="img-responsive" src="images/custom/listing-img-6.png" alt=""/></span>
								<span class="figcaption text-uppercase">without columns,<br> without Static block</span>
								</a>
								</span>											
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing-without-col-without-static-block_small_07.html">
								<span class="figure"><img class="img-responsive" src="images/custom/listing-img-7.png" alt=""/></span>
								<span class="figcaption text-uppercase">Small</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing-without-col-without-static-block_big_08.html">
								<span class="figure"><img class="img-responsive img-border" src="images/custom/listing-img-8.png" alt=""/></span>
								<span class="figcaption text-uppercase">Big</span>
								</a>
								</span>
							</li>
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="product.html"><span class="act-underline"><span class="act-underline">PRODUCT</span></span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-third">
								<span class="image-link">
								<a href="product-small.html">
								<span class="figure"><img class="img-responsive" src="images/custom/product-menu-img-1.png" alt=""/></span>
								<span class="figcaption text-uppercase">image size  - small</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="product.html">
								<span class="figure"><img class="img-responsive" src="images/custom/product-menu-img-2.png" alt=""/></span>
								<span class="figcaption text-uppercase">image size  - medium</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="product-big.html">
								<span class="figure"><img class="img-responsive" src="images/custom/product-menu-img-3.png" alt=""/></span>
								<span class="figcaption text-uppercase">image size  - big</span>
								</a>
								</span>											
							</li>
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="blog-layout-1.html"><span class="act-underline">BLOG</span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-third">
								<span class="image-link">
								<a href="blog-layout-1.html">
								<span class="figure"><img class="img-responsive" src="images/custom/blog-menu-img-1.png" alt=""/></span>
								<span class="figcaption text-uppercase">blog - Layout 1</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="blog-layout-2.html">
								<span class="figure"><img class="img-responsive" src="images/custom/blog-menu-img-2.png" alt=""/></span>
								<span class="figcaption text-uppercase">blog - Layout 2</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="blog-layout-3.html">
								<span class="figure"><img class="img-responsive" src="images/custom/blog-menu-img-3.png" alt=""/></span>
								<span class="figcaption text-uppercase">blog - Layout 3</span>
								</a>
								</span>											
							</li>
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="gallery-layout-1.html"><span class="act-underline">GALLERY</span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-fifth">
								<span class="image-link">
								<a href="gallery-layout-1.html">
								<span class="figure"><img class="img-responsive" src="images/custom/gallery-menu-img-1.png" alt=""/></span>
								<span class="figcaption text-uppercase">Gallery - Layout 1</span>
								</a>
								</span>
							</li>
							<li class="col-one-fifth">
								<span class="image-link">
								<a href="gallery-layout-2.html">
								<span class="figure"><img class="img-responsive" src="images/custom/gallery-menu-img-2.png" alt=""/></span>
								<span class="figcaption text-uppercase">Gallery - Layout 2</span>
								</a>
								</span>
							</li>
							<li class="col-one-fifth">
								<span class="image-link">
								<a href="gallery-layout-3.html">
								<span class="figure"><img class="img-responsive" src="images/custom/gallery-menu-img-3.png" alt=""/></span>
								<span class="figcaption text-uppercase">Gallery - Layout 3</span>
								</a>
								</span>											
							</li>
							<li class="col-one-fifth">
								<span class="image-link">
								<a href="gallery-layout-4.html">
								<span class="figure"><img class="img-responsive" src="images/custom/gallery-menu-img-4.png" alt=""/></span>
								<span class="figcaption text-uppercase">Gallery - Layout 4</span>
								</a>
								</span>											
							</li>
							<li class="col-one-fifth">
								<span class="image-link">
								<a href="gallery-layout-5.html">
								<span class="figure"><img class="img-responsive" src="images/custom/gallery-menu-img-5.png" alt=""/></span>
								<span class="figcaption text-uppercase">Gallery - Layout 5</span>
								</a>
								</span>											
							</li>
						</ul>
					</li>					
					<li>
						<span class="name"><span class="expander">-</span>
							<a href="about.html"><span class="act-underline">PAGES</span></a>
						</span>						
						<ul class="multicolumn">
							<li><a href="about.html">About</a></li>
							<li><a href="support-24.html">Support 24/7 page</a></li>
							<li><a href="services.html">Services</a></li>	
							<li><a href="faq.html">FAQs</a></li>													
							<li><a href="contact.html">Contact</a></li>
							<li><a href="under-construction.html">Under Construction</a></li>
							<li><a href="warranty.html">Warranty Page</a></li>
							<li><a href="site-map.html">Site Map</a></li>												
							<li><a href="delivery-page.html">Delivery Page</a></li>
							<li><a href="payment-page.html">Payment page</a></li>													
							<li><a href="typography.html">Typography</a></li>	
							<li><a href="page-404.html">Page 404</a></li>		
							<li><a href="_newsletter-template/newsletter-template.html">Newsletter template</a></li>											
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="listing.html"><span class="act-underline">WOMEN’s<span class="badge badge--menu">NEW</span></span></a>
						</span>
						<ul class="multicolumn-level">
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>TOPS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Blouses & Shirts</a></li>									
									<li class="level3">										
										<span class="name">
											<span class="expander">-</span>
											<a href="listing.html"><span class="act-underline">Dresses</span></a>
										</span>
										<ul class="image-links-level-4 megamenu__submenu">
											<li class="level4"><a href="listing.html">Bodycon Dresses</a></li>
											<li class="level4">												
												<span class="name">
													<span class="expander">-</span>
													<a href="listing.html"><span class="act-underline">Midi Dresses</span></a>
												</span>
												<ul class="image-links-level-5 megamenu__submenu">
													<li class="level5"><a href="listing.html">Occasion & Cocktail</a></li>
													<li class="level5"><a href="listing.html">Casual Everyday</a></li>
													<li class="level5"><a href="listing.html">Going Out & Party Dresses</a></li>
												</ul>
											</li>
											<li class="level4"><a href="listing.html">Fit & Flare</a></li>
											<li class="level4"><a href="listing.html">Shift Dresses</a></li>											
											<li class="level4"><a href="listing.html">Slip Dresses</a></li>
											<li class="level4"><a href="listing.html">Tunic Dresses</a></li>
										</ul>
									</li>
									<li class="level3"><a href="listing.html">Tops & T-shirts</a></li>
									<li class="level3"><a href="listing.html">Sleeveless Tops</a></li>									
									<li class="level3"><a href="listing.html">Sweaters & Cardigans</a></li>
									<li class="level3"><a href="listing.html">Jackets</a></li>
									<li class="level3"><a href="listing.html">Outerwear</a></li>
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>BOTTOMS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Trousers</a></li>
									<li class="level3"><a href="listing.html">Jeans</a></li>
									<li class="level3"><a href="listing.html">Leggings</a></li>
									<li class="level3"><a href="listing.html">Jumpsuit & shorts</a></li>
									<li class="level3"><a href="listing.html">Skirts</a></li>
									<li class="level3"><a href="listing.html">Tights</a></li>								
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>ACCESSORIES</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Jewellery</a></li>
									<li class="level3"><a href="listing.html">Hats</a></li>
									<li class="level3"><a href="listing.html">Scarves & snoods</a></li>
									<li class="level3"><a href="listing.html">Belts</a></li>
									<li class="level3"><a href="listing.html">Bags</a></li>
									<li class="level3"><a href="listing.html">Shoes</a></li>
									<li class="level3"><a href="listing.html">Sunglasses</a></li>																	
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="listing.html"><span class="act-underline">MEN’s<span class="badge badge--menu badge--color">SALE</span></span></a>
						</span>
						<ul class="multicolumn-level">
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>TOPS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Jackets</a></li>									
									<li class="level3"><a href="listing.html">Shirts</a></li>
									<li class="level3"><a href="listing.html">Sweaters & Cardigans</a></li>
									<li class="level3"><a href="listing.html">T-shirts</a></li>									
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>BOTTOMS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Trousers</a></li>									
									<li class="level3"><a href="listing.html">Jeans</a></li>
									<li class="level3"><a href="listing.html">Skirts</a></li>
									<li class="level3"><a href="listing.html">Swimwear</a></li>									
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>ACCESSORIES</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Bags</a></li>									
									<li class="level3"><a href="listing.html">Shoes</a></li>
									<li class="level3"><a href="listing.html">Sunglasses</a></li>																		
								</ul>
							</li>
						</ul>
					</li>
					
				</ul>
			</nav>
		</div>		
	    <!-- /mobile menu -->
		<!-- HEADER section -->
		<div class="header-wrapper">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-6 col-xl-7">
							<!-- logo start --> 
							<a href="index.html"><img class="logo replace-2x img-responsive" src="images/logo.png" alt=""/> </a> 
							<!-- logo end --> 
						</div>
						<div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right">
							<!-- slogan start -->
							<div class="slogan"><i class="fa fa-truck"></i> FREE SHIPPING AND FREE RETURNS </div>
							<!-- slogan end --> 						
							<div class="settings">
								<!-- currency start -->
								<div class="currency dropdown text-right">
									
								</div>
								<!-- currency end --> 
								<!-- language start -->
								<div class="language dropdown text-right">
									<a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" style="margin: 5px;"></i>  @if (Auth::user() != null)
											{{Auth::user()->name}}
										@endif</a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="{{ route('login') }}"><span class="icon icon-person"></span>My Account</a></li>
										<li><a href="compare.html"><span class="icon icon-sort"></span>Compare</a></li>
										<li><a href="{{ route('checkout') }}"><span class="icon icon-done_all"></span>Checkout</a></li>
										<li><a href="{{ route('login') }}"><span class="icon icon-lock"></span>Log In</a></li>
										<li>
											<a class="dropdown-item" href="{{ route('logout') }}"
		                                       onclick="event.preventDefault();
		                                                     document.getElementById('logout-form').submit();">
		                                                     <span class="icon icon-favorite_border"></span>
		                                        {{ __('Log out') }}
		                                    </a>

		                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                                        @csrf
		                                    </form>
										</li>

										<li><a href="{{ route('register') }}"><span class="icon icon-person_add"></span>Create an account</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
									</ul>
								</div>
								<!-- language end --> 
							</div>
						</div>
					</div>
				</div>
				<div class="stuck-nav">
					<div class="container offset-top-5">
						<div class="row">
							<div class="pull-left col-sm-9 col-md-9 col-lg-10">
								<!-- navigation start -->
								<nav class="navbar">
									<div class="responsive-menu mainMenu">									
										<!-- Mobile menu Button-->
										<div class="col-xs-2 visible-mobile-menu-on">
											<div class="expand-nav compact-hidden">
												<a href="#off-canvas-menu" class="off-canvas-menu-toggle">
													<div class="navbar-toggle"> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="menu-text">MENU</span> 
													</div>
												</a>
											</div>
										</div>
										<!-- //end Mobile menu Button -->
										<ul class="nav navbar-nav">
											<li class="dl-close"><a href="#"><span class="icon icon-close"></span>close</a></li>										
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{ route('home') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">HOME</span></a>
												
											</li>

											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="listing.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">WOMEN’s<span class="badge badge--menu">NEW</span></span></a>
												<ul class="dropdown-menu megamenu" role="menu">
													<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>
													<li class="col-sm-3">
														<a href="listing.html" class="megamenu__subtitle"><span>TOPS</span></a>
														<ul class="megamenu__submenu">
															<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>
															<li class="level2"><a href="listing.html">Blouses & Shirts</a></li>
															<li class="level2">
																<a href="listing.html">Dresses</a>
																<ul class="megamenu__submenu">
																	<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>
																	<li class="level3"><a href="listing.html">Bodycon Dresses</a></li>
																	<li class="level3">
																		<a href="listing.html">Midi Dresses</a>
																		<ul class="megamenu__submenu">
																			<li class="dl-back"><a href="listing.html"><span class="icon icon-chevron_left"></span>back</a></li>
																			<li class="level4"><a href="listing.html">Occasion & Cocktail</a></li>
																			<li class="level4"><a href="listing.html">Casual Everyday</a></li>
																			<li class="level4"><a href="listing.html">Going Out & Party Dresses</a></li>
																		</ul>
																	</li>
																	<li class="level3"><a href="listing.html">Fit & Flare</a></li>
																	<li class="level3"><a href="listing.html">Shift Dresses</a></li>
																	<li class="level3"><a href="listing.html">Shirt Dresses</a></li>
																	<li class="level3"><a href="listing.html">Slip Dresses</a></li>
																	<li class="level3"><a href="listing.html">Tunic Dresses</a></li>
																</ul>
															</li>
															<li class="level2"><a href="listing.html">Tops & T-shirts</a></li>
															<li class="level2"><a href="listing.html">Sleeveless Tops</a></li>
															<li class="level2"><a href="listing.html">Sweaters & Cardigans</a></li>
															<li class="level2"><a href="listing.html">Jackets</a></li>
															<li class="level2"><a href="listing.html">Outerwear</a></li>
														</ul>
													</li>
													<li class="col-sm-3">
														<a href="listing.html" class="megamenu__subtitle"><span>BOTTOMS</span></a>
														<ul class="megamenu__submenu">
															<li class="dl-back"><a href="listing.html"><span class="icon icon-chevron_left"></span>back</a></li>
															<li class="level2"><a href="listing.html">Trousers</a></li>
															<li class="level2"><a href="listing.html">Jeans</a></li>
															<li class="level2"><a href="listing.html">Leggings</a></li>
															<li class="level2"><a href="listing.html">Jumpsuit & shorts</a></li>
															<li class="level2"><a href="listing.html">Skirts</a></li>
															<li class="level2"><a href="listing.html">Tights</a></li>
														</ul>
													</li>
													<li class="col-sm-3">
														<a href="listing.html" class="megamenu__subtitle"><span>ACCESSORIES</span></a>
														<ul class="megamenu__submenu">
															<li class="dl-back"><a href="listing.html"><span class="icon icon-chevron_left"></span>back</a></li>
															<li class="level2"><a href="listing.html">Jewellery</a></li>
															<li class="level2"><a href="listing.html">Hats</a></li>
															<li class="level2"><a href="listing.html">Scarves & snoods</a></li>
															<li class="level2"><a href="listing.html">Belts</a></li>
															<li class="level2"><a href="listing.html">Bags</a></li>
															<li class="level2"><a href="listing.html">Shoes</a></li>
															<li class="level2"><a href="listing.html">Sunglasses</a></li>
														</ul>
													</li>
													<li class="col-sm-3 hidden-xs">
														<a href="listing.html" class="megamenu__subtitle"><span>FEATURED</span></a>
														<!-- carousel -->
															<div class="carousel-products" id="megaMenuCarousel1">
																<div>
																	<!-- product -->
																	<div class="product">
																		<div class="product__inside">
																			<!-- product image -->
																			<div class="product__inside__image">
																				<a href="product.html"> <img src="images/product/product-20.jpg" alt=""> </a> 																	
																			</div>
																			<!-- /product image --> 
																			<!-- product name -->
																			<div class="product__inside__name">
																				<h2><a href="product.html">Mauris lacinia lectus</a></h2>
																			</div>
																			<!-- /product name --> 
																			<!-- product price -->
																			<div class="product__inside__price price-box">$77.00</div>
																			<!-- /product price --> 
																		</div>
																	</div>
																	<!-- /product --> 
																</div>
																<div>
																	<!-- product -->
																	<div class="product">
																		<div class="product__inside">
																			<!-- product image -->
																			<div class="product__inside__image">
																				<a href="product.html"> <img src="images/product/product-2.jpg" alt=""> </a> 																		
																			</div>
																			<!-- /product image --> 
																			<!-- product name -->
																			<div class="product__inside__name">
																				<h2><a href="product.html">Mauris lacinia lectus</a></h2>
																			</div>
																			<!-- /product name --> 
																			<!-- product price -->
																			<div class="product__inside__price price-box">$77.00</div>
																			<!-- /product price --> 
																		</div>
																	</div>
																	<!-- /product --> 
																</div>
																<div>
																	<!-- product -->
																	<div class="product">
																		<div class="product__inside">
																			<!-- product image -->
																			<div class="product__inside__image">
																				<a href="product.html"> <img src="images/product/product-4.jpg" alt=""> </a>
																				
																			</div>
																			<!-- /product image --> 
																			<!-- product name -->
																			<div class="product__inside__name">
																				<h2><a href="product.html">Mauris lacinia lectus</a></h2>
																			</div>
																			<!-- /product name --> 
																			<!-- product price -->
																			<div class="product__inside__price price-box">$77.00</div>
																			<!-- /product price --> 
																		</div>
																	</div>
																	<!-- /product --> 
																</div>
															</div>
														<!-- /carousel --> 
													</li>
													<li class="col-sm-12 hidden-xs">
														<div class="row">
															<div class="col-sm-6"> <a href="#" class="discolor-hover"><img class="img-responsive" src="images/custom/banner-megamenu-01.jpg" alt=""/></a> </div>
															<div class="col-sm-6"> <a href="#" class="discolor-hover"><img class="img-responsive" src="images/custom/banner-megamenu-02.jpg" alt=""/></a> </div>
														</div>
													</li>
												</ul>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="listing.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">MEN’s<span class="badge badge--menu badge--color">SALE</span></span></a>
												<ul class="dropdown-menu megamenu" role="menu">
													<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>
													<li class="col-sm-3">
														<a href="listing.html" class="megamenu__subtitle"><span>TOPS</span></a>
														<ul class="megamenu__submenu">
															<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>
															<li class="level2"><a href="listing.html">Blouses & Shirts</a></li>
															<li class="level2">
																<a href="listing.html">Dresses</a>
																<ul class="megamenu__submenu">
																	<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>
																	<li class="level3"><a href="listing.html">Bodycon Dresses</a></li>
																	<li class="level3">
																		<a href="listing.html">Midi Dresses</a>
																		<ul class="megamenu__submenu">
																			<li class="dl-back"><a href="listing.html"><span class="icon icon-chevron_left"></span>back</a></li>
																			<li class="level4"><a href="listing.html">Occasion & Cocktail</a></li>
																			<li class="level4"><a href="listing.html">Casual Everyday</a></li>
																			<li class="level4"><a href="listing.html">Going Out & Party Dresses</a></li>
																		</ul>
																	</li>
																	<li class="level3"><a href="listing.html">Fit & Flare</a></li>
																	<li class="level3"><a href="listing.html">Shift Dresses</a></li>
																	<li class="level3"><a href="listing.html">Shirt Dresses</a></li>
																	<li class="level3"><a href="listing.html">Slip Dresses</a></li>
																	<li class="level3"><a href="listing.html">Tunic Dresses</a></li>
																</ul>
															</li>
															<li class="level2"><a href="listing.html">Tops & T-shirts</a></li>
															<li class="level2"><a href="listing.html">Sleeveless Tops</a></li>
															<li class="level2"><a href="listing.html">Sweaters & Cardigans</a></li>
															<li class="level2"><a href="listing.html">Jackets</a></li>
															<li class="level2"><a href="listing.html">Outerwear</a></li>
														</ul>
													</li>
													<li class="col-sm-3">
														<a href="listing.html" class="megamenu__subtitle"><span>BOTTOMS</span></a>
														<ul class="megamenu__submenu">
															<li class="dl-back"><a href="listing.html"><span class="icon icon-chevron_left"></span>back</a></li>
															<li class="level2"><a href="listing.html">Trousers</a></li>
															<li class="level2"><a href="listing.html">Jeans</a></li>
															<li class="level2"><a href="listing.html">Leggings</a></li>
															<li class="level2"><a href="listing.html">Jumpsuit & shorts</a></li>
															<li class="level2"><a href="listing.html">Skirts</a></li>
															<li class="level2"><a href="listing.html">Tights</a></li>
														</ul>
													</li>
													<li class="col-sm-3">
														<a href="listing.html" class="megamenu__subtitle"><span>ACCESSORIES</span></a>
														<ul class="megamenu__submenu">
															<li class="dl-back"><a href="listing.html"><span class="icon icon-chevron_left"></span>back</a></li>
															<li class="level2"><a href="listing.html">Jewellery</a></li>
															<li class="level2"><a href="listing.html">Hats</a></li>
															<li class="level2"><a href="listing.html">Scarves & snoods</a></li>
															<li class="level2"><a href="listing.html">Belts</a></li>
															<li class="level2"><a href="listing.html">Bags</a></li>
															<li class="level2"><a href="listing.html">Shoes</a></li>
															<li class="level2"><a href="listing.html">Sunglasses</a></li>
														</ul>
													</li>
													<li class="col-sm-3 hidden-xs">
														<a href="listing.html" class="megamenu__subtitle"><span>FEATURED</span></a>
														<!-- carousel -->
															<div class="carousel-products" id="megaMenuCarousel1">
																<div>
																	<!-- product -->
																	<div class="product">
																		<div class="product__inside">
																			<!-- product image -->
																			<div class="product__inside__image">
																				<a href="product.html"> <img src="images/product/product-20.jpg" alt=""> </a> 																	
																			</div>
																			<!-- /product image --> 
																			<!-- product name -->
																			<div class="product__inside__name">
																				<h2><a href="product.html">Mauris lacinia lectus</a></h2>
																			</div>
																			<!-- /product name --> 
																			<!-- product price -->
																			<div class="product__inside__price price-box">$77.00</div>
																			<!-- /product price --> 
																		</div>
																	</div>
																	<!-- /product --> 
																</div>
																<div>
																	<!-- product -->
																	<div class="product">
																		<div class="product__inside">
																			<!-- product image -->
																			<div class="product__inside__image">
																				<a href="product.html"> <img src="images/product/product-2.jpg" alt=""> </a> 																		
																			</div>
																			<!-- /product image --> 
																			<!-- product name -->
																			<div class="product__inside__name">
																				<h2><a href="product.html">Mauris lacinia lectus</a></h2>
																			</div>
																			<!-- /product name --> 
																			<!-- product price -->
																			<div class="product__inside__price price-box">$77.00</div>
																			<!-- /product price --> 
																		</div>
																	</div>
																	<!-- /product --> 
																</div>
																<div>
																	<!-- product -->
																	<div class="product">
																		<div class="product__inside">
																			<!-- product image -->
																			<div class="product__inside__image">
																				<a href="product.html"> <img src="images/product/product-4.jpg" alt=""> </a>
																				
																			</div>
																			<!-- /product image --> 
																			<!-- product name -->
																			<div class="product__inside__name">
																				<h2><a href="product.html">Mauris lacinia lectus</a></h2>
																			</div>
																			<!-- /product name --> 
																			<!-- product price -->
																			<div class="product__inside__price price-box">$77.00</div>
																			<!-- /product price --> 
																		</div>
																	</div>
																	<!-- /product --> 
																</div>
															</div>
														<!-- /carousel --> 
													</li>
													<li class="col-sm-12 hidden-xs">
														<div class="row">
															<div class="col-sm-6"> <a href="#" class="discolor-hover"><img class="img-responsive" src="images/custom/banner-megamenu-01.jpg" alt=""/></a> </div>
															<div class="col-sm-6"> <a href="#" class="discolor-hover"><img class="img-responsive" src="images/custom/banner-megamenu-02.jpg" alt=""/></a> </div>
														</div>
													</li>
												</ul>
											</li>

											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="listing.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">FOR KIDS</span></a>
												<ul class="dropdown-menu megamenu" role="menu">
													<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>
													<li class="col-sm-3">
														<a href="listing.html" class="megamenu__subtitle"><span>TOPS</span></a>
														<ul class="megamenu__submenu">
															<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>
															<li class="level2"><a href="listing.html">Blouses & Shirts</a></li>
															<li class="level2">
																<a href="listing.html">Dresses</a>
																<ul class="megamenu__submenu">
																	<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>
																	<li class="level3"><a href="listing.html">Bodycon Dresses</a></li>
																	<li class="level3">
																		<a href="listing.html">Midi Dresses</a>
																		<ul class="megamenu__submenu">
																			<li class="dl-back"><a href="listing.html"><span class="icon icon-chevron_left"></span>back</a></li>
																			<li class="level4"><a href="listing.html">Occasion & Cocktail</a></li>
																			<li class="level4"><a href="listing.html">Casual Everyday</a></li>
																			<li class="level4"><a href="listing.html">Going Out & Party Dresses</a></li>
																		</ul>
																	</li>
																	<li class="level3"><a href="listing.html">Fit & Flare</a></li>
																	<li class="level3"><a href="listing.html">Shift Dresses</a></li>
																	<li class="level3"><a href="listing.html">Shirt Dresses</a></li>
																	<li class="level3"><a href="listing.html">Slip Dresses</a></li>
																	<li class="level3"><a href="listing.html">Tunic Dresses</a></li>
																</ul>
															</li>
															<li class="level2"><a href="listing.html">Tops & T-shirts</a></li>
															<li class="level2"><a href="listing.html">Sleeveless Tops</a></li>
															<li class="level2"><a href="listing.html">Sweaters & Cardigans</a></li>
															<li class="level2"><a href="listing.html">Jackets</a></li>
															<li class="level2"><a href="listing.html">Outerwear</a></li>
														</ul>
													</li>
													<li class="col-sm-3">
														<a href="listing.html" class="megamenu__subtitle"><span>BOTTOMS</span></a>
														<ul class="megamenu__submenu">
															<li class="dl-back"><a href="listing.html"><span class="icon icon-chevron_left"></span>back</a></li>
															<li class="level2"><a href="listing.html">Trousers</a></li>
															<li class="level2"><a href="listing.html">Jeans</a></li>
															<li class="level2"><a href="listing.html">Leggings</a></li>
															<li class="level2"><a href="listing.html">Jumpsuit & shorts</a></li>
															<li class="level2"><a href="listing.html">Skirts</a></li>
															<li class="level2"><a href="listing.html">Tights</a></li>
														</ul>
													</li>
													<li class="col-sm-3">
														<a href="listing.html" class="megamenu__subtitle"><span>ACCESSORIES</span></a>
														<ul class="megamenu__submenu">
															<li class="dl-back"><a href="listing.html"><span class="icon icon-chevron_left"></span>back</a></li>
															<li class="level2"><a href="listing.html">Jewellery</a></li>
															<li class="level2"><a href="listing.html">Hats</a></li>
															<li class="level2"><a href="listing.html">Scarves & snoods</a></li>
															<li class="level2"><a href="listing.html">Belts</a></li>
															<li class="level2"><a href="listing.html">Bags</a></li>
															<li class="level2"><a href="listing.html">Shoes</a></li>
															<li class="level2"><a href="listing.html">Sunglasses</a></li>
														</ul>
													</li>
													<li class="col-sm-3 hidden-xs">
														<a href="listing.html" class="megamenu__subtitle"><span>FEATURED</span></a>
														<!-- carousel -->
															<div class="carousel-products" id="megaMenuCarousel1">
																<div>
																	<!-- product -->
																	<div class="product">
																		<div class="product__inside">
																			<!-- product image -->
																			<div class="product__inside__image">
																				<a href="product.html"> <img src="images/product/product-20.jpg" alt=""> </a> 																	
																			</div>
																			<!-- /product image --> 
																			<!-- product name -->
																			<div class="product__inside__name">
																				<h2><a href="product.html">Mauris lacinia lectus</a></h2>
																			</div>
																			<!-- /product name --> 
																			<!-- product price -->
																			<div class="product__inside__price price-box">$77.00</div>
																			<!-- /product price --> 
																		</div>
																	</div>
																	<!-- /product --> 
																</div>
																<div>
																	<!-- product -->
																	<div class="product">
																		<div class="product__inside">
																			<!-- product image -->
																			<div class="product__inside__image">
																				<a href="product.html"> <img src="images/product/product-2.jpg" alt=""> </a> 																		
																			</div>
																			<!-- /product image --> 
																			<!-- product name -->
																			<div class="product__inside__name">
																				<h2><a href="product.html">Mauris lacinia lectus</a></h2>
																			</div>
																			<!-- /product name --> 
																			<!-- product price -->
																			<div class="product__inside__price price-box">$77.00</div>
																			<!-- /product price --> 
																		</div>
																	</div>
																	<!-- /product --> 
																</div>
																<div>
																	<!-- product -->
																	<div class="product">
																		<div class="product__inside">
																			<!-- product image -->
																			<div class="product__inside__image">
																				<a href="product.html"> <img src="images/product/product-4.jpg" alt=""> </a>
																				
																			</div>
																			<!-- /product image --> 
																			<!-- product name -->
																			<div class="product__inside__name">
																				<h2><a href="product.html">Mauris lacinia lectus</a></h2>
																			</div>
																			<!-- /product name --> 
																			<!-- product price -->
																			<div class="product__inside__price price-box">$77.00</div>
																			<!-- /product price --> 
																		</div>
																	</div>
																	<!-- /product --> 
																</div>
															</div>
														<!-- /carousel --> 
													</li>
													<li class="col-sm-12 hidden-xs">
														<div class="row">
															<div class="col-sm-6"> <a href="#" class="discolor-hover"><img class="img-responsive" src="images/custom/banner-megamenu-01.jpg" alt=""/></a> </div>
															<div class="col-sm-6"> <a href="#" class="discolor-hover"><img class="img-responsive" src="images/custom/banner-megamenu-02.jpg" alt=""/></a> </div>
														</div>
													</li>
												</ul>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="listing.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">ABOUT US</span></a>
												
											</li>

												<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="listing.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">CONTACT</span></a>
												
											</li>
										</ul>
									</div>
								</nav>
							</div>
							<!-- navigation end -->
							<div class="pull-right col-sm-3 col-md-3 col-lg-2">
								<div class="text-right">	
									<!-- search start -->
									<div class="search link-inline">
										<a href="#" class="search__open"><span class="icon icon-search"></span></a>
										<div class="search-dropdown">
											<form action="#" method="get">
												<div class="input-outer">
													<input type="search" name="search" value="" maxlength="128" placeholder="SEARCH:">
													<button type="submit" title="" class="icon icon-search"></button>
												</div>
												<a href="#" class="search__close"><span class="icon icon-close"></span></a>									
											</form>
										</div>
									</div>
									<!-- search end -->										
									<!-- account menu start -->
									
									<!-- account menu end -->
									<!-- shopping cart start -->
									<div class="cart link-inline">
										
										<div class="dropdown text-right">
											<a href="{{ route('viewcart') }}">
											<span class="icon icon-shopping_basket"></span>
											<span id= "count" class="badge badge--cart">{{Cart::count()}}</span>
											</a>
											
										</div>
									</div>
									<!-- shopping cart end -->			
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<!-- End HEADER section -->
		@yield('slider')
		@yield('content')
		
		@yield('modal')

		@yield('footer')
		
		<!-- jQuery 1.10.1--> 
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Bootstrap 3--> 
		<script src="{{ asset('external/bootstrap/bootstrap.min.js') }}"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="{{ asset('external/slick/slick.min.js') }}"></script>
		<script src="{{ asset('external/bootstrap-select/bootstrap-select.min.js') }}"></script>  
		<script src="{{ asset('external/countdown/jquery.plugin.min.js') }}"></script> 
		<script src="{{ asset('external/countdown/jquery.countdown.min.js') }}"></script>  		
		<script src="{{ asset('external/instafeed/instafeed.min.js') }}"></script>  		
		<script src="{{ asset('external/magnific-popup/jquery.magnific-popup.min.js') }}"></script>  		
		<script src="{{ asset('external/isotope/isotope.pkgd.min.js') }}"></script> 
		<script src="{{ asset('external/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('external/colorbox/jquery.colorbox-min.js') }}"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
		<script type="text/javascript" src="{{ asset('external/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
		<script type="text/javascript" src="{{ asset('external/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
		<!-- Custom --> 
		<script src="{{ asset('js/custom.js') }}"></script>			
		<script src="{{ asset('js/js-index-01.js') }}"></script>		
		<script src="{{ asset('js/js-product.js') }}"></script>		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>	
		<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>
		{!! Toastr :: render () !!}
		<script type="text/javascript">
			var app_url = '{{ asset('') }}';


		

		
		</script>


		<script src="{{ asset('external/nouislider/nouislider.min.js') }}"></script>
		<script src="{{ asset('external/elevatezoom/jquery.elevatezoom.js') }}"></script>
		
		
	</body>
</html>