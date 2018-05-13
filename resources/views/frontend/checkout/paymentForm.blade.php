@extends('frontend.master')
@section('title')
Shipping Info
@endsection

@section('body')

 <body class="res layout-subpage layout-1 banners-effect-5">
    <div id="wrapper" class="wrapper-fluid">
    	
@endsection

@section('mainContainer')

<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Checkout</a></li>
			
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
			  <h2 class="title">Checkout</h2>
			  <div class="so-onepagecheckout row">
				
				<div class="col-right col-sm-12">
				  <div class="row">
					
					<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
						</div>
						  <div class="panel-body">
							<div class="table-responsive">
							  <table class="table table-bordered">
								<thead>
								  <tr>
									<td class="text-center">Image</td>
									<td class="text-left">Product Name</td>
									<td class="text-left">Quantity</td>
									<td class="text-right">Unit Price</td>
									<td class="text-right">Total</td>
								  </tr>
								</thead>
								<tbody>
									<?php 
                            $total = 0;  $subtotal = 0; $gq = 0;
                            foreach ($CartProduct as $bcart) {
                                 $total = $bcart->qty*$bcart->price;
                                 $subtotal = $subtotal+$total;
                                 $gq = $gq+$bcart->qty;


                            } 
                            $taxrate = 5; $shippingCost = 50;
                             $grandtotal = $subtotal + ($subtotal  * $taxrate) / 100;
                            $tax = $grandtotal-$subtotal;
                            /*$grandtotal = $grandtotal+$shippingCost;*/
                                         ?>

									@foreach($CartProduct as $product)
								  <tr>
									<td class="text-center"><a href="{{ url('/single-product/'.$product->id) }}">
							<img width="60px" src="{{ asset($product->options->image) }}" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-thumbnail"></a></td>
									<td class="text-left"><a href="{{ url('/single-product/'.$product->id) }}">{{ $product->name }}</a></td>
									<td class="text-left"><div class="input-group btn-block" style="min-width: 100px;">
								{!! Form::open(['class'=>'container','route' => 'cart.update','method'=>'post']) !!}
										<input type="number" name="qty" value="{{ $product->qty }}" size="1" min="1" max="50" class="col-sm-6">
										<input type="hidden" name="rowId" value="{{ $product->rowId }}" size="1" min="1" max="50" class="col-sm-6">
										<span class="input-group-btn">
										<button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary col-sm-4 pull-right"><i class="fa fa-refresh"></i></button>
										{{ Form::close() }}
										<!-- <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger col-sm-3" onClick=""><i class="fa fa-times-circle"></i></button> -->
										</span></div></td>
									<td class="text-right">{{ $product->price }}</td>
									<td class="text-right">{{ $product->price }}</td>
								  </tr>
								  @endforeach
								</tbody>
								<tfoot>
								  <tr>
									<td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
									<td class="text-right">TK. {{ $subtotal }}</td>
								  </tr>
								  <tr>
									<td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
									<td class="text-right">TK. {{ $shippingCost }}</td>
								  </tr>
								  <tr>
									<td class="text-right" colspan="4"><strong>VAT ({{ $taxrate }}%):</strong></td>
									<td class="text-right">TK. {{ $tax }}</td>
								  </tr>
								  <tr>
									<td class="text-right" colspan="4"><strong>Total:</strong></td>
									<td class="text-right">TK. {{ $grandtotal }}</td>
								  </tr>
								</tfoot>
							  </table>
							</div>
						  </div>
					  </div>
					</div>

					<div class="col-sm-12">
				  
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-user"></i> Your Payment Info</h4>
					</div>
					  <div class="panel-body">
	{!! Form::open(['class'=>'container  container-fluid','route' => 'checkout.save.payment.info','method'=>'post']) !!}
						<div class="col-sm-6  col-sm-offset-3">
							<div class="form-check">
						  <input class="form-check-input" type="radio" name="peymentType" id="exampleRadios1" value="COD" checked>
						  <label class="form-check-label" for="exampleRadios1">
						    Cash On Delivery (COD)
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="peymentType" id="exampleRadios2" value="Bkash">
						  <label class="form-check-label" for="exampleRadios2">
						    BKASH
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="peymentType" id="exampleRadios3" value="Rocket">
						  <label class="form-check-label" for="exampleRadios3">
						    Rocket
						  </label>
						</div>
						<div class="form-check disabled">
						  <input class="form-check-input" type="radio" name="peymentType" id="exampleRadios4" value="Paypal" disabled>
						  <label class="form-check-label" for="exampleRadios4">
						    Paypal
						  </label>
						</div>
							  

							  <div class="buttons">
							  <div class="pull-right">
								<input type="submit" class="btn btn-primary" id="button-confirm" value="Save">
							  </div>
							</div>
						</div>
					  	
					  	{{ Form::close() }}
				  	</div>
				  </div>
				</div>
			  </div>
		  </div>
		</div>
	</div>
			<!--Middle Part End -->			
	</div>
</div>
	

@endsection