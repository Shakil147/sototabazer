@extends('frontend.master')
@section('title')
Single Prodects
@endsection


@section('content')
<style>
	body{
		background-color: #f2ffe6;
	}
</style>
		<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="{{ asset('frontend')}}/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Cart</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->  

	<div class="container" style="padding-bottom: 50px; padding-top: 30px;">
		<table class="table">
  <h1>List of Cart Product</h1><hr>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Prise</th>
      <th scope="col">Quantaty</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  	<?php $a = 0; $totle=0; ?>
  	@foreach($CartProduct as $product)
    <tr >
      <th scope="row">{{ $a=$a+1 }}</th>
      <td>{{ $product->name }}</td>
      <td scope="col">TK {{ $product->price }}</td>
      <td class="col-md-5">
		<div class="row">
		{!! Form::open(['route' => 'cart.update','method'=>'post']) !!}
			<input class="col-md-4" type="number" name="qty" value="{{ $product->qty }}" min="1" max="100" style="border-color: black; border-radius: 4px;" />
			<input type="hidden" name="rowId" value="{!! $product->rowId !!}" />
			
				<button  type="submit" class="btn btn-info glyphicon glyphicon-refresh col-md-1" style="border-radius: 4px; margin-left: 20px;" title="UPDATE"></button>
			
		
		{!! Form::close() !!}
		<a href="{{ url('/cart-delet/'.$product->rowId) }}" class="btn btn-warning glyphicon glyphicon-trash col-md-1" title="Deleta" style="margin-left: 20px;"></a>
		</div>

      </td>
      <td>TK {{ $subtotle= $product->qty*$product->price }}</td>
    </tr>
    <?php $totle = $totle+$subtotle; ?>
    @endforeach
  </tbody>
</table>
        <div class="row">
            <div class="col-md-6 " >
                <a href="{{ url('/') }}" class="btn btn-primary glyphicon glyphicon-circle-arrow-left pull-right">Continue Shopping</a>
            </div>
            <div class="col-md-2">
            	<h4>
            		Totle = TK. <b> {{ $totle }}</b>
            	</h4>
            </div>
            <div class="col-md-3">
                @if(Session::get('customerId') && Session::get('shippingId'))
                    <a href="{{ url('/payment-info') }}" class="btn btn-success">Checkout</a>
                @elseif(Session::get('customerId'))
                <a href="{{ url('/shipping-info') }}" class="btn btn-success">Checkout</a>
                @else
                <a href="#" data-toggle="modal" data-target="#myModal8" class="btn btn-success  col-md-2-ofset-1 glyphicon glyphicon-road">
                <!-- <a href="{{ url('/checkout') }}" > -->Checkout</a>
                @endif
            </div>
        </div>
</div>

<div class="modal video-modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModal8">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												{!! Form::open(['route' => 'checkouk.login.acount','method'=>'post']) !!}			
													<input name="email" placeholder="Email Address" type="text" required>						
													<input name="password" placeholder="Password" type="password" required>										
													<div class="sign-up">
														<input type="submit" value="Sign in"/>
													</div>
												{!! Form::close() !!}
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												{!! Form::open(['route' => 'checkouk.creat.acount','method'=>'post']) !!}		
													<input placeholder="Full Name" name="name" type="text" style="border-radius: 4px;" required >
													<input placeholder="Email Address" name="email" type="email" style="border-radius: 4px;" required><br><br>	
													<input placeholder="Phone Number" name="phone_number" type="text" style="border-radius: 4px;" required>	
													<input placeholder="Password" name="password" min="6" type="password" style="border-radius: 4px;" required>
													<div class="sign-up">
														<input type="submit" style="border-radius: 4px;" value="Create Account"/>
													</div>

												{!! Form::close() !!}
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="{{ asset('frontend')}}/js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection