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
					  <h4 class="panel-title"><i class="fa fa-user"></i> Your Shipping Info</h4>
					</div>
					  <div class="panel-body">
	{!! Form::open(['class'=>'container  container-fluid','route' => 'checkout.save.shipping.info','method'=>'post']) !!}
					  	<div class="col-sm-6">
					  		<div class="form-group required">
								<label for="input-payment-firstname" class="control-label">First Name</label>
								<input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="{{ $customer->first_name }}" name="firstName" required>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-lastname" class="control-label">Last Name</label>
								<input type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="{{ $customer->last_name }}" name="lastName" >
							  </div>
							  <div class="form-group required">
								<label for="input-payment-email" class="control-label">E-Mail</label>
								<input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="{{ $customer->email }}" name="email">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-telephone" class="control-label">Mobile</label>
								<input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="{{ $customer->phone_no }}" name="mobileNo" required>
							  </div>
					  	</div>
					  	<div class="col-sm-6">
					  		<div class="form-group required">
								<label for="input-payment-address-1" class="control-label">Address 1</label>
								<input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="{{ $customer->address_1 }}" name="address_1" required>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-city" class="control-label">City</label>
								<input type="text" class="form-control" id="input-payment-city" placeholder="City" value="{{ $customer->zilla }}" name="city" required>
							  </div>
							  
							  <div class="form-group required">
								<label for="input-payment-zone" class="control-label">Zilla</label>
								<select class="form-control" id="input-payment-zone" name="zilla" required>
								  <option value=""> --- Please Select --- </option>
								  <option value="3513">Aberdeen</option>
								  <option value="3514">Aberdeenshire</option>
								  <option value="3515">Anglesey</option>
								  <option value="3516">Angus</option>
								  <option value="3517">Argyll and Bute</option>
								  <option value="3518">Bedfordshire</option>
								  <option value="3519">Berkshire</option>
								  <option value="3520">Blaenau Gwent</option>
								  <option value="3521">Bridgend</option>
								  <option value="3522">Bristol</option>
								  
								</select>
							  </div>
							  <div class="checkbox">
								<label>
								  <input type="checkbox"  value="1" name="shipping_address" required>
								  My delivery and billing addresses are the same.</label>

							  </div>
							<div class="checkbox">
								<label class="control-label" for="confirm_agree">
								  <input type="checkbox" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree" required>
								  I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a> 
								</label>
							</div>

							  <div class="buttons">
							  <div class="pull-right">
								<input type="submit" class="btn btn-primary" id="button-confirm" value="Confirm Order">
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