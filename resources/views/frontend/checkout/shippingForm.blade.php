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
{!! Form::open(['class'=>'container  container-fluid','route' => 'checkout.save.shipping.info','method'=>'post','name'=>'shippingForm']) !!}
					  	<div class="col-sm-6">
					  		<div class="form-group required">
								<label for="input-payment-firstname" class="control-label">First Name</label>
								<input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="{{ $customer->first_name }}" name="first_name" required>
								<span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : '' }}</span>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-lastname" class="control-label">Last Name</label>
								<input type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="{{ $customer->last_name }}" name="last_name" >
							<span class="text-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : '' }}</span>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-email" class="control-label">E-Mail</label>
								<input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="{{ $customer->email }}" name="email">
								<span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
							  </div>
							  <div class="form-group required">
								<label for="input-payment-telephone" class="control-label">Mobile</label>
								<input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="{{ $customer->phone_no }}" name="phone_no" required>
								<span class="text-danger">{{ $errors->has('phone_no') ? $errors->first('phone_no') : '' }}
							  </div>
					  	</div>
					  	<div class="col-sm-6">

					  		<div class="form-group required">
								<label for="input-payment-address-1" class="control-label">Address 1</label>
								<input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="{{ $customer->address_1 }}" name="address_1" required>
								<span class="text-danger">{{ $errors->has('address_1') ? $errors->first('address_1') : '' }}
							  </div>

							  <div class="form-group required">
								<label for="input-payment-address-1" class="control-label">Address 2</label>
								<input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="{{ $customer->address_2 }}" name="address_2">
								<span class="text-danger">{{ $errors->has('address_2') ? $errors->first('address_2') : '' }}
							  </div>
							  
							  <div class="form-group required">
								<label for="input-payment-zone" class="control-label">Zilla</label>
								<select class="form-control" id="zilla_dropdown" name="zilla_id" required>
								  <option value=""> --- Please Select --- </option>
								  @foreach($districts as $district)
									<option value="{{ $district->id }}" @if($customer->zilla_id == $district->id) selected="true" style="color: #6B0E0E" @endif >{{ $district->zilla_name }}</option>
								  @endforeach								  
								</select>
								<span class="text-danger">{{ $errors->has('zilla_id') ? $errors->first('zilla_id') : '' }}</span>
							  </div>

							  <div class="form-group required">
								<label for="input-payment-zone" class="control-label">Up-Zilla</label>
								<select name="up_zilla_id" id="up_zilla" class="form-control name" required>
									@foreach($upazilas as $upazila)
									<option value="{{ $upazila->id }}" @if($customer->up_zilla_id == $upazila->id) selected="true" style="color: #6B0E0E" @endif >{{ $upazila->up_zilla_name  }}</option>
								  @endforeach
								</select>
								<span class="text-danger">{{ $errors->has('up_zilla_id') ? $errors->first('up_zilla_id') : '' }}</span>								  
								</select>
							  </div>

							  <div class="checkbox">
								<label>
								  <input type="checkbox"  value="1" name="shipping_address" required>
								  My delivery and billing addresses are the same.</label>

							  </div>
							<div class="checkbox">
								<label class="control-label" for="confirm_agree">
								  <input type="checkbox" value="1" class="validate required" id="confirm_agree" name="agree" required>
								  I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a> 
								</label>
								<span class="text-danger">{{ $errors->has('agree') ? $errors->first('agree') : '' }}</span>
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

@section('plgin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
<script type="text/javascript">
    $(document).ready(function(){    	

        $(document).on('change','#zilla_dropdown',function(){        	
            //console.log("hmm its change with id");
           var zilla_id=$(this).val();
             //console.log(zilla_id);
             var div=$(this).parent();
             $.ajax({
                type:'get',
                url:'{!!URL::to('upaZilas')!!}',
                data:{'id':zilla_id}, 
           success:function(data){
	          console.log(data);

	          $('#up_zilla').empty();
	          $('#up_zilla').append('<option value="0" disable="true" selected="true">=== Select  Up-Zilla ===</option>');

	          $.each(data, function(index, regenciesObj){
	            $('#up_zilla').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.up_zilla_name +'</option>');
	          })
    		}, 
	        error:function(){

	        	}
        });
        });
    });
</script>
@endsection