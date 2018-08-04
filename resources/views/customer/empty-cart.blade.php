@extends('customer.layouts.master')
@section('content')
	<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">Shopping Cart is Empty</h1>
				</div>
				<!-- /title -->		
				<div class="text-center"> 
		          <img src="images/empty-cart-icon.png" alt="empty cart icon" class="img-responsive-inline" />
		          <div class="divider divider--lg"></div>
		          <h4 class="color">You have no items in your shopping cart.</h4>
		          <div class="divider divider--lg"></div>
		          <a class="btn btn--ys" href="#"><span class="icon icon-keyboard_arrow_left"></span>CONTINUE SHOPPING</a>		          
		        </div>					
			</div>
		</div>
		<!-- End CONTENT section --> 	
@endsection
@section('footer')
	@include('customer.layouts.footer')
@endsection