@extends('customer.layouts.master')

@section('content')
	<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">LOGIN OR CREATE AN ACCOUNT</h1>
				</div>
				<!-- /title -->		
				<div class="row">
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xl-offset-2">
						 <div class="login-form-box">
						 	 <h3 class="color small">NEW CUSTOMER</h3>
				             <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				            <br>
				            <button class="btn btn--ys btn--xl" onclick="location.href='{{ route('register') }}';"><span class="icon icon-person_add"></span>CREATE AN ACCOUNT</button>
						 </div>
					</section>
					<div class="divider divider--md visible-sm visible-xs"></div>
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
						<div class="login-form-box">
							<h3 class="color small">RETURNING CUSTOMER</h3>
							<p>
								If you have an account with us, please log in.
							</p>
							<form action="{{ route('login') }}" method="POST" role="form">
								@csrf
								<div class="form-group">
									<label for="">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
									@if(Session::has('email')))   
										<span class="invalid-feedback">
										  {{ Session::get('email')}} 
										</span>
									@endif
								</div>
							
								<div class="form-group">
									<label for="">Password</label>
									<input type="password" class="form-control" id="password" name="password">
									@if(Session::has('password')))    
										<span class="invalid-feedback">
										  {{ Session::get('password')}} // 
										</span>
									@endif
								</div>
							
								<button type="submit" class="btn btn-primary btn btn--ys btn-top btn--xl">Đăng nhập</button>
							</form>
						</div>
					</section>
				</div>						
			</div>
		</div>
		<!-- End CONTENT section --> 
@endsection
@section('footer')
	@include('customer.layouts.footer')
@endsection