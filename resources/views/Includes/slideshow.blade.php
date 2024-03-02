<section id="slider"><!--slider-->
<!--<?php
var_dump($slideshows);// use for disable variables write on home.php above @content
?>-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						<!--Add New01-03-2024-->
						@for($i = 0; $i < count($slideshows); $i++)
							@if ($i==0)
							<li data-target="#slider-carousel" data-slide-to="{{$i}}" class="active"></li>
							@else
							<li data-target="#slider-carousel" data-slide-to="{{$i}}"></li>
							@endif
						@endfor
						<!--End New01-03-2024-->
							<!--<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>-->
						</ol>
						
						<!--<div class="carousel-inner">// firts
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>// end firts-->
							<div class="carousel-inner">
							<!--Add for loop01-03-2024-->
							@foreach($slideshows as $slideshow)
								@if($loop->first)
								<div class="item active">
								@else
								<div class="item">
								@endif
									<div class="col-sm-6">
										<h1>{{$slideshow->tilte}}</h1>
										<h2>{{$slideshow->subtitle}}</h2>
										<p>{{$slideshow->text}}</p>
										<a" hreh="{{$slideshow->link}}"class="btn btn-default get">Get it now</a>
									</div>
									<div class="col-sm-6">
										<!--<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
										<img src="images/home/pricing.png"  class="pricing" alt="" />-->
										<img src="images/home/{{$slideshow->img}}" class="girl img-responsive" alt="" />
										</div>
									</div>
							@endforeach
							<!--End for loop01-03-2024-->
							<!--<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>-->
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->