@extends('customer.layouts.master')
@section('content')
	<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">Checkout</h1>
				</div>
				<!-- /title -->
				<div class="row">					
					<div class="col-sm-4 col-xs-12">
						<div class="pull-left">
							<a href="{{ route('login') }}" class="btn btn--ys"><span class="icon icon-vpn_key"></span>Login</a>
						</div>						
					</div>
					<div class="col-sm-8  col-xs-12">
						<div class="visible-xs divider--sm"></div>
						<div class="pull-right pull-extra-left">
							<div class="dropdown select-basket">
								<a class="dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
									<span class="icon icon-shopping_basket"></span>{{Cart::total(0)}} VNĐ								
								</a>
								<div class="dropdown-menu  " role="menu">
									<div class="select-basket__inner">
										<h6 class="font18">REVIEW YOUR ORDER</h6>
										<table class="select-basket__table">
											<thead>
												<tr>
													<th>Product</th>
													<th>Qty</th>
													<th>Subtotal</th>
												</tr>
											</thead>
											<tbody>
												@foreach(Cart::content() as $row)
													<tr>
														<td>
															<span class="color">{{$row->name}}</span>
														</td>
														<td>
															{{$row->qty}}
														</td>
														<td>
															<b class="color">{{number_format($row->qty*$row->price)}} </b>
														</td>
													</tr>		
												@endforeach																			
											</tbody>
											<tfoot>
												<tr>
													<th>Subtotal:</th>
													<td></td>
													<td >{{Cart::subtotal(0)}}</td>
												</tr>
												<tr>
													<th>Tax:</th>
													<td></td>
													<td >{{Cart::tax(0)}} </td>
												</tr>
												<tr>
													<th>Total:</th>
													<td></td>
													<td >{{Cart::total(0)}}</td>
												</tr>
											</tfoot>
										</table>
									</div>								
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<!--================= col-left =================-->
					<form action="{{ route('carts.checkout') }}" method="POST" role="form" id="form-check-out">
					 @csrf
					
					<div class="col-md-12 col-lg-4">
						<!-- SHIPPING ADDRESS -->
						<h2 class="title-checkout">
							<span class="icon icon-person icon-large color"></span>
							PERSON INFORMATION							
						</h2>
						<!-- row-col-2 -->
							<div class="row">
								<div class="col-md-12 col-lg-12 col-xl-6">
									<div class="form-group">
									    <label for="checkoutFormFirstName1"> Name <sup>*</sup></label>
									    <input type="text" class="form-control" id="checkoutFormFirstName1" name="name" 
											@if(Auth::user())
												value="{{Auth::user()->name}}"
											@else
												value="{{old('name')}}"
											@endif

									    >
									    @if ($errors->has('name'))
										    <div class="error">{{ $errors->first('name') }}</div>
										@endif
									</div>	
									<div class="form-group">
									    <label for="checkoutFormCompany1">Company</label>
									    <input type="text" class="form-control" id="checkoutFormCompany1" name="company" value="{{old('company')}}">
									    @if(Session::has('company')))   
										<span class="invalid-feedback">
										  {{ Session::get('company')}} 
										</span>
									@endif
									</div>
								</div>
								<div class="col-md-12 col-lg-12 col-xl-6">
									
									<div class="form-group">
									    <label for="checkoutFormEmailAddress1">Email Address  <sup>*</sup></label>
									    <input type="email" class="form-control" id="checkoutFormEmailAddress1" name="email" 
									    	@if(Auth::user())
												value="{{Auth::user()->email}}"
											@else
												value="{{old('name')}}"
											@endif>

									    @if ($errors->has('email'))
										    <div class="error">{{ $errors->first('email') }}</div>
										@endif
									</div>	
								</div>
							</div>
							
							
							<!-- /row-col-2 -->
						<div class="divider--lg"></div>
						<!-- /SHIPPING ADDRESS -->
					</div>
					<!--================= /col-left =================-->
					<!--================= col-center =================-->
					<div class="col-md-12 col-lg-4">
						<h2 class="title-checkout">
							<span class="icon color icon-local_shipping"></span>
							SHIPPING ADDRESS							
						</h2>
						<!-- row-col-2 -->
							<div class="row">
								<div class="col-md-12 col-lg-12 col-xl-6">
									<!-- /row-col-2 -->
									<div class="form-group">
									    <label for="checkoutFormAddress1">Address  <sup>*</sup></label>
									    <input type="text" class="form-control" name="address" id="checkoutFormAddress1" value="{{old('address')}}">
									     @if ($errors->has('address'))
										    <div class="error">{{ $errors->first('address') }}</div>
										@endif
									</div>						
									
									<div class="form-group">
									    <label for="checkoutFormCity">City <sup>*</sup></label>
									    <input type="text" class="form-control" name="city" id="checkoutFormCity" value="{{old('city')}}">
									   
									</div>
									
									<div class="form-group">
									    <label for="checkoutFormTelephone">Telephone <sup>*</sup></label>
									    <input type="text" class="form-control" name="phone_number" id="checkoutFormTelephone" 
									    @if(Auth::user())
											value="{{Auth::user()->phone_number}}"
										@else
											value="{{old('name')}}"
										@endif
		
									    >
									    @if ($errors->has('phone_number'))
										    <div class="error">{{ $errors->first('phone_number') }}</div>
										@endif
									</div>
								</div>
								
							</div>
						
						<!-- /Discount Codes -->
					</div>
					<!--================= /col-center =================-->
					<!--================= col-right =================-->
					<div class="col-md-12 col-lg-4">
						<!-- Discount Codes -->												
							
						<div class="collapse-block no-border-bottom open">
							<h2 class="collapse-block__title title-large-icon text-uppercase">
								<span class="icon icon-card_giftcard color"></span>
								Discount Codes
							</h2>
							<div class="collapse-block__content">
									<label for="checkoutFormCouponCode">Enter your coupon code:</label>
									<div class="form-group">									    
									    <input type="text" class="form-control" name="coupon_code" id="checkoutFormCouponCode">
									</div>								
							</div>
						</div>		
					
						<!-- Payment Method -->
						<h2 class="title-checkout">
							<span class="icon icon-account_balance_wallet color"></span>
							GRAND TOTAL
						</h2>
						
						<!-- GRAND TOTAL -->
						<div class="card card--padding fill-bg">
							<table class="table-total-checkout">								
								<tbody>
									<tr>
										<td>{{Cart::total()}} VNĐ</td>
									</tr>
								</tbody>
							</table>
							@if(Cart::total() != 0)
							<button type="submit" class="btn btn--ys btn--full btn--xl btn-check-out" >Place Order Now <span class="icon icon-reply icon--flippedX"></span></button>
							@endif
							</form>								
						</div>
						<!-- /GRAND TOTAL -->
					</div>
					<!--================= /col-right =================-->	
						
				</div>								
			</div>
		</div>
		<!-- End CONTENT section --> 
@endsection

@section('footer')
	@include('customer.layouts.footer')
	
@endsection