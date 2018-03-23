@extends('frontend.master')
@section('title')
Home
@endsection

@section('plugjs')

@endsection


@section('content')

	<section>
		<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Products</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				<div class="col-md-4 w3ls_mobiles_grid_left">
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Categories</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>New Arrivals
									</a>
								  </h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								  <div class="panel-body panel_text">
									<ul>
										<li><a href="products.html">Mobiles</a></li>
										<li><a href="products1.html">Laptop</a></li>
										<li><a href="products2.html">Tv</a></li>
										<li><a href="products.html">Wearables</a></li>
										<li><a href="products2.html">Refrigerator</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Accessories
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
										<li><a href="products2.html">Grinder</a></li>
										<li><a href="products2.html">Heater</a></li>
										<li><a href="products2.html">Kid's Toys</a></li>
										<li><a href="products2.html">Filters</a></li>
										<li><a href="products2.html">AC</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							</div>
							<ul class="panel_bottom">
								<li><a href="products.html">Summer Store</a></li>
								<li><a href="products.html">Featured Brands</a></li>
								<li><a href="products.html">Today's Deals</a></li>
								<li><a href="products.html">Latest Watches</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="{{ asset('frontend')}}/images/46.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<h3>Smart Phones<span>Up To</span> 15% Discount</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="{{ asset('frontend')}}/images/47.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos">
								<h3>Top 10 Latest<span>Mobile </span>& Accessories</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3>Showing Results: 0-1</h3>
						</div>
						<div class="w3ls_mobiles_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newness</option>
								<option>Sort by price: low to high</option>
								<option>Sort by price: high to low</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_mobiles_grid_right_grid3">
	@foreach($allProductsByCetagory as $product)
			<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
				<div class="agile_ecommerce_tab_left mobiles_grid">
					<div class="hs-wrapper hs-wrapper2"> 
						<img src="{{ url($product->product_main_image) }}" alt=" " class="img-responsive" />
						<?php $Images = $allImages->where('product_id',$product->id); ?>
						@foreach($Images as $Images)
						<img src="{{ url($Images->product_image) }}" alt=" " class="img-responsive" />
						@endforeach
						<img src="{{ url($product->product_main_image) }}" alt=" " class="img-responsive" />
						<img src="{{ url($product->product_main_image) }}" alt=" " class="img-responsive" />
						<div class="w3_hs_bottom w3_hs_bottom_sub1">
							<ul>
								<li>
									<a href="#" data-toggle="modal" data-target="#{{ $product->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
								</li>
							</ul>
						</div>
					</div>
					<h5><a href="{{ url('/single-product/'.$product->id) }}">{{ $product->product_name }}</a></h5>
					<div class="simpleCart_shelfItem">
						<p><i class="item_price">TK {{ $product->product_price }}</i></p>
{!! Form::open(['route' => 'cart.add','method'=>'post']) !!}
					<div class="form-group">
						<label class="col-md-5">Qwantaty </label>
						<input class="col-md-5" type="hidden" name="product_qty" value="1" min="1" max="{{ $product->product_quantity }}" style="border-color: black; border-radius: 4px;" />
						<input type="hidden" name="id" value="{!! $product->id !!}" /><br> 
					</div>
						<button type="submit" class="w3ls-cart">Add to cart</button>
					{!! Form::close() !!}
					</div> 
				</div>
			</div>

			<div class="modal video-modal fade" id="{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="{{ url($product->product_main_image) }}" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>{{ $product->product_name }}</h4>
							<p>{{ $product->product_short_description }}</p>
							
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><i class="item_price">TK {{ $product->product_price }}</i></p>
								{!! Form::open(['class'=>'form-horizontal col-md-4 ','route' => 'cart.add','method'=>'post']) !!}
					<div class="form-group">
						<label class="col-md-5">Qwantaty </label>
						<input class="col-md-5" type="hidden" name="product_qty" value="1" min="1" max="{{ $product->product_quantity }}" style="border-color: black; border-radius: 4px;" />
						<input type="hidden" name="id" value="{!! $product->id !!}" /><br> 
					</div>
						<button type="submit" class="w3ls-cart form-control">Add to cart</button>
					{!! Form::close() !!}
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div> 
	@endforeach
</div>
</div></div></div></section></div></section>
	
	@endsection