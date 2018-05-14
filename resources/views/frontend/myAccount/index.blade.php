@extends('frontend.master')
@section('title')
My Account
@endsection

@section('body')

 <body class="res layout-subpage layout-1 banners-effect-5">
    <div id="wrapper" class="wrapper-fluid">
    	
@endsection

@section('mainContainer')

<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">My Account</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div class="col-sm-9" id="content">
				<h2 class="title">My Account</h2>
				<p class="lead"><strong>{{ $customerName = $accountInfo->first_name.'  '.$accountInfo->last_name }}</strong></p>
					<div class="row">
						<div class="col-sm-12">
							<div class="col-sm-6">
								<div class="row">
									<legend>Personal Details</legend>
									<div class="col-sm-12">
										<p  class="">Address   : <b>{{ $accountInfo->address_1.' '.$accountInfo->address_2 }}</b></p>
									</div>
									<div class="col-sm-12">
										<p  class="">Post Code   : <b>{{ $accountInfo->postcode }}</b></p>
									</div>
									<div class="col-sm-12">
										<p  class="">Up Zilla   : <b>{{ $accountInfo->up_zilla_name }}</b></p>
									</div>
									<div class="col-sm-12">
										<p  class="">Zilla   : <b>{{ $accountInfo->zilla_name }}</b></p>
									</div>
									<div class="col-sm-12">
										<p  class="">Country   : <b>{{ $accountInfo->country }}</b></p>
									</div>
								</div>								
							</div>
							<div class="col-sm-6">
								<div class="row">
								<legend>Contac Info</legend>
								<div class="col-sm-12">
									<p  class="">Email   : <b>{{ $accountInfo->email }}</b></p>
								</div>
								<div class="col-sm-12">
									<p  class="">Phone No   : <b>{{ $accountInfo->phone_no }}</b></p>
								</div>
							</div>
							</div>
						</div>

						<div class="col-sm-12">
							<h2 class="title">Your Order History</h2>
							<div class="table-responsive">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<td class="text-center">Image</td>
											<td class="text-left">Product Name</td>
											<td class="text-center">Brand Name</td>
											<td class="text-center">Order ID</td>
											<td class="text-center">Qty</td>
											<td class="text-center">Status</td>
											<td class="text-center">Date Added</td>
											<td class="text-right">Unit Prise</td>
											<td class="text-right">Total</td>
											<td></td>
										</tr>
									</thead>
									<tbody>
										@foreach($orderDetails as $details)
										<tr>
											<td class="text-center">
												<a href="{{ url('/single-product/'.$details->product_id) }}"><img width="85" class="img-thumbnail" title="Aspire Ultrabook Laptop" alt="Aspire Ultrabook Laptop" src="{{ asset($details->product_main_image) }}">
												</a>
											</td>
											<td class="text-left"><a href="{{ url('/single-product/'.$details->product_id) }}">{{ $details->product_name }}</a>
											</td>
											<td class="text-center">{{ $details->brand_name }}</td>
											<td class="text-center">#{{ $details->order_id }}</td>
											<td class="text-center">{{ $details->product_quantity }}</td>
											<td class="text-center">{{ $details->order_status }}</td>
											<td class="text-center">21/06/2016</td>
											<td class="text-right">TK {{ $details->product_price }}</td>
											<td class="text-right">TK {{ $details->product_price*$details->product_quantity }}</td>
											<td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="{{ url('/order-information/'.$details->order_id) }}" data-original-title="View"><i class="fa fa-eye"></i></a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>
				<!--Right Part Start -->
			@include('frontend.myAccount.rightBar')
			<!--Right Part End -->			
		</div>
	</div>
	<!-- //Main Container -->

@endsection