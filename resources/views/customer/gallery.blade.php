@extends('customer.layouts.master')
@section('content')
	<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container-fill">
				<h1 class="text-center text-uppercase title-under">Gallery - Layout 1</h1>												
				<!-- gallery -->
				<div id="page-wrap" class="gallery">	
		
			        <div class="filter-nav">
			            <div rel="all" class="current">All</div> 
			            <div rel="nature">nature</div> 
			            <div rel="objects">objects</div> 
			            <div rel="people">people</div> 
			        </div>
			        
			             
			        <div id="filter-content" class="gallery-content row">         
				        <div class="filter-content-item all people col-sm-6">
				        	<figure>
				        		<img src="images/gallery/gallery-large/gallery-large-img-01.jpg" class="all people" alt="" />
				        		<figcaption><!-- add class .content-center in figcaption (center icons)-->			        
				        			<div class="block-table">
				        				<div class="block-table-cell">
				        					<h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
						        			<em class="color-custom font18">People</em>
						        			<div class="divider divider--sm"></div>
						        			<p class="font-lighter">
						        				Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						        			</p>
						        			<div class="button-box">
						        				<a href="images/gallery/gallery-large/gallery-large-img-01.jpg" class="zomm-gallery"  title="Title"></a>
						        				<a href="#" class="link-gallery"></a>
						        			</div> 
				        				</div>
				        			</div>
				        		</figcaption>
				        	</figure>
				        </div>	        
				        <div class="filter-content-item all nature col-sm-6">
					       <figure>
				        		<img src="images/gallery/gallery-large/gallery-large-img-02.jpg" class="all people" alt="" />
				        		<figcaption><!-- add class .content-center in figcaption (center icons)-->					        			
				        			<div class="block-table">
				        				<div class="block-table-cell">
				        					<h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
						        			<em class="color-custom font18">People</em>
						        			<div class="divider divider--sm"></div>
						        			<p class="font-lighter">
						        				Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						        			</p>
						        			<div class="button-box">
						        				<a href="images/gallery/gallery-large/gallery-large-img-02.jpg" class="zomm-gallery"  title="Title"></a>
						        				<a href="#" class="link-gallery"></a>
						        			</div> 
				        				</div>
				        			</div>
				        		</figcaption>
				        	</figure>
				        </div>	        
				        <div class="filter-content-item all objects col-sm-6">
				        	<figure>
				        		<img src="images/gallery/gallery-large/gallery-large-img-03.jpg" class="all people" alt="" />
				        		<figcaption><!-- add class .content-center in figcaption (center icons)-->					        			
				        			<div class="block-table">
				        				<div class="block-table-cell">
				        					<h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
						        			<em class="color-custom font18">People</em>
						        			<div class="divider divider--sm"></div>
						        			<p class="font-lighter">
						        				Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						        			</p>
						        			<div class="button-box">
						        				<a href="images/gallery/gallery-large/gallery-large-img-03.jpg" class="zomm-gallery"  title="Title"></a>
						        				<a href="#" class="link-gallery"></a>
						        			</div> 
				        				</div>
				        			</div>
				        		</figcaption>
				        	</figure>
				        </div>	        
				        <div class="filter-content-item all people col-sm-6">
				        	<figure>
				        		<img src="images/gallery/gallery-large/gallery-large-img-04.jpg" class="all people" alt="" />
				        		<figcaption><!-- add class .content-center in figcaption (center icons)-->					        			
				        			<div class="block-table">
				        				<div class="block-table-cell">
				        					<h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
						        			<em class="color-custom font18">People</em>
						        			<div class="divider divider--sm"></div>
						        			<p class="font-lighter">
						        				Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						        			</p>
						        			<div class="button-box">
						        				<a href="images/gallery/gallery-large/gallery-large-img-04.jpg" class="zomm-gallery"  title="Title"></a>
						        				<a href="#" class="link-gallery"></a>
						        			</div> 
				        				</div>
				        			</div>
				        		</figcaption>
				        	</figure>
				        </div>			
					</div>
				</div>
				<br>
				<!-- /gallery -->
				<div class="text-center">
					<ul class="pagination">
							<li><a class="active" href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><span class="icon icon-navigate_next"></span></a></li>
						</ul>
				</div>
			</div>
		</div>
		<!-- End CONTENT section --> 
@endsection
@section('footer')
	@include('customer.layouts.footer')
@endsection