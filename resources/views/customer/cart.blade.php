@extends('customer.layouts.master')

@section('content')
	<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">SHOPPING CART</h1>
				</div>
				<!-- /title -->		
				<!-- Shopping cart table -->
				<div class="container-widget">
					<table class="shopping-cart-table">
						<thead>
							<tr>
								<th>Product</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>Unit Price</th>
								<th>Qty</th>
								<th>Subtotal</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach(Cart::content() as $row)
							<tr>
								<td>
									<div class="shopping-cart-table__product-image">
										<a href="{{ route('product.detail', ['slug' => $row->options->slug]) }}">
											<img class="img-responsive" src="{{ asset($row->options->link) }}" alt="">
										</a>
									</div>
								</td>
								<td>
									<h5 class="shopping-cart-table__product-name text-left text-uppercase">
										<a href="{{ route('product.detail', ['slug' => $row->options->slug]) }}">{{$row->name}}</a>
									</h5>
									<ul class="shopping-cart-table__list-parameters">
										<li>
											<span>Color:</span> <div style="height: 50px; width: 50px; background: {{$row->options->code_color}} "></div>
										</li>
										<li>
											<span>Size:</span> <p>{{$row->options->size_name}}</p>
										</li>
										<li class="visible-xs">
											<span>Price:</span>
											<span class="price-mobile">{{number_format($row->price)}}</span>
										</li>
										<li class="visible-xs">
											<span>Qty:</span>
											<!--  -->
											<div class="number input-counter">
											    <span data-id="{{$row->id}}" class="btn-down minus-btn "></span>
											    <input type="text" value="{{$row->qty}}" size="5"/>
											    <span data-id="{{$row->id}}" class="btn-up plus-btn "></span>
											</div>
											<!-- / -->
										</li>
									</ul>																				
								</td>
								<td>
									<a class="shopping-cart-table__create icon icon-create " href="#"></a>
									<a class="shopping-cart-table__delete icon icon-delete visible-xs" href="#"></a>
								</td>
								<td>
									<div class="shopping-cart-table__product-price unit-price">
										{{number_format($row->price)}}
									</div>
								</td>
								<td>
									<div class="shopping-cart-table__input">
										<!--  -->
										<div class="number input-counter">
										    <span data-id="{{$row->rowId}}" class="minus-btn btn-down"></span>
										    <input type="text" value="{{$row->qty}}" size="5"/>
										    <span data-id="{{$row->rowId}}" class="plus-btn btn-up"></span>
										</div>
										<!-- / -->
									</div>								
								</td>
								<td>
									<div class="shopping-cart-table__product-price subtotal">
										{{number_format($row->price*$row->qty)}}
									</div>
								</td>
								<td>
									<a class="shopping-cart-table__delete icon icon-clear btn-del-cart" data-id="{{$row->rowId}}" href="#"></a>
								</td>
							</tr>								
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /Shopping cart table -->
				<div class="divider divider--xs"></div>
				<div class="clearfix shopping-cart-btns">
					<a class="btn btn--ys btn--light pull-right" href="#"><span class="icon icon-autorenew"></span>UPDATE SHOPPING CART</a>
					<div class="divider divider--xs visible-xs"></div>
		            <a class="btn btn--ys btn--light btn-clear-cart" href="#"><span class="icon icon-delete"></span>CLEAR SHOPPING CART</a> 
		            <div class="divider divider--xs visible-xs"></div>
		            <a class="btn btn--ys btn--light pull-left btn-right" href="{{ route('home') }}"><span class="icon icon-keyboard_arrow_left"></span>CONTINUE SHOPPING </a>         
		            <div class="divider divider--xs visible-xs"></div>   	
		           
		        </div>		        
				<div class="divider--md"></div>
				<div class="row">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-4">
					
					</div>
					<div class="divider--md visible-sm visible-xs"></div>
					<div class="col-md-4">
						<div class="card card--padding">
							<table class="table-total">
								<tbody>
									<tr>
										<th class="text-left">Subtotal:</th>
										<td class="text-right">{{Cart::subtotal(0)}}</td>
									</tr>
									<tr>
										<th class="text-left">Tax:</th>
										<td class="text-right">{{Cart::tax(0)}}</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>GRAND TOTAL:</th>
										<td>{{Cart::total(0)}}</td>
									</tr>
								</tfoot>
							</table>
							<a href="{{ route('checkout') }}" class="btn btn--ys btn--full btn--xl">PROCEED TO CHECKOUT <span class="icon icon--flippedX icon-reply"></span></a>
							<div class="text-right link-top">
								<a class="link-underline" href="#">Checkout with Multiple Addresses</a>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
		<!-- End CONTENT section --> 
@endsection