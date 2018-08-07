@extends('customer.layouts.master')

@section('slider')
	@include('customer.layouts.slider')
@endsection
@section('content')
	<!-- CONTENT section -->
		<div id="pageContent">
			<!-- category section -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="category-carousel">
							<div class="col-sm-4 col-md-4 col-lg-4">
								<a href="listing.html" class="banner zoom-in">
									<span class="figure">
										<img src="https://images.pexels.com/photos/167706/pexels-photo-167706.jpeg?auto=compress&cs=tinysrgb&h=350" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size5">women’s</span>
													<span class="btn btn--ys btn--xl">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<a href="listing.html" class="banner zoom-in">
								<span class="figure">
									<img src="https://images.pexels.com/photos/376636/pexels-photo-376636.jpeg?auto=compress&cs=tinysrgb&h=350" alt=""/>
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size5">aCCESSORIES</span>
												<span class="btn btn--ys btn--xl">Shop now!</span>
											</span>
										</span>
									</span>
								</span>
								</a>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<a href="listing.html" class="banner zoom-in">
								<span class="figure">
									<img src="https://images.pexels.com/photos/233312/pexels-photo-233312.jpeg?auto=compress&cs=tinysrgb&h=350" alt=""/>
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size5">men’s</span>
												<span class="btn btn--ys btn--xl">Shop now!</span>
											</span>
										</span>
									</span>
								</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /category section -->
			<!-- featured products -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-xl-8">
							<!-- title -->
							<div class="title-box">
								<h2 class="text-center text-uppercase title-under">FEATURED PRODUCTS</h2>
							</div>
							<!-- /title -->
							<div class="product-listing carousel-products-mobile row">
								
								@foreach($products as $product)

									<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
										<!-- product -->
										<div class="product product--zoom">
											<div class="product__inside">
												<!-- product image -->
												<div class="product__inside__image">
													<a href="{{ route('product.detail', ['slug' => $product->slug]) }}"> <img src="{{asset($product->gallery_products[0]->link) }}" alt=""> </a> 
													<!-- quick-view --> 
													<a href="#" data-toggle="modal" data-target="#quickViewModal" slug="{{$product->slug}}" class="quick-view"><b><span class="icon icon-visibility" ></span> Quick view</b> </a> 
													<!-- /quick-view --> 
												</div>
												<!-- /product image --> 
												<!-- product name -->
												<div class="product__inside__name">
													<h2><a href="product.html">{{$product->name}}</a></h2>
												</div>
												<!-- /product name -->                 <!-- product description --> 
												<!-- visible only in row-view mode -->
												<div class="product__inside__description row-mode-visible"> {{$product->description}} </div>
												<!-- /product description -->                 <!-- product price -->
												<div class="product__inside__price price-box">{{number_format($product->price)}} VNĐ</div>
												<!-- /product price --> 
												<!-- product review --> 
												<!-- visible only in row-view mode -->
												<div class="product__inside__review row-mode-visible">
													<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
												</div>
												<!-- /product review --> 
												<div class="product__inside__hover">
													<!-- product info -->
													<div class="product__inside__info">
														<div class="product__inside__info__btns"> {{-- <a href="#" data-id="{{$product->id}}" class="btn btn--ys btn--xl btn-add-cart"><span class="icon icon-shopping_basket"></span> Add to cart</a> --}}
														<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
														<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
														<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility" slug="{{$product->slug}}"></span> Quick view</a> </div>
														<ul class="product__inside__info__link hidden-xs">
															<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
															<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
														</ul>
													</div>
													<!-- /product info --> 
													<!-- product rating -->
													<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													<!-- /product rating --> 
												</div>
											</div>
										</div>
										<!-- /product --> 
									</div>
								
								@endforeach
							</div>
						</div>
						<!-- lookbook -->
						<div class="col-xl-4 visible-xl">
							<!-- title -->
							<div class="title-box">
								<h2 class="text-left text-uppercase title-under pull-left">LOOKBOOK</h2>
							</div>
							<!-- /title -->
							
							<a class="link-img-hover" href="lookbook.html"><img src="images/custom/lookbook.jpg" class="img-responsive" alt=""></a>
							
						</div>
						<!-- /lookbook -->
					</div>
				</div>
			</div>
			<!-- banners -->
			<div class="content fullwidth indent-col-none">
				<div class="container">
					<div class="row">
						<div class="banner-carousel">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="listing.html" class="banner zoom-in">
								<span class="figure">
									<img src="https://assets.adidas.com/images/w_840,h_840,f_auto,q_auto,fl_lossy/71285282881a4b3895a0a8ff00f6455d_9366/POD-S3_1_Shoes_Grey_B37458_01_standard.jpg" alt=""/>
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size3">SHOES</span>
												<span class="text">GET UP TO</span>
												<span class="text size3">20% OFF</span>
											</span>
										</span>
									</span>
								</span>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="listing.html" class="banner zoom-in">
									<span class="figure">
										<img src="https://assets.adidas.com/images/w_840,h_840,f_auto,q_auto,fl_lossy/c0660ed75a884ba5af75a8e300dc6554_9366/Arkyn_Shoes_Grey_B37072_01_standard.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size3-1">15% OFF</span>
													<span class="text size1"><em>on brand-new models</em></span>
													<span class="btn btn--ys btn--xl">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="listing.html" class="banner zoom-in">
									<span class="figure">
										<img src="https://assets.adidas.com/images/w_840,h_840,f_auto,q_auto,fl_lossy/2e2347175a57439780f3a8e900f27d11_9366/Ultraboost_X_Shoes_Grey_AC7551_01_standard.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size4">New<br> collection</span>
													<span class="text size2">OF FASHION CLOTHES</span>
													<span class="btn btn--ys btn--xl offset-top">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /banners -->
			<!-- news & sale products -->
			<div class="content">
				<div class="container">
					<div class="row">
				<div class="col-sm-12 col-md-6 col-xl-4">
							<!-- title -->
							<div class="title-with-button">
								<div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
								<h2 class="text-left text-uppercase title-under pull-left">New</h2>
							</div>
							<!-- /title --> 
							<!-- carousel -->
							<div class="carousel-products row" id="carouselNew">
								@foreach($product_new as $new)
								<div class="col-lg-3">
									<!-- product -->
									<div class="product">
										<div class="product__inside">
											<!-- product image -->
											<div class="product__inside__image">
												<a href="{{ route('product.detail', ['slug' => $new->slug]) }}""> <img src="{{ asset($new->gallery_products[0]->link) }}" alt=""> </a> 
												<!-- quick-view --> 
												<a href="#" data-toggle="modal" data-target="#quickViewModal" slug="{{$new->slug}}" class="quick-view"><b><span class="icon icon-visibility" ></span> Quick view</b> </a>  
												<!-- /quick-view --> 
											</div>
											<!-- /product image --> 
											<!-- label news -->
											<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
											<!-- /label news --> 
											<!-- product name -->
											<div class="product__inside__name">
												<h2><a href="product.html">{{$new->name}}</a></h2>
											</div>
											<!-- /product name --> 
											<!-- product price -->
											<div class="product__inside__price price-box">{{number_format($new->price)}}</div>
											<!-- /product price --> 
											<div class="product__inside__hover">
												<!-- product info -->
												<div class="product__inside__info">
													<div class="product__inside__info__btns"> 
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
													<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs" slug="{{$new->slug}}"><span class="icon icon-visibility" ></span> Quick view</a> </div>
													<ul class="product__inside__info__link hidden-xs">
														<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
														<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
													</ul>
												</div>
												<!-- /product info --> 
												<!-- product rating -->
												<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												<!-- /product rating --> 
											</div>
										</div>
									</div>
									<!-- /product --> 
								</div>
								@endforeach
							
							</div>
							<!-- /carousel --> 
						</div>
						<!-- promo -->
						<div class="col-xl-4 visible-xl">
							<!-- title -->
							<div class="title-box">
								<h2 class="text-left text-uppercase title-under pull-left">PROMOS</h2>
							</div>
							<!-- /title -->
							<div class="text-center promos">
								
								<div class="promos__image">
									<a href="lookbook.html" class="link-img-hover">
									<img src="images/custom/promos.jpg" class="img-responsive" alt="">
									<span class="promos__label">-20%</span>
									</a>
								</div>
								<h2><a href="lookbook.html">Mauris lacinia lectus</a></h2>
								Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.
							</div>
						</div>
						<!-- /promo -->						

						<div class="col-sm-12 col-md-6 col-xl-4">
							<div class="divider--lg visible-sm visible-xs"></div>
							<!-- title -->
							<div class="title-with-button">
								<div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
								<h2 class="text-left text-uppercase title-under pull-left">On Sale</h2>
							</div>
							<!-- /title --> 
							<!-- carousel -->
							<div class="carousel-products row" id="carouselSale">
								@foreach($product_new as $promo)
								<div class="col-lg-3">
									<!-- product -->
									<div class="product">
										<div class="product__inside">
											<!-- product image -->
											<div class="product__inside__image">
												<a href="{{ route('product.detail', ['slug' => $promo->slug]) }}""> <img src="{{ asset($promo->gallery_products[0]->link) }}" alt=""> </a> 
												<!-- quick-view --> 
												<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view" slug="{{$promo->slug}}"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
												<!-- /quick-view --> 
											</div>
											<!-- /product image --> 
											<!-- label sale -->
											<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
												-20%</span> 
											</div>
											<!-- /label sale --> 
											<!-- product name -->
											<div class="product__inside__name">
												<h2><a href="product.html">{{$promo->name}}</a></h2>
											</div>
											<!-- /product name --> 
											<!-- product price -->
											<div class="product__inside__price price-box">{{number_format($promo->price)}}<span class="price-box__old">{{number_format($promo->price*1.2)}}</span></div>
											<!-- /product price --> 
											<div class="product__inside__hover">
												<!-- product info -->
												<div class="product__inside__info">
													<ul class="options-swatch options-swatch--color">
														<li><a href="#"><span class="swatch-label"><img src="images/colors/blue.png" width="10" height="10" alt=""/></span></a></li>
														<li><a href="#"><span class="swatch-label"><img src="images/colors/yellow.png" width="10" height="10" alt=""/></span></a></li>
													</ul>
													<div  class="product__inside__info__btns">
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
													<a href="#" data-toggle="modal" data-target="#quickViewModal" slug="{{$promo->slug}}" class="quick-view"><b><span class="icon icon-visibility" ></span> Quick view</b> </a> </div>
													<ul class="product__inside__info__link hidden-xs">
														<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
														<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
													</ul>
												</div>
												<!-- /product info --> 
												<!-- product rating -->
												<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												<!-- /product rating --> 
											</div>
										</div>
									</div>
									<!-- /product --> 
								</div>
								@endforeach
								
							</div>
							<!-- /carousel --> 
						</div>
					</div>
				</div>
			</div>
			<!-- /news & sale products -->
			<!-- blog slider -->
			<div class="content content-bg-1 fixed-bg">
				<div class="container">				
					<div class="row">
						<h2 class="text-center text-uppercase title-under">testimonials</h2>
						<div class="slider-blog slick-arrow-bottom">
							<!-- slide-->
							<a href="https://www.facebook.com/jivocter97" target="_blank" class="link-hover-block">
								<div class="slider-blog__item">
									<div class="row">
										<div class="col-xs-12 col-sm-2 col-sm-offset-3 box-foto">
											<img src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.0-9/13336062_1713424265563032_7230139096095169543_n.jpg?_nc_cat=0&oh=e4668f276f5bc20298bca3489f1cdf78&oe=5C102F63" alt="">
										</div>
										<div class="col-xs-12 col-sm-5 col-xl-4 box-data">
											<h6>JIVOCTER  <em>&nbsp;-&nbsp;  designer</em></h6>
											<p>
												Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, sociis natoque penatibus et magnis. Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus.
											</p>
										</div>
									</div>
								</div>
							</a>
							<!-- /slide-->
							<!-- slide-->
							<a href="https://www.facebook.com/8BinhBoong8"  target="_blank" class="link-hover-block">
								<div class="slider-blog__item">
									<div class="row">
										<div class="col-xs-12 col-sm-2 col-sm-offset-3 box-foto">
											<img src="{{ asset('storage/images/binh.jpg') }}" alt="">
										</div>
										<div class="col-xs-12 col-sm-5 box-data">
											<h6>BINH BOONG  <em>&nbsp;-&nbsp;  designer</em></h6>
											<p>
												Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, sociis natoque penatibus et magnis. Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus.
											</p>
										</div>
									</div>
								</div>
							</a>
							<!-- /slide-->
							<!-- slide-->
							<a href="https://www.facebook.com/jivocter97" class="link-hover-block">
								<div class="slider-blog__item">
									<div class="row">
										<div class="col-xs-12 col-sm-2 col-sm-offset-3 box-foto">
											<img src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.0-1/p160x160/37763525_2095114900727298_7020012406227075072_n.jpg?_nc_cat=0&oh=6b555da301b4ea16747f74781e61c284&oe=5BDBA4FA" alt="">
										</div>
										<div class="col-xs-12 col-sm-5 box-data">
											<h6>MARK   <em>&nbsp;-&nbsp;  designer</em></h6>
											<p>
												Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, sociis natoque penatibus et magnis. Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus.
											</p>
										</div>
									</div>
								</div>
							</a>
							<!-- /slide-->
						</div>
					</div>
				</div>
			</div>
			<!-- /blog slider -->
			
			<!-- brands-carousel -->
			<div class="content section-indent-bottom">
				<div class="container">
					<div class="row">
						<div class="brands-carousel">
							<div><a href="#"><img src="images/custom/brand-01.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-02.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-03.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-04.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-05.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-06.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-07.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-08.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-09.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-10.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-01.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-02.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-03.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-04.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-05.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-06.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-07.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-08.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-09.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/brand-10.png" alt=""></a></div>
						</div>
					</div>
				</div>
			</div>
			<!-- /brands-carousel -->
			<div class="content fullwidth hidden-xs">
				<div class="container">
					<div class="row">
						<div class="instafeed-wrapper">
							<h3 class="title-vertical"><span>INSTAGRAM FEED</span></h3>
							<div id="instafeed" class="instafeed"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End CONTENT section -->

@endsection



@section('modal')
	@include('customer.layouts.modal')

@endsection

@section('footer')
	@include('customer.layouts.footer')
	<script type="text/javascript">
		

	</script>
@endsection