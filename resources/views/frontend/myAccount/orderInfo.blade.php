@extends('frontend.master')
@section('title')
Order Information
@endsection

@section('body')

 <body class="res layout-subpage layout-1 banners-effect-5">
    <div id="wrapper" class="wrapper-fluid">
    	
@endsection

@section('mainContainer')

<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Order Infomation</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Order Information</h2>

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Order Details</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> 
								<b>Order ID:</b> #{{ $orders->id }}
								<br>
								<b>Date Added:</b>{{ $date= Carbon\Carbon::parse($orders->created_at)->format('d M Y : H:i') }}
								<br>
								<b>Order Status :</b> {{ $orders->order_status }}</td>
							<td style="width: 50%;" class="text-left"> 
								<b>Payment Method:</b> {{ $orders->payment_type }} 
								<br>
								<b>Payment Status : </b>{{ $orders->payment_status }}
								<br>
								<b>Shipping Method:</b> Flat Shipping Rate </td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td style="width: 50%; vertical-align: top;" class="text-left">Payment Address</td>
							<td style="width: 50%; vertical-align: top;" class="text-left">Shipping Address</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">Jhone Cary
								<br>Central Square
								<br>22 Hoi Wing Road
								<br>New Delhi
								<br>India</td>
							<td class="text-left">{{ $orders->first_name.' '.$orders->last_name }}
								<br>{{ $orders->address_1 }}
								<br>{{ $orders->address_2 }}
								<br>{{ 'Post Code :'.$orders->postcode }}
								<br>{{ $orders->up_zilla_name }}
								<br>{{ $orders->zilla_name }}
								<br>{{ $orders->country }}</td>
						</tr>
					</tbody>
				</table>
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
										</tr>
										@endforeach
									</tbody>
						<tfoot>
							<?php 
							$sl = 0; $subtotle= 0; $vatRate = 5; $grandtotal = 0; $Shipping = 50;
							foreach ($orderDetails as $details) {
								$subtotle = $details->product_quantity*$details->product_price+$subtotle;
							}
							$grandtotal = $subtotle + ($subtotle * $vatRate) / 100 + $Shipping;
							$vat = ($subtotle * $vatRate) / 100;
							?>
							<tr>
								<td colspan="6"></td>
								<td class="text-right"><b>Sub-Total</b>
								</td>
								<td class="text-right">TK {{ $subtotle }}</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="6"></td>
								<td class="text-right"><b>Flat Shipping Rate</b>
								</td>
								<td class="text-right">TK {{ $Shipping }}</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="6"></td>
								<td class="text-right"><b>VAT (5%)</b>
								</td>
								<td class="text-right">TK {{ $vat }}</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="6"></td>
								<td class="text-right"><b>Total</b>
								</td>
								<td class="text-right">TK {{ $grandtotal }}</td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<h3>Order History</h3>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td class="text-left">Date Added</td>
							<td class="text-left">Status</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">{{ $date= Carbon\Carbon::parse($orders->created_at)->format('d M Y : H:i') }}</td>
							<td class="text-left">Processing</td>
						</tr>
						<tr>
							<td class="text-left">{{ $date= Carbon\Carbon::parse($orders->created_at)->format('d M Y : H:i') }}</td>
							<td class="text-left">Shipped</td>
						</tr>
						<tr>
							<td class="text-left">{{ $date= Carbon\Carbon::parse($orders->created_at)->format('d M Y : H:i') }}</td>
							<td class="text-left">Complete</td>
						</tr>
					</tbody>
				</table>
				<div class="buttons clearfix">
					<div class="pull-right"><a class="btn btn-primary" href="#"><i class="glyphicon glyphicon-print"></i>Downlod Invoise</a>
					</div>
				</div>



			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			@include('frontend.myAccount.rightBar')
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->

@endsection