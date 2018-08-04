@extends('customer.layouts.master')
@section('content')
	<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">CREATE AN ACCOUNT</h1>
				</div>
				<!-- /title -->		
				<div class="row">
					<div class="divider divider--md visible-sm visible-xs"></div>
					<section class="col-sm-12 col-md-12 col-lg-12 col-xl-12s">
						<div class="login-form-box">
							<h3 class="color small">RETURNING CUSTOMER</h3>
							<p>
								If you have an account with us, please log in.
							</p>
				              <form action="{{ route('register') }}" id="form-returning" method="post">
				              	@csrf
				              	<div class="form-group row">
		                            <label for="name" class="col-md-3 col-form-label text-md-left">{{ __('Full Name') }} <sup>*</sup></label>

		                            <div class="col-md-8">
		                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

		                                @if ($errors->has('name'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('name') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label for="date_of_birth" class="col-md-3 col-form-label text-md-left">{{ __('Date of Birth') }} <sup>*</sup></label>

		                            <div class="col-md-8">
		                                <input id="date_of_birth" type="date" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ old('date_of_birth') }}" required>

		                                @if ($errors->has('date_of_birth'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                          	<label class="col-md-3 col-form-label text-md-left" for="gender">Gender <sup>*</sup></label>
		                         	<div class="col-md-8">
		                              <input name="gender" id="gender-0" value="Male" checked="checked" type="radio">
		                              Male
		                              <input name="gender" id="gender-1" value="Female" type="radio">
		                              Female
		                          	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="address" class="col-md-3 col-form-label text-md-left">{{ __('Address') }}<sup>*</sup></label>

		                            <div class="col-md-8">
		                                <input id="address" type="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

		                                @if ($errors->has('address'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('address') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                         <div class="form-group row">
		                            <label for="phone_number" class="col-md-3 col-form-label text-md-left">Phone Number <sup>*</sup></label>

		                            <div class="col-md-8">
		                                <input id="phone_number" type="number" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required>

		                                @if ($errors->has('phone_number'))
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('phone_number') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="email" class="col-md-3 col-form-label text-md-left">{{ __('E-Mail Address') }}<sup>*</sup></label>

		                            <div class="col-md-8">
		                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

		                                @if ($errors->has('email'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="password" class="col-md-3 col-form-label text-md-left">{{ __('Password') }}<sup>*</sup></label>

		                            <div class="col-md-8">
		                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

		                                @if ($errors->has('password'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="password-confirm" class="col-md-3 col-form-label text-md-left">{{ __('Confirm Password') }}<sup>*</sup></label>

		                            <div class="col-md-8">
		                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
		                            </div>
		                        </div>

				                <div class="row">
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<button type="submit" class="btn btn--ys btn-top btn--xl" onclick="document.getElementById('form-returning').submit();"><span class="icon icon-create"></span>Create Account</button>			
				                		<a class="btn btn--ys btn-top btn--xl" href="{{ route('login') }}"><span class="icon icon-vpn_key"></span>Login</a>           			
				                	</div>

				                	<div class="divider divider--md visible-xs"></div>
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<div class="pull-right note btn-top">* Required Fields</div>
				                	</div>
				                </div>			               			                
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