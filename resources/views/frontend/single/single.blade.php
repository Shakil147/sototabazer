@extends('frontend.master')
@section('title')
Single Prodects
@endsection


@section('content')
		<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="{{ asset('frontend')}}/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Single Page</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->  
	<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="{{ asset($ProductsById->product_main_image)}}">
							<div class="thumb-image"> <img src="{{ asset($ProductsById->product_main_image)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li>
						<?php $images = $allImages->where('product_id',$ProductsById->id); ?>
						@foreach($images as $image)
						<li data-thumb="{{ asset($image->product_image) }}">
							<div class="thumb-image"> <img src="{{ asset($image->product_image) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li>
						@endforeach  
					</ul>
				</div>
				<!-- flexslider -->
					<script defer src="{{ asset('frontend')}}/js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="{{ asset('frontend')}}/css/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flexslider -->
				<!-- zooming-effect -->
					<script src="{{ asset('frontend')}}/js/imagezoom.js"></script>
				<!-- //zooming-effect -->
			</div>
			<div class="col-md-8 single-right">
				<h3>{!! $ProductsById->product_name !!}</h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<div class="description">
					<h5><i>Description</i></h5>
					<h5><i>{!! $ProductsById->product_short_description !!}</i></h5>
					
				</div>
				<div class="color-quality">
					<h4> <i class="item_price">TK {{ $ProductsById->product_price }}</i></h4>
					
					<div class="clearfix"> </div>
				</div>
				<br>
				
				<div class=" ">
					{!! Form::open(['class'=>'form-horizontal col-md-4 ','route' => 'cart.add','method'=>'post']) !!}
					<div class="form-group">
						<label class="col-md-5">Qwantaty </label>
						<input class="col-md-5" type="number" name="product_qty" value="1" min="1" max="{{ $ProductsById->product_quantity }}" style="border-color: black; border-radius: 4px;" />
						<input type="hidden" name="id" value="{!! $ProductsById->id !!}" /><br> 
					</div>
						<button type="submit" class="w3ls-cart form-control">Add to cart</button>
					{!! Form::close() !!}
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> 
	<div class="additional_info">
		<div class="container">
			<div class="sap_tabs">	
				<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Information</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Reviews</span></li>
					</ul>		
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-0">
						{!! $ProductsById->product_long_description !!}	

					<div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
						<h4>(2) Reviews</h4>
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="{{ asset('frontend')}}/images/t1.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="{{ asset('frontend')}}/single.html">Laura</a>
									<h5>Oct 06, 2016.</h5>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
										velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
										quo voluptas nulla pariatur.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="{{ asset('frontend')}}/images/t2.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="{{ asset('frontend')}}/single.html">Michael</a>
									<h5>Oct 04, 2016.</h5>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
										velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
										quo voluptas nulla pariatur.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="review_grids">
							<h5>Add A Review</h5>
							<form action="#" method="post">
								<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="Email" placeholder="Email" required="">
								<input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
								<textarea name="Review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Add Your Review';}" required="">Add Your Review</textarea>
								<input type="submit" value="Submit" >
							</form>
						</div>
					</div> 			        					            	      
				</div>	
			</div>
			<script src="{{ asset('frontend')}}/js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab1').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
		</div>
	</div>
	<!-- Related Products -->
	<div class="w3l_related_products">
		<div class="container">
			<h3>Related Products</h3>
			<ul id="flexiselDemo2">			
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left mobiles_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="{{ asset('frontend')}}/images/34.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/35.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/27.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/28.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/37.jpg" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="{{ asset('frontend')}}/#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="{{ asset('frontend')}}/single.html">Kid's Toy</a></h5>
							<div class="simpleCart_shelfItem"> 
								<p class="flexisel_ecommerce_cart"><span>$150</span> <i class="item_price">$100</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Kid's Toy"> 
									<input type="hidden" name="amount" value="100.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form> 
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left mobiles_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="{{ asset('frontend')}}/images/36.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/32.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/33.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/32.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/36.jpg" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="{{ asset('frontend')}}/#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="{{ asset('frontend')}}/single.html">Vacuum Cleaner</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$960</span> <i class="item_price">$920</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Vacuum Cleaner" /> 
									<input type="hidden" name="amount" value="920.00"/>   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left mobiles_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="{{ asset('frontend')}}/images/38.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/37.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/27.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/28.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/37.jpg" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="{{ asset('frontend')}}/#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="{{ asset('frontend')}}/single.html">Microwave Oven</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$650</span> <i class="item_price">$645</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Microwave Oven" /> 
									<input type="hidden" name="amount" value="645.00"/>   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left mobiles_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="{{ asset('frontend')}}/images/p3.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/p5.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/p4.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/p2.jpg" alt=" " class="img-responsive" />
								<img src="{{ asset('frontend')}}/images/p1.jpg" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="{{ asset('frontend')}}/#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="{{ asset('frontend')}}/single.html">Music MP3 Player</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$60</span> <i class="item_price">$58</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Ultra MP3 Player" /> 
									<input type="hidden" name="amount" value="58.00"/>   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div> 
							<div class="mobiles_grid_pos">
								<h6>New</h6>
							</div>
						</div> 
					</div>
				</li>
			</ul>
			
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="{{ asset('frontend')}}/js/jquery.flexisel.js"></script>
		</div>
	</div>
	<!-- //Related Products -->
	<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="{{ asset('frontend')}}/images/34.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Musical Kids Toy</h4>
							<p>Ut enim ad minim veniam, quis nostrud 
								exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$150</span> <i class="item_price">$100</i></p> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Kids Toy"> 
									<input type="hidden" name="amount" value="100.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="{{ asset('frontend')}}/#"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="brown"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="purple"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="{{ asset('frontend')}}/images/36.jpg" alt=" " class="img-responsive">
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Dry Vacuum Cleaner</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive">
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive">
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$960</span> <i class="item_price">$920</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Vacuum Cleaner"> 
									<input type="hidden" name="amount" value="920.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="{{ asset('frontend')}}/#"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="brown"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="purple"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="{{ asset('frontend')}}/images/p3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Music MP3 Player </h4>
							<p>Ut enim ad minim veniam, quis nostrud 
								exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$60</span> <i class="item_price">$58</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="MP3 Player" /> 
									<input type="hidden" name="amount" value=" $58.00"/>   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="{{ asset('frontend')}}/#"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="brown"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="purple"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="{{ asset('frontend')}}/images/38.jpg" alt=" " class="img-responsive">
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Kitchen &amp; Dining Accessories</h4>
							<p>Ut enim ad minim veniam, quis nostrud 
								exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star-.png" alt=" " class="img-responsive">
								</div>
								<div class="rating-left">
									<img src="{{ asset('frontend')}}/images/star.png" alt=" " class="img-responsive">
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$650</span> <i class="item_price">$645</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Microwave Oven"> 
									<input type="hidden" name="amount" value="645.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="{{ asset('frontend')}}/#"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="brown"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="purple"><span></span></a></li>
									<li><a href="{{ asset('frontend')}}/#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>  
	<!-- //single -->

	@endsection