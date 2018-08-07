@extends('customer.layouts.master')

@section('content')
	<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">
				<!-- two columns -->
				<div class="row">
					<!-- left column -->
					<aside class="col-md-4 col-lg-3 col-xl-2 without-left-col" id="leftColumn">
						<a href="#" class="slide-column-close"><span class="icon icon-chevron_left"></span>back</a>
						<div class="filters-block visible-xs">
							<div class="filters-row__select">
								<label>Sort by: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>Position</option>
										<option>Price</option>
										<option>Rating</option>
									</select>
								</div>
								<a href="#" class="sort-direction icon icon-arrow_back"></a> 
							</div>
							<div class="filters-row__select">
								<label>Show: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select>
								</div>
							</div>
							<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
						</div>
						<!-- shopping by block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">SHOPPING BY:</h4>
							<div class="collapse-block__content">
								<ul class="filter-list">
									<li> Color: <span>White</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
									<li> Size: <span>S</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
								</ul>
								<a class="btn btn--ys btn--sm btn--light">Clear All</a> 
							</div>
						</div>
						<!-- /shopping by block --> 
						<!-- category block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title ">WOMENS</h4>
							<div class="collapse-block__content">
								<ul class="expander-list">
									<li class="active">
										<a href="#">TOPS</a><span class="expander"></span>
										<ul>
											<li class="active"><a href="#">Blouses &amp; Shirts</a></li>
											<li><a href="#">Dresses</a></li>
										</ul>
									</li>
									<li>
										<a href="#">BOTTOMS</a><span class="expander"></span>
										<ul>
											<li><a href="#">Trousers</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">Leggings</a></li>
											<li><a href="#">Jumpsuit &amp; shorts</a></li>
											<li><a href="#">Skirts</a></li>
											<li><a href="#">Tights</a></li>
										</ul>
									</li>
									<li>
										<a href="#">ACCESSORIES</a><span class="expander"></span>
										<ul>
											<li><a href="#">Jewellery</a></li>
											<li><a href="#">Hats</a></li>
											<li><a href="#">Scarves &amp; snoods</a></li>
											<li><a href="#">Belts</a></li>
											<li><a href="#">Bags</a></li>
											<li><a href="#">Shoes</a></li>
											<li><a href="#">Sunglasses</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<!-- /category block --> 
						<!-- price slider block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">PRICE</h4>
							<div class="collapse-block__content">
								<div id="priceSlider" class="price-slider"></div>
								<form action="#">
									<div class="price-input">
										<label>From:</label>
										<input type="text" id="priceMin" />
									</div>
									<div class="price-input-divider">-</div>
									<div class="price-input">
										<label>To:</label>
										<input type="text" id="priceMax" />
									</div>
									<div class="price-input">
										<button type="submit" class="btn btn--ys btn--md">Filter</button>
									</div>
								</form>
							</div>
						</div>
						<!-- /price slider block --> 
						<!-- size block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">SIZE</h4>
							<div class="collapse-block__content">
								<ul class="options-swatch options-swatch--size options-swatch--lg">
									<li><a href="#">XS</a></li>
									<li><a href="#">S</a></li>
									<li><a href="#">M</a></li>
									<li><a href="#">L</a></li>
									<li><a href="#">XL</a></li>
									<li><a href="#">2XL</a></li>
									<li><a href="#">3XL</a></li>
								</ul>
							</div>
						</div>
						<!-- /size block --> 
						<!-- color block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">COLOR</h4>
							<div class="collapse-block__content">
								<ul class="options-swatch options-swatch--color options-swatch--lg">
									<li><a href="#"><span class="swatch-label color-black"></span></a></li>
									<li><a href="#"><span class="swatch-label color-grey"></span></a></li>
									<li><a href="#"><span class="swatch-label color-light-grey"></span></a></li>
									<li><a href="#"><span class="swatch-label color-blue"></span></a></li>
									<li><a href="#"><span class="swatch-label color-dark-turquoise "></span></a></li>
									<li><a href="#"><span class="swatch-label color-orange"></span></a></li>
									<li><a href="#"><span class="swatch-label color-purple"></span></a></li>
									<li><a href="#"><span class="swatch-label color-pale-violet-red"></span></a></li>
									<li><a href="#"><span class="swatch-label color-red"></span></a></li>
									<li><a href="#"><span class="swatch-label color-green"></span></a></li>
									<li><a href="#"><span class="swatch-label color-yellow"></span></a></li>
									<li><a href="#"><span class="swatch-label color-tan"></span></a></li>
								</ul>
							</div>
						</div>
						<!-- /color block --> 
						<!-- brands block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">BRANDS</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									<li><a href="#">Levi’s </a></li>
									<li><a href="#">Gap</a></li>
									<li><a href="#">Zara</a></li>
									<li><a href="#">Polo</a></li>
									<li><a href="#">Ecco</a></li>
									<li><a href="#">H&amp;M</a></li>
									<li><a href="#">Diesel</a></li>
									<li><a href="#">Bockers</a></li>
									<li><a href="#">Lacoste</a></li>
								</ul>
							</div>
						</div>
						<!-- /brands block --> 
						<!-- gender block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">GENDER</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									<li><a href="#">Men</a></li>
									<li><a href="#">Women</a></li>
									<li><a href="#">Unisex</a></li>
								</ul>
							</div>
						</div>
						<!-- /gender block --> 
						<!-- sleeve lenght block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">SLEEVE LENGTH</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									<li><a href="#">Long</a></li>
									<li><a href="#">Short</a></li>
									<li><a href="#">3/4</a></li>
								</ul>
							</div>
						</div>
						<!-- /sleeve lenght block --> 
						<!-- occasion block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">OCCASION</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									<li><a href="#">Partywear</a></li>
									<li><a href="#">Casual</a></li>
									<li><a href="#">Evening</a></li>
									<li><a href="#">Workwear</a></li>
								</ul>
							</div>
						</div>
						<!-- /occasion block --> 
						<!-- compare block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">COMPARE PRODUCTS</h4>
							<div class="collapse-block__content">
								<div class="compare">
									<div class="compare__item">
										<div class="compare__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a></div>
										<div class="compare__item__delete"><a href="#" class="icon icon-close"></a></div>
										<div class="compare__item__title">
											<h2><a href="#">Quis nostrud exercit ation ullamco</a></h2>
										</div>
									</div>
									<div class="compare__item">
										<div class="compare__item__image pull-left"><a href="#"><img src="images/product/product-80x100-2.jpg" alt=""></a></div>
										<div class="compare__item__delete"><a href="#" class="icon icon-close"></a></div>
										<div class="compare__item__title">
											<h2><a href="#">Quis nostrud exercit ation ullamco</a></h2>
										</div>
									</div>
								</div>
								<div><a href="#" class="btn btn--ys btn--md">Compare</a> <a href="#" class="btn btn--ys btn--md btn--light">Clear All</a></div>
							</div>
						</div>
						<!-- /compare block --> 
						<!-- poll block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">COMMUNITY POLL</h4>
							<div class="collapse-block__content">
								<p class="under-form-text color">What is your favorite color</p>
								<form id="pollForm" action="#">
									<ul class="filter-list">
										<li>
											<label class="radio">
											<input id="radio1" type="radio" name="radios" checked>
											<span class="outer"><span class="inner"></span></span>Green</label>
										</li>
										<li>
											<label class="radio">
											<input id="radio2" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Red</label>
										</li>
										<li>
											<label class="radio">
											<input id="radio3" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Black</label>
										</li>
										<li>
											<label class="radio">
											<input id="radio4" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Magenta</label>
										</li>
									</ul>
									<button type="submit" class="btn btn--ys btn--md btn--light">Vote</button>
								</form>
							</div>
						</div>
						<!-- /poll block --> 
						<!-- featured block -->
						<div class="collapse-block open coll-products-js">
							<h4 class="collapse-block__title">FEATURED</h4>
							<div class="collapse-block__content coll-gallery">
							</div>
							
							<div class="coll-gallery-clone" style="display:none">
								
									<div class="vertical-carousel vertical-carousel-2 offset-top-10">
										<div class="vertical-carousel__item">
											<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a>
											</div>
											<div class="vertical-carousel__item__title">
												<h2><a href="#">Quis nostrud exercit ation</a></h2>
											</div>
											<div class="price-box">$26.00 <span class="price-box__old">$28.00</span></div>
											<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										</div>
										<div class="vertical-carousel__item">
											<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-2.jpg" alt=""></a>
											</div>
											<div class="vertical-carousel__item__title">
												<h2><a href="#">Quis nostrud exercit ation</a></h2>
											</div>
											<div class="price-box">$26.00</div>
											<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										</div>
										<div class="vertical-carousel__item">
											<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a></div>
											<div class="vertical-carousel__item__title">
												<h2><a href="#">Quis nostrud exercit ation</a></h2>
											</div>
											<div class="price-box">$26.00</div>
											<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										</div>
									</div>
								
							</div>
						</div>
						<!-- /featured block -->
						<!-- tags block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">POPULAR TAGS</h4>
							<div class="collapse-block__content">
								<ul class="tags-list">
									<li><a href="#">Grey</a></li>
									<li><a href="#">Shirt</a></li>
									<li><a href="#">suit</a></li>
									<li><a href="#">Dresses </a></li>
									<li><a href="#">Outerwear</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags block --> 
						<!-- custom block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">CUSTOM BLOCK</h4>
							<div class="collapse-block__content">
								<p class="light-font">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
								<ul class="marker-list">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Conse ctetur adipisicing</li>
									<li>Elit sed do eiusmod tempor</li>
								</ul>
								<p class="light-font">Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.</p>
							</div>
						</div>
						<!-- /custom block --> 
					</aside>
					<!-- /left column --> 
					<!-- center column -->
					<aside class="col-md-12 col-lg-12 col-xl-12" id="centerColumn">
						@if($products->count() != 0)
						<!-- title -->
						<div class="title-box">
							<h1 class="text-center text-uppercase title-under">Search results for <span class="color">'{{$slug}}'</span>
							</h1>

						</div>
						<!-- /title -->												
						
						
						<!-- /filters row -->
						<div class="product-listing row">

							@foreach($products as $product)
							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
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
						<!-- filters row -->
						@else
							<!-- CONTENT section -->
							<div id="pageContent">
								<div class="container">				
									<!-- title -->
									<div class="title-box">
										<h1 class="text-center text-uppercase title-under">Search results for <span class="color">'{{$slug}}'</span></h1>
									</div>
									<!-- /title -->		
									<div class="text-center"> 
							          <img src="{{ asset('images/empty-search-icon.png') }}" alt="empty search icon" class="img-responsive-inline" />
							          <div class="divider divider--lg"></div>
							          <h4 class="color">Your search returns no results.</h4>		          
							        </div>					
								</div>
							</div>
							<!-- End CONTENT section --> 
						@endif
							
						</div>
						<!-- /filters row --> 
					</aside>
					<!-- center column --> 
				</div>
				<!-- /two columns --> 
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