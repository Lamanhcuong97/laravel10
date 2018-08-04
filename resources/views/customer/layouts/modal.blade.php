		<!-- modalAddToCart -->
		<div class="modal  fade"  id="modalAddToCart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		      </div>
		      <div class="modal-body">
		        <div class="text-center">
		        	"Mauris lacinia lectus" added to cart successfully! 
		        </div>
		      </div>
		      <div class="modal-footer text-center">		       	
		        <a href="shopping-cart-right-column.html"  class="btn btn--ys btn--full btn--lg">go to cart</a>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- /modalAddToCart -->
		<!-- modalLoginForm-->
		<div class="modal  fade"  id="modalLoginForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		        <h4 class="modal-title text-center text-uppercase">Login form</h4>
		      </div>
		      <form>
			      <div class="modal-body indent-bot-none">
			      	<div class="form-group">
			      		<div class="input-group">
						    <span class="input-group-addon">
						    	<span class="icon icon-person"></span>
						    </span>
						    <input type="text" id="LoginFormName" class="form-control" placeholder="Name:">
						</div>
			      	</div>
					<div class="form-group">
						<div class="input-group">
						    <span class="input-group-addon">@</span>
						    <input type="password" id="LoginFormPass" class="form-control" placeholder="Password:">
						</div>
					</div>			         				    				     
 	                 <div class="checkbox-group">
	                  <input type="checkbox" id="checkBox2">
	                  <label for="checkBox2"> 
	                  	<span class="check"></span>
	                  	<span class="box"></span>
	                  	Remember me
	                  </label>
	                </div>
	                <button type="button" class="btn btn--ys btn--full btn--lg">Login</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-blue"><span class="fa fa-facebook"></span> Login with Facebook</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-red"><span class="fa fa-google-plus"></span> Login with Google</button>
			        <div class="divider divider--xs"></div>
			        <ul class="list-arrow-right">
			        	<li><a href="#">Forgot your username?</a></li>
			        	<li><a href="#">Forgot your password?</a></li>
			        	<li><a href="#">Create an account</a></li>
			        </ul>
			      </div>			      
			  </form>
		    </div>
		  </div>
		</div>	
		<!-- /modalLoginForm-->

      <!-- Modal (quickViewModal) -->		
		<div class="modal  modal--bg fade"  id="quickViewModal">
		  <div class="modal-dialog white-modal">
		    <div class="modal-content container">
		    	<div class="modal-header">
		       	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		     	 </div>
		    	<!--  -->
		    	<div class="product-popup">
					<div class="product-popup-content">
					<div class="container-fluid">
						<div class="row product-info-outer">
							<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
								<div class="product-main-image">
									<div class="product-main-image__item"></div>
								</div>
							</div>
							<div class="product-info col-xs-12 col-sm-7 col-md-6 col-lg-6">
								{{-- <div class="wrapper">
									<div class="product-info__sku pull-left">SKU: <strong>mtk012c</strong></div>
									<div class="product-info__availabilitu pull-right">Availability:   <strong class="color">In Stock</strong></div>
								</div> --}}
								<div class="product-info__title">
									
								</div>
								<div class="price-box product-info__price"><span class="price-box__new"></span>  VNĐ</div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="product-info__description">
									<div class="product-info__description__brand"><img id="brand" style="height: 80px;
									width: auto;" src="images/custom/brand.png" alt=""> </div>
									<div class="product-info__description__text"></div>
								</div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">COLOR:</span>*</div>
									<div class="pull-right required">* Required Fields</div>
								</div>
								<ul class="options-swatch options-swatch--color options-swatch--lg">
									
								</ul>						
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">SIZE:</span></div>
									<div class="pull-left required">*</div>
								</div>
								<ul class="options-swatch options-swatch--size options-swatch--lg">
									
								</ul>
								
							</div>
						</div>
					</div>
					</div>
				</div>
		    	<!-- / -->
		    </div>
		  </div>
		</div>
		<!-- / Modal (quickViewModal) -->
	{{-- 	<!-- Modal (newsletter) -->		
		<div class="modal  modal--bg fade"  id="newsletterModal" data-pause=2000>
		  <div class="modal-dialog white-modal">
		    <div class="modal-content modal-md">
		      <div class="modal-bg-image bottom-right"> 
			      <img  src="images/custom/newsletter-bg.png" alt="" class="img-responsive"> 
			  </div>
		      <div class="modal-block">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			      </div>
			      <div class="modal-newsletter text-center">
			      	    <img class="logo img-responsive1 replace-2x" src="images/logo.png" alt=""/>
			            <h2 class="text-uppercase modal-title">JOIN US NOW!</h2>
			            <p class="color-dark">And get hot news about the theme</p>
			            <p class="color font24 custom-font font-lighter">
			            	YOURStore 
			            </p>
			            <form  method="post" name="mc-embedded-subscribe-form" target="_blank" class="subscribe-form">
			           		<div class="row-subscibe">			           				            		 
								<input  type="text" name="subscribe"   placeholder="Your E-mail">
								<button type="submit" class="btn btn--ys btn--xl">SUBSCRIBE</button>
			           		</div>
							<div class="checkbox-group form-group-top clearfix">
			                  <input type="checkbox" id="checkBox1">
			                  <label for="checkBox1"> 
			                  	<span class="check"></span>
			                  	<span class="box"></span>
			                  	&nbsp;&nbsp;DON&#39;T SHOW THIS POPUP AGAIN
			                  </label>
			                </div>			               			                
			                
			            </form>
			      </div>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- / Modal --}}